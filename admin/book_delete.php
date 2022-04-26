
<?php
include('config.php');
$id = $_GET['id'];
$r = mysqli_query($con,"DELETE FROM `book_us` WHERE `id`= $id ");
if($r)
{
    echo '<script> window.location="book.php"; </script>';
}
else
{
    echo 'error';
}
?>