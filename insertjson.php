<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "db_json";
 $link = mysqli_connect($host, $user, $pass, $db);
 if(!empty($_POST)){

     $preg = json_encode($_POST);  
     $query = "INSERT INTO get_json (in_json) VALUES ('".$preg."')";
     mysqli_query($link, $query);
     
 } else { ?>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="text" name="img[]">
        <input type="text" name="judul">
        <input type="text" name="link">
        <input type="text" name="date[tgl]">
        <input type="text" name="date[waktu]">
        <input type="text" name="desk">
        <input type="text" name="artikel">
        <input type="text" name="keyword">
        <input type="text" name="kategori">
        <input type="text" name="tag">
        <input type="text" name="avalibility">
        <input type="text" name="status">
        <input type="submit" name="submit">
    </form>
 <?php } ?>
