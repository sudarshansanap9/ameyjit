<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Placements & Training</title>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    

    </head>

<body>
    <?php include ('header.php') ?>


    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="fa-solid fa-computer"></i>
                </button>
                <div class="sidebar-logo">
                    
                    <a href="#">T&P</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <!-- 1 -->
                <li class="sidebar-item">
                    <a href="TraningAndPlacement.php" class="sidebar-link">
                        <i class="fa-solid fa-user"></i>
                        <span>Department Profile</span>
                    </a>
                </li>
                <!-- 2 -->
                <li class="sidebar-item">
                    <a href="records.html" class="sidebar-link">
                        <i class="fa-solid fa-users"></i>
                        <span>Faculty Profile</span>
                    </a>
                </li>
                <!-- 3 -->
                <li class="sidebar-item">
                    <a href="activities.html" class="sidebar-link">
                        <i class=" fa fa-pencil-square-o "></i>
                        <span>Training and Placement Activities</span>
                    </a>
                </li>
                  <!-- 6 -->
                  <!-- <li class="sidebar-item">
                      <a href="photogallery.html" class="sidebar-link">
                          <i class="fa-solid fa-film"></i>
                          <span>Photo Gallery</span>
                      </a>
                  </li> -->
                 
              </ul>
            
        </aside>
        <div class="main p-3 ">

        <!-- info thing -->
            <div class="containerr">
                <div class="image-containerr">
                    <!-- Image can be added here if needed -->
                </div>
                <div class="text-container">
                    <h2>Welcome To Training and Placement Cell</h2>
                    <p><b>Students Placements & Higher Education Records</b></p>
                    <a href="images/Records.xlsx" target="_blank" class="responsive-button">Download Records</a>
                </div>
            </div>
        

        </div>
    </div>
    

    
    

    
  
    <?php include('footer.php')?>
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
