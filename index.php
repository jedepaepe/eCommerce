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
        <script>
            // manage the paralax effect of the headerfull (image)
            "use strict";
            jQuery(window).scroll(function() {
                var vscroll = jQuery(this).scrollTop();
                console.log(vscroll);
                jQuery("#logotext").css({transform: "translate(0px, " + vscroll/2 + "px)"});
                jQuery("#back-flower").css({transform: "translate(" + vscroll/5 + "px, -" + vscroll/12 + "px"});
                jQuery("#fore-flower").css({transform: "translate(0px, -" + vscroll/2 + "px)"});
            })
        </script>
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
                        <button type="button" class="btn btn-sm btn-success" onclick="detailsModal(<?php echo $product['id']?>)">Détails</button>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php include_once 'includes/rightbar.php'; ?>
        </div>
        <?php include_once 'includes/footer.php'; ?>
        <script>
            function detailsModal(id) {
                var data = {id: id};
                jQuery.ajax({
                    url: "includes/detailsmodal.php",
                    method: "post",
                    data: data,
                    success: function(data){
                        jQuery("body").append(data);
                        jQuery("#details-modal").modal("toggle");
                    },
                    error: function(err) {console.log("error calling detailsModal - no server answer"); console.log(err);}
                })
            }
        </script>
    </body>
</html>