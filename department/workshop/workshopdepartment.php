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
        
            
            .container9 {
                max-width: 900px;
                margin: 50px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                color: #900;
                text-align: center;
                margin-bottom: 20px;
            }
            .container9 img {
                display: block;
                max-width: 100%;
                margin: 20px auto;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            th, td {
                border: 1px solid #ddd;
                padding: 15px;
                text-align: left;
                transition: background-color 0.3s ease, color 0.3s ease;
            }
            th {
                background-color: #900;
                color: #fff;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            tr:hover td {
                background-color: #900;
                color: #fff;
            }
            .header-text {
                color: #900;
                font-size: 1.5em;
                text-align: center;
                margin: 20px 0;
            }
        </style>
      </head>
<body>
<?php include('../header.php') ?>

      <div class="wrapper">
      <?php include('workshopsidebar.php') ?>
        <div class="main p-3 ">
            <div class="container9">
                <div class="header-text">Welcome To Department Of Workshop</div>
                <img src="./assets/img/index/DSC_4328.JPG" alt="Workshop Image">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Section</th>
                            <th>Area (sq. m)</th>
                            <th>Major Equipments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Carpentry</td>
                            <td>216 sq.m</td>
                            <td>Wood Turning Machine, Carpentry Vice, etc.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Fitting</td>
                            <td>216 sq.m</td>
                            <td>Files, Vernier Height Gauge, Radial Drill Machine, etc.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fitting</td>
                            <td>216 sq.m</td>
                            <td>Welding Machine, etc.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Plumbing</td>
                            <td>216 sq.m</td>
                            <td>Pipe Bending Machine, Pipe Vice, etc.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Smithy</td>
                            <td>216 sq.m</td>
                            <td>Electric Furnace, Anvil, etc.</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Turner</td>
                            <td>216 sq.m</td>
                            <td>All Geared Lathe Machine, Lathe Machine, Shaper Machine, Hydraulic Hack-Saw Machine, etc.</td>
                        </tr>
                    </tbody>
                </table>
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