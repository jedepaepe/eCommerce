<?php
require_once '../core/init.php';
include 'includes/head.php';
$sql = "SELECT * FROM brand ORDER BY brand";
$result = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<body>
    <?php include_once 'includes/navigation.php'; ?>
    <div class="container-fluid">
        Marques
        <table class="table table-bordered table-striped table-auto">
            <thead>
                <th></th><th>Marque</th><th></th>
            </thead>
            <tbody>
                <?php while($brand = $result->fetch_assoc()) :?>
                <td><a href='brands.php?edit=<?php echo $brand['id']?>' class="btn btn-cs btn-default"><span class='glyphicon glyphicon-pencil'></span></a></td>
                <td><?php echo $brand['brand']?></td>
                <td><a href='brands.php?delete=<?php echo $brand['id']?>' class="btn btn-cs btn-default"><span class='glyphicon glyphicon-remove-sign'></span></a></td>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php include '../includes/footer.php' ?>
</body>
</html>
