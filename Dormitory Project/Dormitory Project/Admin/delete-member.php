<?php
include('../config/constaints.php');

if(isset($_GET['id']))
{
    //echo "Get Value and Delete";
    $id = $row['id'];
        $full_name = $row['full_name'];
        $joining_date = $row['joining_date'];
        $room_no = $row['room_no'];

}
else
{
    header('location:'.SITEURL.'Admin/manage-member.php');
    //die();
}

$sql = "DELETE FROM tbl_member WHERE id=$id";

$res = mysqli_query($conn, $sql);

if($res==TRUE)
{
    $_SESSION['delete'] = "<div class='success'>Member Deleted Successfully.</div>";
    header('location:'.SITEURL.'Admin/manage-member.php');
}

else
{
    $_SESSION['delete'] = "<div class='error'>Failed to Delete Member.</div>";
    header('location:'.SITEURL.'Admin/manage-member.php');
}

?>