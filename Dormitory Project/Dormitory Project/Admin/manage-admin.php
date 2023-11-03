<?php include('admin/menu.php');  ?>

<div class="tbl-full">
    <div class="wrapper">
        <h1>Manage Admin</h1>
<br />

<?php
if(isset($_SESSION['add']))
{
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}

if(isset($_SESSION['delete']))
{
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}

if(isset($_SESSION['update']))
{
    echo $_SESSION['update'];
    unset($_SESSION['update']);
}

if(isset($_SESSION['user-not-found']))
{
    echo $_SESSION['user-not-found'];
    unset($_SESSION['user-not-found']);
}
 
if(isset($_SESSION['pwd-not-match']))
{
    echo $_SESSION['pwd-not-match'];
    unset($_SESSION['pwd-not-match']);
}

if(isset($_SESSION['change-pwd']))
{
    echo $_SESSION['change-pwd'];
    unset($_SESSION['change-pwd']);
}

?>

<br /> <br />

<a href="add-admin.php" class="btn-primary">Add Admin</a>

<br /> <br /> <br />

<table class="tbl-full">
<tr>
<th>Serial No</th>
<th>Full Name</th>
<th>Username</th>
<th>Actions</th>
</tr>

<?php
$sql = "SELECT * FROM tbl_admin";
$res = mysqli_Query($comm, $sql);

if($res==TRUE)
{
    $count = mysqli_num_rows($conn, $sql);

    $sn=1;

    if($count>0)
    {
        while($rows=mysqli_fetch_assoc($res))
        {
            $id=$rows['id'];
            $full_name=$rows['full_name'];
            $username=$rows['username'];
        

        ?>
        <tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $full_name; ?></td>
<td><?php echo $username; ?></td>
<td>
    <a href="<?php echo SITEURL; ?>Admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
    <a href="<?php echo SITEURL; ?>Admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
    <a href="<?php echo SITEURL; ?>Admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Update Admin</a>  
    
</td>
</tr>

        <?php
        }

    }

    else
    {

    }
}

<tr>
<td>1</td>
<td>A</td>
<td>a</td>
<td>
    <a href="#" class="btn-secondary">Update Admin</a>
    <a href="#" class="btn-danger">Update Admin</a>  
    Delete Admin
</td>
</tr>

<tr>
<td>1</td>
<td>A</td>
<td>a</td>
<td>
<a href="#" class="btn-secondary">Update Admin</a>
<a href="#" class="btn-danger">Update Admin</a>  
</td>
</tr>

<tr>
<td>1</td>
<td>A</td>
<td>a</td>
<td>
<a href="#" class="btn-secondary">Update Admin</a>
<a href="#" class="btn-danger">Update Admin</a>  
</td>
</tr>
</table>

</div>
</div>
<?php include('admin/footer.php');  ?>