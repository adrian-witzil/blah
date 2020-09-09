<?php 

//connect to database
$conn = mysqli_connect('sql212.epizy.com', 'epiz_26701755', 'mLHFbKh0TTEwn', 'epiz_26701755_db01');

// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

 ?>