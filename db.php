<?php
$db= mysqli_connect("localhost","root","a","blog1");
if (mysqli_connect_error()){
    echo "failed to connect". mysqli_connect_error();
}