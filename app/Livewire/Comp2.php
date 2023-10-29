<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Process;
use Illuminate\Support\Str;
use Livewire\Component;

class Comp2 extends Component
{
    public $a = 10;

    public $url = 'https://example.com';

    public $template;

    public $processStarted;

    public $fileNameGenerator;

    public $dirName;

    public $cmd;

    public function render()
    {
        return view('livewire.comp2');
    }

    public function fun2()
    {
        $this->a = 20;
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

        $this->dirName = (string) $this->getDirName();
        $this->cmd = $this->getCmd();
        $this->url = 1;
        // $result = Process::run('ls -la');
        Process::run('node copy.js https://example.com default example-com');

    }
}
