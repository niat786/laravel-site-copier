import scrape from 'website-scraper';

try {
  const options = {
    urls: [process.argv[2]],
    filenameGenerator: process.argv[3],
    directory: `./templates/html/${process.argv[4]}`,
  };
  // with async/await
  const result = await scrape(options);

} catch (error) {
  console.error(error);
}