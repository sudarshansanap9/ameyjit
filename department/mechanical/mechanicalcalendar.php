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
            .accordion .card-header {
                cursor: pointer;
            }
        </style>
      </head>
<body>
<?php include('../header.php') ?>

    <div class="wrapper">
    <?php include('mechanicalsidebar.php') ?>
        <div class="main p-3 ">
            <div class="container my-5" data-aos="fade-left">
                <h3 class="text-center pb-3">Mechanical Departmental Academic Calendar</h3>
                <div id="academic-calendar-accordion" class="accordion">
                    <!-- Accordion items will be injected here by JavaScript -->
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
        document.addEventListener('DOMContentLoaded', function() {
            const calendars = [
            
            { year: "2022-23", sem: "II", link: "civilcontent/Academic_Calendar-2018-19_Civil_Engg-Dept.pdf" },
            { year: "2022-23", sem: "I", link: "civilcontent/Academic_Calendar_2017-18_both_sem.pdf" },
            { year: "2021-22", sem: "II", link: "civilcontent/Academic_Calendar_2016-17_both_sem.pdf" },
            { year: "2021-22", sem: "I", link: "civilcontent/Academic_Calendar_2016-17_both_sem.pdf" }
            ];
    
            const accordionContainer = document.getElementById('academic-calendar-accordion');
            calendars.forEach((calendar, index) => {
                const card = `
                    <div class="card">
                        <div class="card-header" id="heading${index}" data-toggle="collapse" data-target="#collapse${index}" aria-expanded="true" aria-controls="collapse${index}">
                            <h5 class="mb-0">
                                Academic Calendar ${calendar.year} Sem-${calendar.sem}
                            </h5>
                        </div>
                        <div id="collapse${index}" class="collapse ${index === 0 ? 'show' : ''}" aria-labelledby="heading${index}" data-parent="#academic-calendar-accordion">
                            <div class="card-body">
                                <p>Please click the button below to download the academic calendar.</p>
                                <a href="${calendar.link}" target=_blank class="btn btn-primary">Download</a>
                            </div>
                        </div>
                    </div>
                `;
                accordionContainer.innerHTML += card;
            });
        });
    </script>
  <script>
      AOS.init({
        duration: 2000 // Duration in milliseconds (2000ms = 2 seconds)
      });
    </script>
  
  
  </body>
  </html>