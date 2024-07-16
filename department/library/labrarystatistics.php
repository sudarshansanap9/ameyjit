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
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
    
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                line-height: 1.6;
            }
    
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
                color: #900;
            }
    
            .stats {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
            }
    
            .stat-item {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                position: relative;
                overflow: hidden;
                cursor: pointer;
                transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
                flex: 1 1 calc(33.333% - 20px);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                word-wrap: break-word;
            }
    
            .stat-item:hover {
                transform: scale(1.05);
                background-color: #900;
                color: #fff;
            }
    
            .stat-item::before {
                content: attr(data-info);
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 1.2rem;
                color: #333;
                opacity: 0;
                transition: opacity 0.3s ease, transform 0.3s ease;
                word-wrap: break-word;
                max-width: 100%;
            }
    
            .stat-item:hover::before {
                opacity: 1;
                transform: translateY(-10px);
                color: #fff;
            }
    
            .stat-item .label {
                font-size: 1.2rem;
                font-weight: bold;
                margin-top: 10px;
                word-wrap: break-word;
                max-width: 100%;
            }
    
            .stat-item:hover .label {
                font-size: 1.3rem;
                transition: font-size 0.3s ease;
            }
    
            /* Responsive Styles */
            @media (max-width: 768px) {
                .header h1 {
                    font-size: 2rem;
                }
    
                .stat-item {
                    flex: 1 1 100%;
                    padding: 15px;
                }
    
                .stat-item .label {
                    font-size: 1rem;
                }
    
                .stat-item:hover .label {
                    font-size: 1.1rem;
                }
            }
    
          
    
        
    
        .services h1 {
          color: #b71c1c;
          font-size: 36px;
          text-align: center;
          margin-bottom: 20px;
          border-bottom: 4px solid #b71c1c;
          display: inline-block;
          padding-bottom: 5px;
        }
    
        .services ul {
          list-style-type: none;
          padding: 0;
        }
    
        .services ul li {
          background: url('https://via.placeholder.com/10') no-repeat left center;
          background-size: 10px 10px;
          padding-left: 20px;
          margin: 10px 0;
          font-size: 18px;
        }
    
        .services ul li:hover {
          color: #b71c1c;
        }
        </style>
      </head>
<body>
<?php include('../header.php') ?>
      <div class="wrapper">
      <?php include('librarysidebar.php') ?>
        <div class="main p-3 ">
            <div class="container">
                <header class="header">
                    <h1>Library Statistic</h1>
                </header>
                <section class="stats">
                    <div class="stat-item" data-info="10636">
                        <span class="label">Total Number of Volumes</span>
                    </div>
                    <div class="stat-item" data-info="1921">
                        <span class="label">Total Number of Titles</span>
                    </div>
                    <div class="stat-item" data-info="National - 48, International - 06">
                        <span class="label">Total Number of Journals</span>
                    </div>
                    <div class="stat-item" data-info="DELNET">
                        <span class="label">Database</span>
                    </div>
                    <div class="stat-item" data-info="550 sq.m.">
                        <span class="label">Total Area of the Library</span>
                    </div>
                    <div class="stat-item" data-info="150 students">
                        <span class="label">Reading Room Capacity</span>
                    </div>
                    <div class="stat-item" data-info="8:00 am to 5:00 p.m.">
                        <span class="label">Working Hours</span>
                    </div>
                    <div class="stat-item" data-info="SOUL Software">
                        <span class="label">Modernization of Library</span>
                    </div>
                    <div class="stat-item" data-info="07">
                        <span class="label">Number of Newspapers</span>
                    </div>
                    <div class="stat-item" data-info="610">
                        <span class="label">Number of CD/DVDs</span>
                    </div>
                    <div class="stat-item" data-info="374">
                        <span class="label">Number of Projects</span>
                    </div>
                    
                    <div class="stat-item" data-info="OPAC ">
                        <span class="label">Remote Access to Library</span>
                    </div>
                    <div class="stat-item" data-info="http://192.168.4.60/WebOPAC/default.aspx">
                        <span class="label">Library WebOPAC Link</span>
                    </div>
                </section>
            </div>
      
            <div class="container services">
                <h1>Library Services and Facilities</h1>
                <ul>
                  <li>Home lending of library books</li>
                  <li>Reference service</li>
                  <li>Information display & verification</li>
                  <li>Internet browsing facility</li>
                  <li>Periodicals & Newspaper reading</li>
                  <li>New arrivals display</li>
                  <li>Referral Service</li>
                  <li>OPAC facility</li>
                  <li>Book Bank</li>
                </ul>
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