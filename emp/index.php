<?php require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gmail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/7a4b62b0a4.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="container">
        <div class="logo">Tree top Books International</div>
        <ul id="menu">
          <a href="#hero">
            <li>Home</li>
          </a>
          <a href="#project">
            <li>Projects</li>
          </a>
          <a href="#contact">
            <li>Contact</li>
          </a>
        </ul>
          <div class="sign-in-up">
            <button type='button' onclick="popup('login-popup')">LOGIN</button>
            <button type='button' onclick="popup('register-popup')">REGISTER</button>
          </div>
      </nav>
        



    </header>
    <main>
      <section id="hero">
        <div class="container">
          <div class="hero_image animate__animated animate__bounceInLeft">
            <img src="./images/hero.png" alt="hero image" />
          </div>
          <div class="hero_content">
            <h1>
              <h2><span class="hi_text">Publishing</span> is not just a bussiness,</h2> 
              <span class="name_text"> it's a passion for book lovers.</span>
            </h1>
           
          </div>
        </div>
      </section>
      <section id="project">
        <h2>PROJECTS</h2>
        <div class="container">
          <div class="project_container">
            <div class="grid_item">
              <div class="card">
                <img src="images/project1.png" alt="Project 1" />
                <div class="card_content">
                  <h3>Tribute Website</h3>
                </div>
              </div>
            </div>
            <div class="grid_item">
              <div class="card">
                <img src="images/project2.png" alt="Project 1" />
                <div class="card_content">
                  <h3>Job Application</h3>
                </div>
              </div>
            </div>
            <div class="grid_item">
              <div class="card">
                <img src="images/project3.png" alt="Project 1" />
                <div class="card_content">
                  <h3>Parallax Website</h3>
                </div>
              </div>
            </div>
            <div class="grid_item">
              <div class="card">
                <img src="images/project4.png" alt="Project 4" />
                <div class="card_content">
                  <h3>Landing Page</h3>
                </div>
              </div>
            </div>
            <div class="grid_item">
              <div class="card">
                <img src="images/project5.png" alt="Project 5" />
                <div class="card_content">
                  <h3>Restaurant Website</h3>
                </div>
              </div>
            </div>
            <div class="grid_item">
              <div class="card">
                <img src="images/project6.png" alt="Project 6" />
                <div class="card_content">
                  <h3>Music Website</h3>
                </div>
              </div>
            </div>
            <div class="grid_item">
              <div class="card">
                <img src="images/project7.png" alt="Project 7" />
                <div class="card_content">
                  <h3>Youtube Clone</h3>
                </div>
              </div>
            </div>
            <div class="grid_item">
              <div class="card">
                <img src="images/project8.png" alt="Project 8" />
                <div class="card_content">
                  <h3>Documentation Website</h3>
                </div>
              </div>
            </div>
            <div class="grid_item">
              <div class="card">
                <img src="images/project9.png" alt="Project 9" />
                <div class="card_content">
                  <h3>Blog Website</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        



        

        <div class="popup-container" id="login-popup">
          <div class="popup">
            <form method="POST" action="login_register.php">
              <h2>
                <span>USER LOGIN</span>
                <button type="reset" onclick="popup('login-popup')">X</button>
              </h2>
              <input type="text" placeholder="E-mail or Username" name="email_username">
              <input type="password" placeholder="Password" name="password">
              <button type="submit" class="login-btn" name="login">LOGIN</button>
            </form>
          </div>
        </div>
      
        <div class="popup-container" id="register-popup">
          <div class="register popup">
            <form method="POST" action="login_register.php">
              <h2>
                <span>USER REGISTER</span>
                <button type="reset" onclick="popup('register-popup')">X</button>
              </h2>
              <input type="text" placeholder="Full Name" name="fullname">
              <input type="text" placeholder="Username" name="username">
              <input type="email" placeholder="E-mail" name="email">
              <input type="password" placeholder="Password" name="password">
              <button type="submit" class="register-btn" name="register">REGISTER</button>
            </form>
          </div>
        </div>
      
        <script>
          function popup(popup_name)
          {
            get_popup=document.getElementById(popup_name);
            if(get_popup.style.display=="flex")
            {
              get_popup.style.display="none";
            }
            else
            {
              get_popup.style.display="flex";
            }
          }
        </script>






      <section id="contact">
        <div class="container">
          <h2>Let's work together...</h2>
          <div class="top_contact">
            <div class="contact_way">
              <i class="fab fa-linkedin"></i>
              <h3>Linkedin</h3>
            </div>
            <div class="contact_way">
              <i class="fa fa-twitter"></i>
              <h3>Twitter</h3>
            </div>
            <div class="contact_way">
              <h3>@ Send Mail</h3>
            </div>
          </div>
          <div class="bottom_contact">
            <div class="contact_way">
              <i class="fab fa-github"></i>
              <h3>Github</h3>
            </div>
            <div class="contact_way">
              <i class="fa fa-mobile"></i>
              <h3>Mobile</h3>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="container">Created By Darpan Dhiman</div>
    </footer>
  </body>
</html>
