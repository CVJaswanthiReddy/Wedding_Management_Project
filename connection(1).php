<?php
$handler=mysqli_connect("localhost","root","","wedding");
if($handler){
    echo "success";
}else{
    echo "fail";
}
?>
