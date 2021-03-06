<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="CSS/contactPageStyles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />
    <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous"
  />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/d36df50949.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <title>Contact Us Page</title>
  </head>
  <body>
      <div class="block1" style="width: 100%; height: 650px;">
          <div class="d-flex header">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" class="logo" alt="logo" />
            </a>
            <div class="ms-auto nav-item">
              <a class="items" href="index.php">Home</a>
              <a class="items" href="blog.php">Blog</a>
              <a class="items" href="contact.php">Contact</a>
            </div>
          </div>
    <div id="contact-body" class="container">
        <div class="col-sm-6 info">
            <p class="newsletter">
              Join our newsletter
            </p>
            <br/>
            <p class="updates">
                Submit your details and never miss out on permacult's updates!
                <br/>
                <br/>
                Follow Us
            </p>
            <br/>
            <br/>
            <div class="icons">
            <a href="#" class="icon-button twitter"><i class="fab fa-twitter fa-3x"></i></a>
            <a href="#" class="icon-button facebook"><i class="fab fa-facebook fa-3x"></i></a>
            <a href="#" class="icon-button google-plus"><i class="fab fa-google-plus-g fa-3x"></i></i><span></span></a>
            <a href="#" class="icon-button youtube"><i class="fab fa-youtube fa-3x"></i></i><span></span></a>
            <a href="#" class="icon-button pinterest"><i class="fab fa-pinterest-p fa-3x"></i></i></i><span></span></a>
            </div>
            <br/>
            <br/>
            <p class="trademark">
                @2021 Privacy Policy
             </p>
          </div>
          <div class="col-sm-6 contact">
              <p class="contact-us">
                  Contact us
              </p>
              <form method="post" onsubmit="openModal()">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" placeholder="Enter your name">
                    <br>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <br>
                    <br>
                    <textarea class="form-control"  name="message" id="message" rows="3" placeholder="Enter your message"></textarea>
                  <br>
                    <button type="submit" name="save" data-toggle="modal" data-target="#success_tic" class="btn btn-primary btn-lg btn-block">Submit</button>
                </form>

<!-- Modal -->
<div id="success_tic" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <a class="close" href="#" data-dismiss="modal">&times;</a>
      <div class="page-body">
    <div class="head">  
      <h3 style="margin-top:5px; font-family: Roboto">Thank You For Subscribing!</h3>
    </div>

  <h1 style="text-align:center;"><div class="checkmark-circle">
  <div class="background"></div>
  <div class="checkmark draw"></div>
</div><h1>

  </div>
</div>
    </div>

  </div>

          </div>  
          <?php
                  include 'conn.php';
                  if(isset($_POST['save']))
                  {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $message=$_POST['message'];
                    $sql="INSERT INTO contact(name,email,message) VALUES ('$name','$email','$message')";
                    mysqli_query($conn,$sql);

                  }
                  ?> 
  </body>
  
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"
  ></script>
</html>
