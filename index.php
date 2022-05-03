<?php

$conn = mysqli_connect('sql304.epizy.com','epiz_31636746','4DOK9CswUTDiO','epiz_31636746_contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio Website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">skills</a>
      <a href="#portfolio">projects</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.linkedin.com/in/vishi-chaurasia-549817190/" class="fab fa-linkedin"></a>
      <a href="https://github.com/VishiChaurasia" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am vishi chaurasia</h3>
      <span data-aos="fade-up">web designer & developer</span>
      <p data-aos="fade-up">A Computer Science Student Passionate About Programming And Design.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>about</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">My Name Is Vishi Chaurasia. I'm A B.Tech Student At SRMU Computer Science Department. I Was Born And Raised In Lucknow. I Like To Travel. I Believe Travelling Gives You A New Perspective To Everything. You Get To Know A Lot About The Different Cultures, Their History, The Language And All The Small Unique Things Every Place Has To Offer.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Vishi Chaurasia </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> chaurasiavishi@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Lucknow, India </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +918299084365 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
      </div>

      <a href="https://drive.google.com/file/d/1EErLILwIY8mP8UDgTkFcfFae7zgiZAYU/view?usp=sharing" class="btn" data-aos="fade-up">download resume</a>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>MySQL</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Java</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>C</span> <span>85%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education </span> </h1>

      <div class="row">

         <div class="box-container">

            <div class="box" data-aos="fade-right">
               <span>( 2018 - 2022 )</span>
               <h3>B.Tech - Computer Science & Engineering</h3>
               <p>Shri Ramswaroop Memorial University</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2016 - 2018 )</span>
               <h3>Intermediate</h3>
               <p>Maharshi Vidya Mandir, Lucknow</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2014 - 2016 )</span>
               <h3>High School</h3>
               <p>Maharshi Vidya Mandir, Lucknow</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>projects</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <a href="https://github.com/VishiChaurasia/shopping-project"><img src="images/img-1.png" alt=""></a>
         <h3>E-Commerce Site for Online Shopping</h3>
         <span>( 2021 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="https://github.com/VishiChaurasia/php-fetch-crud"><img src="images/img-2.png" alt=""></a>
         <h3>PHP Fetch CRUD</h3>
         <span>( 2019 - 2020 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="https://github.com/VishiChaurasia/FoodWebsite"><img src="images/img-3.png" alt=""></a>
         <h3>Online Meal</h3>
         <span>( 2021 - 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="Enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p><a href="tel:+918299084365"><span style="text-transform: lowercase; color:blue;">+918299084365</span></a></p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p><a href="mailto:chaurasiavishi@gmail.com?subject=Hello!%20Vishi"><span style="text-transform: lowercase; color:blue;">chaurasiavishi@gmail.com</span></a></p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p><a href="https://www.google.com/maps/place/Lucknow,+Uttar+Pradesh/@26.848623,80.8024235,11z/data=!3m1!4b1!4m5!3m4!1s0x399bfd991f32b16b:0x93ccba8909978be7!8m2!3d26.8466937!4d80.946166"><span style=" color:blue;">Lucknow, India - 226020</span></a></p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Vishi</span> </div>





<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>