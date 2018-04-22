  <?php 
get_header();
  		/* 
  		Template Name: ClassDetails
  		*/ 	
  ?>
 <?php
 if(isset($_POST["y"])){
 	echo $_POST["y"];
 }
 if(isset($_POST["month"])){
 	echo $_POST["month"];
 }
 if(isset($_POST["day"])){
 	echo $_POST["day"];
 }
 echo "Class Details";
 ?>
