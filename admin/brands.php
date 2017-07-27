<?php 
require_once '../core/init.php';
include 'includes/head.php';
$sql = "SELECT * FROM brand ORDER BY brand";
$result = $db->query($sql);
$errors = array();

if(isset($_GET['edit']) && !empty($_GET['edit'])) {
    $edit_id = (int) sanitize($_GET['edit']);
    $sql = "SELECT * FROM brand WHERE id= '$edit_id'";
    $edit_result = $db->query($sql);
    $eBrand = $edit_result->fetch_assoc();
}

if(isset($_GET['delete']) && !empty($_GET['delete'])) {
    $delete_id = (int) sanitize($_GET['delete']);
    $sql = "DELETE FROM brand WHERE id = '$delete_id'";
    $db->query($sql);
    header('Location: brands.php');
}
// Si un formulaire est sousmis
if(isset($_POST['add_submit'])) {
    $brand = sanitize($_POST['brand']);
    // vérifie si la marque (brand) du formulaire est vide
    if($brand == '') {
        $errors[] .= "You must enter a brand!";
    } else {
        // ajoute la marque dans la DB
        $sql = "SELECT * FROM brand WHERE brand = '$brand'";
        if(isset($_GET['edit'])) {
            $sql = "SELECT * FROM brand WHERE brand = '$brand' AND id != '$edit_id'";
        }
        $add_result = $db->query($sql);
        $count = $add_result->num_rows;
        if($count > 0) {
            $errors[] .= $brand . ' existe déjà. Veuillez choisir une autre marque...';  
        } else {
            $sql = "INSERT INTO brand (brand) VALUES ('$brand')";
            if(isset($_GET['edit'])) {
                $sql = "UPDATE brand SET brand = '$brand' WHERE id = '$edit_id'";
            }
            $db->query($sql);
            header('Location: brands.php');
            die();
        }
    }
    
    // affiche les erreurs
    if(!empty($errors)) {
        echo display_errors($errors);
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <?php include_once 'includes/navigation.php'; ?>
    <div class="container-fluid">
        <h2 class="text-center">Marques</h2><hr>
        <!-- Brand form -->
        <div class="text-center">
            <form class="form-inline" action="brands.php<?php if(isset($_GET['edit'])) {echo '?edit='.$edit_id;}?>" method="POST">
                <div class="form-group">
                    <?php 
                    $brand_value = "";
                    if(isset($_GET['edit'])) {
                        $brand_value = $eBrand['brand'];
                    } else if(isset($_POST['brand'])) {
                        $brand_value = sanitize($_POST['brand']);    
                    }
                    ?>
                    <label for="brand"><?php if(isset($_GET['edit'])) {echo 'Editez la';} else {echo 'Ajoutez une';} ?> marque:</label>
                    <input type="text" name="brand" id="brand" class="form-control" value="<?php echo $brand_value ?>"/>
                    <?php if(isset($_GET['edit'])):?>
                    <a href="brands.php" class="btn btn-default">Cancel</a>
                    <?php endif; ?>
                    <input type="submit" name="add_submit" value="<?php if(isset($_GET['edit'])) {echo 'Editez';} else {echo 'Ajoutez';}?>" class="btn btn-lg btn-success" />
                </div>
            </form>
        </div>
        <table class="table table-bordered table-striped table-auto table-condensed">
            <thead>
                <tr><th></th><th>Marque</th><th></th></tr>
            </thead>
            <tbody>
                <?php while($brand = $result->fetch_assoc()) :?>
                <tr>
                    <td><a href='brands.php?edit=<?php echo $brand['id']?>' class="btn btn-cs btn-default"><span class='glyphicon glyphicon-pencil'></span></a></td>
                    <td><?php echo $brand['brand']?></td>
                    <td><a href='brands.php?delete=<?php echo $brand['id']?>' class="btn btn-cs btn-default"><span class='glyphicon glyphicon-remove-sign'></span></a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php include '../includes/footer.php' ?>
</body>
</html>
