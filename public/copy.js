import scrape from 'website-scraper';
import archiver from 'archiver';
import fs from 'fs';
// import rimraf from 'rimraf';

const options = {
    urls: [process.argv[2]],
    filenameGenerator: process.argv[3],
    requestConcurrency: 1000,
    directory: `./templates/html/${process.argv[4]}`,
  };
  // with async/await
  //const result = await scrape(options);



const zipFilePath = `./templates/zip/${process.argv[4]}.zip`;

const result = await scrape(options);

// Create a zip file
const output = fs.createWriteStream(zipFilePath);
const archive = archiver('zip', { zlib: { level: 9 } });

output.on('close', () => {
  console.log('Zip file created successfully:', zipFilePath);
});

archive.on('error', (err) => {
  throw err;
});

archive.pipe(output);

// Add the downloaded files to the zip archive
archive.directory(options.directory, false);

// Finalize the zip archive
archive.finalize();


// delete original file
// app.mjs


// // Specify the path to the folder you want to delete
// const folderPath = `./templates/html/${process.argv[4]}`;

// // Use rimraf to delete the folder and its contents
// rimraf(folderPath, (error) => {
//   if (error) {
//     console.error('Error deleting folder:', error);
//   } else {
//     console.log('Folder deleted successfully.');
//   }
// });



