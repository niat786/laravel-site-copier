import scrape from 'website-scraper';
  

try {
    console.log('file is running correctly...');
  const options = {
    // urls: process.argv[2],
    urls: ['http://example.com'],

    directory: 'ttttt',
  };

  // with async/await
  const result = await scrape(options);

  // with promise
  scrape(options).then((result) => {
    console.log(result);
  });

} catch (error) {
    console.log('not running...');
  console.error(error);
}