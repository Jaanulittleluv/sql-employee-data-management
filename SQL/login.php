<?php include('./navbar.php');?>
<form class="m-4 p-2" method="post" action="./script.php">
    <h1 class="text-center p-2">login</h1>
    <label class="form-label fw-bold">username</label>
    <input class="form-control" type="text" name="uname" placeholder="Enter your name..." required>
    <label class="form-label fw-bold">password</label>
    <input class="form-control" type="text" name="pword" placeholder="Enter your password..." required>
    <input class="btn btn-danger mt-3" type="submit" name="login">
</form>
<?php include('./footer.php'); ?>