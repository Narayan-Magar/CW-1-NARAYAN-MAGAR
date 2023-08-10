<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
  header('location:login.php');
} 

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/about.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <body>
    <?php include 'header.php'; ?>
    <section>
    <div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container">
    <img class="mainImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eaboutus1.svg">
    <div class="allText aboveText">
      <p class="text-blk headingText">
        About Us
      </p>
      <p class="text-blk subHeadingText">
      Shimmering Treasures: Your Ultimate UC, BP, Diamonds, and Gems Emporium
      </p>
      <p class="text-blk description">
      "Welcome to Shimmering Treasures, your one-stop online emporium for all things precious in the gaming world! Discover a dazzling collection of UC and BP to enhance your gaming experience. Unearth exquisite diamonds and sparkling gems, perfect for adorning your virtual adventures. Whether you seek to boost your in-game prowess or indulge in stunning virtual riches, our store offers a glimmering array of treasures to satisfy every gamer's desires. Step into a realm of opulence and convenience, where securing your virtual wealth is just a click away. Join us at Shimmering Treasures and elevate your gaming journey to new heights!"
      </p>
      <button class="explore">
        Explore
      </button>
    </div>
  </div>
  <div class="responsive-container-block Container bottomContainer">
    <img class="mainImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/xpraup2.svg">
    <div class="allText bottomText">
      <p class="text-blk headingText">
        Our Mission and Vision
      </p>
      <p class="text-blk subHeadingText">
      Digital Riches Emporium: Unlock the Brilliance of UC, BP, Diamonds, and Gems.
      </p>
      <p class="text-blk description">
      Our mission is to offer gamers from around the globe a seamless platform to access a wide range of gaming resources, including UC, BP, diamonds, and gems, empowering them to enrich their gaming experiences and excel in their virtual quests. Our vision is to become the premier online emporium, empowering players to achieve unprecedented levels of digital prosperity while fostering a community that cherishes the joy of gaming and the allure of virtual opulence.
      
    </div>
    <button class="explore">
        Explore
      </button>
  </div>
</div>
    </section>

    <section class="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

      <div class="box">
        <img src="images/1.jpg" alt="">
        <p>The purchase of UC, Diamonds, and BP from this online store was seamless! The in-game currency was delivered
          instantly, and I was able to enhance my gaming experience immediately. Highly recommended!</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Manish</h3>
      </div>

      <div class="box">
        <img src="images/2.jpg" alt="">
        <p>I had a great experience buying UC, Diamonds, and BP from this store. The transaction was smooth, and the
          customer support was excellent. I will definitely come back for more in the future.</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Bishal Timsina</h3>
      </div>

      <div class="box">
        <img src="images/3.jpg" alt="">
        <p>The UC, Diamonds, and BP I purchased from this online store worked perfectly in-game. It was a reliable and
          trustworthy platform, and I received the currency quickly. Very satisfied with my purchase!</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>shiril Mahato</h3>
      </div>

      <div class="box">
        <img src="images/4.jpg" alt="">
        <p>I was initially hesitant about buying UC, Diamonds, and BP online, but this store exceeded my expectations.
          The process was secure, and the in-game currency added a new level of excitement to my gaming sessions. Thank
          you!</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Suzan stha</h3>
      </div>

      <div class="box">
        <img src="images/5.jpg" alt="">
        <p>I'm extremely happy with my purchase of UC, Diamonds, and BP from this online store. The prices were
          competitive, and the delivery was prompt. It significantly enhanced my gameplay, and I would highly recommend
          it to other gamers.</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Sebika karki</h3>
      </div>

      <div class="box">
        <img src="images/6.jpg" alt="">
        <p>I was very thankful to the owner of this online platform for this kind of services.I was able to get uc in
          time from this store. so this is a kind of trusted webite.</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Roshan Dongol</h3>
      </div>

    </div>

  </section>

  <?php include 'footer.php'; ?>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>
</body>
</html>