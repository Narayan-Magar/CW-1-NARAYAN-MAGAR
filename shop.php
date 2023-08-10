<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>
 <?php include 'header.php'; ?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap");

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: inherit;
    }

    html {
      box-sizing: border-box;
      font-size: 70%;
    }

    body {
      font-family: "Poppins", sans-serif;
      font-size: 18px;
      color: black;
      background-color: whitesmoke;
    }

    img {
      max-width: 100%;
    }

    .box {
      max-width: 1824px;
      margin: 0 auto;
    }

    @media only screen and (max-width: 1200px) {
      .box {
        padding: 0 48px;
      }
    }

    /* HEADER */
    .logob {
      width: 100px;
      height: 80px;
      cursor: pointer;
    }

    /* nav {
      width: 84%;
      margin: auto;
      padding: 20px 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    nav ul li {
      display: inline-block;
      list-style: none;
      margin: 10px 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: #606163;
    }

    nav ul li a:hover {
      color: #ff4321;
    }

    .d {
      display: flex;
      align-items: center;
    }

    .align-center {
      display: flex;
      align-items: center;
      justify-content: center;
    } */

    @media only screen and (max-width: 768px) {
      nav {
        padding: 16px 0;
      }

      .icons {
        display: none;
      }

      .logob {
        width: 100px;
        height: 80px;
        cursor: pointer;
      }
    }
    .intro {
      height: calc(100vh - 112px);
      overflow: hidden;
      position: relative;
      z-index: 0;
      background-color: lightgray;
      background-video: url('gaming.mp4');
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-size: 100% 100%;
    }

    .intro-content {
      height: 100%;
    }

    .dis {
      display: inline-block;
      font-size: 40px;
      color: #ff4321;
    }

    .intro h1 {
      margin-top: 50px;
      line-height: 1.3;
      font-weight: 600;
      font-size: 50px;
      text-align: center;
    }

    .intro h2 {
      line-height: 1.3;
      font-weight: 600;
      font-size: 45px;
      text-align: center;
    }

    .intro h3 {
      font-weight: 400;
      font-size: 40px;
      text-align: center;
    }

    .btn {
      display: inline-block;
      border-radius: 80px;
      background-color: #ff4321;
      padding: 20px 80px;
      color: white;
      font-weight: 600;
      box-shadow: 0 16px 24px rgba(0, 0, 0, 0.3);
      margin-top: 75px;
      margin-left: 600px;
    }

    .section {
      padding: 160px 0 0 0;
    }
    .benefit-center {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 80px;
    }

    .benefit {
      border: 1px solid #ccc;
      padding: 16px 16px 32px 16px;
      display: flex;
      align-items: center;
      flex-direction: column;
    }

    .benefit .icon {
      color: #ff4321;
      font-size: 64px;
    }

    .benefit h4 {
      margin-bottom: 5px;
    }

    .benefit .text {
      font-size: 24px;
      color: #777;
    }

    /* New Arrivals */
    .h {
      font-size: 3rem;
      text-align: center;
      margin-bottom: 5rem;
      font-weight: 600;
    }

    .h h1 {
      font-weight: 400;
    }

    .h span {
      color: #ff4321;
    }

    .ac-center {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 80px;
      margin-bottom: 80px;
    }

    .ac {
      text-align: center;
      padding-bottom: 16px;
      transition: all 500ms ease-in-out;
    }

    .ac:hover {
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .ac .img-cover {
      overflow: hidden;
    }

    .ac img {
      transition: all 500ms ease-in-out;
    }

    .ac:hover img {
      transform: scale(1.2);
    }

    @media only screen and (max-width: 567px) {
      .h {
        font-size: 32px;
      }
    }

    .ab {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      grid-template-rows: repeat(8, 4vw);
      gap: 2rem;
    }

    .ab .item {
      overflow: hidden;
    }

    .ab img {
      object-fit: cover;
      height: 100%;
      width: 100%;
      transition: all 500ms ease-out;
    }

    .ab .item-1 img {
      object-fit: fill;
    }

    .ab img:hover {
      transform: scale(1.2);
    }

    .item-1 {
      grid-column-start: 1;
      grid-column-end: 3;
      grid-row-start: 1;
      grid-row-end: 9;
    }

    .item-2 {
      grid-column-start: 5;
      grid-column-end: 7;
      grid-row-start: 1;
      grid-row-end: 9;
    }
    .item-3 {
      grid-column-start: 3;
      grid-column-end: 5;
      grid-row-start: 1;
      grid-row-end: 5;
    }

    .item-4 {
      grid-column-start: 3;
      grid-column-end: 5;
      grid-row-start: 5;
      grid-row-end: 9;
    }

    @media only screen and (max-width: 600px) {
      .gallary {
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(20, 4vw);
      }

      .item-1 {
        grid-column-start: 1;
        grid-column-end: 7;
        grid-row-start: 1;
        grid-row-end: 7;
      }

      .item-2 {
        grid-column-start: 1;
        grid-column-end: 7;
        grid-row-start: 7;
        grid-row-end: 11;
      }
      .item-3 {
        grid-column-start: 1;
        grid-column-end: 7;
        grid-row-start: 11;
        grid-row-end: 15;
      }
      .item-4 {
        grid-column-start: 1;
        grid-column-end: 7;
        grid-row-start: 15;
        grid-row-end: 19;
      }
    }

    #footer {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
      position: relative;
      min-height: 50vh;
      padding: 50px 100px;
      background-color: black;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    #footer ul li {
      color: white;
      list-style: none;
      margin: 30px 40px;
      padding-top: 20px;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    #footer ul li a {
      text-decoration: none;
      color: white;
      font-family: sans-serif;
    }

    #footer ul li a:hover {
      color: #ff4321;
    }

    .social-links {
      margin-left: 8%;
      margin-top: 100px;
    }

    .social-links a {
      font-size: 30px;
      color: #606163;
      margin-right: 20px;
    }

    .social-links a:hover {
      color: #ff4321;
    }
  </style>
  <title>NARAN KO GAMING SHOPPING SITE</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="css/style.css">
<body>
  <header class="header">
    <!-- <nav>
      <img src="img/narayan.png" class="logob">
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
      </ul>
    </nav> -->
    <div class="video-background">
        <video autoplay loop muted>
          <source src="img/pubg.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="content">
        </div> 
    <div class="intro">
      <h1>TRY OUT OUR GAMING PRODUCTS</h1>
      <h2>
        Up to<br />
        <span class="dis">30% Discount</span><br />
        on Your <br />
       FIRST REGISTRATION
      </h2>
      <h3>From 1st Jan to 31st Jan</h3>
      <!-- <a href="cart-form.php" class="btn">BUY NOW</a> -->
    </div>
  </header>
  <section class="section benefits">
    <div class="benefit-center box">
      <div class="benefit">
        <span class="icon"><i class="bx bx-purchase-tag"></i></span>
        <h4>Fast Delivery</h4>
        <span class="text">Starts from $0.50 per order</span>
      </div>

      <a href="cart-form.php">
      <div class="benefit">
        <span class="icon"><i class="bx bx-book-reader"></i></span>
        <h4>10-Day Returns</h4>
        <span class="text">Shop without any fear</span>
      </div>

      <div class="benefit">
        <span class="icon"><i class="bx bx-headphone"></i></span>
        <h4>24/7 Support</h4>
        <span class="text">We are always there to help you</span>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="h">
      <h1><span>New</span> Arrivals</h1>
    </div>
  </a>
    <a href="cart-form.php">
    <div class="ac-center box">
      <div class="ac">
        <div class="img-cover">
          <img src="img/pubg.png" alt="" />
        </div>
        <p>PUBG UC</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
        </div>
        <div class="price">$10</div>
   
      </div>
    </a>
      <a href="cart-form.php">
      <div class="ac">
        <div class="img-cover">
          <img src="img/freefire.png" alt="" />
        </div>
        <p>FREE-FIRE DIAMONDS</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$20</div>
      </div>
      
    </a>
      <a href="cart-form.php">
      <div class="ac">
        <div class="img-cover">
          <img src="img/coc.png" alt="" />
        </div>
        <p>CLASH OF CLANS GEMS</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$%</div>
      </div>
    </a>
      <a href="cart-form.php">
      <div class="ac" >
        
        <div class="img-cover">
          <img src="img/pubglite.png" alt="" />
        </div>
        <p>PUBG-LITE BP</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$8</div>
      </div>
      </a>
      <div>
        <!-- <a href="cart-form.php" name="cart" class="btn">ADD TO CART</a> -->
        </div>
    </div>
  </section>
  <section class="section">
    <div class="h">
      <h1><span>Shop By</span> Categories</h1>
    </div>
    <div class="ab box">
      <div class="item item-1">
        <img src="img/uclist.jpg" alt="" />
      </div>
      <div class="item item-2">
        <img src="img/diamondlist.jpg" alt="" />
      </div>
      <div class="item item-3">
        <img src="img/gemslist.jpg" alt="" />
      </div>
      <div class="item item-4">
        <img src="img/bclist.jpg" alt="" />
      </div>
    </div>
  </section>
  <section class="section">
    <div class="h">
      <h1>Popular <span>Products</span></h1>
    </div>
    <div class="ac-center box">
      <div class="ac">
        <div class="img-cover">
        </div>
        <p>PUBG MOBILE</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">Rs.250</div>
      </div>
      <div class="ac">
        <div class="img-cover">
          <img src="img/slip3.jpg" alt="" />
        </div>
        <p>FREE FIRE</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">Rs.200</div>
        
        
      </div>    
    </section>
    <<a href="cart-form.php" class="btn" style="display: block; margin-left: 45%; margin-right:45%; text-align: center;">BUY NOW</a>
    <div style="display: flex; justify-content: center; margin-bottom: 4rem;">


    <!-- </div>
  <section id="footer">
    <div class="foot">
      <ul>
        <li><a href="">HOME</a></li>
        <li><a href="">ABOUT US</a></li>
        <li><a href="">CONTACT US</a></li>
      </ul>
      <div class="social-links">
        <a href=""><i class="fab fa-linkedin"></i></a>
        <a href=""><i class="fab fa-behance"></i></a>
        <a href=""><i class="fab fa-dribbble"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </section> -->
  <?php include 'footer.php'; ?>
</body>
</html>
