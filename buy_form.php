<?php

   $connection = mysqli_connect('localhost','root','','shoppp_db');

   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $game = $_POST['game'];
      $uid = $_POST['uid'];
      $gift = $_POST['gift'];
      $amount = $_POST['amount'];
      $request = " insert into buy_form(name, game, uid, gift, amount) values('$name','$game','$uid','$gift','$amount') ";
      mysqli_query($connection, $request);

      header('location:home.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>