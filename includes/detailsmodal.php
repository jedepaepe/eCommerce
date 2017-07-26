<!-- Details Modal -->
<?php
$path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT") . "eCommerce/";
require_once $path . 'core/init.php';

$id = filter_input(INPUT_POST, "id");
echo "id=$id<br>";
if(is_null($id)) {
    echo "no id param";
    die();
}
$sql = "SELECT * FROM products WHERE id = $id";
$result = $db->query($sql);
$product = $result->fetch_assoc();
if(! $product) {
    treatDbError($db, "detailsmodal error : execute statement error, " . __LINE__);
}
$brand_id = $product['brand'];
$sql = "SELECT brand FROM brand WHERE id = '$brand_id'";
$brand_query = $db->query($sql);
$brand = $brand_query->fetch_assoc();
$sizestring = $product['sizes'];
$size_array = explode(',', $sizestring);
?>
<?php ob_start(); ?>
<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-1" arial-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" onclick="closeModal()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center"><?php echo $product['title']?></h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="<?php echo $product['image']?>" alt="<?php echo $product['title']?>" class="details img-responsive" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4>Détails</h4>
                            <p><?php echo $product['description']?></p>
                            <hr>
                            <p>Price: €<?php echo $product['price']?></p>
                            <p>Marque: <?php echo $brand['brand']?></p>
                            <form action="add_cart.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-md-2"><label for="quantity">Quantity:</label></div>
                                    <div class="col-md-3"><input type="number" class="form-control" id="quantity" name="quantity"/></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="size">Size:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="size" id="size" class="form-control">
                                            <option value=""></option>
                                            <?php foreach($size_array as $string) {
                                                $string_array = explode(':',$string);
                                                $size = $string_array[0];
                                                $quantity = $string_array[1];
                                                echo "<option value='$size'>$size ($quantity disponible)</option>";
                                            }?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" onclick="closeModal()">Close</button>
                    <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart" style="padding-right: 10px"></span>Ajouter Au Panier</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function closeModal() {
        jQuery("#details-modal").modal('hide');
        setTimeout(function() {
            jQuery("#details-modal").remove();
            jQuery(".modal-backdrop").remove(); // https://stackoverflow.com/questions/22056147/bootstrap-modal-backdrop-remaining
        }, 500);
    }
</script>
<?php echo ob_get_clean(); ?>