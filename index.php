<?php 
if(isset($_POST['fuser']))

{
    $fuser = $_POST['fuser'];
    $lpassword = $_POST['lpassword'];
    echo "<span class='success'> Ini menggunakan <b>METHOD POST</b></span><'br>";
    echo "Nama : ".$fuser. "<br/> Password : ".$lpassword;
}

//----------------------------------------------------------------
if(isset($_GET['fuser']))

{
    $fuser = $_GET['fuser'];
    $lpassword = $_GET['lpassword'];
    echo "<span class='success'> Ini menggunakan <b>METHOD GET</b></span><'br>";
    echo "Nama : ".$fuser. "<br/> Password : ".$lpassword;
}
?>