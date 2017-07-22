<?php 
$path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT") . "eCommerce/";
require_once $path . 'core/init.php';
$sql = "SELECT * FROM categories WHERE parent=0";
$pquery = $db->query($sql);
if(! $pquery) {
    echo "Error connecting categories " . $db->error;
    die;
}
?>
<!-- barre de navigation au sommet !-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">Shaunta</a>
        <?php 
        while($parent = $pquery->fetch_assoc()) : 
            $parent_id = $parent['id'];
            $sql = "SELECT * FROM categories WHERE parent = '$parent_id'";
            $cquery = $db->query($sql);
            ?>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent["category"] ?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php while($child = $cquery->fetch_assoc()) : ?>
                    <li><a href="#"><?php echo $child['category'] ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </li>
        </ul>
        <?php endwhile; ?>
    </div>
</nav>
