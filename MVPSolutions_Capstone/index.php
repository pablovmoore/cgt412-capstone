<!doctype html>
<html lang="en">
  <head>
    <!-- Meta Tags, main.css, Bootstrap, Google Fonts includes -->
    <?php include 'includes/head.php';?>

    <!-- Home CSS -->
    <link rel="stylesheet" href="css/home.css"> 
   
    <title> Homepage | CVS Health</title>
  </head>
  <body>
      <!-- nav include -->
      <?php include 'includes/nav.php';?>

      <!-- main content -->
      <div class="home-hero-container container-fluid hero-1">
        <div class="home-hero-body-container home-hero-body-container-right">
          <div class="home-hero-body">
            <h2>The 2020 Healthiest Communities Rankings</h2>
            <p>This year's list, a collaboration of the U.S. News & World Report and the Aetna Foundation, also includes an analysis on the relationship between COVID-19 and the social determinants of health in underserved communities nationwide.</p>
            <a href="news.php">
              <button type="button" class="btn btn-danger btn-readmore">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book-open" class="svg-inline--fa fa-book-open fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.27 7.89-7.27 13.17v363.87c0 11.55 12.63 18.85 23.28 13.49 69.18-34.82 169.23-44.32 218.7-46.92 16.89-.89 30.02-14.43 30.02-30.66V62.75c.01-17.71-15.35-31.74-33.77-30.7zM264.73 87.64C197.5 46.48 88.58 35.17 33.78 32.05 15.36 31.01 0 45.04 0 62.75V400.6c0 16.24 13.13 29.78 30.02 30.66 49.49 2.6 149.59 12.11 218.77 46.95 10.62 5.35 23.21-1.94 23.21-13.46V100.63c0-5.29-2.62-10.14-7.27-12.99z"></path></svg> 
                <span>READ MORE</span>
              </button>
            </a>
          </div>
        </div>
        <div class="home-hero-empty hero-1"></div>
      </div>

      <div class="home-hero-container container-fluid hero-2">
        <div class="home-hero-body-container home-hero-body-container-left">
          <div class="home-hero-body">
            <h2> CVS Health builds on community-based strategy to address COVID-19 vaccine education and equity</h2>
            <p>Efforts will increase access to vaccinations for vulnerable communities and advance vaccine education while combating hesitancy. </p>
            <button type="button" class="btn btn-danger btn-readmore">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book-open" class="svg-inline--fa fa-book-open fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.27 7.89-7.27 13.17v363.87c0 11.55 12.63 18.85 23.28 13.49 69.18-34.82 169.23-44.32 218.7-46.92 16.89-.89 30.02-14.43 30.02-30.66V62.75c.01-17.71-15.35-31.74-33.77-30.7zM264.73 87.64C197.5 46.48 88.58 35.17 33.78 32.05 15.36 31.01 0 45.04 0 62.75V400.6c0 16.24 13.13 29.78 30.02 30.66 49.49 2.6 149.59 12.11 218.77 46.95 10.62 5.35 23.21-1.94 23.21-13.46V100.63c0-5.29-2.62-10.14-7.27-12.99z"></path></svg> 
              <span>READ MORE</span>
          </button>
          </div>
        </div>
        <div class="home-hero-empty hero-2"></div>
      </div>

      <!-- footer include -->
      <?php include 'includes/footer.php';?>

      <!-- external javascsript includes (mainly for Boostrap)-->
      <?php include 'includes/js.php';?>
  </body>
</html>