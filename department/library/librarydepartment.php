<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>JIT Nashik</title>
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  />
        
    
    
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">    
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
       
        <!-- FEVICON -->
        <link rel="icon" href="../../assets/img/index/fevicon.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/style.css">
       
        
        
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
        <!-- Required meta tags -->
        
        
      
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    
        <link rel="stylesheet" href="fonts/icomoon/style.css">
    
        <link rel="stylesheet" href="css/owl.carousel.min.css">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Style -->
        <link rel="stylesheet" href="css/style.css">



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <style>
            /* Reset some default styles */




.container {
max-width: 1200px;
margin: 0 auto;
padding: 20px;
}

.header {
text-align: center;
padding: 20px 0;
background-color: #fff;
margin-bottom: 20px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.header h1 {
font-size: 2.5rem;
color: #d9534f;
}

.gallery {
display: flex;
flex-wrap: wrap;
gap: 20px;
justify-content: center;
}

.image-box {
flex: 1 1 300px;
background-color: #fff;
padding: 10px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
border-radius: 8px;
}

.image-box img {
max-width: 100%;
height: auto;
display: block;
border-radius: 8px;
}

/* Responsive Styles */
@media (max-width: 768px) {
.header h1 {
    font-size: 2rem;
}

.image-box {
    flex: 1 1 100%;
}
}
</style>
      </head>
<body>
      <?php include("../header.php") ?>
      <div class="wrapper">
      <?php include ('librarysidebar.php') ?>
        <div class="main p-3 ">
            <div class="container">
                <header class="header">
                    <h1>Welcome To Central Library</h1>
                </header>
                <section class="gallery">
                    <div class="image-box">
                        <img src="assets/img/index/atv_car1.JPG" alt="Library Image 1">
                    </div>
                    <div class="image-box">
                        <img src="assets/img/index/atv_car1.JPG" alt="Library Image 2">
                    </div>
                    <div class="image-box">
                        <img src="assets/img/index/atv_car1.JPG" alt="Library Image 3">
                    </div>
                </section>
            </div>
            <h1 class="text-center pt-3 pb-3 p-0">Visionary Direction</h1>
            <div class="combine-model" data-aos="zoom-in-up">
                <div class="container2">
                    <div class="box3">
                        <h2>Mission</h2>
                        <h3>Resourceful Learning</h3>
                        <p>To provide a comprehensive range of information resources and services that support the educational, research, and personal development needs of our students and faculty. We strive to foster a learning environment that encourages intellectual curiosity, critical thinking, and lifelong learning.</p>
                    </div>
                    <div class="box3">
                        <h2>Vision</h2>
                        <h3>Knowledge Hub</h3>
                        <p>To be recognized as a leading academic library that empowers students and faculty with seamless access to information and resources. We aim to support innovative teaching, learning, and research, facilitating the development of knowledgeable and skilled professionals.</p>
                    </div>
                    <div class="box3">
                        <h2>Value</h2>
                        <h3>Inclusivity and Support</h3>
                        <p>We prioritize accessibility, inclusivity, and support in all our services. By offering diverse resources, collaborative spaces, and expert assistance, we create an environment that nurtures academic excellence and personal growth. Our commitment to sustainability and ethical practices ensures a positive impact on the community and beyond.</p>
                    </div>
                </div>
            </div>



            
        </div>
    </div>
    

    
    

    
  
    <?php include('../footer.php') ?>
        <script>
          AOS.init({
      duration: 2000 // Duration in milliseconds
      });
        </script>
        
      
         
          <script src="js/jquery-3.3.1.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/jquery.sticky.js"></script>
          <script src="js/main.js"></script>
          <script>
          const hamBurger = document.querySelector(".toggle-btn");
          hamBurger.addEventListener("click", function () {
              document.querySelector("#sidebar").classList.toggle("expand");
          });
      </script>
      
  <script>
      AOS.init({
        duration: 2000 // Duration in milliseconds (2000ms = 2 seconds)
      });
    </script>
  
  
  </body>
  </html>