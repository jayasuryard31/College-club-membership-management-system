<?php
include '../dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="p-3 mb-2 bg-info text-white animate__animated animate__backInLeft">    <div class="container p-3 mb-2 bg-danger text-white animate__animated animate__swing" >
        
    <h2 class="underline underline-offset-1 text-center text- decoration-2 animate__animated animate__backInDown">feedback given by Users</h2>
    <p>total queries = <?php $p = "select count(*) as `count` from `feedback`"; $result= mysqli_query($conn,$p); $row = mysqli_fetch_assoc($result); echo $row['count'];?></p>
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody class="overflow-y-auto h-32 ...">
    <?php
  
  $sql   ="Select * from `feedback`";
  $result = mysqli_query($conn,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $email = $row['email'];  
      $message = $row['message'];
      echo '
          <tr class="animate__animated animate__backInUp">
      <td>'.$email.'</td>
      <td>'.$message.'</td>
    </tr>';
    }
}


?>
  </tbody>
</table>
    </div>
    </div>
</body>
</html>