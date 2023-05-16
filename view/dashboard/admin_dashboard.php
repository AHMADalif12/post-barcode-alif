<?php
    include_once("../../config/database.php");

    session_start();

    if($_SESSION['username'] == ""){
        header('location:../../index.php');
    }

    include_once("../inc/header.php");
?>

<?php
    include_once("../inc/admin_sidebar.php");
?>


    <div class="content-wrapper">
    </div>

<?php
    include_once("../inc/footer.php");
?>