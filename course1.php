<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Learn2Lead</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles2.css">

</head>

<body>

    <header class="header">

        <section class="flex">

            <a href="index.html"><img src="./images/Logoblack.png" alt="logo" style="width: 250px; height:55px ;" /></a>

            <form action="search.html" method="post" class="search-form">
                <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                <button type="submit" class="fas fa-search"></button>
            </form>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <div id="search-btn" class="fas fa-search"></div>
                <div id="user-btn" class="fas fa-user"></div>
                <!-- <div id="toggle-btn" class="fas fa-sun"></div> -->
            </div>
        </section>

    </header>

    <div class="side-bar">

        <div id="close-btn">
            <i class="fas fa-times"></i>
        </div>

        <div class="profile">
            <img src="./uimages.png" class="image" alt="">
            <h1 style="color:white;"><?php echo $_COOKIE['username']?></h1>
            <p class="role">Student</p>
            <a href="./dindex.php" class="btn">view profile</a>

            <nav class="navbar">
                    <a href="./dindex.php"><i class="fas fa-home"></i><span>Home</span></a>
                   <a href="./about.html"><i class="fas fa-handshake"></i><span>About</span></a>
                   <a href="./course1.php"><i class="fa-solid fa-shapes"></i><span>Courses</span></a>
                   <a href="./internship.html"><i class='bx bx-briefcase-alt'></i><span>Internships</span></a>
                   <a href="./contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a> 
                   <a href="./library.php"><i class='bx bx-book'></i><span>E-Library</span></a> 

                   <button href="./index.php" class="logout-btn">Logout</button>

                   <script>
                            document.addEventListener("DOMContentLoaded", function() {
                            const logoutButton = document.querySelector(".logout-btn");
                            logoutButton.addEventListener("click", function() {
                            window.location.href = "index.php"; // Redirect to index.php
                            });
                        });
                    </script>
             </nav>
            
            
        </div>
    </div>

    <section class="home-grid">

        <h1 class="heading">quick options</h1>

        <div class="box-container">
            <div class="box">
                <h3 class="title">top categories</h3>
                <div class="flex">
                    <a href="#"><i class="fas fa-code"></i><span>ERP</span></a>
                    <a href="#"><i class="fas fa-chart-simple"></i><span>SAP</span></a>
                    <a href="#"><i class="fas fa-cloud"></i><span>Cloud</span></a>
                    <a href="#"><i class="fas fa-chart-line"></i><span>Project</span></a>
                    <a href="#"><i class="fas fa-dollar"></i><span>Resourse Planning</span></a>
                    <a href="#"><i class="fas fa-crown"></i><span>Master Data </span></a>
                    <a href="#"><i class="fas fa-chart-simple"></i><span>BI</span></a>
                    <a href="#"><i class="fas fa-circle"></i><span>Data Migration</span></a>
                </div>
            </div>

            <div class="box">
                <h3 class="title">popular topics</h3>
                <div class="flex">
                    <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
                    <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
                    <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
                    <a href="#"><i class="fab fa-react"></i><span>react</span></a>
                    <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
                    <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
                </div>
            </div>

        </div>

    </section>



    <section class="courses">

        <h1 class="heading">Playlists</h1>

        <div class="box-container">

            <div class="box">
                <div class="tutor">
                    <img src="images/pic-2.jpg" alt=""><a>
                    <div class="info">
                        <h3>Gauri</h3>
                        
                    </div>
                </div>
                <div class="thumb">
                    <a href="./playlisthtml.php"><img src="images/thumb-1.png" alt=""></a>
                    <span>7 videos</span>
                </div>
                <h3 class="title">Complete HTML tutorial</h3>
                
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                
                <span style="font-size: 10px;">(30234)</span>
                <a href="#" style=" color: white; margin-left: 80px; font-size: 20px;"> </a>
                
                
                <a href="https://buy.stripe.com/test_9AQ01H118bN4gXSbIK"  class="inline-btn">₹299</a>
            </div>

            <div class="box">
                <div class="tutor">
                   <img src="images/pic-3.jpg" alt="">
                    <div class="info">
                        <h3>Sarit</h3>
                        
                    </div>
                </div>
                <div class="thumb">
                    <a href="./playlistcss.php"><img src="images/thumb-2.png" alt=""></a>
                    <span>10 videos</span>
                </div>
                <h3 class="title">Complete CSS tutorial</h3>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>

                
                
                <span style="font-size: 10px;">(30234)</span>
                <a href="#" style=" color: white; margin-left: 80px; font-size: 20px;"> </a>
                <a href="https://buy.stripe.com/test_fZecOt7pw18qePK7sv"  class="inline-btn">₹299</a>
            </div>

            <div class="box">
                <div class="tutor">
                   <img src="images/pic-4.jpg" alt="">
                    <div class="info">
                        <h3>Sevith</h3>
                        
                    </div>
                </div>
                <div class="thumb">
                     <a href="./playlistjs.php"> <img src="images/thumb-3.png" alt=""></a>
                    <span>10 videos</span>
                </div>
                <h3 class="title">Complete JS tutorial</h3>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                
                <span style="font-size: 10px;">(30234)</span>
                <a href="#" style=" color: white; margin-left: 80px; font-size: 20px;"> </a>
                <a href="https://buy.stripe.com/test_3cs7u925c4kC3728wA"  class="inline-btn">₹299</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="images/pic-8.jpg" alt="">
                    <div class="info">
                        <h3>Gauri</h3>
                        
                    </div>
                </div>
                <div class="thumb">
                    <img src="images/thumb-7.png" alt="">
                    <span>10 videos</span>
                </div>
                <h3 class="title">Complete PHP tutorial</h3>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                
                <span style="font-size: 10px;">(30234)</span>
                <a href="#" style=" color: white; margin-left: 80px; font-size: 20px;"> </a>
                <a href="https://buy.stripe.com/test_7sI5m1cJQg3kcHCfYY"  class="inline-btn">₹299</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="images/pic-9.jpg" alt="">
                    <div class="info">
                        <h3>Sarit</h3>
                        
                    </div>
                </div>
                <div class="thumb">
                    <img src="images/thumb-8.png" alt="">
                    <span>10 videos</span>
                </div>
                <h3 class="title">Complete MySQL tutorial</h3>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                
                <span style="font-size: 10px;">(30234)</span>
                <a href="#" style=" color: white; margin-left: 80px; font-size: 20px;"> </a>
                <a href="https://buy.stripe.com/test_7sI5m1cJQg3kcHCfYY"  class="inline-btn">₹299</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="images/pic-1.jpg" alt="">
                    <div class="info">
                        <h3>Sevith</h3>
                        
                    </div>
                </div>
                <div class="thumb">
                    <img src="images/thumb-9.png" alt="">
                    <span>10 videos</span>
                </div>
                <h3 class="title">Complete react tutorial</h3>

                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                
                <span style="font-size: 10px;">(30234)</span>
                <a href="#" style=" color: white; margin-left: 80px; font-size: 20px;"> </a>
                <a href="https://buy.stripe.com/test_7sI5m1cJQg3kcHCfYY"  class="inline-btn">₹299</a>
            </div>
            <div class="box">
                <div class="tutor">
                    <img src="images/pic-3.jpg" alt="">
                    <div class="info">
                        <h3>Sarit</h3>
                        
                    </div>
                </div>
                <div class="thumb">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVr4i5qHOrUIlAbcj5G2vG9uMKLnrok1ukpA7KPwoV_Q&s" alt="">
                    <span>10 videos</span>
                </div>
                <h3 class="title">Complete Next.JS tutorial</h3>

                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                
                <span style="font-size: 10px;">(30234)</span>
                <a href="#" style=" color: white; margin-left: 80px; font-size: 20px;"> </a>
                <a href="https://buy.stripe.com/test_7sI5m1cJQg3kcHCfYY"  class="inline-btn">₹299</a>
            </div>
            <div class="box">
                <div class="tutor">
                    <img src="images/pic-8.jpg" alt="">
                    <div class="info">
                        <h3>Gauri</h3>
                        
                    </div>
                </div>
                <div class="thumb">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHxvgCvk5wlaAwNwE5O_13S9R152f_ZkWskSuVZ01OiQ&s" alt="">
                    <span>10 videos</span>
                </div>
                <h3 class="title">Complete C++ tutorial</h3>

                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                <i class='bx bxs-star' style="color: gold; font-size: 10px;"></i>
                
                <span style="font-size: 10px;">(30234)</span>
                <a href="#" style=" color: white; margin-left: 80px; font-size: 20px;"> </a>
                <a href="https://buy.stripe.com/test_7sI5m1cJQg3kcHCfYY"  class="inline-btn">₹299</a>
            </div>

        </div>


    </section>

    <section class="footers">
        <h4>About Us</h4>
        <div class="icons">
          <i class='bx bxl-facebook' ></i>
          <i class='bx bxl-twitter' ></i>
          <i class='bx bxl-instagram' ></i>
          <i class='bx bxl-linkedin'></i>    
        </div>
        <p style="font-size: 15px; margin-top: 25px;">Made With <i class='bx bxs-heart' style="color: red;"></i> by Team Learn2Lead</p>
    </section>
    

    <!-- custom js file link  -->
    <script src="script2.js"></script>


</body>

</html>