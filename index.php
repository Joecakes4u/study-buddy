<!DOCTYPE html>
<html>
  <head>
    <!--bootstrap-->
    <link href = "bootstrap.css" type = "text/css" rel = "stylesheet">
    <title class="text-center">
      Study Buddy | Front Page
    </title>
  </head>
  <body>
    <!--PHP intro -->
    <div class="jumbotron">
      <h1 class="text-center">Study Buddy</h1>
      <p class="text-center">
        <strong>Study Buddy</strong> is a study tool for you to connect with your peers online in an easy-to-use, interactive whiteboard.
      </p>
      <p class="text-center"><a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up</a></p>
    </div>
    <p class="text-center"><a class="btn btn-primary btn-lg" href="contact.html" role="button">Contact Us</a><br></p>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->  
    <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>  

    <?php
      date_default_timezone_set("America/Los_Angeles");
      echo "The time is " . date("h:i:sa");
    ?>
  </body>
</html>