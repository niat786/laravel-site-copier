<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Process;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Attributes\Rule;



use ZipArchive;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

class Scraper extends Component
{
    #[Rule('required', message: 'Please provide template URL',)] 
    #[Rule('url')] 
    public $url = '';

    public $showDownloadBtn = 0;
    public $downloading = 0;

    public $fileNameGenerator = 'default';

    public $dirName;

    public function render()
    {
        return view('livewire.scraper');
    }

    public function getCmd()
    {
        return "node copy.js $this->url $this->fileNameGenerator $this->dirName";
    }

    public function getDirName()
    {
        // Parse the URL and extract the path
        $urlParts = parse_url($this->url);

        // Parse the URL and extract the hostname
        $hostname = isset($urlParts['host']) ? $urlParts['host'] : '';

        // Replace '.com' with '-' and then slugify the result
        return Str::slug(str_replace('.', '-', $hostname), '-');

    }

    public function getTheTemplate()
    {

        $this->validate();
        $this->dirName = (string) $this->getDirName();
        Process::run($this->getCmd());
        $this->showDownloadBtn = 1;

    }

public function downloadTemplate()
{ 
        $file = public_path('templates/zip/'.$this->dirName.'.zip');

        if (file_exists($file)) {
            // Send the zip file for download
            return response()->download($file);
        }else{
             $this->createZip();
            return response()->download($file);
        }    

}

    // creating zip file from template

public function createZip()
{
    if(file_exists('templates/html/'.$this->dirName)){

    // Define the source folder and zip file name
    $sourceFolder = public_path('templates/html/'.$this->dirName);
    $outputZip = public_path('templates/zip/'.$this->dirName.'.zip');
    $zip = new ZipArchive();
    
    if ($zip->open($outputZip, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($sourceFolder),
            RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($files as $file) {
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen($sourceFolder) + 1);

            if ($file->isDir()) {
                // Add directories to the zip
                $zip->addEmptyDir($relativePath);
            } else {
                // Add files to the zip
                $zip->addFile($filePath, $relativePath);
            }
        }

        $zip->close();
        
        return true; // Zip file created successfully
    }
    
    return false; // Zip file creation failed
}
}

public function addNewDownloading(){
    $this->reset('showDownloadBtn'); 
    $this->reset('downloading'); 
    $this->reset('url');
}

}