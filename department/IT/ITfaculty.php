<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawahar Education Society's Institute of Technology, Management & Research, Nashik</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">   
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        a{
            text-decoration: none;
        }
      .box4{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #EFEFEF;
}
.slide-container{
  max-width: 1120px;
  width: 100%;
  padding: 40px 0;
}
.slide-content{
  margin: 0 40px;
  overflow: hidden;
  border-radius: 25px;
}

.image-content,
.card-content{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px 14px;
}
.image-content{
  position: relative;
  row-gap: 5px;
  padding: 25px 0;
}
.overlay{
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgb(153, 60, 60);
  border-radius: 25px 25px 0 25px;
}
.overlay::before,
.overlay::after{
  content: '';
  position: absolute;
  right: 0;
  bottom: -40px;
  height: 40px;
  width: 40px;
  background-color: rgb(153, 60, 60);
}
.overlay::after{
  border-radius: 0 25px 0 0;
  background-color: #FFF;
}
.card-image{
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  background: #FFF;
  padding: 3px;
}
.card-image .card-img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid rgb(153, 60, 60);
}
.name{
  font-size: 18px;
  font-weight: 500;
  color: #333;
}
.description{
  font-size: 14px;
  color: #707070;
  text-align: center;
}
.card-content .button{
  border: none;
  font-size: 16px;
  color: #FFF;
  padding: 8px 16px;
  background-color: rgb(153, 60, 60);
  border-radius: 6px;
  margin: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button:hover{
  background: rgb(137, 0, 0);
}

.swiper-navBtn{
  color: rgb(153, 60, 60);
  transition: color 0.3s ease;
}
.swiper-navBtn:hover{
  color: rgb(137, 0, 0);
}
.swiper-navBtn::before,
.swiper-navBtn::after{
  font-size: 35px;
}
.swiper-button-next{
  right: 0;
}
.swiper-button-prev{
  left: 0;
}
.swiper-pagination-bullet{
  background-color: rgb(153, 60, 60);
  opacity: 1;
}
.swiper-pagination-bullet-active{
  background-color: rgb(137, 0, 0);
}

@media screen and (max-width: 768px) {
  .slide-content{
    margin: 0 10px;
  }
  .swiper-navBtn{
    display: none;
  }
}


    </style>
</head>
<body>
<?php include('../header.php') ?>

    <div class="wrapper">
    <?php include('computersidebar.php') ?>
    <div class="main p-3 box4">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="images/profile1.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                              <div class="id-card-body">
                                  <h5 class="id-card-title">Head Of Department</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Prof. S.B. Patil</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Head of Department</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> M.Tech</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 13 Yrs</p>
                                  <p class="id-card-text"><strong>Workshop Attended:</strong> 04
                                    National Level under FDP
                                    Wokshop attended on DBMS
                                    (IIT, Mumbai)</p>
                                 
                                 
                              </div>
                          </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="images/profile2.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                              <div class="id-card-body">
                                  <h5 class="id-card-title">Assistant Professor</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Prof. D.D. Survase</p>                             
                                  <p class="id-card-text"><strong>Designation:</strong> Assistant Professor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong>M.E.</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 04 Yrs</p>
                                  <p class="id-card-text"><strong>Paper Published:</strong> International Journals : 02</p>
                                  <p class="id-card-text"><strong>Attended Naional & Internation Conference:</strong> 01</p>
                                  <p class="id-card-text"><strong>Workshop Attended: </strong>  01</p>
                                  <p class="id-card-text"><strong>Blog:</strong> diptisurvase.wordpress.com </p>
                                

                                  
                              </div>
                          </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="images/profile3.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                              <div class="id-card-body">
                                  <h5 class="id-card-title">Assistant Professor</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Prof. J.P. Patil</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Assistant Professor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> M.E.	</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 06 Yrs</p>
                                  <p class="id-card-text"><strong>FDP :</strong> 05</p>
                                 
                                 
                              </div>
                          </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="images/profile4.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                              <div class="id-card-body">
                                  <h5 class="id-card-title">Assistant Professor</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Prof. S.C. Patil</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Assistant Professor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> M.E.</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 07 Yrs</p>
                                  <p class="id-card-text"><strong>Paper Published:</strong>  03</p>
                                  <p class="id-card-text"><strong>FDP :</strong> 03</p>
                                 
                                 
                              </div>
                          </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="images/profile5.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                              <div class="id-card-body">
                                  <h5 class="id-card-title">System Admin	</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Mr. L.V. Shinde</p>
                                  <p class="id-card-text"><strong>Designation:</strong> System Admin	</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> MSc(Computer)</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 11 Yrs</p>
                                  <p class="id-card-text"><strong>Skill set:</strong> Expert in Networking
                                    Appearing for CCNA</p>
                                
                              </div>
                          </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="images/profile6.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                              <div class="id-card-body">
                                  <h5 class="id-card-title">Lab Assistant</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Mr. R. R. Ghule</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Lab Assistant</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> Diploma E&TC</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 09 Yrs</p>
                                  <p class="id-card-text"><strong>Skill Set:</strong>  Expert in Industrial elctronics, Digital Electronics</p>
                                  
                              </div>
                          </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="images/profile7.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                              <div class="id-card-body">
                                  <h5 class="id-card-title"> Lab Assistant</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Mr. M. N. Patil</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Lab Assistant</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> Diploma in Electrical Engg.</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> Teaching :6 Yrs Ind:2 Yr</p>
                                  <p class="id-card-text"><strong>Skill Set:</strong> Electrical Machine </p>
                                 
                              </div>
                          </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="images/profile8.jpg" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                              <div class="id-card-body">
                                  <h5 class="id-card-title">Instructor</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Mr. A. B. Mane</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Instructor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> 	ITI (Welder)</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 6.5 Yrs</p>
                                  <p class="id-card-text"><strong>Skill Set:</strong>  Specialization in Workshop Practices, Welding</p>
                              </div>
                          </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="images/profile9.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                              <div class="id-card-body">
                                  <h5 class="id-card-title">Instructor</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Mr. Avinash Wagh</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Instructor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> ITI (Carpenter)</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 08 Yrs</p>
                                  <p class="id-card-text"><strong>Skill Set:</strong>  Carpenter</p>
                              </div>
                          </div>
                        </div>
                        <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
  
                              <div class="card-image">
                                  <img src="images/profile9.jpg" alt="" class="card-img">
                              </div>
                          </div>
  
                          <div class="card-content">
                            <div class="id-card-body">
                                <h5 class="id-card-title">Peon</h5>
                                <p class="id-card-text"><strong>Name:</strong> Mr. Vishal Deore</p>
                                <p class="id-card-text"><strong>Designation:</strong> Peon</p>
                                <p class="id-card-text"><strong>Qualification:</strong> 12th</p>
                                <p class="id-card-text"><strong>Total Experience:</strong> 07 Yrs</p>
                             
                            </div>
                        </div>
                      </div>
                    
                    </div>
                </div>
    
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    
    

    
  
    <?php include('../footer.php') ?>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

        function plusSlides(n) {
            slideIndex += n;
            if (slideIndex > slides.length) {slideIndex = 1}
            if (slideIndex < 1) {slideIndex = slides.length}
            showSlides();
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
    

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
</body>
</html>
