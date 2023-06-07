<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoint Doctor</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/appointdoctor.css">
    
</head>
<body>
  <?php 
  include '../bootstrap.php';
  include 'nabbar.php';
  require '../connection.php';
?>

  <section class="swiper mySwiper">

    <div class="swiper-wrapper">
<?php
    $sqlsi="SELECT lt.`LoginId`,  lt.`Username`,  dd.`ProfilePicture`,dd.`Specialization`,dd.`Mobile`  FROM `logintable` lt JOIN `doctordetails` dd ON lt.`LoginId` = dd.`LoginId` WHERE lt.`userdelete` = 0 AND lt.`isverified` = 1 AND
    lt.`verifieddoctor` = 1";
    $result=mysqli_query($conn,$sqlsi);
    foreach($result as $row){ 
?>
      <div class="card swiper-slide">
        <div class="card__image">
          <img src="<?= "../profilepicture/".$row['ProfilePicture'];?>" alt="card image">
        </div>

        <div class="card__content">
          <span class="card__title">Name:<?= $row['Username']?></span>
          <span class="card__name">Specialist:<?= $row['Specialization']?></span>
          <input type= "text" value="<?= $row['LoginId']?>">
          <p class="card__text"><?= $row['Mobile']?></p>
          <button class="card__btn">Appoint</button>
        </div>
      </div>
      <?php } ?>
    </div>
  </section>

<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

</body>
</html>