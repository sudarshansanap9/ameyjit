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
        <link rel="icon" href="assets/img/index/fevicon.png" type="image/x-icon">
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
            .card-header {
                 background-color: #6c757d;
                 color: white;
                 font-size: 1.25rem;
                 text-align: center;
             }
             .list-group-item {
                 font-size: 1.1rem;
             }
             .list-group-item a {
                 text-decoration: none;
                 color: #007bff;
             }
             .list-group-item a:hover {
                 text-decoration: underline;
             }
     
         </style>
        
      </head>
<body>
<?php include('../header.php') ?>

      <div class="wrapper">
      <?php include('computersidebar.php') ?>
        <div class="main p-3 ">
            <div class="container mt-5">
                <div class="card" data-aos="zoom-in">
                    <div class="card-header">
                        Course Outcomes for Computer Engineering
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-book"></i> SE COMPUTER 2019 Pattern: 
                            <a href="content/seco.pdf" target="_blank">Click Here</a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-book"></i> TE COMPUTER 2019 Pattern: 
                            <a href="content/teco.pdf" target="_blank">Click Here</a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-book"></i> BE COMPUTER 2019 Pattern: 
                            <a href="content/beco.pdf" target="_blank">Click Here</a>
                        </li>
                    </ul>
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