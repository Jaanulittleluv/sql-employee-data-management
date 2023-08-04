<?php session_start();
include('./dbconnect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./bootstrap-5.3.0-dist/css/bootstrap.min.css">
</head>
<body class="bg-info">
    <?php
    if(isset($_SESSION['user'])){
    ?>
    <nav class="nav navbar-expand-lg bg-light">
    <div class="container-fluid">
        <h1>Employee Management System</h1>
</div>
<ul class="nav nav-navbar navbar-right">
    <li><a class="nav-link fw-bold" href="./login.php">login</a></li>
</ul>
</nav>
<?php
    }else{
        ?>
        <nav class="nav navbar-expand-lg bg-light">
    <div class="container-fluid">
        <h1>Employee Management System</h1>
</div>
<ul class="nav nav-navbar navbar-right">
    <li><a class="nav-link fw-bold" href="./login.php">login</a></li>
</ul>
</nav>
<?php
    }
    ?>

</body>
</html>