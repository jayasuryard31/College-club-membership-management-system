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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body class="p-3 mb-2 bg-dark">
    <div class="container">
      <!-- <button class="btn btn-primary my-5"><a href="add_club.php" class="text-light"> Add Clubs</a>
    </button> -->
          
    <h2 class="underline underline-offset-1 text-center text-primary animate__animated animate__backInDown animate__animated ">Deleted Clubs</h2>
    <p class="text-white">Total DELETED Clubs = <?php $p = "select count(*) as `count` from `backup`"; $result= mysqli_query($conn,$p); $row = mysqli_fetch_assoc($result); echo $row['count'];?></p>

        <table class="table table-striped  text-white">
  <thead>
    <tr>
      <th scope="col">Club id</th>
      <th scope="col">Club name</th>
      <th scope="col">Co-ordinator</th>
      <th scope="col">Co-ordinator id</th>
      <th scope="col">Restore</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql ="Select * from `backup`";
$result = mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
          $club_id = $row['club_id'];
          $clubname = $row['club_name'];
          $coordinator = $row['co_ordinator'];  
          $coid = $row['co_ordinator_id'];
          echo '
          <tr class="animate__animated animate__backInUp">
      <th scope="row">'.$club_id.'</th>
      <td>'.$clubname.'</td>
      <td>'.$coordinator.'</td>
      <td>'.$coid.'</td>
      <td><button class="btn btn-danger bg-gradient-to-r from-yellow-400 to-pink-500 hover:from-blue-500 hover:to-green-500 "><a href="deletebackup.php? deleteid='.$club_id.'" class="text-slate-100 hover:text-black font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
    </svg></a></button>
</td>
      </tr>';
    }
}


//      <td>
//     <button class="btn btn-primary"><a href="update2.php? updateid='.$id.'" class="text-light">Update</a></button>
//     <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-dark">Delete</a></button>
// </td>-->
?>

  </tbody>
</table>
    </div>
</body>
</html>