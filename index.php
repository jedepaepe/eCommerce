<?php
// Objet : exemple pour le cours Page Web Dynamique
// Source : Crtis Parham - PHP eCommerce (serie) - https://www.youtube.com/watch?v=xHj9wQYWIQ4&index=1&list=PLFPkAJFH7I0mitTSKDaoxwfLLf-wNNnVS
?>
<!DOCTYPE html>
<html>
    <?php include_once 'includes/head.php'; ?>
    <body>
        <?php include_once 'includes/navigation.php'; ?>
        <?php include_once 'includes/headerfull.php'; ?>
        <div class="container-fluid">
            <?php include_once 'includes/leftbar.php';?>
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
            <?php include_once 'includes/rightbar.php'; ?>
        </div>
        <?php include_once 'includes/footer.php'; ?>
        <?php include_once 'includes/detailsmodal.php'; ?>
       
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