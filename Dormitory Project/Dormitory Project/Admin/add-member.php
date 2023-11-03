<?php include('Admin/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Member</h1>

        <br><br>

    <?php
    
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }

    ?>
    <br><br>

    <form action="" method="POST">

    <table class="tbl-30">
        <tr>
            <td>Member Name: </td>
            <td>
            <input type="text" name="title" placeholder="Category Title">
</td>
</tr>

<tr>
    <td colspan="2">
        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
</td>
</tr>
</table>
</form>

<?php

if(isset($_POST['submit']))
{
    $title = $_POST['title'];

    /*if(isset($_POST['featured']))
    {
        $featured = $_POST['featured'];
    }
    else
    {
        $featured = "No";
    }*/

    $sql = "INSERT INTO tbl_member SET
    title='$title'
    ";

    $res = mysqli_query($conn, $sql);

    if($res==TRUE)
    {
        $_SESSION['add'] = "<div class='success'>Member Added Successfully.</div>";
        header('location:'>.SITEURL.'admin/manage-members.php');
    }

    else
    {
        $_SESSION['add'] = "<div class='error'>Failed to Add Category.</div>";
        header('location:'>.SITEURL.'admin/add-members.php');
    }


}

</div>
</div>

<?php include('Admin/footer.php'); ?>