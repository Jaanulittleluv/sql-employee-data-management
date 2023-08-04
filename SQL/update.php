<?php include('./navbar.php');?>
<form action="./script.php" method="post" class="m-5">
    <h1 class="fw-bold">Update Employee</h1>
    <?php
    $id=$_GET['id'];
    $sql="SELECT * FROM student WHERE id='$id'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        ?>
        <div class="form-group">
        <label class="form-label fw-bold">Id</lable>
        <input type="text" name="id" required class="form-control" readonly value="<?php echo $row['id']; ?>">
    </div>
    <div class="form-group">
        <label class="form-label fw-bold">Name</lable>
        <input type="text" name="name" required class="form-control" value="<?php echo $row['NAME']; ?>">
    </div>
    <div class="form-group">
        <label class="form-label fw-bold">Registration Number</lable>
        <input type="text" name="regno" required class="form-control" value="<?php echo $row['regno']; ?>">
    </div>
    <div class="form-group">
        <label class="form-label fw-bold">City</lable>
        <input type="text" name="city" required class="form-control" value="<?php echo $row['city']; ?>">
    </div>
    <input type="submit" name="update" class="btn btn-success m-2" value="update">
    <a class="btn btn-secondary m-2" href="./home.php">Go Back</a>
    <?php
}
    ?>
    
</form>
<?php include('./footer.php'); ?>