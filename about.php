<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/Profil_about.jpeg" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>

         <p>Halo,nama saya Adjie Arrayan Surya Putra dan ini merupakan website untuk memenuhi tugas Ulangan Akhir Semester mata kuliah Pemrograman Berbasis Web</p>

         <p>Mohon nikmati waktu anda dalam berbelanja.Jika ada masalah bisa hubungi contact dibawah ini</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

</body>
</html>