<?php

include '../dbconnect.php';
  
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $message = $_POST['message'];
  $query = "INSERT INTO `feedback` (`email`, `message`) VALUES ('$email', '$message')";
  
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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    
    <link rel="icon" href="../images/sitelogo.png" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Home</title>
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
                                    
                                    <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                    href="../index.php">Sign out</a></li>
                        <!-- <li
                            class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                            <a href="#">LogIn</a></li>
                        <li
                            class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                            <a href="#">SignUp</a></li> -->
                    </ul> <button class="block p-3 mx-10 md:hidden hover:bg-gray-200 rounded-xl group ">
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

    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/feed1.png" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <div class="m-1 font-bold"></div>
                                    <div class="m-1">Mon, Jan 11 2021 05:42:43 PM</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">AIET  conducts disaster management training</div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#"> A three-day training on disaster management is underway at Alva's Institute of Engineering and Technology (AIET) organised by National Disaster Management Force (NDRF), here.

Speaking after inaugurating the training programme meant for NCC cadets, Mulky-Moodbidri MLA Umanath Kotian urged the students to serve the nation by joining the Indian army. “NCC will instil discipline and straightforwardness,” he said.</a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?boy" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2"><a href="https://www.daijiworld.com/news/newsDisplay.aspx?newsID=790167">daijiworld.com</a></div>
                                        <div class=" text-sm hover:text-gray-600">Moodbidri, Jan 11</div>
                                    </div>
                                </div>
                            </div>
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
    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/feed2.png" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">September 15, 2022 02:41 pm</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">Job fair at Moodbidri in coastal Karnataka  </div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">
The 12th edition of Alva’s Pragati, a job fair, will be organised at Alva’s Vidyagiri campus in Moodbidri on October 14 and 15 with the organisers claiming an overwhelmingly positive response from recruiting companies this year.

Alva’s Education Foundation Managing Trustee M. Vivek Alva told reporters in Mangaluru on September 15 that the fair, which was started in 2007 as a corporate social responsibility initiative of the foundation, could not be organised in the last two years due to the COVID-19 pandemic. The job fair is free of cost for job aspirants as well as participating companies.</a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?girl" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2"><a href="https://www.thehindu.com/news/cities/Mangalore/alvas-pragati-mega-job-fair-moodbidri-coastal-karnataka-october-14-15/article65894026.ece"></a>thehindu.com</div>
                                        <div class=" text-sm hover:text-gray-600">Mangaluru Sep 15</div>
                                    </div>
                                </div>
                            </div>
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
    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/feed3.png" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">December 08, 2022 10:51 pm </div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">Stellium Technology and Innovation Centre becomes operational at AIET </div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">Stellium Technology and Innovation Centre (STIC) by Stellium Inc., began its operation at Alva’s Institute of Engineering Technology, in Moodbidri on Thursday, after being inaugurated by Alva’s Education Foundation chairman M. Mohan Alva.

                                Stellium Inc. CEO Randeep Nambiar in his inaugural address said STIC would be a sight for Indian Industry along with Middle East and Asia specific clients. He told students: “At STIC, we innovate, design, build and deploy solutions; create beyond the tried and tested and we will be serving global and regional markets from our centre,” he added.


                                </a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?man" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2"><a href="https://www.thehindu.com/news/cities/Mangalore/stellium-technology-and-innovation-centre-becomes-operational-at-alvas-institute-of-engineering-technology/article66238891.ece">thehindu.com</a></div>
                                        <div class=" text-sm hover:text-gray-600"> Mangaluru Dec 08</div>
                                    </div>
                                </div>
                            </div>
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
    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/feed4.png" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">December 05, 2022 9:39 am </div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">Beach Clean</div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">On 5th Dec. 2021, NSS volunteers along with the members of various other clubs actively participated in the Beach Cleaning activity at Hejmadi Kodi Beach in association with the Mantra Surf Club, Mulki. Solid litter, glass bottles, plastics were segregated. </a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?woman" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2"><a href="https://www.aiet.org.in/clubs-activities/nss/">aiet.org.in</a></div>
                                        <div class=" text-sm hover:text-gray-600">Hejmadi Kodi Beach Dec 5</div>
                                    </div>
                                </div>
                            </div>
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
    <!-- <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img src="https://source.unsplash.com/700x350/?dance" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <div class="m-1 font-bold">Vlog,</div>
                                    <div class="m-1">31 March, 2023</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">The 8 Best City Lights In The World! </div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">There's something about city lights that
                                        make them so captivating and romantic. Maybe it's because they remind us of all the
                                        possibilities that exist in the world, or maybe it's because they're just so darn pretty
                                        to look at.
        
                                        No matter what the reason is, there's no denying that city lights are some of the most
                                        beautiful things in the world.</a></div>
                                <div class="flex cursor-pointer">
                                    <div class="m-2"> <img src="https://source.unsplash.com/50x50/?lady" alt=""
                                            class=" rounded-full" /> </div>
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2">Belen J. Cherry</div>
                                        <div class=" text-sm hover:text-gray-600">Greenville, NC 27858</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div> -->

    <div class="div animate__animated animate__fadeInUp">
        <form class="text-gray-600 body-font relative" action="" method="post">
            <div class="absolute inset-0 bg-gray-300">
              <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.1894699734935!2d74.96541281482257!3d13.02360329082181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba355f5ffc25cab%3A0x5ef9b57c1b6279cf!2sAlva&#39;s%20Institute%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1673792752516!5m2!1sen!2sin" style="filter: grayscale(3) contrast(1.2) opacity(0.4);"></iframe>
            </div>
            <div class="container px-5 py-24 mx-auto flex">
              <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">"Continuous improvement is better than delayed perfection" – Mark Twain</p>
                <div class="relative mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <input type="submit" name="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" value="SUBMIT" />
              </div>
            </div>
          </form>

    </div>
<hr>
<hr>
<div class="footer">

<footer class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
          <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
              <img src="../images/sitelogo.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="19 16 24 24" />
                <!-- <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path> -->
              
              <span class="ml-3 text-xl">AIET</span>
            </a>
            <p class="mt-2 text-sm text-gray-500">Alvas engineering college, Club membership management</p>
          </div>
          <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
            <div class="lg:w-3/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CONTACT US</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">ALVA’S INSTITUTE OF ENGINEERING & TECHNOLOGY <br>
Shobhavana Campus, Mijar, <br>
Moodubidire - 574 225, Mangalore, DK 
Karnataka State - INDIA.</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">College Phone: 08258- 262724 / 25</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Admission Cell: +91 8050585606</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Email: principalaiet08@gmail.com</a>
                </li>
              </nav>
            </div>
            <!-- <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div> -->
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">QUICK LINKS</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800" href="https://www.aiet.org.in/training-placement/">Training & Placement</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800" href="https://www.aiet.org.in/life-alvas/ ">Life @ Alvas</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800" href="https://www.youtube.com/channel/UCJv1H5ZiikrG5KSXfddsDUg ">Youtube</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800" href=" https://www.instagram.com/alvasengineeringofficial/">Instagram</a>
                </li>
              </nav>
            </div>
          </div>
        </div>
        <div class="bg-gray-100">
          <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <!-- <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
              <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
            </p> -->
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
              <a class="text-gray-500" href="https://www.facebook.com/aietmijar/">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href="https://twitter.com/aietmoodbidri">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href=" https://www.instagram.com/alvasengineeringofficial/">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href="https://www.linkedin.com/school/aietmijar/">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </footer>
</div>

</body>
</html>