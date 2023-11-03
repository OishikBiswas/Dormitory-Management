<?php include('admin/menu.php');  ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Member</h1>

        <br /> <br />

        <?php
    
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }

    if(isset($_SESSION['remove']))
    {
        echo $_SESSION['remove'];
        unset($_SESSION['remove']);
    }

    if(isset($_SESSION['delete']))
    {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
    }

    if(isset($_SESSION['no-member-found']))
    {
        echo $_SESSION['no-member-found'];
        unset($_SESSION['no-member-found']);
    }

    if(isset($_SESSION['update']))
    {
        echo $_SESSION['update'];
        unset($_SESSION['update']);
    }

    ?>
    <br><br>

<a href="<?php echo SITEURL; ?>Admin/add-member.php" class="btn-primary">Add Member</a>

<br /> <br /> <br />

<table class="tbl-full">
<tr>
<th>Serial No</th>
<th>Full Name</th>
<th>Joining Date</th>
<th>Room No</th>
</tr>

<tr>
<td>1</td>
<td>A</td>
<td>a</td>
<td>1</td>
<td>
    <a href="#" class="btn-secondary">Update Admin</a>
    <a href="#" class="btn-danger">Update Admin</a>  
    
</td>
</tr>

 <?php

 $sql = "SELECT * FROM tbl_member";

 $res = mysqli_query($conn, $sql);

 $count = mysqli_num_rows($res);


 if(count>0)
 {
    while($row=mysqli_fetch_assoc($res))
    {
        $id = $row['id'];
        $full_name = $row['full_name'];
        $joining_date = $row['joining_date'];
        $room_no = $row['room_no'];
        ?>
        <tr>
<td>1.</td>
<td><?php echo $full_name; ?></td>
<td><?php echo $joining_date; ?></td>
<td><?php echo $room_no; ?></td>
<td>
<a href=""<?php echo SITEURL; ?>Admin/update-member.php?id=<?php echo $id; ?>"" class="btn-secondary">Update Admin</a>
<a href="<?php echo SITEURL; ?>Admin/delete-member.php?id=<?php echo $id; ?>" class="btn-danger">Update Member</a>  
</td>
</tr>

<?php

 }
}


 else
 {
    ?>
    <tr>
        <td colspan="6"><div class="error">No Category Added.</div></td>
 </tr>

 <?php
 }

 ?>
</table>


</div>
</div>
<?php include('admin/footer.php');  ?>