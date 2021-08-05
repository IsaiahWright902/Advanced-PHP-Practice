<?php 

// connect to db
$conn = mysqli_connect('localhost', 'isaiah', 'test1234', 'ninja_pizza');

// check connection 
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
