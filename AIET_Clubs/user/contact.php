<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location: ../userlogin.php');
    exit;
}

include '../dbconnect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $query = "INSERT INTO contact_form (name, phone, email, subject, message) VALUES ('$name', '$phone', '$email', '$subject', '$message')";
  if (mysqli_query($conn, $query)) {
    $noerror = "Message sent successfully";
  } else {
    $error = "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact here</title>
    <link rel="icon" href="../images/sitelogo.png" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <div class="navbarheader">
        <div class="flex justify-center ">
            <div class="self-center top-0 w-full max-w-7xl ">
                <div class="flex justify-between items-center text-gray-700">
                    <div class="mx-2 my-4 ">
                      <div class=" md:w-1/6 overflow-hidden ">
                        <img src="../images/aiet-logo.png" alt="" class="" />
                      </div>
                    </div>
                    <ul class="hidden md:flex items-center text-[18px] font-semibold pr-10">
                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="home.php">Home</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="clubs.php">Our
                                    Clubs</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="notice.php">Notices</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="contact.php">Contact</a></li>
                                    <!-- <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3"><a href="login.html">Sign out</a></button> -->
                                    <!-- <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="profile.php">
                                            profile</a></li> -->
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="../index.php">Sign out</a></li>
                        <!-- <li
                            class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                            <a href="#">LogIn</a></li>
                        <li
                            class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                            <a href="#">SignUp</a></li> -->
                    </ul> <button class="block p-3 mx-10 md:hidden hover:bg-gray-200 rounded-xl group">
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600"></div>
                        <div
                            class="absolute top-0 -right-full opacity-0 h-screen w-[60%] border bg-white group-focus:right-0 group-focus:opacity-100 transition-all ease-in duration-300 ">
                            <ul class="flex flex-col items-center text-[18px] pt-[60px]">
                            <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="home.php">Home</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="clubs.php">Our
                                    Clubs</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="notice.php">Notices</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="contact.php">Contact</a></li>
                                    <!-- <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3"><a href="login.html">Sign out</a></button> -->
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="../dashboard/dashboard.php">
                                            profile</a></li>
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="../index.php">Sign out</a></li>
                                <!-- <li
                                    class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                                    <a href="#">LogIn</a></li>
                                <li
                                    class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                                    <a href="#">SignUp</a></li> -->
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
    </div>
    <hr>
    <form action="" method="post">
    <div class="contact">

        <div class="grid md:block ">
            <div class="bg-gradient-to-r from-cyan-500 to-blue-500 h-72 flex justify-center w-full">
                <div class="mt-10 text-white text-4xl font-bold">GET IN TOUCH</div>
            </div>
            <div class="bg-white h-auto flex justify-center animate__animated animate__slideInDown">
                <div class="bg-white shadow-lg -mt-40 md:w-1/2 grid lg:flex justify-center">
                    <div class="w-3/4 lg:w-2/3 ">
                        <div class="text-lg font-medium text-blue-600 m-6 ">Drop a Message</div>
                        <div class=" flex lg:flex-row flex-col">
                            <div class="m-6">
                                <p class="text-sm text-stone-400">Full Name</p> <input required type="text"
                                    class="border-b-2 border-stone-400 text-stone-400 w-36" name="name" />
                                <p class="text-sm text-stone-400 mt-6">Email</p> <input required type="email"
                                    class="border-b-2 border-stone-400 text-stone-400 w-36" name="email" />
                            </div>
                            <div class="m-6 ">
                                <p class="text-sm text-stone-400">Phone</p> <input required type="number"
                                    class="border-b-2 border-stone-400 text-stone-400 w-36"  name="phone" id="phone"/>
                                <p class="text-sm text-stone-400 mt-6" >Subject</p> <input required 
                                    class="border-b-2 border-stone-400 text-stone-400 w-36" name="subject" id="subject" />
                            </div>
                        </div>
                        <div class="m-6 ">
                            <p class="text-sm text-stone-400 mt-6 ">Message</p><textarea rows="3" cols="10" required
                                class="border-b-2 border-stone-400 text-stone-400 w-36" name="message"></textarea>
                            <input type="submit" value="Send message" name="submit" class="m-4 mt-6 pl-4 pt-1 pb-1 pr-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-3xl text-white font-medium w-36 ">
                        </div>
                        <?php
                                                if (isset($error)) {
                                                echo $error;
                                                    }
                                                if(isset($noerror)){
                                                    echo $noerror;
                                                }
                                                ?>
                    </div>
                    <div class="lg:w-1/3 bg-green-500 ">
                        <div class="text-white m-6 font-medium"> Contact Information </div>
                        <div class="text-white m-6 text-sm flex">
                            <ion-icon name="location-sharp" class="m-2"></ion-icon>
                            <div> Shobhavana Campus, Mijar, Moodubidire - 574 225, Mangalore, DK </div>
                        </div>
                        <div class="text-white m-6 text-sm flex">
                            <ion-icon name="call-outline" class="m-2"></ion-icon>
                            <div>08258- 262724 / 25</div>
                        </div>
                        <div class="text-white m-6 text-sm flex">
                            <ion-icon name="mail-outline" class="m-2"></ion-icon>
                            <div>  principalaiet08@gmail.com </div>
                        </div>
                        <div class="text-white m-6 text-sm flex">
                            <ion-icon name="globe-outline" class="m-2"></ion-icon>
                            <div> <a href="http://www.aiet.org.in/">  https://www.aiet.org.in/ </a></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <script src="https://cdn.tailwindcss.com"></script>
            <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
    </div>
    </form>
</body>
</html>