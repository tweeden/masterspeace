<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MPACT Church --Schedule</title>

    <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/mystyles.css" rel="stylesheet" media="screen">

  </head>
  <body id="schedule">
      <section class="container">
          <div class="content row">
              <?php include "bootstrap/components/php/header.php"; ?>

              <section class="col-lg-8">
                  <?php include "bootstrap/components/php/article-schedule.php"; ?>
              </section><!-- main -->

              <section class="col-lg-4">
                  <?php include "bootstrap/components/php/aside-register.php"; ?>
                  <?php include "bootstrap/components/php/aside-photos.php"; ?>

              </section><!-- sidebar -->
          </div><!-- content end -->
              <?php include "bootstrap/components/php/footer.php"; ?>
      </section><!-- container end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/myscript.js"></script>
  </body>
</html>
