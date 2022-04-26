
<?php
include('config.php');
$id = $_GET['id'];
$r = mysqli_query($con,"DELETE FROM `user_login` WHERE `id`= $id ");
if($r)
{
    echo '<script> window.location="user.php"; </script>';
}
else
{
    echo 'error';
}
?>