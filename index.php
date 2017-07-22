<?php
// Objet : exemple pour le cours Page Web Dynamique
// Source : Crtis Parham - PHP eCommerce (serie) - https://www.youtube.com/watch?v=xHj9wQYWIQ4&index=1&list=PLFPkAJFH7I0mitTSKDaoxwfLLf-wNNnVS
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shaunta's Boutique</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <link rel='stylesheet' href='css/bootstrap.css'/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <!-- barre de navigation au sommet !-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">Shaunta</a>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Chemises</a></li>
                            <li><a href="#">Pantalons</a></li>
                            <li><a href="#">Chaussures</a></li>
                            <li><a href="#">Costumes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- en-tête (header -->
        <div id="headerWrapper">
            <div id="back-flower"></div>
            <div id="logotext"></div>
            <div id="fore-flower"></div>
        </div>
        <div class="container-fluid">
            <!-- bare du côté gauche (left side bar) -->
            <div class="col-md-2">Left Side Bar</div>
            <!-- contenu principal (main content) -->
            <div class="col-md-8">
                <div class="row">
                    <h2 class="text-center">Produits Vedettes</h2>
                    <div class="col-md-3">
                        <h4>Levis Jeans</h4>
                        <img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb"/>
                        <p class="list-price text-danger">Prix Liste: <s>€54,99</s></p>
                        <p class="price">Notre Prix: €34,99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Détails</button>
                    </div>
                    <div class="col-md-3">
                        <h4>Woman's Shirt</h4>
                        <img src="images/products/women7.png" alt="Women Shirt" class="img-thumb"/>
                        <p class="list-price text-danger">Prix Liste: <s>€54,99</s></p>
                        <p class="price">Notre Prix: €34,99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Détails</button>
                    </div>
                    <div class="col-md-3">
                        <h4>Hollister Shirt</h4>
                        <img src="images/products/men1.png" alt="Hollister Shirt" class="img-thumb"/>
                        <p class="list-price text-danger">Prix Liste: <s>€25,99</s></p>
                        <p class="price">Notre Prix: €19,99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Détails</button>
                    </div>
                    <div class="col-md-3">
                        <h4>Fancy Shoes</h4>
                        <img src="images/products/women6.png" alt="Fancy Shoes" class="img-thumb"/>
                        <p class="list-price text-danger">Prix Liste: <s>€69,99</s></p>
                        <p class="price">Notre Prix: €49,99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Détails</button>
                    </div>
                    <div class="col-md-3">
                        <h4>Boys Hoodie</h4>
                        <img src="images/products/boys1.png" alt="Boys Hoodie" class="img-thumb"/>
                        <p class="list-price text-danger">Prix Liste: <s>€24,99</s></p>
                        <p class="price">Notre Prix: €18,99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Détails</button>
                    </div>
                    <div class="col-md-3">
                        <h4>Girls Dress</h4>
                        <img src="images/products/girls3.png" alt="Girls Dress" class="img-thumb"/>
                        <p class="list-price text-danger">Prix Liste: <s>€54,99</s></p>
                        <p class="price">Notre Prix: €22,99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Détails</button>
                    </div>
                    <div class="col-md-3">
                        <h4>Womens' Skirt</h4>
                        <img src="images/products/women3.png" alt="Womens' Skirt" class="img-thumb"/>
                        <p class="list-price text-danger">Prix Liste: <s>€29,99</s></p>
                        <p class="price">Notre Prix: €19,99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Détails</button>
                    </div>
                    <div class="col-md-3">
                        <h4>Purse</h4>
                        <img src="images/products/women4.png" alt="Purse" class="img-thumb"/>
                        <p class="list-price text-danger">Prix Liste: <s>€49,99</s></p>
                        <p class="price">Notre Prix: €39,99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Détails</button>
                    </div>
                </div>
            </div>
            <!-- bare du côté droit (right side bar) -->
            <div class="col-md-2">Righ Side Bar</div>
        </div>
        <footer id="footer" class="text-center">
            &copy; Copyright 2013-2017 Shaunta's Boutique
        </footer>
        
        <!-- Details Modal -->
        <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" arial-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">Leavis Jeans</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="center-block">
                                        <img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Détails</h4>
                                    <p>Ces jeans sont incroyables. They are straight leg, fit great and llok sexy.  Get a pair while they last!</p>
                                    <hr>
                                    <p>Price: €34,99</p>
                                    <p>Marque: Levis</p>
                                    <form action="add_cart.php" method="POST">
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="quantity">Quantity:</label></div>
                                            <div class="col-md-3"><input type="number" class="form-control" id="quantity" name="quantity"/></div>
                                            <div class="col-md-4">Disponible: 3</div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <label for="size">Size:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="size" id="size" class="form-control">
                                                    <option value=""></option>
                                                    <option value="28">28</option>
                                                    <option value="32">32</option>
                                                    <option value="36">36</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                            <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Ajouter Au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- pour simuler du contenu dans la page // changez $i<0 en $i<10 pour générer 10 div -->
        <?php for($i=0; $i<0; $i++) {?>
        <div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan et elit eu dictum. Curabitur viverra risus eget sem interdum aliquet. Curabitur sed sapien accumsan, sagittis nunc id, suscipit urna. Etiam aliquet leo quis nisi tempus sodales. Pellentesque varius purus et sodales dignissim. Nulla mattis justo a dui accumsan, vel lacinia magna egestas. Mauris euismod, leo in dignissim ultricies, tellus diam tristique sem, eu consequat ex tortor et nibh. Phasellus eu tempor libero.
        </div>
        <?php } ?>
        <script>
            "use strict";
            jQuery(window).scroll(function() {
                var vscroll = jQuery(this).scrollTop();
                console.log(vscroll);
                jQuery("#logotext").css({transform: "translate(0px, " + vscroll/2 + "px)"});
                jQuery("#back-flower").css({transform: "translate(" + vscroll/5 + "px, -" + vscroll/12 + "px"});
                jQuery("#fore-flower").css({transform: "translate(0px, -" + vscroll/2 + "px)"});
            })
        </script>
    </body>
</html>