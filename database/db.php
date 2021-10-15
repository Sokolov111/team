<?php
$db=new mysqli('localhost','root','','ftd_team');
if($db->connect_error){
    echo $db->connect_error;
}else{
    echo "Great!";
}