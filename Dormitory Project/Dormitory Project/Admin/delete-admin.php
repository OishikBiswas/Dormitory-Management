<?php

include('../config/constraints.php');

$id = $_GET['id'];
$sql = "DELETE FROM tbl_admin WHERE id=$id";
$res = mysqli_query($conn, $sql);

if($res==TRUE)
{
    $_SESSION['delete'] = "<div class= 'success'> Admin Deleted Successfully.</div>";

    header('location:'.SITEURL.'Admin/manage-admin.php');
}

else
{
    $_SESSION['delete'] = "<div class= 'success'> Failed to Delete Admin. Try Again Later. </div>";
    header('location:'.SITEURL.'Admin/manage-admin.php');
}


?>