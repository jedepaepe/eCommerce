<?php
require_once '../core/init.php';
include 'includes/head.php';
$sql = "SELECT * FROM brand ORDER BY brand";
$result = $db->query($sql);
$errors = array();

// Si un formulaire est sousmis
if(isset($_POST['add_submit'])) {
    $brand = sanitize($_POST['brand']);
    // vérifie si la marque (brand) du formulaire est vide
    if($brand == '') {
        $errors[] .= "You must enter a brand!";
    } else {
        // ajoute la marque dans la DB
        $sql = "SELECT * FROM brand WHERE brand = '$brand'";
        $result = $db->query($sql);
        $count = $result->num_rows;
        if($count > 0) {
            $errors[] .= $brand . ' existe déjà. Veuillez choisir une autre marque...';  
        } else {
            $sql = "INSERT INTO brand (brand) VALUES ('$brand')";
            $db->query($sql);
            header('Location: brands.php');
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
            <form class="form-inline" action="brands.php" method="POST">
                <div class="form-group">
                    <label for="brand">Ajoutez une marque:</label>
                    <input type="text" name="brand" id="brand" class="form-control" value="<?php if(isset($_POST['brand'])) {echo $_POST['brand'];}?>"/>
                    <input type="submit" name="add_submit" value="Ajoutez" class="btn btn-lg btn-success" />
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
