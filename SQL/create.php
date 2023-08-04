<?php include('./navbar.php');?>
<form action="./script.php" method="post" class="m-5">
    <h1 class="fw-bold">Create New Employee</h1>
    <div class="form-group">
        <label class="form-label fw-bold">Name</lable>
        <input type="text" name="name" placeholder="Enter your name here..." required class="form-control">
    </div>
    <div class="form-group">
        <label class="form-label fw-bold">Registration Number</lable>
        <input type="text" name="regno" placeholder="Enter your regno here..." required class="form-control">
    </div>
    <div class="form-group">
        <label class="form-label fw-bold">City</lable>
        <input type="text" name="city" placeholder="Enter your city here..." required class="form-control">
    </div>
    <input type="submit" name="create" class="btn btn-success m-2" value="create">
    <a class="btn btn-secondary m-2" href="./home.php">Go Back</a>
</form>
<?php include('./footer.php'); ?>