<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_json';
$link = mysqli_connect($host, $user, $pass, $db) or die ('Teu konek');

if(!empty($_POST)){
    
    $test = '';
    
    foreach ($_POST as $key => $value) {
        $test .= "'".$key."' : '".$value."', ";
    }
    
    $query = 'INSERT INTO get_json (dt_json) VALUES ("{'.$test.'}")';    
    mysqli_query($link, $query);
    
}else{ ?>
<form method="post" action="">
    <input type="text" name="nama">
    <input type="text" name="lengkap">
    <input type="submit" name="submit">
</form>
<?php } ?>
