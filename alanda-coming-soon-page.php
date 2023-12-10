<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="ASSETS/Css/alanda-coming-soon-page.css" />
    <link rel="stylesheet" href="ASSETS/FONT AWESOME/css/all.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alanda Coming Soon</title>
  </head>



  <?php
$conn = mysqli_connect("localhost", "root", "", "alanda_cs",);

// if ($conn) {
//     echo "Connected";
// } else {
//     echo "Not Connected";
// }

// if ($conn) {
//   if (isset($_POST['email'])) {
// $email = $_POST['email'];


// $sql = "INSERT INTO waitlist (email) VALUES ('$email')";
// mysqli_query($conn, $sql);

// echo "Email submitted Successfully";
//   }
// }







// header("location: welcome.php");
// } else {
//       header("location: down.php");
//   }
// if($conn->query($sql) === TRUE) {
//   echo "Email submitted Successfully";
// }else{
//   echo "Error:" .$sql. "<br>" . $conn->error;
// }
?>






  <body>
    <section class="hero">
      <div class="left">
        <h1 class="col1">Opportunity To Become Landlord Don Come</h1>

        <h1 class="col2">For Everyone</h1>
        <img
          src="ASSETS/Images/young people taking selfie on smart phone.png"
          alt="young people taking selfie on smart phone"
        />
      </div>
      <div class="right">
        <a href=""
          ><img src="ASSETS/Images/alanda LOGO (1).png" alt="alanda LOGO"
        /></a>
        <h3 class="col1">STAY TUNED</h3>
        <h3 class="col2">Cooking Our Website</h3>
        <div class="numbers">
          <h1>49</h1>
          <h1>10</h1>
          <h1>45</h1>
          <h1>27</h1>
        </div>
        <div class="time">
          <div class="cola"><h6>DAYS</h6></div>
          <div class="colb"><h6>HOURS</h6></div>
          <div class="colc"><h6>MINUTES</h6></div>
          <div class="cold"><h6>SECONDS</h6></div>
        </div>
    
          ><h4>Subscribe to get notification as soon as we launch</h4>


<?php
  if ($conn) {
    if (isset($_POST['email'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  
  $sql = "INSERT INTO waitlist (email) VALUES ('$email')";
  mysqli_query($conn, $sql);
  
  echo "<p style='color:green; width:100%; text-align:center;'>Email submitted Successfully</p>";
    }
  }

?>


        <form action="" method="POST" class="personal">
          
          <div class="first">
            <i class="fa-solid fa-user" style="color: #00a86b;margin-top: 5px;"></i>
            <div>
            
              <input type="email" class="field" name="email" required
                placeholder="Enter your Email Address"
                style="
                  border-width: 0px;
                  border-color: whitesmoke;
                  align-items: center;
                  padding: 7px;
                  
                "
              />
           
           </div> 
          </div>

          <button class="second" >Notify Me</button>
          
        </form>

       

        <div class="socials">
          <a href="https://www.facebook.com/official.alanda"
            ><i class="fa-brands fa-square-facebook" style="color: #00a86b"></i
          ></a>
          <a href="https://instagram.com/p/CxhxCP8IWDf/"
            ><i class="fa-brands fa-instagram" style="color: #00a86b"></i
          ></a>
          <a href="https://www.linkedin.com/company/official-alanda/"
            ><i class="fa-brands fa-linkedin" style="color: #00a86b"></i
          ></a>
        </div>
      </div>
    </section>

    <script src="ASSETS/Js/form.js"></script>
  </body>
</html>
