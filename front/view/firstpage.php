<?php
session_start();

// Vérifier si la session est démarrée et si le client est banni
if (!empty($_SESSION['isBanned']) && $_SESSION['isBanned'] == true) {
  // Si le client est banni, rediriger vers la page youarebanned
  header('Location: youarebanned.php');
  exit;
}

// Si le client n'est pas banni, continuer avec la page firstpage
?>
<!DOCTYPE html>
<html>
<head>
  <title>Page d'accueil</title>
</head>
<body>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ticketeasy</title>
  <link rel="shortcut icon" href="./Images/Logo/titlee.png" type="image/x-icon">

  <!-- Font   <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="./static/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="static/bootstrap.min.css">
  <link rel="stylesheet" href="static/style-min.css">
  <link rel="stylesheet" href="cards.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <!-- Include jQuery library -->
  <script src="jquery-ui-1.13.2\jquery-ui-1.13.2\external\jquery\jquery.js"></script>

  <!-- Include jQuery UI library -->
  <script src="jquery-ui-1.13.2\jquery-ui-1.13.2\jquery-ui.js"></script>

  <!-- Include raindrops.js -->
  <script src="raindrops-master/raindrops-master/raindrops.js"></script>

</head>

<!------------------------Scroll to top button------------------------------------------------>
<style>
  .profile-link {
    display: block;
    width: 70px;
    /* ajustez la taille de l'icône selon vos besoins */
    height: 70px;
    text-align: center;
    margin-right: 5px;
  }

  .profile-link img {
    width: 70%;
    height: 70%;
    object-fit: cover;
    border-radius: 50%;
    cursor: pointer;
  }

  a {
    color: #c00;
    text-decoration: none;
    background-color: transparent;
  }


  .poster {
    box-shadow: 0 0 15px red !important;

  }

  .buddy {
    cursor: pointer;
  }

  #scrollToTopButton {
    position: fixed;
    bottom: 40px;
    right: 25px;
    font-size: 25px;
    z-index: 99;
    width: 50px;
    height: 50px;
    background-color: red;
    color: black;
    border: none;
    cursor: pointer;
    outline: none;
    padding: 6px;
    border-radius: 50%;
  }

  #scrollToTopButton:hover,
  i:hover {
    background-color: white;
    color: red;
  }

  .navbar-nav {
    display: flex;
    align-items: center;
    padding: 0px 7.5px;
  }




  .maincontainer h3 {
    color: white;
    text-align: center;
  }

  .container {
    text-align: center;
  }

  #navbarNav.nav-item.nav-link a:hover {
    color: red;
  }

  .nav-link:hover {
    color: red;
  }

  .nav-item :hover {
    margin-bottom: 10px;
    /* background-color: aquamarine; */
    border-bottom: 3px;
    border-color: red;
    border-bottom-style: solid;
  }

  #header-nav .nav-link a:hover {
    color: red;
  }

  #alert-box {
    background-color: red;
    color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    position: fixed;
    top: 16%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
  }

  .dropdown-menu {
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
  }

  .dropdown-menu a {
    color: #333;
    text-decoration: none;
  }

  .dropdown-menu a:hover {
    background-color: #000000;
  }



  .dropdown-toggle:hover {
    border-color: #999;
  }

  .dropdown-menu a {
    color: #c00;
    text-decoration: none;
  }

  img {
    width: 50%;
    transition: transform 1s;
  }

  .dropdown-toggle {
    display: inline-block;
    padding: 1.5px 0px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: revert;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: 2px solid #c00;
    border-radius: 10px;
  }
</style>
<script>
  setTimeout(function () {
    $('.section').fadeToggle();
  }, 4000);
</script>

<body>




  <div class="scroll-bar">
    <!-- navbar starts -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="header-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="firstpage.php"><img class="logo" src="Images/Logo/TheaterLogo.png" alt=""
            width="30" height="24"></a>
        <button id="nav" class="navbar-toggler" id="nav" style="background-color:#8b0000" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="background-color:dark-grey;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link active s" aria-current="page" href="firstpage.php" onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='white'">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="movies.html" onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='white'">Movies</a>
            </li>
            <!--reservation-->
            <li class="nav-item">
              <a class="nav-link " onmouseover="booknow()" onmouseout="hideAlert()" onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='white'">Book Now</a>
              <script>
                function booknow() {
                  var alertBox = document.createElement("div");
                  alertBox.id = "alert-box";
                  alertBox.innerHTML = "Pick a Movie First and then click Buy Now";
                  alertBox.style.backgroundColor = "red";
                  alertBox.style.color = "white";
                  alertBox.style.padding = "20px";
                  alertBox.style.borderRadius = "10px";
                  alertBox.style.textAlign = "center";
                  alertBox.style.position = "fixed";
                  alertBox.style.top = "16%";
                  alertBox.style.left = "50%";
                  alertBox.style.transform = "translateX(-50%)";
                  alertBox.style.zIndex = "9999";
                  document.body.appendChild(alertBox);
                }

                function hideAlert() {
                  var alertBox = document.getElementById("alert-box");
                  if (alertBox) {
                    alertBox.parentNode.removeChild(alertBox);
                  }
                }
              </script>


            </li>
            <!--reservation-->
            <li class="nav-item">
              <a class="nav-link" href="kids.html" onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='white'">Kids</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tv.html" onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='white'">TV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="premium.html" onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='white'">Premium</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contactus.html" onMouseOver="this.style.color='red'"
                onMouseOut="this.style.color='white'">Contact Us</a>
            </li>
            <li>
              <!-- Genre dropdown starts-->
              <div>
                <div class="dropdown"
                  style="position: relative; disPlay: inline-block; padding-top: 5px; padding-left: 15px;">
                  <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton"
                    style="font-size:20px;">
                    Genres
                  </button>
                  <div class="dropdown-content" style="color: white;">
                    <a href="crime.html">Crime</a>
                    <a href="suspense.html">Suspense & Thriller</a>
                    <a href="action.html">Action</a>
                    <a href="fantasy.html">Sci-Fi & Fantasy</a>
                    <a href="documentary.html">Documentary</a>
                    <a href="horror.html">Horror</a>
                    <a href="drama.html">Drama</a>
                    <a href="war.html">War & Politics</a>
                    <a href="comedy.html">Comedy</a>
                    <a href="romance.html">Romance</a>

                  </div>
                </div>
              </div>

              <!-- Genre dropdown ends-->
            </li>
          
          <form id="searchForm" class="d-flex">
            <input class="form-control me-2" type="text" id="searchText" placeholder="Search" aria-label="Search">
            <button class="btn btn-danger" type="submit">Search</button>
          </form>
        </div>

        <div class="dropdown" style="display: inline-block;">
          <a class="dropdown-toggle" href="#" role="button" id="profileDropdown" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="uploads/4.jpg" width="20" alt="Icône de profil">
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li><a class="dropdown-item" href="page_profile.php">visit profile</a></li>
            <li><a class="dropdown-item" href="login.php">Logout</a></li>
          </ul>
        </div>

        </ul>
      </div>
    </nav>

    <!-- navbar ends -->


    <marquee>Welcome To <i>Ticketeasy</i>.com<sup>&reg;</sup></marquee>
    <label class="online">Book Your Movies Ticket Now!</label>



    <div class="buddy">

      <div class="slider">
        <div class="slide_track">

          <div class="slide">
            <img src="./Images/apharan.jpg" alt="" />
          </div>

          <div class="slide">
            <img src="./Images/bat.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/breaking.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/criminal.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/got.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/infinity.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/kota.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/mirzapur.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/sacred.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/scam.jpg" alt="" />
          </div>


          <div class="slide">
            <img src="./Images/apharan.jpg" alt="" />
          </div>

          <div class="slide">
            <img src="./Images/bat.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/breaking.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/criminal.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/got.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/infinity.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/kota.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/mirzapur.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/sacred.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="./Images/scam.jpg" alt="" />
          </div>





        </div>

      </div>


    </div>



    <div class="maincontainer">

      <h2>Movies</h2>
      <hr>
      <div class="container">
        <div id="movies" class="row"></div>
      </div>

      <div class="container" id="Movies">
        <h3>Hollywood</h3>
        <hr>
        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/inception.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Inception</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2010</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h42m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.8</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">Cobb steals information from his targets by entering their dreams. Saito offers to
                      wipe clean Cobb's criminal history as payment for performing an inception on his sick competitor's
                      son.</p>

                    <!--<form action="https://youtu.be/YoHD9XEInc0&t=17s"> -->

                    <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin() {
                        window.open(
                          "https://www.youtube.com/embed/YoHD9XEInc0?autoplay=1&controls=0&showinfo=0&modestbranding=1&loop=1&playlist=YoHD9XEInc0",
                          "_blank",
                          "top=1000,left=10,height=315,width=560,channelmode=no,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );

                      }
                    </script>
                    <!-- </form> -->
                    <br>
                    <br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('Inception')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin11(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>Inception</b><br>IMDb - 8.8
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/dark knight.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1 style="font-size: 30px;">The Dark Knight</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2008</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h32m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">9.0</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">After Gordon, Dent and Batman begin an assault on Gotham's organised crime, the
                      mobs hire the Joker, a psychopathic criminal mastermind who offers to kill Batman and bring the
                      city to its knees.</p>


                    <button class="trailer_i" type="submit" value="" onclick="openWin1()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin1() {
                        window.open(
                          "https://www.youtube.com/embed/LDG9bisJEaI?autoplay=1&controls=0&showinfo=0&modestbranding=1&loop=1&playlist=LDG9bisJEaI",
                          "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );
                      }
                    </script>
                    <br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('The Dark Knight')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin11(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>

            </div>
            <div class="flim">
              <b>The Dark Knight</b><br>IMDb - 9.0
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/Parasite.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Parasite</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2019</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h12m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.6</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">The struggling Kim family sees an opportunity when the son starts working for the
                      wealthy Park family. Soon, all of them find a way to work within the same household and start
                      living a parasitic life.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin2()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin2() {
                        window.open(
                          "https://www.youtube.com/embed/SEUXfv87Wpk?autoplay=1&controls=0&showinfo=0&modestbranding=1&loop=1&playlist=SEUXfv87Wpk",
                          "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('Parasite')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin11(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>

              </div>
            </div>
            <div class="flim">
              <b>Parasite</b><br>IMDb - 8.6
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/We're_the_Millers_poster.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>We're the Millers</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2013</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">1h58m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">7.0</button>
                </span>
                <br />

                </p>

                <p class="para_i">David, a drug dealer, is forced by his boss to smuggle drugs from Mexico. He hires a
                  stripper, a petty thief and a teenage neighbour and forms a fake family to help him smuggle the drugs.
                </p>

                <button class="trailer_i" type="submit" value="" onclick="openWin3()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin3() {
                    window.open("https://www.youtube.com/embed/0Vsy5KzsieQ?autoplay=1", "_blank",
                      "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                      );
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('We re the Millers')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin11(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>We're the Millers</b>
              <br>
              IMDb - 7.0
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/the terminal.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>The Terminal</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2004</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h8m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">7.4</button>
                    </span>
                    <br />

                    </p>

                    <p class="para_i">Viktor Navorski gets stranded at an airport when a war rages in his country. He is
                      forced by the officials to stay at the airport until his original identity is confirmed.</p>


                    <button class="trailer_i" type="submit" value="" onclick="openWin4()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin4() {
                        window.open("https://www.youtube.com/embed/hjydAG1lG_8?autoplay=1", "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('The Terminal')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin11(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>The Terminal</b>
              <br>
              IMDb - 7.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/Matrix.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>The Matrix</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">1999</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h16m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.7</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">Thomas Anderson, a computer programmer, is led to fight an underground war against
                      powerful computers who have constructed his entire reality with a system called the Matrix.</p>


                    <button class="trailer_i" type="submit" value="" onclick="openWin5()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin5() {
                        window.open("https://www.youtube.com/embed/8xx91zoASLY?autoplay=1", "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('The Matrix')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin11(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>The Matrix</b>
              <br>
              IMDb - 8.7
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/joker.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Joker</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2019</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h2m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.4</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">Arthur Fleck, a party clown, leads an impoverished life with his ailing mother.
                      However, when society shuns him and brands him as a freak, he decides to embrace the life of crime
                      and chaos.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin6()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin6() {
                        window.open("https://www.youtube.com/embed/zAGVQLHvwOY?autoplay=1", "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('Joker')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin11(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>Joker</b><br>IMDb - 8.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/Hamilton.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Hamilton</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2020</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h40m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.4</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">Alexander Hamilton, an orphan, arrives in New York to work for George Washington.
                      After the American Revolution, he goes on to become first Secretary of the Treasury of the US.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin7()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin7() {
                        window.open("https://www.youtube.com/embed/DSCKfXpAGHc?autoplay=1", "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('Hamilton')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin11(movieName) {
                        // Création de l'URL avec le nom du film encodé
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);

                        // Redirection vers la page de réservation avec l'URL modifiée
                        window.location.href = url;
                      }
                    </script>

              </div>
            </div>
            <div class="flim">
              <b>Hamilton</b>
              <br>
              IMDb - 8.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/goodfellas.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>GoodFellas</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">1990</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h28m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.7</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">Young Henry Hill, with his friends Jimmy and Tommy, begins the climb from being a
                      petty criminal to a gangster on the mean streets of New York.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin8()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin8() {
                        window.open("https://www.youtube.com/embed/qo5jJpHtI1Y?autoplay=1", "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('GoodFellas')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin11(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>GoodFellas</b>
              <br>
              IMDb - 8.7
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/the shawshank.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1 style="font-size: 30px;">The Shawshank Redemption</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">1994</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h22m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">9.3</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i" style="margin-top: -20px;">Andy Dufresne, a successful banker, is arrested for the
                      murders of his wife and her lover, and is sentenced to life imprisonment at the Shawshank prison.
                      He becomes the most unconventional prisoner.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin9()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin9() {
                        window.open("https://www.youtube.com/embed/6hB3S9bIaco?autoplay=1", "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );
                      }
                    </script>
                    <br>
                    <br>

                    <button class="trailer_i" type="submit" value="" onclick="openMovieWin9('The Shawshank Redemption')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>

                    <!-- right button is up all need to be like it |^ -->

                    <script type="text/javascript">
                      function openMovieWin9(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>The Shawshank Redemption</b>
              <br>
              IMDb - 9.3
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/green mile.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>The Green Mile</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">1999</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">3h9m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.6</button>
                    </span>
                    <br />

                    </p>

                    <p class="para_i">Paul, the head guard of a prison, meets an inmate, John, an African American who
                      is accused of murdering two girls. His life changes drastically when he discovers that John has a
                      special gift.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin10()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin10() {
                        window.open("https://www.youtube.com/embed/Ki4haFrqSrw?autoplay=1", "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );


                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin9('The Green Mile')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>

                    <script type="text/javascript">
                      function openMovieWin9(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>The Green Mile</b>
              <br>
              IMDb - 8.6
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/inter.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Interstellar</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2014</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h55m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.6</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph
                      Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet
                      for humans.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin11()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin11() {
                        window.open("https://www.youtube.com/embed/zSWdZVtXT7E", "_blank",
                          "height=400,width=600,scrollbars=no");
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin11('Interstellar')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin11(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>Interstellar</b>
              <br>
              IMDb - 8.6
            </div>
          </div>
        </div>
      </div>

      <div class="container" id="Movies">
        <h3>Bollywood</h3>
        <hr>
        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/aaa.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Andaz Apna Apna</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">1994</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h41m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.1</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">Amar and Prem, who belong to middle-class families, compete to win over Raveena, a
                      millionaire's daughter</p>

                    <button class="trailer_i" type="submit" value=""
                      onclick="openWin12('Andaz Apna Apna')">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin12() {
                        window.open("https://www.youtube.com/embed/fd_w7Qw8biU", "_blank",
                          "height=400,width=600,scrollbars=no");
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Andaz Apna Apna')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin12(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>Andaz Apna Apna</b>
              <br>
              IMDb - 8.1
            </div>
          </div>
        </div>


        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/chakde.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Chakde India</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2007</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h33m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.2</button>
                    </span>
                    <br />

                    </p>

                    <p class="para_i">Kabir Khan, a former hockey star, is tainted as someone who betrayed his country.
                      However, he begins coaching the Indian women's national hockey team to prove his loyalty to the
                      nation.</p>


                    <button class="trailer_i" type="submit" value="" onclick="openWin13()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin13() {
                        window.open("https://www.youtube.com/embed/6a0-dSMWm5g", "_blank",
                          "height=400,width=600,scrollbars=no");
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Chakde India')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin12(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>Chakde India</b>
              <br>
              IMDb - 8.2
            </div>
          </div>
        </div>


        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/milkha.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1 style="font-size: 37px;">Bhaag Milkha Bhaag</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2013</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">3h9m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.2</button>
                    </span>
                    <br />
                    <br />
                    </p>

                    <p class="para_i">Milkha Singh, an Indian athlete, overcomes many agonising obstacles in order to
                      become a world champion, Olympian and one of India's most iconic athletes.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin14()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin14() {
                        window.open("https://www.youtube.com/embed/3uICXnnW86U", "_blank",
                          "height=400,width=600,scrollbars=no");
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Bhaag Milkha Bhaag')"
                      style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin12(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>Bhaag Milkha Bhaag</b>
              <br>
              IMDb - 8.2
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/wed.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>A Wednesday</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2008</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">1h44m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.1</button>
                </span>
                <br />

                </p>

                <p class="para_i">Prakash Rathod, a retired police commissioner recounts the most memorable case of his
                  career wherein he was informed about a bomb scare in Mumbai by an ordinary commoner.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin15()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin15() {
                    window.open("https://www.youtube.com/embed/yry6pBiXx14", "_blank",
                      "height=400,width=600,scrollbars=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('A Wednesday')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>A Wednesday</b>
              <br>
              IMDb - 8.1
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/dhoni.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>MS Dhoni</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2016</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">3h40m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">7.9</button>
                </span>
                <br />
                <br />
                </p>

                <p class="para_i">M S Dhoni, a boy from Ranchi, aspires to ▶▶Play cricket for India. Though he initially
                  tries to please his father by working for the Indian Railways, he ultimately decides to chase his
                  dreams.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin16()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin16() {
                    window.open("https://www.youtube.com/embed/6L6XqWoS8tw", "_blank",
                      "height=400,width=600,scrollbars=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value=""
                  onclick="openMovieWin12('Ms Dhoni : The Untold Story')" style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>Ms Dhoni : The Untold Story</b>
              <br>
              IMDb - 7.9
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/drishyam.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Drishyam</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2015</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">2h43m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.2</button>
                </span>
                <br />
                <br />
                </p>

                <p class="para_i">When the disappearance of a policewoman's son threatens to ruin Vijay's family, he
                  leaves no stone unturned in order to shield his family.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin17()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin17() {
                    window.open("https://www.youtube.com/embed/AuuX2j14NBg", "_blank",
                      "height=400,width=600,scrollbars=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Drishyam')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>Drishyam</b>
              <br>
              IMDb - 8.2
            </div>
          </div>
        </div>


        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/dil.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Dilwale Dulhania</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">1995</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">3h12m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.1</button>
                </span>
                <br />

                </p>

                <p class="para_i">Raj and Simran meet during a trip across Europe and the two fall in love. However,
                  when Raj learns that Simran is already promised to another, he follows her to India to win her and her
                  father over.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin18()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin18() {
                    window.open("https://www.youtube.com/embed/oIZ4U21DRlM", "_blank",
                      "height=400,width=600,scrollbars=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value=""
                  onclick="openMovieWin12('Dilwale Dulhania Le Jayenge')" style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>Dilwale Dulhania Le Jayenge</b>
              <br>
              IMDb - 8.1
            </div>
          </div>
        </div>


        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/gangs of wassepur.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Gangs of Wasseypur</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2012</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">2h40m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.2</button>
                </span>
                <br />
                <br />
                </p>

                <p class="para_i">A gangster (Manoj Bajpayee) clashes with the ruthless, coal-mining kingpin (Tigmanshu
                  Dhulia) who killed his father (Jaideep Ahlawat).</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin19()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin19() {
                    window.open("https://www.youtube.com/embed/j-AkWDkXcMY", "_blank",
                      "height=400,width=600,scrollbars=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Gangs of Wasseypur')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>Gangs of Wasseypur</b>
              <br>
              IMDb - 8.2
            </div>
          </div>
        </div>



        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/sholay.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Sholay</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">1975</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">3h24m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.2</button>
                </span>
                <br />
                <br />
                </p>

                <p class="para_i">Jai and Veeru, two ex-convicts, are hired by Thakur Baldev Singh, a retired policeman,
                  to help him nab Gabbar Singh, a notorious dacoit, who has spread havoc in the village of Ramgarh.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin20()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin20() {
                    window.open("https://www.youtube.com/embed/XjiluhItzIA", "_blank",
                      "height=400,width=600,scrollbars=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Sholay')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>Sholay</b>
              <br>
              IMDb - 8.2
            </div>
          </div>
        </div>


        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/rdb.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Rang De Basanti</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2006</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">2h51m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.1</button>
                </span>
                <br />
                <br />
                </p>

                <p class="para_i">When Sue selects a few students to portray various Indian freedom fighters in her
                  film, she unwittingly awakens their patriotism</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin21()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin21() {
                    window.open("https://www.youtube.com/embed/l-BTOTtcGmk", "_blank",
                      "height=400,width=600,scrollbars=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Rang De Basanti')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>Rang De Basanti</b>
              <br>
              IMDb - 8.1
            </div>
          </div>
        </div>



        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/mbbs.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Munna Bhai MBBS</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2003</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">2h36m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.1</button>
                </span>
                <br />
                <br />
                </p>

                <p class="para_i">Munna is a goon who sets out to fulfil his father's dream of becoming a doctor.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin22()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin22() {
                    window.open("https://www.imdb.com/video/vi1188543257/", "_blank",
                      "height=400,width=600,scrollbars=no");
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Munna Bhai MBBS')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>Munna Bhai MBBS</b>
              <br>
              IMDb - 8.1
            </div>
          </div>
        </div>




        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/kgf.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>KGF</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2018</button>
                <button class="btn_i b2_i" title="Seasons" style="color:white">2h50m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.3</button>
                </span>
                <br />
                <br />
                </p>

                <p class="para_i">Rocky, a young man, seeks power and wealth in order to fulfil a promise to his dying
                  mother</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin23()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin23() {
                    window.open("https://www.youtube.com/embed/-KfsY-qwBS0?autoplay=1", "_blank",
                      "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                      );
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('KGF')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>KGF</b>
              <br>
              IMDb - 8.3
            </div>
          </div>
        </div>


      </div>
      <!---next block -->
      <!---
    <h2>Web Series</h2>
    <hr>
    <div class="container" id="WebSeries">
      <h3>Hollywood</h3>
      <hr>
        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/chernobyl.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Chernobyl</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">9.4</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">In April 1986, the city of Chernobyl in the Soviet Union suffers one of the worst nuclear disasters in the history of mankind. Consequently, many heroes put their lives on the line to save Europe.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin24()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin24(){
                        window.open("https://youtu.be/s9APLXM9Ei8","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Chernobyl</b>
              <br>
              IMDb - 9.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/black mirror.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Black Mirror</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2011</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">5</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.8</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">In an abstrusely dystopian future, several individuals grapple with the manipulative effects of cutting edge technology in their personal lives and behaviours.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin25()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin25(){
                        window.open("https://youtu.be/V0XOApF5nLU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Black Mirror</b>
              <br>
              IMDb - 8.8
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/got.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Game of Thrones</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2011</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">8</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">9.2</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Nine noble families wage war against each other in order to gain control over the mythical land of Westeros.
                   Meanwhile, a force is rising after millenniums and threatens the existence of living men.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin26()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin26(){
                        window.open("https://youtu.be/gcTkNV5Vg1E","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Game of Thrones</b>
              <br>
              IMDb - 9.2
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/money.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1 style="font-size: 35px;">Money Heist</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2017</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i" >A criminal mastermind who goes by "The Professor" has a plan to pull off the biggest heist in recorded history -- to print billions of euros in the Royal Mint of Spain. To help him carry out the ambitious plan, he recruits eight people with certain abilities and who have nothing to lose.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin27()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin27(){
                        window.open("https://youtu.be/p_PJbmrX4uk","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Money Heist</b>
              <br>
              IMDb - 8.3
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/luci.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Lucifier</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">5</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">this series follows Lucifer, the original fallen angel, who has become dissatisfied with his life in hell. After abandoning his throne and retiring to Los Angeles, Lucifer indulges in his favorite things (women, wine and song) -- until a murder takes place outside of his upscale nightclub.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin28()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin28(){
                        window.open("https://youtu.be/-0beFQnB5lY","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Lucifier</b>
              <br>
              IMDb - 8.1
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/sherlock series.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Sherlock</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2010</button>
                  <button class="btn_i b2_i"  title="seasons" style="color:white">3<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">9.1</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Dr Watson, a former army doctor, finds himself sharing a flat with Sherlock Holmes, an eccentric individual with a knack for solving crimes. Together, they take on the most unusual cases.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin29()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin29(){
                        window.open("https://youtu.be/9UcR9iKArd0","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Sherlock</b>
              <br>
              IMDb - 9.1
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/crown.jpeg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>The Crown</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                  <button class="btn_i b2_i"  title="seasons" style="color:white">4<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.6</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">The series begins with an inside look at the early reign of the queen, who ascended the throne at age 25 after the death of her father, King George VI. As the decades pass, personal intrigues, romances, and political rivalries are revealed that ▶▶Played a big role in events that shaped the later years of the 20th century.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin30()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin30(){
                        window.open("https://youtu.be/w1pIbUOc_lU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>The Crown</b>
              <br>
              IMDb - 8.6
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/firefly.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Firefly</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2002</button>
                  <button class="btn_i b2_i"  title="seasons" style="color:white">1<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Set 500 years in the future after a universal civil war, the crew of a small transport spaceship takes any job so long as it puts food on the table. The disparate men and women just want to survive and maybe have better lives, but they face constant challenges on the new frontier, such as the Reavers -- flesh-eating mongrels who live on the fringes of the universe.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin31()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin31(){
                        window.open("https://youtu.be/oBZrZij2-g8","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Firefly</b>
              <br>
              IMDb - 9.0
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/top of the lake.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Top of the Lake</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">7.5</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">A detective investigates the disappearance of a 12-year-old schoolgirl in a small town and gradually finds herself getting obsessed with the case.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin32()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin32(){
                        window.open("https://youtu.be/wGWSB_ezYzs","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy No</button>

              </div>
            </div>
            <div class="flim">
              <b>Top of the Lake</b>
              <br>
              IMDb - 7.5
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/breaking.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Breaking Bad</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2008</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">5</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">9.5</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Walter White, a chemistry teacher, discovers that he has cancer and decides to get into the meth-making business to repay his medical debts. His priorities begin to change when he partners with Jesse</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin33()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin33(){
                        window.open("https://youtu.be/HhesaQXLuRY","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Breaking Bad</b>
              <br>
              IMDb - 9.5
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/peaky.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Peaky Blinders</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">5</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.8</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Tommy Shelby, a dangerous man, leads the Peaky Blinders, a gang based in Birmingham. Soon, Chester Campbell, an inspector, decides to nab him and put an end to the criminal activities.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin34()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin34(){
                        window.open("https://youtu.be/oVzVdvGIC7U","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Peaky Blinders</b>
              <br>
              IMDb - 8.8
            </div>
          </div>
        </div>


        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/ozark.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1 style="font-size: 35px;">Ozark</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2017</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">3</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i" style="margin-top: -20px;">Drama series stars Jason Bateman as Marty Byrde, a financial planner who relocates his family from Chicago to a summer resort community in the Ozarks. With wife Wendy and their two kids in tow, Marty is on the move after a money-laundering scheme goes wrong, forcing him to pay off a substantial debt to a Mexican drug lord in order to keep his family safe. While the Byrdes' fate hangs in the balance, the dire circumstances force the fractured family to reconnect.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin35()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin35(){
                        window.open("https://youtu.be/5hAXVqrljbs","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Ozark</b>
              <br>
              IMDb - 8.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/stranger.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Stranger Things</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">3</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.7</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">In 1980s Indiana, a group of young friends witness supernatural forces and secret government exploits.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin36()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin36(){
                        window.open("https://youtu.be/b9EkMc79ZSU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Stranger Things</b>
              <br>
              IMDb - 8.7
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/witcher.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>The Witcher</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.5</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">The witcher Geralt, a mutated monster hunter, struggles to find his place in a world in which people often prove more wicked than beasts.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin37()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin37(){
                        window.open("https://youtu.be/ndl1W4ltcmg","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>The Witcher</b>
              <br>
              IMDb - 8.5
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/wanda.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Wanda Vision</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2021</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.0</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Living idealized suburban lives, super-powered beings Wanda and Vision begin to suspect that everything is not as it seems.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin38()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin38(){
                        window.open("https://youtu.be/sj9J2ecsSpo","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Wanda Vision</b>
              <br>
              IMDb - 8.0
            </div>
          </div>
        </div>

    </div> -->
      <!---third block -->
      <!---
    <div class="container" id="WebSeries">
       <h3>Bollywood</h3>
       <hr>
      <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/mirzapur.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Mirzapur</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Akhandanand Tripathi made millions exporting carpets and became the mafia boss of Mirzapur. His son Munna, an unworthy, power-hungry heir, stops at nothing to continue his father's legacy.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin39()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin39(){
                        window.open("https://youtu.be/ZNeGF-PvRHY","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Mirzapur</b>
              <br>
              IMDb - 8.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/sacred.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1 style="font-size: 30px;">Sacred Games</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">2</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.7</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">When police officer Sartaj Singh receives an anonymous tip about the location of criminal overlord Ganesh Gaitonde, he embarks on a chase around Mumbai in what becomes a dangerous cat-and-mouse game. Amidst the chaos, trappings of a corrupt underworld are revealed.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin40()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin40(){
                        window.open("https://youtu.be/RWpuZXhCEkQ","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Sacred Games</b>
              <br>
              IMDb - 8.7
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/kota.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1 style="font-size: 30px;">Kota Factory</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Kota Factory is an 2019 Indian Hindi-language web series created by Saurabh Khanna and directed by Raghav Subbu for The Viral Fever. The story is set is in Kota, which is a hub for many coaching centres where students come from all over India to prepare for various entrance exams.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin41()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin41(){
                        window.open("https://youtu.be/pNZQ6msbOvM","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i" onclick="openMovieWin41()">▶Buy Now</button>
                  
                  <script type="text/javascript">
                    function openMovieWin41(){
                      window.open("https://youtube.com/playlist?list=PLTB0eCoUXErb7pV0Sj1hXWrxerSZX1qgh","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>

              </div>
            </div>
            <div class="flim">
              <b>Kota Factory</b>
              <br>
              IMDb - 9.0
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/upsc.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Aspirants</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2021</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">9</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Aspirants is a web series by The Viral Fever created by Arunabh Kumar.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin42()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin42(){
                        window.open("https://youtu.be/ViOutJ0kuJY","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i" onclick="openMovieWin42()">▶Play</button>
                  
                  <script type="text/javascript">
                    function openMovieWin42(){
                      window.open("https://youtube.com/playlist?list=PLTB0eCoUXErY_KvRNKOERQtYSDPjOb8jw","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
              </div>
            </div>
            <div class="flim">
              <b>Aspirants</b>
              <br>
              IMDb - 9
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/bach.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>TVF Bachelors</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                  <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">The series revolves around Four Bachelor Flatmates who in every episode will deal with a specific daily life bachelor related problem. Its about their battle against an external X problem as a single team The Bachelors.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin43()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin43(){
                        window.open("https://youtu.be/5XuimeH5hME","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i" onclick="openMovieWin43()">▶Buy Now</button>
                  
                  <script type="text/javascript">
                    function openMovieWin43(){
                      window.open("https://youtube.com/playlist?list=PLTB0eCoUXErabI_K3mUcdiYM72o4CkWZC","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
              </div>
            </div>
            <div class="flim">
              <b>TVF Bachelors</b>
              <br>
              IMDb - 8.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/mismatched.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Mismatched</h1>
                  <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                  <button class="btn_i b2_i"  title="seasons" style="color:white">1<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">After being set-up by their families, two teenagers strike up a tentative friendship at their summer programme.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin44()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin44(){
                        window.open("https://youtu.be/uYmwNNkix-k","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Mismatched</b>
              <br>
              IMDb - 8.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/bandish.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Bandish Bandits</h1>
                <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                <button class="btn_i b2_i"  title="seasons" style="color:white">1<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.7</button>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i">Two singers who have contrasting personalities set out on an incredible journey of self-discovery with one another.</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin45()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin45(){
                      window.open("https://youtu.be/UhU57OgGp50","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Buy Now</button>

            </div>
          </div>
          <div class="flim">
            <b>Bandish Bandits</b>
            <br>
            IMDb - 8.7
          </div>
        </div>
      </div>
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/little things.jpg" alt="Avatar" style="width:250px;height:360px;">
            </div>
            <div class="flip-card-back_i">
              <h1>Little Things</h1>
                <button class="btn_i b3_i"  title="Year" style="color:white">2016</button>
                <button class="btn_i b2_i"  title="seasons" style="color:white">3<button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i">A cohabitating couple in their 20s navigates the ups and downs of work, modern-day relationships and finding themselves in contemporary Mumbai.</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin46()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin46(){
                      window.open("https://youtu.be/LhpA-_8cWv8","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Buy Now</button>

            </div>
          </div>
          <div class="flim">
            <b>Little Things</b>
            <br>
            IMDb - 8.3
          </div>
        </div>
      </div>

      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/lok.jpg" alt="Avatar" style="width:250px;height:360px;">
            </div>
            <div class="flip-card-back_i">
              <h1>Paatal Lok</h1>
                <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">7.8</button>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i">A cynical inspector is tasked with investigating a high-profile case which leads him into a dark realm of the underworld.</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin47()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin47(){
                      window.open("https://youtu.be/cNwWMW4mxO8","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Buy Now</button>

            </div>
          </div>
          <div class="flim">
            <b>Paatal Lok</b>
            <br>
            IMDb - 7.8
          </div>
        </div>
      </div>

      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/scam.jpg" alt="Avatar" style="width:250px;height:360px;">
            </div>
            <div class="flip-card-back_i">
              <h1 style="font-size: 34px;">Scam 1992 : The Harshad Mehta Story</h1>
                <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">9.5</button>
              </span>
              <br />    
              <br />
            </p>

              <p class="para_i">Harshad Mehta took the stock market to dizzying heights and had a catastrophic downfall.</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin48()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin48(){
                      window.open("https://youtu.be/ISORfez27og","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Buy Now</button>

            </div>
          </div>
          <div class="flim">
            <b>Scam 1992 : The Harshad Mehta Story</b>
            <br>
            IMDb - 9.5
          </div>
        </div>
      </div>
      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/tvf.jpg" alt="Avatar" style="width:250px;height:360px;">
            </div>
            <div class="flip-card-back_i">
              <h1>Pitchers</h1>
                <button class="btn_i b3_i"  title="Year" style="color:white">2015</button>
                <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">9.1</button>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i">TVF Pitchers is a web series created by The Viral Fever and developed by Arunabh Kumar. Written by Biswapati Sarkar, the series were directed by Amit Golani and features Naveen Kasturia, Arunabh Kumar, Jitendra Kumar and Abhay Mahajan.</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin49()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin49(){
                      window.open("https://youtu.be/xcUHB9n8Kws","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Buy Now</button>

            </div>
          </div>
          <div class="flim">
            <b>Pitchers</b>
            <br>
            IMDb - 9.1
          </div>
        </div>
      </div>


      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/criminal.jpg" alt="Avatar" style="width:250px;height:360px;">
            </div>
            <div class="flip-card-back_i">
              <h1>Criminal Justice</h1>
                <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                <button class="btn_i b2_i"  title="Seasons" style="color:white">2</button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.1</button>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i">Criminal Justice is an Indian Hindi-language crime thriller legal drama web series for Hotstar Specials, based on the 2008 British television series of the same name,</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin50()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin50(){
                      window.open("https://youtu.be/KPyNH7mZkGc","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Buy Now</button>

            </div>
          </div>
          <div class="flim">
            <b>Criminal Justice</b>
            <br>
            IMDb - 8.1
          </div>
        </div>
      </div>

      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/day.jpg" alt="Avatar" style="width:250px;height:360px;">
            </div>
            <div class="flip-card-back_i">
              <h1>Selection Day</h1>
                <button class="btn_i b3_i"  title="Year" style="color:white">2018</button>
                <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">7.4</button>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i">When a 14-year-old boy tries out for Mumbai's under-19 cricket team and meets his older brother's rival, everything in his world begins to change.</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin51()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin51(){
                      window.open("https://youtu.be/2Q8xTwV9ecI","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Buy Now</button>

            </div>
          </div>
          <div class="flim">
            <b>Selection Day</b>
            <br>
            IMDb - 7.4
          </div>
        </div>
      </div>

      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/asur.jpg" alt="Avatar" style="width:250px;height:360px;">
            </div>
            <div class="flip-card-back_i">
              <h1 style="font-size: 32px;">Asur : Welcome to your Dark Side</h1>
                <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.4</button>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i">Asur is a 2020 Indian Hindi-language crime thriller web series, produced by Tanveer Bookwala of Ding Entertainment for the video on demand platform Voot. The series stars Arshad Warsi, Barun Sobti and Amey Wagh. The series is set in the context of a modern day serial killer having religious ties.</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin52()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin52(){
                      window.open("https://youtu.be/LDirQBvwx7g","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Buy Now</button>

            </div>
          </div>
          <div class="flim">
            <b >Asur : Welcome to your Dark Side</b>
            <br>
            IMDb - 8.4
          </div>
        </div>
      </div>

      <div class="poster">
        <div class="flip-card_i">
          <div class="flip-card-inner_i">
            <div class="flip-card-front_i">
                <img src="./Images/panch.jpg" alt="Avatar" style="width:250px;height:360px;">
            </div>
            <div class="flip-card-back_i">
              <h1>Panchayat</h1>
                <button class="btn_i b3_i"  title="Year" style="color:white">2020</button>
                <button class="btn_i b2_i"  title="Seasons" style="color:white">1</button>
                <button class="btn_i b1_i"  title="IMDb" style="color:white">8.7</button>
              </span>
              <br />
              <br />
            </p>

              <p class="para_i">An engineering graduate, for lack of a better job, becomes the secretary of a Panchayat office in a remote village in Uttar Pradesh.</p>

                  <button class="trailer_i" type="submit" value="" onclick="openWin53()">▶Trailer</button>
                  <script type="text/javascript">
                    function openWin53(){
                      window.open("https://youtu.be/mojZJ7oeD_g","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script><br><br>
                <button class="btn_i b4_i">▶Play</button>
 
            </div>
          </div>
          <div class="flim">
            <b>Panchayat</b>
            <br>
            IMDb - 8.7
        </div>
        </div>
      </div>

  </div>-->
      <!---third block -->











      <h2>Kids</h2>
      <hr>
      <div class="container" id="Kids">

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/bat.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>
                  <font size="6">The Dark Knight Rises</font>
                </h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2012</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h44m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.4</button>
                </span>
                <br />

                </p>

                <p class="para_i">Bane, an imposing terrorist, attacks Gotham City and disrupts its eight-year-long
                  period of peace.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin54()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin54() {
                    window.open("https://www.youtube.com/embed/ej3ioOneTy8", "_blank",
                      "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                      );
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('The Dark Knight Rises')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>

              </div>
            </div>
            <div class="flim">
              <b>The Dark Knight Rises</b>
              <br>
              IMDb - 8.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/narnia.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1 style="font-size: 30px;">The Chronicles of Narnia</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2005</button>
                <button class="btn_i b2_i" title="minutes" style="color:white">2h30m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">6.9</button>
                </span>
                <br />
                <br />
                </p>

                <p class="para_i">While Playing, Lucy and her siblings find a wardrobe that lands them in a mystical
                  place called Narnia.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin55()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin55() {
                    window.open("https://www.youtube.com/embed/ruGHxmjQ180", "_blank",
                      "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                      );
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('The Chronicles of Narnia')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>The Chronicles of Narnia</b>
              <br>
              IMDb - 6.9
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/endgame.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Avengers : Endgame</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2019</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">3h2m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">8.4</button>
                </span>
                <br />

                </p>

                <p class="para_i">After Thanos, an intergalactic warlord, disintegrates half of the universe, the
                  Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.
                </p>

                <button class="trailer_i" type="submit" value="" onclick="openWin56()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin56() {
                    window.open(
                      "https://www.youtube-nocookie.com/embed/TcMBFSGVi1c?autoplay=1&fs=0&modestbranding=1&rel=0&showinfo=0&iv_load_policy=3",
                      "_blank",
                      "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                      );


                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Avengers : Endgame')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>Avengers : Endgame</b>
              <br>
              IMDb - 8.4
            </div>
          </div>
        </div>

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/infinity.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Avengers : Infinity War</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2018</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h40m<button>
                    <button class="btn_i b1_i" title="IMDb" style="color:white">8.4</button>
                    </span>
                    <br />

                    </p>

                    <p class="para_i">The Avengers must stop Thanos, an intergalactic warlord, from getting his hands on
                      all the infinity stones. However, Thanos is prepared to go to any lengths to carry out his insane
                      plan.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin57()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin57() {
                        window.open(
                          "https://www.youtube.com/embed/6ZfuNTqbHE8?rel=0&amp;autoplay=1&amp;mute=1&amp;showinfo=0&amp;controls=0",
                          "_blank",
                          "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                          );
                      }
                    </script><br><br>
                    <button class="btn_i b4_i" type="submit" value=""
                      onclick="openMovieWin12('Avengers : Infinity War')" style=" height: 0.75cm; width:2.5cm; ">
                      <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                      Buy Now
                    </button>
                    <script type="text/javascript">
                      function openMovieWin12(movieName) {
                        var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                        window.location.href = url;
                      }
                    </script>
              </div>
            </div>
            <div class="flim">
              <b>Avengers : Infinity War</b>
              <br>
              IMDb - 8.4
            </div>
          </div>
        </div>


        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                <img src="./Images/spider.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h1>Spider Man</h1>
                <button class="btn_i b3_i" title="Year" style="color:white">2002</button>
                <button class="btn_i b2_i" title="Minutes" style="color:white">2h1m</button>
                <button class="btn_i b1_i" title="IMDb" style="color:white">7.3</button>
                </span>
                <br />
                <br />
                </p>

                <p class="para_i">Peter Parker, an outcast high school student, gets bitten by a radioactive spider and
                  attains superpowers.</p>

                <button class="trailer_i" type="submit" value="" onclick="openWin58()">▶Trailer</button>
                <script type="text/javascript">
                  function openWin58() {
                    window.open("https://www.youtube.com/embed/-tnxzJ0SSOw", "_blank",
                      "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no"
                      );
                  }
                </script><br><br>
                <button class="btn_i b4_i" type="submit" value="" onclick="openMovieWin12('Spider Man')"
                  style=" height: 0.75cm; width:2.5cm; ">
                  <img src="Images\Logo\11.png" alt="Ticket" style="height: 80%; width: auto;">
                  Buy Now
                </button>
                <script type="text/javascript">
                  function openMovieWin12(movieName) {
                    var url = "Book Now.php?movie=" + encodeURIComponent(movieName);
                    window.location.href = url;
                  }
                </script>
              </div>
            </div>
            <div class="flim">
              <b>Spider Man</b>
              <br>
              IMDb - 7.3
            </div>
          </div>
        </div>


      </div>
      <!--
      <h2>Anime</h2>
      <hr>
      <div class="container" id="anime">

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/deathnote.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h3>DeathNote</h3>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">2006</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">37<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
                </div>
                  
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">Death Note is a Japanese manga series written by Tsugumi Ohba and illustrated by Takeshi Obata. The story follows Light Yagami, a teen genius who discovers a mysterious notebook</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin59()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin59(){
                        window.open("https://youtu.be/NlJZ-YgAt-c","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i" onclick="openMovieWin59()">▶Buy Now</button>
                  
                  <script type="text/javascript">
                    function openMovieWin59(){
                      window.open("https://youtube.com/playlist?list=PL-a03JNHCnK0C_b8HD4fFPAghY5_S_HbN","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
              </div>
            </div>
            <div class="flim">
              <b>DeathNote</b>
              <br>
              IMDb - 9.0
            </div>
          </div>
        </div> 

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/naruto.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h3>Naruto</h3>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">2002</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">220<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.3</button>
              </div>  
              </span>
                <br />
                <br />
              </p>

                <p class="para_i">Adapted from a comic by Masashi Kishimoto, this animated hit follows the adventures of Naruto Uzumaki, a boy who is determined to become a Hokage, the ninja in his village who is acknowledged as the leader and the strongest of them all.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin60()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin60(){
                        window.open("https://youtu.be/-G9BqkgZXRA","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i" onclick="openMovieWin60()">▶Buy Now</button>
                  
                  <script type="text/javascript">
                    function openMovieWin60(){
                      window.open("https://youtube.com/playlist?list=PL2iQPHlA1BhwSqGx1cDcIKKvnX_AeWsLE","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
              </div>
            </div>
            <div class="flim">
              <b>Naruto</b>
              <br>
              IMDb - 8.3
            </div>
          </div>
        </div> 

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/Aot.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h3>Attack on Titan</h3>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">2013</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">75<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">9.0</button>
              </div>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin61()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin61(){
                        window.open("https://youtu.be/o_go-8TFBXs","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i" onclick="openMovieWin61()">▶Buy Now</button>
                  
                  <script type="text/javascript">
                    function openMovieWin61(){
                      window.open("https://youtube.com/playlist?list=PLfg7Ir-59iSu5TCvGDAMersYJnQnQgJAX","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
              </div>
            </div>
            <div class="flim">
              <b>Attack on Titan</b>
              <br>
              IMDb - 9.0
            </div>
          </div>
        </div> 

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/demonSlayer.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h3>Demon Slayer</h3>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">2019</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">26<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.7</button>
              </div>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">A youth begins a quest to fight demons and save his sister after finding his family slaughtered and his sister turned into a demon.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin62()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin62(){
                        window.open("https://youtu.be/VQGCKyvzIM4","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i" onclick="openMovieWin62()">▶Buy Now</button>
                  
                  <script type="text/javascript">
                    function openMovieWin62(){
                      window.open("https://youtube.com/playlist?list=PLSr6HUR2kQtOFs0cNCidkTQRs04yEhPsE","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
              </div>
            </div>
            <div class="flim">
              <b>Demon Slayer</b>
              <br>
              IMDb - 8.7
            </div>
          </div>
        </div> 

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/one-punch-man.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h3 style="font-size: 30px;">One Punch Man</h3>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">2015</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">24<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.8</button>
              </div>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">It tells the story of Saitama, a superhero who can defeat any opponent with a single punch but seeks to find a worthy opponent after growing bored by a lack of challenge due to his overwhelming strength.</p>
                    <button class="trailer_i" type="submit" value="" onclick="openWin63()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin63(){
                        window.open("https://youtu.be/2JAElThbKrI","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i" onclick="openMovieWin63()">▶Buy Now</button>
                  
                  <script type="text/javascript">
                    function openMovieWin63(){
                      window.open("https://youtube.com/playlist?list=PLwLSw1_eDZl2XdtLhB9NG2Ch050jWFm9G","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                  </script>
              </div>
            </div>
            <div class="flim">
              <b>One Punch Man</b>
              <br>
              IMDb - 8.8
            </div>
          </div>
        </div> 

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/tokyo.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h3>Tokyo Ghoul</h3>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">2014</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">1231<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">7.8</button>
              </div>
                </span>
                <br />
                <br />
              </p>

                <p class="para_i">A Tokyo college student is attacked by a ghoul, a superpowered human who feeds on human flesh. He survives, but has become part ghoul and becomes a fugitive on the run.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin64()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin64(){
                        window.open("https://youtu.be/ETHpMMV8rJU","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Tokyo Ghoul</b>
              <br>
              IMDb - 7.8
            </div>
          </div>
        </div> 

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/fullMetal.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h3>Fullmetal Alchemist</h3>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">2003</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">51<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.5</button>
              </div>
              </span>
                <br />
                <br />
              </p>

                <p class="para_i" style="margin-top: -8px;">When a failed alchemical ritual leaves brothers Edward and Alphonse Elric with severely damaged bodies, they begin searching for the one thing that can save them, the fabled philosopher's stone.</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin65()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin65(){
                        window.open("https://youtu.be/2Dsa8j_usqI","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>Fullmetal Alchemist</b>
              <br>
              IMDb - 8.5
            </div>
          </div>
        </div> 

        <div class="poster">
          <div class="flip-card_i">
            <div class="flip-card-inner_i">
              <div class="flip-card-front_i">
                  <img src="./Images/onePiece.jpg" alt="Avatar" style="width:250px;height:360px;">
              </div>
              <div class="flip-card-back_i">
                <h3>One Piece</h3>
                <div class="btnContainer">
                  <button class="btn_i b3_i"  title="Year" style="color:white">1999</button>
                  <button class="btn_i b2_i"  title="Minutes" style="color:white">981<button>
                  <button class="btn_i b1_i"  title="IMDb" style="color:white">8.8</button>
              </div>
              </span>
                <br />
                <br />
              </p>

                <p class="para_i">Follows the adventures of Monkey D. Luffy and his pirate crew in order to find the greatest treasure ever left by the legendary Pirate, Gold Roger. The famous mystery treasure named "One Piece".</p>

                    <button class="trailer_i" type="submit" value="" onclick="openWin66()">▶Trailer</button>
                    <script type="text/javascript">
                      function openWin66(){
                        window.open("https://youtu.be/S8_YwFLCh4U","_blank","top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                      }
                    </script><br><br>
                  <button class="btn_i b4_i">▶Buy Now</button>

              </div>
            </div>
            <div class="flim">
              <b>One Piece</b>
              <br>
              IMDb - 8.8
            </div>
          </div>
        </div> 
      </div> 
    <div id="waterdrop"></div>-->

      <!-------------------------------Footer-------------------------------->
      <div id="waterdrop"></div>
      <footer class="footer">
        <hr class="footer-hr">
        <div class="footer-content">
          <div class="footer-left">
            <a href="firstpage.php"><img class="footer-logo" src="Images/Logo/TheaterLogo.png" alt="" width="30"
                height="24"></a>
            <p class="footer-bottom-tagline">Buy! Watch! Chill! </p>
          </div>
          <div class="footer-middle">
            <h2 class="footer-heading">Follow Us</h2>
            <ul class="footer-middle-list icons">
              <a class="footer-links" href="https://www.facebook.com/" target="_blank"><i
                  class="fab fa-facebook-f facebook" style="color:red"></i></a>
              <a class="footer-links" href="https://twitter.com/login?lang=en" target="_blank"><i
                  class="fab fa-twitter twitter" style="color:red"></i></a>
              <a class="footer-links" href="https://www.linkedin.com/login" target="_blank"><i
                  class="fab fa-linkedin linkedin" style="color:red"></i></a>
              <a class="footer-links" href="https://www.instagram.com/" target="_blank"><i
                  class="fab fa-instagram instagram" style="color:red"></i></a>
              <a class="footer-links" href="https://github.com/QAZIMAAZARSHAD/Movie-Streaming-Website"
                target="_blank"><i class="fab fa-github github" style="color:red"></i></a>
            </ul>
          </div>
          <div class="footer-middle">
            <h2 class="footer-heading">Services</h2>
            <ul class="footer-middle-list">
              <li class="footer-middle-list-item"><a href="firstpage.php">Enjoy Latest Movies</a> </li>
              <li class="footer-middle-list-item"><a onmouseover="booknow()" onmouseout="hideAlert()"
                  href="firstpage.php">Book Your Ticket Now</a>
                <script>
                  function booknow() {
                    var alertBox = document.createElement("div");
                    alertBox.id = "alert-box";
                    alertBox.innerHTML = "Pick a Movie First and then click Buy Now";
                    alertBox.style.backgroundColor = "red";
                    alertBox.style.color = "white";
                    alertBox.style.padding = "30px";
                    alertBox.style.borderRadius = "10px";
                    alertBox.style.textAlign = "center";
                    alertBox.style.position = "fixed";
                    alertBox.style.top = "16%";
                    alertBox.style.left = "50%";
                    alertBox.style.transform = "translateX(-50%)";
                    alertBox.style.zIndex = "9999";
                    document.body.appendChild(alertBox);
                  }

                  function hideAlert() {
                    var alertBox = document.getElementById("alert-box");
                    if (alertBox) {
                      alertBox.parentNode.removeChild(alertBox);
                    }
                  }
                </script>
              </li>
              <li class="footer-middle-list-item"><a href="kids.html">Everything for Kids</a> </li>
              <li class="footer-middle-list-item"><a href="news.html">Coming soon</a> </li>
              <li class="footer-middle-list-item"><a href="premium.html">Get Premium Subscription</a> </li>
              <li class="footer-middle-list-item"><a href="faq.html">FAQ</a> </li>
            </ul>
          </div>
          <div class="footer-middle">
            <p class="footer-links">
              <h2 class="footer-heading">Book Now</h2>
              <p class="footer-bottom-tagline"> Book your tickets now for an unforgettable cinematic experience.</p>
              <a class="footer-contact-button" onmouseover="booknow()" onmouseout="hideAlert()">Book Now</a>
            </p>
            <script>
              function booknow() {
                var alertBox = document.createElement("div");
                alertBox.id = "alert-box";
                alertBox.innerHTML = "Pick a Movie First and then click Buy Now";
                alertBox.style.backgroundColor = "red";
                alertBox.style.color = "white";
                alertBox.style.padding = "30px";
                alertBox.style.borderRadius = "10px";
                alertBox.style.textAlign = "center";
                alertBox.style.position = "fixed";
                alertBox.style.top = "16%";
                alertBox.style.left = "50%";
                alertBox.style.transform = "translateX(-50%)";
                alertBox.style.zIndex = "9999";
                document.body.appendChild(alertBox);
              }

              function hideAlert() {
                var alertBox = document.getElementById("alert-box");
                if (alertBox) {
                  alertBox.parentNode.removeChild(alertBox);
                }
              }
            </script>
          </div>
          <div class="footer-right">
            <p class="footer-links">
              <h2 class="footer-heading">Contact Us</h2>
              <p class="footer-bottom-tagline">Feel free to contact us.</p>
              <a class="footer-contact-button" href="contactus.html">Contact</a>
            </p>
          </div>
        </div>
        <hr class="footer-hr">
        <div class="footer-copyright">
          <p>Copyright &copy; and &reg; Since
            <script>
              document.write(new Date().getFullYear())
            </script> Under Ticketeasy.com : (Project Is Done By Innovators)
          </p>
        </div>
      </footer>

      <!----------------------scroll back to top button-->
      <button id="scrollToTopButton" title="Go to top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      </button>
      <script>
        $(document).ready(function () {
          var scrollTopButton = document.getElementById("scrollToTopButton");
          window.onscroll = function () {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              scrollTopButton.style.display = "block";
            } else {
              scrollTopButton.style.display = "none";
            }
          }

          $("#scrollToTopButton").click(function () {
            $('html ,body').animate({
              scrollTop: 0
            }, 800)
          });
        });
      </script>

      <!-- footer scripts -->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>

      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
      <script src="js/main-min.js"></script>

      <script>
        jQuery('#waterdrop').raindrops({
          color: '#292c2f',
          canvasHeight: 150,
          density: 0.1,
          frequency: 20
        });
      </script>
      <script>
        function logout() {
          window.location.replace("login.php");
        }
      </script>
      <!-- bootsstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
      </script>
      <script src="./static/script.js"></script>
</body>

</html>