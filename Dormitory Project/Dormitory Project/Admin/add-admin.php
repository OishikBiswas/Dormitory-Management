<?php include('Admin/menu.php'); ?>


<div class="main-content">
<div class="wrapper">
<h1>Add Admin</h1>

<br /> <br />

<?php
if(isset($_SESSION['add']))
{
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
?>


<form action="" method="POST">
<table class="Admin">

<tr>
    <td>Full Name: </td>
    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
</tr>

<tr>
    <td>Username: </td>
    <td><input type="text" name="username" placeholder="Your Username"></td>
</tr>

<tr>
    <td>Password: </td>
    <td><input type="password" name="password" placeholder="Your Password"></td>
</tr>

<tr>
    <td colspan="2">
    <input type="submit" name="submit" value="Add Admin" class="btn-secondary"></td>
</tr>

</table>
</form>
</div>
</div>

<?php include('Admin/footer.php'); ?>

<?php

if(isset($_POST['submit']))
{
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO tbl_admin SET
    full_name='$full_name',
    username='$username',
    password='$password'

    ";

    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    if($res==True)
    {
        $_SESSION['add'] = "Admin Added Successfully";
        header("location:".SITEURL.'Admin/manage-admin.php');
    }

    else
    {
        $_SESSION['add'] = "Failed to Add Admin";
        header("location:".SITEURL.'Admin/add-admin.php');
    }
}

?>