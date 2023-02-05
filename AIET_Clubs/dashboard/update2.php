<?php
include '../dbconnect.php';

$id = $_GET['updateid'];
$sql = "select * from `members` where id=$id ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$club = $row['club_name'];
$password =$row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $club = $_POST['club_name'];
    $password =$_POST['password'];

    $sql = "update `members` set id=$id, name='$name', email='$email', club_name='$club' where id=$id";

    $result = mysqli_query($conn,$sql);
    if($result){
        // echo  'data inserted successfully';
        header('location:dashboard1.php');
    }else{
        // die(mysqli_error($conn));
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>UPDATE</title>
</head>
<body>
    <!-- <div class="navbarheader">
        <div class="flex justify-center ">
            <div class="self-center top-0 w-full max-w-7xl ">
                <div class="flex justify-between items-center text-gray-700">
                    <div class="mx-2 my-4 ">
                      <div class=" md:w-1/6 overflow-hidden ">
                        <img src="images/aiet-logo.png" alt="" class="" />
                      </div>
                    </div>
                    <ul class="hidden md:flex items-center text-[18px] font-semibold pr-10">
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="home.html">Home</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="dashboard.html">
                                dashboard</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="clubs.html">Our
                                Clubs</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="#">Notices</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="contact.html">Contact</a></li>
                        <li
                            class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                            <a href="#">LogIn</a></li>
                        <li
                            class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                            <a href="#">SignUp</a></li> 
                    </ul> <button class="block p-3 mx-10 md:hidden hover:bg-gray-200 rounded-xl group">
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600"></div>
                        <div
                            class="absolute top-0 -right-full opacity-0 h-screen w-[60%] border bg-white group-focus:right-0 group-focus:opacity-100 transition-all ease-in duration-300 ">
                            <ul class="flex flex-col items-center text-[18px] pt-[60px]">
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Home</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">About Us</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Our Services</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Portfolio</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Contact</a></li>
                                <li
                                    class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                                    <a href="#">LogIn</a></li>
                                <li
                                    class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                                    <a href="#">SignUp</a></li> 
                            </ul>
                        </div>
                    </button>
                </div>
                
            </div>
           </div>
           <script src="https://cdn.tailwindcss.com"></script>
           <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
           <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
           <script nomodule src="../images/aiet-logo.png"></script> 
    </div> -->



    <div class="flex items-center justify-center min-h-screen bg-orange-100">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3 animate__animated animate__slideInDown">
            <div class="flex justify-center">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-blue-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg> -->
                <?php 
    $gd='select club_name from members where name="' . $name .'" and email="' . $email .'"';
    $k=$conn->query($gd);
    foreach($k as $f){
        $clubName=$f['club_name'];
    }


?>
                <div class=" md:w-1/6 overflow-hidden ">
                    <img src="../images/aiet-logo.png" alt="" class="" />
                </div>
            </div>
            <h3 class="text-2xl font-bold text-center">UPDATE HERE</h3>
            <form  method="post">
                <div class="mt-4">
                    <div>
                        <label class="block">Name<label>
                                <input type="text" placeholder="Name" name="name" value="<?php echo $name;  ?>"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"/>
                    </div>
                    <div class="mt-4">
                    <label class="block">Email<label>
                        <label class="block" for="email"><label>
                                <input type="text" placeholder="Email" name="email" value="<?php echo $email;  ?>"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                    <div class="mt-4">
                    <label class="block">Club<label>
                    <div class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">

                    <?php


			        $query = "SELECT distinct * FROM clubinfo";
					$results = mysqli_query($conn, $query); ?>
			        <select name="club_name" id="club_name" title="choose a club" required>
					<option value="<?php echo $club_name;  ?>">Choose</option>
				<?php
			        echo '<option value="'.$clubName.'" selected>'.$clubName. '</option>';
                	while($row = mysqli_fetch_assoc($results)) {
			        echo '<option value="'.$row['club_name'].'">'.$row['club_name']. '</option>';
					//echo $row['id'];
					
					}
                    ?>
			   </select>
			
            </div>
            </div>
                    <!-- <div class="mt-4">
                    
                    <label class="block" for="Name">Date of birth<label>
                        <div class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                      <input type="date" name="DOB" id="DOB" value="0000-00-00" class="date" />
                </div> -->

                    </div>
                    <!-- <div class="mt-4">
                        <label class="block">Password<label>
                                <input type="password" placeholder="Password" name="password" value="<?php echo $password;  ?>"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div> -->
                    <div>
               <?php
                                                if (isset($error)) {
                                                    echo $error;
                                                        }
                                                    if(isset($noerror)){
                                                        echo $noerror;
                                                    }
                                                    ?>  
                                                    </div>  
                   <!--   <div class="mt-4">
                        <label class="block">Confirm Password<label>
                                <input type="password" placeholder="Password"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <span class="text-xs text-red-400">Password must be same!</span> -->
                    <div class="flex">
                        <button type="submit" class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"  name="submit">UPDATE</button>
                    </div>
                    
                    <!-- <div class="mt-6 text-grey-dark">
                        Already have an account?
                        <a class="text-blue-600 hover:underline" href="../admin/login.php">
                            Log in
                        </a>
                    </div> -->
                </div>
            </form>
        </div>
    </div>
</body>
</html>