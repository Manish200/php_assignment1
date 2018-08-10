<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "error occured";
}
else{
if(isset($_POST['yesa'])){
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$message=$_REQUEST["message"];
$sql = "INSERT INTO contact(name, email, phone,message) VALUES ('$name','$email', '$phone','$message')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
?>



<!DOCTYPE html>
<html>
   <head>
     <meta charset="UTF-8">
     <title>MANISH KUMAR RAI</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="contact.css" rel="stylesheet">
     <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
</head>
<body>
<section id="contact" style="margin-top: 100px;background:#37474F;padding:100px;">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                    <div>
                        <form name="sentMessage" id="contactForm" novalidate="" method="POST">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                  <div class="about_our_company" style="margin-bottom: 20px;">
                                      <h1  style="color:#1DE9B6;font-family:serif;font-size:30px;font-style:italic;">Fill The Details... </h1>
                                      <div class="titleline-icon"></div>
                                  </div>
                                  <div class="about_our_company" style="margin-bottom: 20px;">
                                      <div class="titleline-icon"></div>
                                  </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" name="message" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="text-center">
                                        <div id="success"></div>
                                        <button  name="yesa" class="btn btn-xl get" style="background:#F50057;color:#FFF;font-size:25px;">  Send Message  </input>
                                    </div>
                                </div>
                        </form>
                        <div class="col-lg-12 col-sm-12 col-md-12" id="map">
                        </div>
                    </div>
                </div>
            </div>
        </section>

</body>

</html>
