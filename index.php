<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Web site Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header start of the section -->

    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Dental <span>Care.</span></a>
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
                </nav>
                <a href="#contact" class="link-btn">Make Appoinment</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>

    <!-- header end -->


    <!-- home section start -->
    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>

        </div>

    </section>
    <!-- home section end -->

    <!-- about section start -->
    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>

            </div>

        </div>

    </section>
    <!-- about section end -->


    <!-- services section start -->

    <section class="services" id="services">
        <h1 class="heading">your services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/icon-1.svg" alt="">
                <h3>Alinment Specialist</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, dolorem?</p>
            </div>
            <div class="box">
                <img src="./images/icon-2.svg" alt="">
                <h3>Cosmetic dentistry</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, dolorem?</p>
            </div>
            <div class="box">
                <img src="./images/icon-3.svg" alt="">
                <h3>Oral Hygiene Experts</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, dolorem?</p>
            </div>
            <div class="box">
                <img src="./images/icon-4.svg" alt="">
                <h3>Root CanalSpecialist</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, dolorem?</p>
            </div>
            <div class="box">
                <img src="./images/icon-5.svg" alt="">
                <h3>Live dental advisor</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, dolorem?</p>
            </div>
            <div class="box">
                <img src="./images/icon-6.svg" alt="">
                <h3>cavity inspection</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, dolorem?</p>
            </div>
        </div>
    </section>

    <!-- services section end -->

    <!-- process section start -->
    <section class="process">
        <h1 class="heading">Work Process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/process-1.png" alt="">
                <h3>Cosmetic Dentist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quam.</p>
            </div>
            <div class="box">
                <img src="./images/process-2.png" alt="">
                <h3>Pediatric Dentist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quam.</p>
            </div>
            <div class="box">
                <img src="./images/process-3.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quam.</p>
            </div>
        </div>
    </section>
    <!-- process section end -->

    <!-- reviews section start -->
    <section class="reviews" id="reviews">
        <h1 class="heading">Satisfied Clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ducimus veniam autem labore non animi.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>jone deo</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="./images/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ducimus veniam autem labore non animi.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>jone deo</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="./images/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ducimus veniam autem labore non animi.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>jone deo</h3>
                <span>satisfied client</span>
            </div>
        </div>
    </section>
    <!-- reviews section end -->

    <!-- contact section start -->
    <section class="contact" id="contact">
        <h3 class="heading">make appoinment</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>

            <span>your name :</span>
            <input name="name" placeholder="enter your name" class="box" type="text">
            <span>your email :</span>
            <input name="email" placeholder="enter your email" class="box" type="email">
            <span>your number :</span>
            <input name="number" placeholder="enter your number" class="box" type="tumber">
            <span>appoinment date :</span>
            <input name="date" class="box" type="datetime-local">
            <input type="submit" value="make appoinment" name="submit" class="link-btn">
        </form>
    </section>
    <!-- contact section end -->

    <!-- custom js file -->
    <script src="./js/script.js"></script>
</body>

</html>