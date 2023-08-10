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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<link rel="stylesheet" href="css/style.css" />
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

<!-- <style>
  @import url("https://fonts.cdnfonts.com/css/poppins");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: "Poppins", sans-serif;
  }

  :root {
    --bg-color: #262A2B;
    --second-bg-color: #262A2B;
    --text-color: #fff;
    --main-color: #181A1B;
  }

  html {
    font-size: 62.5%;
    overflow-x: hidden;
  }

  body {
    background: var(--bg-color);
    color: var(--text-color);
  }

  .header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: var(--bg-color);
    z-index: 999;
  }


  #menu-icon {
    font-size: 3.6rem;
    color: var(--text-color);
    cursor: pointer;
    display: none;
  }

  section {
    min-height: 100vh;
    padding: 10rem 9% 2rem;
  }

  .home {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    /* Add this line to align content to the left corner */
    padding: 0 9%;
    background: url("images/Narayan_home.JPG") no-repeat;
    background-size: cover;
    background-position: center;
    margin-top: -2rem;
    
  }


  .home-content {
    max-width: 60rem;
    text-align: left;
    margin-top: -2rem;
  }

  .home-content h1 {
    font-size: 5.6rem;
    font-weight: 700;
    line-height: 1.3;
  }

  .home-content h1 span {
    color: var(--main-color);
  }

  .home-content .text-animate {
    position: relative;
    width: 32.8rem;
  }

  .home-content .text-animate h3 {
    font-size: 3.2rem;
    font-weight: 700;
    color: transparent;
    -webkit-text-stroke: 0.7px var(--main-color);
  }

  .home-content p {
    font-size: 1.6rem;
    margin: 2rem 0 4rem;
  }

  .btn-box {
    position: relative;
    display: flex;
    justify-content: flex-start;
    width: 20.5rem;
    height: 5rem;
  }

  .btn-box a {
    text-align: center;
    align-items: center;
    justify-content: center;
  }

  .btn-box .btn {
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 15rem;
    height: 100%;
    background: var(--main-color);
    border: 0.2rem solid var(--main-color);
    border-radius: 0.8rem;
    font-size: 1.8rem;
    font-weight: 600;
    letter-spacing: 0.1rem;
    color: var(--bg-color);
    z-index: 1;
    overflow: hidden;
    transition: 0.5s;
  }

  .btn-box .btn:nth-child(1) {
    background: transparent;
    color: var(--main-color);
  }

  .btn-box .btn:nth-child(1):hover {
    color: var(--bg-color);
  }

  .btn-box .btn:nth-child(1)::before {
    background: var(--main-color);
  }

  .btn-box .btn:nth-child(2) {
    background: transparent;
    color: var(--main-color);
  }

  .btn-box .btn:nth-child(2):hover {
    color: var(--bg-color);
  }

  .btn-box .btn:nth-child(2)::before {
    background: var(--main-color);
  }

  .btn-box .btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: 4rem;
    width: 0;
    height: 100%;
    background: var(--bg-color);
    z-index: -1;
    transition: 0.2s;
  }

  .btn-box .btn:hover:before {
    width: 100%;
  }

  .home-sci {
    position: absolute;
    left: 4rem;
    width: 170px;
    bottom: 4rem;
    width: 170px;
    display: flex;
    justify-content: space-between;
  }

  .home-sci a {
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: transparent;
    border: 0.2rem solid var(--main-color);
    border-radius: 50%;
    font-size: 23px;
    color: var(--main-color);
    z-index: 1;
    overflow: hidden;
    transition: 0.5s;
  }

  .home-sci a:hover {
    color: var(--bg-color);
  }

  .home-sci a::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: var(--main-color);
    z-index: -1;
    transition: 0.5s;
  }



  /* key frame */
  @keyframes homeBgText {

    0%,
    10%,
    100% {
      background-position: -33rem 0;
    }

    65%,
    85% {
      background-position: -33rem 0;
    }
  }
</style> -->

<?php include 'header.php'; ?>
<div class="heading">
  <h3>about us</h3>
  <p> <a href="home.php"></a></p>
</div>

<body>
  <?php include 'header.php'; ?>

  <!-- Home section 
  <section class="home" id="home">
    <div class="home-content">
      <h1>Hi, I'm <span>Narayan Lungeli Magar</span></h1>
      <div class="text-animate">
        <h3>Online Gift Store</h3>
        <p>
          Owner of online UC, Diamond, and BP store. Passionate gamer. Reliable and secure transactions. Enhancing
          gaming experiences worldwide.
        </p>
      </div>
    </div>
    </div>

    </div>
  </section> -->

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
  ?php include 'footer.php'; ?>

</body>

</html>