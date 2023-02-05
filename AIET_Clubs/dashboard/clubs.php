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
    
</head>
<body class="p-3 mb-2 bg-dark">
    <div class="container">
      
    <h2 class="underline underline-offset-1 text-center text-primary animate__animated animate__backInDown animate__animated ">Clubs in AIET</h2>
      <button class="btn btn-primary my-5"><a href="add_club.php" class="text-light"> Add Clubs</a>
    </button>
    <p class="text-white">total Clubs = <?php $p = "select count(*) as `count` from `clubinfo`"; $result= mysqli_query($conn,$p); $row = mysqli_fetch_assoc($result); echo $row['count'];?></p>

        <table class="table table-striped  text-white">
  <thead>
    <tr>
      <th scope="col">Club id</th>
      <th scope="col">Club name</th>
      <th scope="col">Co-ordinator</th>
      <th scope="col">Co-ordinator id</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$query = "select count(*) from `clubinfo`";
$sql ="Select * from `clubinfo`";
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
      <td class="flex space-x-4">
    <button class="btn btn-primary bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 ..."><a href="club_update.php? updateid='.$club_id.'" class="text-slate-100 hover:text-black font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
  </svg></a></button>
    <button class="btn btn-danger bg-gradient-to-r from-yellow-400 to-pink-500 hover:from-blue-500 hover:to-green-500 "><a href="delete_club.php? deleteid='.$club_id.'" class="text-slate-100 hover:text-black font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
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
<div>
    <?php
        include 'backup.php';

    ?>
</div>
    </div>

</body>
</html>