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
  <div class="module-6">
    <div class="container-fluid">
        <div class="row">
                <div class="col-sm-6">
                      <h2>Everything you need to create a fantastic restaurant website</h2>
                       <p>Linguini is a modern restaurant WordPress theme suitable for any kind and size of the restaurant, cafe, winery, vineyard, local farm or any other food-related business.</p>
                  <div class="buttons">
                           <a href="https://linguini.forqy.website/reservations/" class="fy-button fy-button-small fy-button-border">About</a>
                           <a href="https://linguini.forqy.website/reservations/" class="fy-button fy-button-small fy-button-border">
                           Reservations</a>
                  </div> 
                </div>
                <div class="col-sm-6">
                    <img src="images/1.jpg" alt="" style="max-width: 100%">
                </div>
           <!--  <div class="footer">
             <div class="h2">
               <a href="https://linguini.forqy.website/blog/">
                 <p><b>Recent news</b></p>
             </a>
             </div>
                     </div> -->
        </div>
    </div>
  </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
   </body>
</html>