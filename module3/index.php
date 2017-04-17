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
        <div class="module-3">
            <div class="fy-navigation-container">
                <nav class="fy-navigation">
                    <ul>
                        <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-17 current_page_item menu-item-421"><a href="https://linguini.forqy.website/">Home</a></li>
                        <li><a href="https://linguini.forqy.website/about/">About</a></li>
                        <li><a href="https://linguini.forqy.website/menu/">Menu</a>
                            <ul class="sub-menu">
                            
                                <li id="menu-item-620" class="important menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="https://linguini.forqy.website/sections/">Sections</a></li>
                                <li><a href="https://linguini.forqy.website/menu/appetizers/">Appetizers</a></li>
                                <li><a href="https://linguini.forqy.website/menu/pasta/">Pasta</a></li>
                                <li><a href="https://linguini.forqy.website/menu/fishes/">Fishes</a></li>
                                <li><a href="https://linguini.forqy.website/menu/steaks/">Steaks</a></li>
                                <li><a href="https://linguini.forqy.website/menu/desserts/">Desserts</a></li>
                                <li> 
                                <li id="menu-item-594" class="menu-item menu-item-type-taxonomy menu-item-object-section menu-item-has-children menu-item-594"><a href="https://linguini.forqy.website/menu/drinks/">Drinks</a>
                                    <ul class="sub-menu2">
                                        <li id="menu-item-601" class="menu-item menu-item-type-taxonomy menu-item-object-section menu-item-601"><a href="https://linguini.forqy.website/menu/beers/">Beers</a></li>
                                        <li id="menu-item-595" class="menu-item menu-item-type-taxonomy menu-item-object-section menu-item-595"><a href="https://linguini.forqy.website/menu/white-wines/">White Wines</a></li>
                                        <li id="menu-item-596" class="menu-item menu-item-type-taxonomy menu-item-object-section menu-item-596"><a href="https://linguini.forqy.website/menu/red-wines/">Red Wines</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="https://linguini.forqy.website/events/">Events</a></li>
                        <li><a href="https://linguini.forqy.website/gallery/">Gallery</a>
                            <ul class="sub-menu">
                                <li><a href="https://linguini.forqy.website/albums/restaurant/">Restaurant</a></li>
                                <li><a href="https://linguini.forqy.website/albums/food/">Food</a></li>
                                <li><a href="https://linguini.forqy.website/albums/events/">Events</a></li>
                            </ul>
                        </li>
                        <li><a href="https://linguini.forqy.website/blog/">Blog</a></li>
                        <li><a href="https://linguini.forqy.website/contact/">Contact</a></li>
                        <li><a href="https://linguini.forqy.website/reservations/">Reservations</a></li>
                    </ul>
                </div>
            </div>
        </div>  
        
    </body>
    
</html>