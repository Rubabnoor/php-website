<?php
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    
    
    // $host = 'localhost';
    // $user = 'root';
    // $pass = '';
    // $dbname = 'student_db';
    
    $conn = mysqli_connect('localhost','root' ,'','personaldata');
    // if($conn){
    // echo"success";
    // }
    // else{
    // die(mysqli_error($conn));
    // }
    
    
    $sql = "INSERT INTO student(fname, lname, email, comment) VALUES ( '$fname', '$lname', '$email', '$comment')";
    
    mysqli_query($conn, $sql);
    
    }
    
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webservices</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo"><i class="fas fa-magic"></i>DESIGN</a>

      <div class="fas fa-bars"></div>

      <nav class="navbar">
        <ul>
          <li><a href="#Home"> HOME</a></li>
          <li><a href="#About"> ABOUT</a></li>
          <li><a href="#Service"> SERVICE</a></li>
          <li><a href="#Contact">CONTACT</a></li>
          <li><a href="#faq"> FAQ</a></li>
        </ul>
      </nav>
    </header>

    <section id="Home" class="home">
      <h1 class="banner">Web design & Development services</h1>
      <h3 class="slogan">
        You have a vision , We have a team to get you there
      </h3>
      <a href="#"><button>Get started</button></a>

      <div class="wave wave1"></div>
      <div class="wave wave2"></div>
      <div class="wave wave3"></div>

      <div class="fas fa-cog nut1"></div>
      <div class="fas fa-cog nut2"></div>
    </section>

    <section id="About" class="about">
      <h1 class="heading">About us</h1>
      <div class="row">
        <div class="content">
          <h3>We build website that build your business</h3>
          <p>
            At this website we are committed to transforming your digital vision
            into reality. With our expertise and passion for innovation, we
            deliver customized web solutions that drive your business forward.
            Partner with us to experience exceptional quality, outstanding
            support, and measurable results. Let’s build something amazing
            together!
          </p>

          <a href="about/website-development.html"
            ><button class="btn">Read more</button></a
          >
        </div>
        <div class="image">
          <img src="image/Website setup-cuate.png" alt="" />
        </div>
      </div>
    </section>

    <!-- service section start-->

    <section id="Service" class="Service">
      <h1 class="heading">Our Services</h1>

      <div class="row">
        <div class="image">
          <img src="image/web2image.png" alt="" />
        </div>
        <div class="content">
          <h3>Website Development</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum
            omnis autem labore quo officia, minus deserunt distinctio nemo eos
            eaque. Nostrum ipsum porro, doloremque unde minima a libero esse
            harum!
          </p>
          <a href="#"><button class="btn">Read More</button></a>
        </div>
      </div>

      <div class="row">
        <div class="content">
          <h3>Mobile Friendly</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum
            omnis autem labore quo officia, minus deserunt distinctio nemo eos
            eaque. Nostrum ipsum porro, doloremque unde minima a libero esse
            harum!
          </p>
          <a href="#"><button class="btn">Read More</button></a>
        </div>
        <div class="image">
          <img src="image/web3image.png" alt="" />
        </div>
      </div>

      <div class="row">
        <div class="image">
          <img src="image/web4image.png" alt="" />
        </div>
        <div class="content">
          <h3>Resposive Design</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum
            omnis autem labore quo officia, minus deserunt distinctio nemo eos
            eaque. Nostrum ipsum porro, doloremque unde minima a libero esse
            harum!
          </p>
          <a href="#"><button class="btn">Read More</button></a>
        </div>
      </div>

      <div class="row">
        <div class="content">
          <h3>Seo Friendly</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum
            omnis autem labore quo officia, minus deserunt distinctio nemo eos
            eaque. Nostrum ipsum porro, doloremque unde minima a libero esse
            harum!
          </p>
          <a href="#"><button class="btn">Read More</button></a>
        </div>
        <div class="image">
          <img src="image/web5image.png" alt="" />
        </div>
      </div>

      <div class="row">
        <div class="image">
          <img src="image/web6image.png" alt="" />
        </div>
        <div class="content">
          <h3>Graphic Design</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum
            omnis autem labore quo officia, minus deserunt distinctio nemo eos
            eaque. Nostrum ipsum porro, doloremque unde minima a libero esse
            harum!
          </p>
          <a href="#"><button class="btn">Read More</button></a>
        </div>
      </div>
    </section>
    <!-- item section start -->
    <section id="team" class="team">
      <h1 class="heading">Our Team</h1>
      <div class="row">
        <div class="card">
          <div class="image">
            <img src="image/rubab.jpg" alt="" />
          </div>

          <div class="info">
            <h3>Rubab Noor</h3>
            <span> Web Designer</span>
            <div class="icons">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="image">
            <img
              src="image/WhatsApp Image 2024-12-28 at 22.08.03_aa0eb705.jpg"
              alt=""
            />
          </div>

          <div class="info">
            <h3>Faiza Habib</h3>
            <span> Web Designer</span>
            <div class="icons">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="image">
            <img src="image/rubab.jpg" alt="" />
          </div>

          <div class="info">
            <h3>Sumiya Nadir</h3>
            <span> Web Designer</span>
            <div class="icons">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- --contact section start -->

    <section id="Contact" class="Contact">
      <h1 class="heading">Contact us</h1>
      <div class="row">
        <div class="image">
          <img src="image/web7image.png  " alt="" />
        </div>

        <div class="form-container">
          <form action="#" method="post">
            <div class="inputbox">
              <input
                placeholder="Fast Name"
                type="text"
                name="fname"
                required=""
                id="fname"
              />

              <input
                placeholder="Last Name"
                type="text"
                name="lname"
                required=""
                id="lname"
              />
            </div>

            <input
              placeholder="Email"
              type="email"
              id="email"
              name="email"
              required=""
            />

            <textarea
              placeholder="Message"
              id="comment"
              name="comment"
              rows="5"
              required=""
            ></textarea>

            <!-- onclick ="alert('data submit' -->
            <button type="submit" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <section id="faq" class="faq">
      <h1 class="heading">FAQ</h1>
      <div class="row">
        <div class="image">
          <img src=" image/web8img.png" alt="" />
        </div>

        <div class="accordion-container">
          <div class="accordion">
            <div class="accordion-header">
              <span>+</span>
              <h3>How much it will cost?</h3>
            </div>

            <div class="accordion-body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                quasi officia dolorem, at saepe illum accusantium voluptatibus
                iure recusandae ipsam cum a vero quos tenetur repellendus
                similique? Voluptate, repellat facere.
              </p>
            </div>
          </div>

          <div class="accordion">
            <div class="accordion-header">
              <span>+</span>
              <h3>How to update website?</h3>
            </div>

            <div class="accordion-body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                quasi officia dolorem, at saepe illum accusantium voluptatibus
                iure recusandae ipsam cum a vero quos tenetur repellendus
                similique? Voluptate, repellat facere.
              </p>
            </div>
          </div>

          <div class="accordion">
            <div class="accordion-header">
              <span>+</span>
              <h3>How long it takes to design?</h3>
            </div>

            <div class="accordion-body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                quasi officia dolorem, at saepe illum accusantium voluptatibus
                iure recusandae ipsam cum a vero quos tenetur repellendus
                similique? Voluptate, repellat facere.
              </p>
            </div>
          </div>

          <div class="accordion">
            <div class="accordion-header">
              <span>+</span>
              <h3>Is it SEO friendly?</h3>
            </div>

            <div class="accordion-body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                quasi officia dolorem, at saepe illum accusantium voluptatibus
                iure recusandae ipsam cum a vero quos tenetur repellendus
                similique? Voluptate, repellat facere.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <h1> created by rubab.web designer | all rights reserved</h1>
      <div class="icons">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
      </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="javascript/main.js"></script>
  </body>
</html>
