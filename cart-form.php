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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
  max-width: 400px;
  margin: 0 auto;
  margin-top: 4rem;
}

form div {
  margin-bottom: 10px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="number"],
select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  background-color: #4caf50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

    </style>
</head>
<body>

    <section class="form">
        <form action="buy_form.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="game-type">Game Type:</label>
            <select id="game-type" name="game" required>
            <option value="">Select Game Type</option>
            <option value="freefire">Free Fire</option>
            <option value="pubg">PUBG</option>
            <option value="coc">Clash of Clans</option>
            <option value="pubg-lite">PUBG Lite</option>
            </select>
        </div>
        <div>
            <label for="game-id">Game ID:</label>
            <input type="text" id="game-id" name="uid" required>
        </div>
        <div>
            <label for="gift-required">Gift Required:</label>
            <select id="gift-required" name="gift" required>
            <option value="">Select Gift</option>
            <option value="uc">UC</option>
            <option value="diamond">Diamond</option>
            <option value="gems">Gems</option>
            </select>
        </div>
          
        <div>
            <label for="total-amount">Total Amount Required:</label>
            <input type="number" id="total-amount" name="amount" required>
        </div>
        <div>
            <label for="payment-method">Payment Method:</label>
            <select id="payment-method" name="payment" required>
                <option value="">Select Payment Method</option>
                <option value="bank">Bank</option>
                <option value="esewa">eSewa</option>
            </select>
        </div>
        <div>
            <label for="payment-screenshot">Payment Screenshot:</label>
            <input type="file" id="payment-screenshot" name="paymentScreenshot" accept="image/*" required>
        </div>
        
        <form action="cart.php" method="POST" >
    <!-- Your form fields here -->

    <button type="submit" name="submit">Submit</button>
</form>

</section>  
</form>

</form>


    
</body>
</html>





