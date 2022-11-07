<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Capture The Moment</title>
   <link rel="icon" href="images/icon.png">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

  <section class="header">

    <a href="#" class="logo">Capture The Moment</a>
 
    <nav class="navbar">
       <a href="index.php">home</a>
       <a href="#about">about</a>
       <a href="#package">package</a>
       <a href="book.php">book</a>
    </nav>
 
    <div id="menu-btn" class="fas fa-bars"></div>
 
 </section>


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="images/1.jpg" class="d-block w-100" alt="...">
     </div>
     <div class="carousel-item">
       <img src="images/2.jpg" class="d-block w-100" alt="...">
     </div>
     <div class="carousel-item">
       <img src="images/3.jpg" class="d-block w-100" alt="...">
     </div>
     <div class="carousel-item">
       <img src="images/4.jpg" class="d-block w-100" alt="...">
     </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
   </button>
 </div>



<section class="services">

  <h1 class="heading-title"> our services </h1>

  <div class="box-container">

     <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>Marriages</h3>
     </div>

     <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>Functions</h3>
     </div>

     <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>Pre-Wedding Shoots</h3>
     </div>

     <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>Birthdays</h3>
     </div>

     <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>Outdoor Shoots</h3>
     </div>

     <div class="box">
        <img src="images/icon-6.png" alt="">
        <h3>Dron Shoots</h3>
     </div>

  </div>

</section>

<section class="home-about" id="about">

  <div class="image">
     <img src="images/about.jpg" alt="">
  </div>

  <div class="content">
     <h3>about us</h3>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
     <a href="about.php" class="btn">read more</a>
  </div>

</section>

<section class="home-packages" id="package">

  <h1 class="heading-title"> our packages </h1>

  <div class="box-container">

     <div class="box">
        <div class="image">
           <img src="images/marriage.jpg" alt="">
        </div>
        <div class="content">
           <h3>Marriages</h3>
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
           <a href="book.php" class="btn">book now</a>
        </div>
     </div>

     <div class="box">
        <div class="image">
           <img src="images/events.jpg" alt="">
        </div>
        <div class="content">
           <h3>Celebrations</h3>
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
           <a href="book.php" class="btn">book now</a>
        </div>
     </div>
     
     <div class="box">
        <div class="image">
           <img src="images/birthday.jpg" alt="">
        </div>
        <div class="content">
           <h3>Birthdays</h3>
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
           <a href="book.php" class="btn">book now</a>
        </div>
     </div>

  </div>

  <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>


<!-- footer section starts -->

 <section class="footer">
  <div class="box-container">
     <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
     </div>

     <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i>ph +917036358663</a>
        <a href="#"> <i class="fas fa-phone"></i>alt +916302197219</a>
        <a href="#"> <i class="fas fa-envelope"></i> ejeswanth@gmail.com </a>
        <a href="#"> <i class="fas fa-map"></i> Nuzvid, india - 521202 </a>
     </div>

     <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
     </div>

  </div>

  <div class="credit"> created by <span>Jeswanth E</span> | all rights reserved! </div>

</section>
 
<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- custom js file link  -->
<script src="script.js"></script>
</body>
</html>
