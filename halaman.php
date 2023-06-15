<?php

if(isset($_GET['url']))
{
    $url = $_GET['url'];
    switch($url){

        case 'mahasiswa';
            include 'data_mahasiswa.php';
            break;
            
    }
}
else
{
    ?>
   <?php include 'home.php';?>
    <?php
}



?>