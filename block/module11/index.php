<html>
    <head>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
        <div class="module_11"> 
        <div id="fy-centerer">
                        <h1 itemprop="name headline">
                        Beers          
                        </h1>

                        <div class="fy-heading-description">
                            <p>Beer has a long history in what is now the Czech Republic, with brewing taking place in Břevnov Monastery in 993.
                            </p>
                         </div>
                     </div>
            <div class="container">

                <div class="row">                   
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <h2>
                                    <a href="https://linguini.forqy.website/item/pilsner-urquell/" itemprop="url">Pilsner Urquell</a>
                                </h2>
                                 <h3>$6.95</h3>                                
                                <p2>Original Czech Lager Beer</p2>
                               
                            </li>
                            <li>
                                <h2><a href="https://linguini.forqy.website/item/krusovice/" itemprop="url">Krušovice</a></h2>
                                <h3>$3.95</h3>
                                <p2>Czech Lager Beer, Krušovice</p2>
                            </li>
                        </ul> 
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li>
                                <h2><a href="https://linguini.forqy.website/item/bakalar/" itemprop="url">Bakalář</a></h2>  <h3>$4.95</h3>                              
                                <p2>Czech Lager Beer, Rakovník</p2>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>     
    </body>
    
</html>