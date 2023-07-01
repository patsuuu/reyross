<?php

require 'db_conn.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $values = $_POST["values"];
 

  
  }

  $query = "INSERT INTO product_tbl VALUES('', '$name', '$values')";
  mysqli_query($conn,$query);
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <style>
body {
  background-image: url('');
}
</style>
  <style>
      form {
  border-style: solid;
  border-width: medium;
  position: relative;
  height: 210px;
  width: 33%;
  bottom: 10px;
  padding:  30px;
  font-size: 20px;
  line-height: 2;
  background-color: gray;
  margin-left: auto; 
  margin-right: auto;
}
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Timesnewroman;
  font-size: 20px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
.s {
  position: fixed;
}

.content {
  position: fixed;
  width: 100%;
  
  
}


#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

      </style>
       <video autoplay muted loop id="myVideo">
  <source src="https://cdn.discordapp.com/attachments/1028865757444055092/1115168796873863179/green_-_4864_Original.mp4">
</video>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
  
<div class="content">
  <center><h2>"FORM"</h2></center>
  <div class="s">
    <a href="indexxx.php">&#8592;</a>
</div>
    <form class="" action="" method="post" autocomplete="off">
      
      <center><label for="name">What is your gender?</label>
      <input type="text" name="name" id = "name" required value=""> <br>
</center>


      <br>
      <center><button type="submit" name="submit">Submit</button></center>
      <a href="indexxxx.php">View</a>
      
      </div>    
    
    </form>
  </body>
</html>