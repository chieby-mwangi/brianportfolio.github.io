<?php

require_once 'partials/leftside.php';
require_once 'partials/smnavbar.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal website">
    <meta name="keywords" content="Mwangi Brian, nairobi kenya , Self taught software Developer, frontend developer , backend developer , web and mobile app developer  ">
    <title>About Mwangi</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>
    <div>
        <div class="relative flex flex-col md:flex-row">
            <?php 
              displayLeftSide();
            ?>
             <?php 
              smnavbar();
            ?>
            <div class="mx-auto flex w-full flex-col justify-center md:max-w-screen-sm">
                <div class="flex flex-col space-y-5">
                    <h1 class="text-gray-700 font-bold md:text-[27px] sm:hidden md:flex xl:flex">ℹ️ About Me</h1>
                    <div class="mt-2 flex flex-col space-y-4">
                        <div class="flex flex-col-reverse md:flex-row">
                            <p class="prose prose-lg">I'm a Software Developer with a passion for all things tech. When I am not consumed by the glow of my Laptop screen I spend most of my time reading books on enterprenureship like <a target="_blank" href="/images/lean.pdf"  class="text-blue-600">The Lean Startup</a>. I like to collaborate on coding projects if this interest you let collaborate , <a class="text-blue-500" href="https://www.linkedin.com/in/mwangi-brian-68732527b/">Send me a text</a></p>
                        <img src=" images/brian01.jpg" alt="" class="float-right  mr-2 w-1/3 rotate-1 cursor-pointer rounded-md transition-all hover:rotate-3  hover:shadow-md">
                    </div>
                    <div class="flex flex-col-reverse md:flex-row">
                            <p class="prose prose-lg">I'm a Highly trained developer .
                            I've undergone extensive education to hone my skills from <a href="https://www.freecodecamp.org/" class="text-blue-600" target="_blank">freecodecamp</a>.
                                My journey has been marked by dedicated study sessions, hands-on projects, and comprehensive training modules. This commitment to continuous learning has equipped me with the expertise needed to tackle complex development challenges with confidence.
                            </p>
                        
                    </div>
                    <p class="text-xl font-semibold text-gray-800" data-sider-select-id="166f3e1d-8926-496d-bb11-88b66491be33">🛣️ My Career journey</p>
                    <p class="prose prose-lg">I'm currently working at <a target="_blank" href="">MicroInvestEd as the lead Front-End developer </a>.  I've spent most months building website but recently I have started developing Native Mobile Apps. If you're interested to know more you can contact on <a target="_blank" class="text-blue-500" href="https://www.linkedin.com/in/mwangi-brian-68732527b/">LinkedIn</a> 
                    <br>
                     Here is a summary below :</p>
                     <div class="flex flex-col space-y-2">
                        <div class="flex items-center space-x-4">
                            <a class="flex-none font-semibold text-gray-900" href="">MicroInvestEd</a>
                            <div class="w-full shrink border-t border-dashed border-gray-300"></div>
                            <div class="flex-none">Lead Front-End Developer</div>
                            <div class="flex-none text-gray-500">&nbsp;&nbsp;2024-*</div>
                        </div>
                    </div>
                    <p class="text-xl font-semibold text-gray-800">🕶️ Life Outside Development</p>
                    <div class="flex flex-col-reverse md:flex-row">
                            <p class="prose prose-lg">When I'm not coding, I devote my time to studying Pure Psychology at  <a target="_blank" href="https://kisiiuniversity.ac.ke/"  class="text-blue-600">Kisii University</a> in order to have an understanding of our mental status and challenges facing it and how they can be resolved using Tech.</p>
                        
                    </div>
                    <div class="horizontal-scroll">
                    </div>

                    <br>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>