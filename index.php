<?php
// Objet : exemple pour le cours Page Web Dynamique
// Source : Crtis Parham - PHP eCommerce (serie) - https://www.youtube.com/watch?v=xHj9wQYWIQ4&index=1&list=PLFPkAJFH7I0mitTSKDaoxwfLLf-wNNnVS
?>
<?php
$path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT") . "eCommerce/";
require_once $path . 'core/init.php';
$sql = "SELECT * FROM products WHERE featured = 1";
$featured = $db->query($sql);
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
                    <?php while($product = $featured->fetch_assoc()): ?>
                    <div class="col-md-3">
                        <h4><?php echo $product['title'] ?></h4>
                        <img src="<?php echo $product['image']?>" alt="<?php echo $product['title']?>" class="img-thumb"/>
                        <p class="list-price text-danger">Prix Liste: <s>€<?php echo $product['list_price']?></s></p>
                        <p class="price">Notre Prix: €<?php echo $product['price']?></p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Détails</button>
                    </div>
                    <?php endwhile; ?>
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