<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location: ../userlogin.php');
    exit;
}

//connect to database
include '../dbconnect.php';

//get user id from query string
$user_id = $_GET['user_id'];

//query to get user information
$query = "SELECT * FROM members WHERE id = $user_id";
$result = $conn->query($query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>Profile - <?php echo $user['name']; ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="icon" href="../images/sitelogo.png" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cyan-800">

  <div class="container mx-auto">
    <div class="py-12 ">
      <h1 class="text-2xl text-center font-medium font-serif text-white animate__animated animate__fadeIn">Profile - <?php echo $user['name']; ?></h1>
    </div>
    <div class="bg-cyan-500 p-6 rounded-lg shadow-md animate__animated animate__jackInTheBox">
    <h1 class="text-2xl text-center font-medium font-serif">Confirm the details are correct</h1>
      <div class="mb-4">
        
        <label class="block text-gray-700 font-medium mb-2">Username:</label>
        <p class="text-gray-700"><?php echo $user['name']; ?></p>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2">Email:</label>
        <p class="text-gray-700"><?php echo $user['email']; ?></p>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2">Club:</label>
        <p class="text-gray-700"><?php echo $user['club_name']; ?></p>
      </div>
      <p class="text-sm italic text-rose-600">NOTE - you are logged in as <?php echo $user['name']?> after  confirmation you are not eligiblre to acces this page again</p>
      <div class="mb-4">
        <button class="btn btn-primary my-5"><a href="home.php" class="text-light">CONFIRM</a>
      </button>
      <button class="btn btn-primary my-5"><a href="../userlogin.php" class="text-light">NO</a>
      </button>
    </div>
    </div>
  </div>
</body>
</html>
