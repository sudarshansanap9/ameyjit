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
        
    
            .rules  {
              max-width: 100%;
              margin: 0 auto;
              background: linear-gradient(145deg, #ffffff, #e6e6e6);
              padding: 20px;
              box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
              border-radius: 10px;
            }
        
            .rules h1 {
              color: #b71c1c;
              font-size: 36px;
              text-align: center;
              margin-bottom: 30px;
              position: relative;
            }
        
            .rules h1::after {
              content: '';
              width: 80px;
              height: 4px;
              background: #b71c1c;
              display: block;
              margin: 10px auto 0;
              border-radius: 2px;
            }
        
            .rules ul {
              list-style-type: none;
              padding: 10px;
            }
        
            .rules ul li {
              background: url('https://via.placeholder.com/10') no-repeat left center;
              background-size: 10px 10px;
              padding-left: 25px;
              margin: 12px 0;
              font-size: 18px;
              transition: all 0.3s ease;
            }
        
            .rules ul li:hover {
              background-color: #f9f9f9;
              border-radius: 5px;
              padding-left: 30px;
            }
        
            .rules .highlight {
              font-weight: bold;
              color: black;
            }
        
            .rules .link {
              color: #b71c1c;
              text-decoration: none;
              font-weight: bold;
              transition: color 0.3s ease;
            }
        
            .rules .link:hover {
              text-decoration: underline;
              color: #900;
            }
          </style>
      </head>
<body>
<?php include('../header.php') ?>

      <div class="wrapper">
      <?php include('librarysidebar.php') ?>
        <div class="main p-3 ">
            <div class="container rules">
                <h1>Rules for Circulation</h1>
                <ul>
                  <li>Book will be circulated from <span class="highlight">9.00am to 4.00pm</span> on all working days.</li>
                  <li>Every student must produce his/her <span class="highlight">Membership card</span> while borrowing books.</li>
                  <li>An issued book must be returned within <span class="highlight">15 days</span>, otherwise an overdue fine of Rs.01/- per day will be charged.</li>
                  <li>Due date of an issued book, if not in demand, may be renewed at the discretion of the Librarian.</li>
                  <li>While borrowing, every student must check the book for missing pages if any or any other damages to the book & bring it to the notice of the Librarian.</li>
                  <li>All books taken by the reader in the Library should be returned to the Counter before leaving the Library.</li>
                  <li><span class="highlight">Do not mark or fold any pages of the books.</span></li>
                  <li>Library books damaged by the user shall pay its cost. The Librarian is empowered to recall any books at any time.</li>
                  <li>Periodicals, Reference books and rare-books will not be loaned except in the special case with the prior permission of the Librarian / HIGHER AUTHORITIES.</li>
                  <li>Handle the books carefully while browsing /consulting them.</li>
                  <li>No part of Library reading material shall be photo-copied, without permission of the Librarian.</li>
                  <li>All Library books shall be returned at the end of the examination.</li>
                  <li>Issue of books may at any time be suspended by order of the Librarian for instance, at the time of Stock taking.</li>
                  <li><a href="#" class="link">To access question papers of all department click here.</a></li>
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