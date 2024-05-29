<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <title>Learn2Lead</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="book.css">

   

</head>
<body>

<header class="header">
   
   <section class="flex">

    <a href="index.html"><img src="../images/Logoblack.png" alt="logo" style="width: 250px; height:55px ;"/></a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search books..." maxlength="100">
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
   <img src="../uimages.png" class="image" alt="">
      <h1 style="color:white;"><?php echo $_COOKIE['username']?></h1>

      <p class="role">student</p>
      <a href="../dindex.php" class="btn">view profile</a>
   </div>

   <nav class="navbar" style="background-color: #15283c;">
         <a href="../dindex.php"><i class="fas fa-home"></i><span>Home</span></a>
         <a href="../about.html"><i class="fas fa-handshake"></i><span>About</span></a>
         <a href="../course1.php"><i class="fa-solid fa-shapes"></i><span>Courses</span></a>
         <a href="../internship.html"><i class='bx bx-briefcase-alt'></i><span>Internships</span></a>
         <a href="../contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
         <a href="../dindex.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
         <a href="../library.php"><i class='bx bx-book'></i><span>E-Library</span></a>
         <a href="../library.php"><i class='bx bxs-bookmarks'></i><span>Saved Books</span></a>

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

<section class="playlist-details">

   <h1 class="heading">Book Details</h1>

   <div class="row">

      <div class="column">
         <form action="" method="post" class="save-playlist">
            <button type="submit"><i class="far fa-bookmark"></i> <span>save book</span></button>
         </form>
   
         <div class="thumb">
            <img src="https://upload.wikimedia.org/wikipedia/en/a/a9/The_Fault_in_Our_Stars.jpg" alt="IKIGAI">
         </div>
      </div>
      <div class="column">
         <div class="tutor">
            <div>
               
            </div>
         </div>
   
         <div class="details">
            <h3 style="margin-top: -400px; margin-left: -200px; font-size: 70px;">The Fault In our Stars </h3>
           
            <h4 style="font-size: 40px; margin-left: -195px; ">John Green</h4>
            <p style="margin-top: 10px; margin-left: -190px;">The Fault in Our Stars by John Green is a young adult fiction novel that narrates the story of a 16-year-old girl who is diagnosed with cancer. She joins a support group where she meets Augustus, and there is a rollercoaster of emotions throughout this novel as the relationship between Hazel and Augustus develops.</p>
            <a class="download-btn" href="Ikigai _ the Japanese secret to a long and happy life .pdf">Download</a>
         </div></a>
      </div>
   </div>

</section>



<section class="footers">
   <div class="icons">
     <i class='bx bxl-facebook' ></i>
     <i class='bx bxl-twitter' ></i>
     <i class='bx bxl-instagram' ></i>
     <i class='bx bxl-linkedin'></i>    
   </div>
   <p style="font-size: 15px;">Made With <i class='bx bxs-heart' style="color: red;"></i> by Team Learn2Lead</p>
 </section>
<!-- custom js file link  -->
<script src="../script2.js"></script>

   
</body>
</html>