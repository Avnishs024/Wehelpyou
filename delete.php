
<?php
include('config.php');
$id = $_GET['id'];
$r = mysqli_query($con,"DELETE FROM `query` WHERE `id`= $id ");
if($r)
{
    echo '<script> window.location="tables.php"; </script>';
}
else
{
    echo 'error';
}
?>