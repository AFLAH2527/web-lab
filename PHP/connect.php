<?php

$cn = mysqli_connect("localhost","root","cetmca","cetmca");
if(!$cn){
	echo "Connection Error";
}
else{
	echo "Connection Success";
}

?>
