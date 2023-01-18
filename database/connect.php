<?php
$mysqli = new mysqli("localhost","root","","testDB");

if (mysqli_connect_errno()){
    printf("Connection failed: %s\n",mysqli_connect_error());
    exit();
} else {
    $clean_text = mysqli_real_escape_string($mysqli, $_POST['testfield']);
    $sql = "INSERT INTO testTable (testField) VALUES ('".$clean_text."')";
    $res = mysqli_query($mysqli, $sql);

    if($res === TRUE){
        echo "A record has been inserted.";
    } else {
        printf("Could not create table: %s\n", mysqli_error($mysqli));
    }
    mysqli_close($mysqli);
}

?>