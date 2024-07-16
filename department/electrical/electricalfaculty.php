<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawahar Education Society's Institute of Technology, Management & Research, Nashik</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="./css/style.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
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
.header-content {
  display: flex;
  align-items: center;
  padding: 20px;
}
.header-logo {
  max-width: 150px;
  height: auto;
  flex-shrink: 0;
}
.header-text {
  text-align: center;
  flex-grow: 1;
  margin: 0 20px;
}
body {
  overflow-x: hidden;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
/* footer css */
.footer-top {
  padding: 40px 0;
  background-color: #333;
  color: #fff;
}
.footer-title h4 {
  margin-bottom: 20px;
}

.about-footer ul, .page-more-info ul {
  list-style: none;
  padding: 0;
}
.about-footer ul li, .page-more-info ul li {
  margin-bottom: 10px;
}
.footer-social {
  list-style: none;
  padding: 0;
  display: flex;
  gap: 10px;
}
.footer-logo {
  margin-top: 20px;
  max-width: 150px;
}
.footer-bottom {
  padding: 20px 0;
  background-color: #222;
  color: #aaa;
}
.footer-bottom p, .footer-bottom a {
  margin: 0;
  color: #aaa;
}
.footer-bottom a:hover {
  color: #fff;
}
footer {
  background-color: #343a40;
  color: white;
  padding: 40px 0;
}
footer h5 {
  font-size: 18px;
  margin-bottom: 20px;
}
footer p, footer ul, footer a {
  color: #ccc;
  font-size: 14px;
}
footer a:hover {
  color: white;
}
footer .list-inline {
  margin: 0;
  padding: 0;
  padding-left: 50px;
}
footer .list-inline-item {
  margin-right: 10px;
}
footer .list-inline-item a {
  color: #ccc;
  font-size: 20px;
}
footer .list-inline-item a:hover {
  color: white;
}
footer .text-center {
  border-top: 1px solid #555;
  padding-top: 20px;
}
.custom-header-content {
  padding: 20px;
}
.custom-header-logo {
  max-width: 100px;
  height: auto;
  flex-shrink: 0;
}
.custom-header-text {
  text-align: center;
  flex-grow: 1;
}
@media (max-width: 768px) {
  .custom-header-text h4, .custom-header-text h3, .custom-header-text p {
      font-size: 14px;
  }
  .custom-header-logo {
      max-width: 70px;
  }
  .custom-header-content {
      text-align: center;
  }
}
/* sidebar css */

.wrapper {
  display: flex;
}

.main {
  min-height: 100vh;
  width: 100%;
  overflow: hidden;
  transition: all 0.35s ease-in-out;
  background-color: #fafbfe;
}

#sidebar {
  width: 70px;
  min-width: 70px;
  z-index: 1000;
  transition: all .25s ease-in-out;
  background-color: gray;
  display: flex;
  flex-direction: column;
}

#sidebar.expand {
  width: 260px;
  min-width: 260px;
}

.toggle-btn {
  background-color: transparent;
  cursor: pointer;
  border: 0;
  padding: 1rem 1.5rem;
}

.toggle-btn i {
  font-size: 1.5rem;
  color: #FFF;
}

.sidebar-logo {
  margin: auto 0;
}

.sidebar-logo a {
  text-decoration: none;
  color: #900;
  font-size: 1.15rem;
  font-weight: 600;
}


#sidebar:not(.expand) .sidebar-logo,
#sidebar:not(.expand) a.sidebar-link span {
  display: none;
}

.sidebar-nav {
  padding: 2rem 0;
  flex: 1 1 auto;
}

a.sidebar-link {
  padding: .625rem 1.625rem;
  color: rgba(0,0,0,0.8);
  text-decoration: none;
  display: block;
  font-size: 0.9rem;
  white-space: nowrap;
  border-left: 3px solid transparent;
}

a.sidebar-link:hover {
  color: white;
}

.sidebar-link i {
  font-size: 1.1rem;
  margin-right: .75rem;
}

a.sidebar-link:hover {
  background-color: rgba(255, 255, 255, .075);
  border-left: 3px solid #3b7ddd;
}

.sidebar-item {
  position: relative;
}

#sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
  position: absolute;
  top: 0;
  left: 70px;
  background-color: #0e2238;
  padding: 0;
  min-width: 15rem;
  display: none;
}

#sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
  display: block;
  max-height: 15em;
  width: 100%;
  opacity: 1;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
  border: solid;
  border-width: 0 .075rem .075rem 0;
  content: "";
  display: inline-block;
  padding: 2px;
  position: absolute;
  right: 1.5rem;
  top: 1.4rem;
  transform: rotate(-135deg);
  transition: all .2s ease-out;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
  transform: rotate(45deg);
  transition: all .2s ease-out;
}
/* navbar css */
.navbar {
          
          background-color: #900 !important; /* Set navbar background color */
        }
        .navbar-nav .nav-link {
          color: #fff !important; /* Set navbar link text to white */
        }
        .navbar-nav .dropdown-menu {
          background-color: #900; /* Matching background for dropdown */
        }
        .navbar-nav .dropdown-item {
          background-color: #900;
          color: #fff !important; /* White text for dropdown items */
        }
        .navbar-nav .dropdown-item:hover {
          background-color: #fff;
          color: #900 !important; /* White text for dropdown items */
        }
        .navbar-toggler {
          border-color: #fff; /* White border for toggle button */
        }
        .navbar-toggler-icon {
          background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
        
        html {
          overflow-x: hidden;
        }
/* for all code */
a {
  text-decoration: none;
}

li {
  list-style: none;
}  

    </style>
</head>
<body>
<?php include('../header.php') ?>
    <div class="wrapper">
    <?php include('electricalsidebar.php') ?>
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
                                  <h5 class="id-card-title"> Head of Department</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Dr. H. A. Shahane</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Head of Department</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> PhD.
                                    M.Tech.</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong>3.5 Yrs
                                    4.5 Yrs</p>
                                  <p class="id-card-text"><strong>Publication:</strong>  International: 03</p>
                                  <p class="id-card-text"><strong>Bookchapter:</strong> 02</p>
                                  <p class="id-card-text"><strong>Attended Conference:</strong> 02</p>
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
                                  <p class="id-card-text"><strong>Name:</strong> Prof. S. B. Kajabe</p>                             
                                  <p class="id-card-text"><strong>Designation:</strong> Assistant Professor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> M.E. (Structure)</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 8.5 Year</p>
                                  <p class="id-card-text"><strong>Paper Published:</strong>  03</p>
                                  <p class="id-card-text"><strong>Attended National Conference</strong> 01</p>
                                  <p class="id-card-text"><strong>workshop Attended :</strong>  07</p>

                                  
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
                                  <p class="id-card-text"><strong>Name:</strong> Prof. S. D. Nagare</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Assistant Professor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> M.E. (Structure)</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 06 Yrs</p>
                                  <p class="id-card-text"><strong>National and International Journal Papers </strong> 01</p>
                                  <p class="id-card-text"><strong>workshop Attended :</strong>  02</p>
                                 
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
                                  <p class="id-card-text"><strong>Name:</strong> Prof. S. L. Desale</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Assistant Professor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> M.E. (Structure)</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 02 Year Industrial, 01 Year Teaching</p>
                                  <p class="id-card-text"><strong>Paper Published in National & International Conference:</strong> 04</p>
                                 
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
                                  <h5 class="id-card-title">Assistant Professor</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Prof. S. D. Avhad</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Assistant Professor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> M.E. (Environmantal Engg.)</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 08 Year Teaching</p>
                                  <p class="id-card-text"><strong>Paper Published:</strong>  National :03, International: 01</p>
                                  <p class="id-card-text"><strong>Attended Conference:</strong>  01</p>
                                 
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
                                  <h5 class="id-card-title">Assistant Professor</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Prof. A. J. Pawar</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Assistant Professor</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> PhD.(Pursuing), M.Tech.(Structure)</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 01 Year Teaching</p>
                                  <p class="id-card-text"><strong>Paper Published:</strong> International: 02</p>
                                  <p class="id-card-text"><strong>Attended Conference:</strong>  01</p>
                                  
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
                                  <h5 class="id-card-title"> Technical Assistant</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Mr. J. R. Chaudhari</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Technical Assistant</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> B.E.</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 03 Year</p>
                                 
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
                                  <h5 class="id-card-title">Lab Assistant</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Mrs. Savita Bedse</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Lab Assistant</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> Diploma in Civil</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 06 Year</p>
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
                                  <h5 class="id-card-title">Technical Assistant</h5>
                                  <p class="id-card-text"><strong>Name:</strong> Mr. S. A. Patil</p>
                                  <p class="id-card-text"><strong>Designation:</strong> Technical Assistant</p>
                                  <p class="id-card-text"><strong>Qualification:</strong> B.E.</p>
                                  <p class="id-card-text"><strong>Total Experience:</strong> 2 Year Industrial-02 Year</p>
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
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>