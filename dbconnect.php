<?php
function connect(){
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "food_app_134670";
    $link = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("could not connect");
    return $link;
}
function getData($sql){
    $link = connect();
    $result = mysqli_query($link,$sql);

    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $rows[]=$row;
    }
    return $rows;
}
function setData($sql){
    $link = connect();
    if(mysqli_query($link,$sql)){
        return true;
    }else{
        return false;
    }
}

?>