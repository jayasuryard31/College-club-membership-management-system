<?php
include '../dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Our clubs</title>
    <link rel="icon" href="../images/sitelogo.png" />
</head>
<body>
    <div class="navbarheader animate__animated animate__fadeInDown">
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
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="../dashboard/dashboard.php">
                                dashboard</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="clubs.php">Our
                                Clubs</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="notice.php">Notices</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="contact.php">Contact</a></li>
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
                                        href="#">Home</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">About Us</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Our Services</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Portfolio</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Contact</a></li>
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

    <div class="clubs">
    <div class="flex justify-center ">
        <div class="flex flex-col justify-center items-center bg-slate-100 max-w-7xl">
            <div class="text-3xl text-green-600 font-bold mt-4 "><h2>OUR CLUBS</h2></div>
            <div class="text-2xl text-black font-bold mt-2 "> Enhance your college experience</div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase" ><a href="../ourclubs/Rostrum.php">1. Rostrum</a> </h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The Speakers’ Club at Alva’s is a platform for students to thought-process in various socio-cultural, 
                        political issues for over a decade. Rostrum brings in about 15 speakers a year and conducts activities like debate, panel discussion, campus parliament and many more.                                              </p>
                    <img src="../images/Rostrum.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1>
                    <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   "><a href="../ourclubs/Srishti.php"> 2. Srishti – The Nature Club</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]">Human being is one among the dependent species of the world. He needs valuable natural resources such 
                        as water fruits minerals etc for his living. He also depends on nature for his living and is also protected by the nature. Many a times he forgets his duty towards 
                        the very nature that has protected him so far.</p>
                    <img src="../images/srishti.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1>
                    <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   "><a href="../ourclubs/edwins.php"> 3. Edwin Linux Lab</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The Linux lab focusing on various training related to IoT based 
                        projects using Python Programming. Prof. Edwin will look after the Linux lab and providing
                         training to all the students time to time. Workshop on “Free Open Source Software- Bootable Linux OS Via Flash Drive” 
                         was conducted CSE/ECE and ISE students.</p>
                    <img src="../images/edwins.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1>
                    <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase  animate__animated animate__flipInY "><a href="../ourclubs/algori.php"> 4. Algories Club</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> As a part of activities conducted by Algoris Club, Prof. (Dr.) P Nagabhushan, Director, IIIT Alahabad gave a talk on “INTRODUCTION TO ALGORITHMS ” on 28th Sep, 2021. Students were introduced to Algorithm concepts.
                    </p>
                    <img src="../images/algori.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase  animate__animated animate__flipInY "><a href="../ourclubs/Apple.php">5. Apple iOS LAB</a> </h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The Certification Program is conducting in 2 different phases. First Phase is Training the
                         students to write small programs using swift C and executing it in XCode environment. Second Phase is the App Development phase. </p>
                    <img src="../images/ios.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1>
                    <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   "><a href="../ourclubs/nss.php">6. NSS</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]">An active NSS volunteer would have the exposure and
                         experience to be the following: An accomplished social leader, An efficient administrator.</p>
                    <img src="../images/NSS.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   "><a href="../ourclubs/ncc.php">7. NCC</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> Air Wing NCC (Flt-B) at Alva’s Institute of Engineering & Technology is affiliated to No. 06 Kar Air Sqn
                         NCC,<br> Mangalore in the year 2015.<br> Flt – B have authorized strength of 100 cadets..</p>
                    <img src="../images/ncc.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">8. Kannada Sangha</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> Establishing Kannada Sangha is a pioneer for engraving young minds towards compassion & inspiration of our ancestors. The purpose of this Kannada Sangha is to propagate Karnataka culture, Kannadigas and other like-minded people</p>
                    <img src="../images/Kannada.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">9. Tulu Sangha</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> Tulu is a Dravidian language spoken mainly in the south west part 
                        of the Indian state of Karnataka and also in the Kasaragod district of Kerala. The Tulu speaking region is often referred to as Tulu Nadu.</p>
                    <img src="../images/Tulu.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">10. Fine Art</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The aim of the fine arts club is to foster and artistic environment in our college and develop an appreciation of art and aesthetics in the student's community and also bring out the creative, expressive and aesthetic potential of each student..</p>
                    <img src="../images/fineart.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">11.Swachh Mijar</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]">Cleanliness is Next to Godliness”
                        The thought of the people to live in a healthier environment have been kindled by the launch of “Swach Bharat”  AIET,  was also inspired by the Swach Bharat drive and gave a clarion call for “Swachh Mijar” .</p>
                    <img src="../images/mijar.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">12.Reader’s Club</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> One of the main goals of the AIET is to prepare the students for professional world, including academics and corporate. “READERS CLUB” is another endeavor of AIET, aimed at providing a platform for students to enhance the general & technical knowledge.</p>
                    <img src="../images/readers.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">13. Chirpp Club</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> . Students were able to listen to the calls and observe their behaviors of birds. Students also learned how to use the field guides and wanted to purchase the ‘Birds of Shobavana’ book published by the chirpp club.</p>
                    <img src="../images/chirp.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">14. Photography Club</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]">IMAGE IN – A PHOTOGRAPHY CLUB has been started with the main intention to generate photography skills among the students <br><br></p>
                    <img src="../images/photo.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">15. Language Lab</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The language lab is an initiative taken by the institute to improve learning & reading and presenting skills, where in 40 students per batch are accommodated with A/V facility with a language software and interactive programs..</p>
                    <img src="../images/lang.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">16. Adyathma</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> To synergize and embellish wisdom and practices of individuals to enable them to lead principle-centered life and offer practical holistic services to the modern society. <br><br><br></p>
                    <img src="../images/adhyathma.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">17. Life Skills (Yoga, Physical Fitness, Hygiene)</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> a group of psychosocial competencies and interpersonal skills that help people make informed decisions, solve problems, think critically and creatively, communicate effectively, build healthy relationships</p>
                    <img src="../images/yoga.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">18.Women Empowerment Cell</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The WEP Cell of Alva’s Institute of Engineering and Technology has been formed with the following objectives

                        To identify and promote the growth of young women students as individuals in their own right.</p>
                    <img src="../images/women.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">19.Sports</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> AIET has the best sports infrastructure for the development of sports talent in India.  This has made AIET a force to reckon with in sports across all events..</p>
                    <img src="../images/sport.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
            </div>
            </div>
        </div>
    </div> 
</div>
</body>
</html>