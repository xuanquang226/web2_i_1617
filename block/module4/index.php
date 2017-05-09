<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
     <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1.less', 'css/1.css');
        ?>
        <link href="css/1.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
<div class="page">
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/1.jpg" alt="..." style="width:100%">
                <div class="carousel-caption">
                      <h2>
                        <a href="/menu"><b>Attributive Wines from Our Vineyards</b></a>
                      </h2>
                      <p>Our wine has won many international awards, are simply superb</p>
                </div>
            </div>
            <div class="item">
                <img src="images/2.jpg" alt="..." style="width:100%">
                 <div class="carousel-caption">
                      <h2>
                          <a><b>We Take Care with Love</b></a>
                      </h2>
                      <p>We are passionate about producing original, and above all tasty wine, we make our wines simply full of the finest tastes</p>
                </div>
            </div>
            <div class="item">
                <img src="images/3.jpg" alt="..." style="width:100%">
                 <div class="carousel-caption">
                      <h2>
                          <a href="/menu"><b>Ingredients Grown on Our Fields<b></a>
                      </h2>
                      <p>Enjoy the food experience from our fields, through our kitchen and to your fork</p>
                </div>
            </div>
        </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
   </div>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
   </body>
</html>