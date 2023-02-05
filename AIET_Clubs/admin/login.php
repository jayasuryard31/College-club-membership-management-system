<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "aietclub";

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    // Login success
    session_start();
    $_SESSION['loggedin'] = true;
    header('location: ../home/home.php');
  } else {
    // Login failed
    $error = "Invalid username or password";
  }
}

if(isset($_POST['createacc'])){
    session_start();
    header('location: ../create_account/create_account.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body class="bg-[url('../images/college.jpg')]">
  <!-- <form method="post" action="">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
  </form>  -->


    <form action="" method="post">
    <div class="flex justify-center animate__animated animate__jello" id="container">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 flex justify-center bg-gray-50 rounded-lg shadow-xl">
                        <div class="flex flex-col md:flex-row items-center shadow-md h-full  ">
                            <div class="  md:w-1/2 overflow-hidden ">
                                <div class="flex flex-col items-center justify-center text-stone-400">
                                    <!-- <ion-icon name="logo-amplify" class="text-5xl text-fuchsia-600"></ion-icon> -->
                                    <div class=" md:w-1/6 overflow-hidden ">
                                        <img src="../images/aiet-logo.png" alt="" class="" />
                                    </div>
                                    <div class="flex flex-col ">
                                        <div class="m-2">USERNAME</div>
                                        <input class="border-b m-2  bg-gray-50 focus:outline-none" required autofocus type="text" id="username" name="username" />
    
                                        <div class="m-2">PASSWORD</div>
                                        <input class="border-b m-2  bg-gray-50  focus:outline-none" required type="password" id="password" name="password"/>
                                        <?php
                                                if (isset($error)) {
                                                echo $error;
                                                    }
                                                ?>
                                        <!-- <div class="flex m-2">
                                            <input class="border-b  border-stone-400 " type="checkbox" />
                                            <div class="ml-1">Remember Me</div>
                                        </div> -->
                                        <div class="flex m-2">
                                            <input
                                                class="bg-gradient-to-l from-fuchsia-600 to-cyan-400 rounded-2xl px-6 py-1 text-white font-medium" type="submit" name="login" value="Login" />
                                                
                                                
                                            <!-- <input 
                                                class="text-transparent  bg-clip-text bg-gradient-to-l from-fuchsia-600 to-cyan-400 font-bold ml-2 border-2 rounded-2xl px-6 border-cyan-400" name="createacc" type="submit" value="Create new Account" /> -->
                                        </div>
                                        <!-- <div class="m-2">Forgotten your login details?</div>
                                            <div class="font-medium ml-2">Get Help Signing In</div> -->
                                        
    
                                    </div>
    
                                </div>
                            </div>
                            <div class=" md:w-1/2 overflow-hidden ">
                                <img src="../images/Aiet-College.jpg" alt="" class="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

    </form>




</body>
</html>
