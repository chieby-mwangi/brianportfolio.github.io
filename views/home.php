<?php

require_once 'partials/leftside.php';
require_once 'partials/smnavbar.php';
require_once 'api/latestproject.php';
require_once 'api/language.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal website">
    <meta name="keywords" content="James Omwoyo, nairobi kenya , Self taught software engineer , developer , full stack developer , frontend developer , backend developer , web and mobile app developer  ">
    <title>Mwangi Brian</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
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
            

           

            <div class="mx-auto flex w-full max-w-screen-[768px] overflow-y-auto px-3 py-8">
                <div class="w-90%">
                    <div class="xl:px-[27%] flex w-full flex-col justify-center md:max-w-screen-[640px]">
                        <div class="flex flex-col space-y-6">
                          <h1 class="text-gray-700 font-bold md:text-[27px]">
                            <?php
                            date_default_timezone_set('Africa/Nairobi');
                            $current_hour = date(' H');
                            if ($current_hour >= 5 && $current_hour < 12) {
                                echo "Good morning 👋";
                            } elseif ($current_hour >= 12 && $current_hour < 18) {
                                echo "Good afternoon 👋";
                            } else {
                                echo "Good evening 👋";
                            }
                            

                            ?>
                            
                            
                            </h1>
                          <h2 class="leading-1 text-base font-normal text-gray-600">My name is Mwangi .Welcome to my small courner of the web !<br> I'm a Software Builder who loves building <span class="undeline">useful</span> software products</h2>
                          <div class="flex flex-col space-y-4 ">
                            <div class="flex items-center justify-between">
                                <p class="font-semibold text-gray-800">What have I been building of late....</p>
                                <a class="underline " href="/timeline">See All</a>
                            </div>
                            <div class="grid grid-cols-1 gap-3 md:grid-cols-4">
                            <?php 
                            $count = 0;
                            foreach ($timelines as $project): 
                            if($count >= 4) break;
                            ?>
                               <a class="flex h-full cursor-pointer flex-col space-y-2 overflow-hidden rounded-sm border bg-white px-3 py-2 hover:bg-gray-200 md:h-auto" href="https://www.npmjs.com/package/@damunga/githistory">
                                 <p class="font-semibold text-gray-800"><?php echo $project['title']; ?></p>
                                 <p class="flex-1 text-sm font-normal text-gray-500"><?php echo $project['description']; ?></p>
                                 <p class="text-sm bg-gray-100 p-1 uppercase tracking-widest text-gray-500"><?php echo $project['tag']; ?></p>
                               </a>
                               <?php $count++; endforeach; ?>
                            </div>

                            <div class="flex items-center justify-between">
                                <p class="font-semibold text-gray-800">Here are some of my Tech Stack....</p>
                                <a class="underline " href="/techstack">See All</a>
                            </div>
                            <div class="grid grid-cols-1 gap-3 md:grid-cols-4">
                              <?php foreach ($homelanguages as $homelanguage): ?>
                                <a target="_blank" class="flex h-full cursor-pointer  flex-col space-y-2 overflow-hidden rounded-sm border bg-white px-3 py-2 hover:bg-gray-200 md:h-auto" href="<?php echo $homelanguage['url'] ?>">
                                    <p class="font-semibold px-5 text-gray-800"><?php echo $homelanguage['title']; ?></p>
                                    <p class="flex-1 text-sm px-8 font-normal text-gray-500"><?php echo $homelanguage['svg']; ?></p>
                                    
                                </a>
                                <?php endforeach; ?>
                            </div>

                            <div class=" items-center justify-between">
                                <div class="flex items-center justify-between">
                                <p class="font-semibold text-gray-800 text-[23px]">ℹ️ Dev Tips🤔 !</p>
                                <a class="underline " href="/about">Learn More About Me</a>
                                </div>
                                
                                <blockquote>In my life as a developer I have Learned that the following soft skills are key to a high quality and scalable software product:
                                    <ul>
                                        <li>1. Collaboraion</li>
                                        <li>2. Communication</li>
                                        <li>3. Flexibility</li>
                                    </ul>
                                </blockquote>
                            </div>
                            <br>
                            <div class="flex items-center justify-between">
                                <p class="font-semibold text-gray-800" data-sider-select-id="482cd9ce-1ca8-4f1a-82f2-d1ff02671eda">What I am to ship very soon....</p>
                                <?php
                                if (count($projectpages) > 1) {
                                    echo '<a class="underline" href="/projects">See All</a>';
                                }
                                ?>
                            </div>
                            <div class="grid grid-cols-1 gap-3">
                            <?php 
                            $counter = 0;
                            foreach ($projectpages as $projectpage): 
                                if ($counter >= 2) break;
                                ?>
                                <a class="flex h-[200px] cursor-pointer flex-col items-center space-x-4 rounded-md  border  hover:bg-gray-200 md:h-[180px] md:flex-row md:border-none " href="https://cucopy.com">
                                    <div class="h-full w-full rounded-md bg-cover bg-center md:w-1/3" style="background-image:url(images/<?php echo $projectpage['img']; ?>)">
                                </div>
                                <div class="flex w-full flex-col items-start space-y-2 p-2">
                                    <div class="flex items-center space-x-2 text-xl font-semibold text-gray-800">
                                        <img src="images/<?php echo $projectpage['img']; ?>" class="w-5" alt="">
                                        <div><?php echo $projectpage['title']; ?></div>
                                    </div>
                                    <p class="flex-1 text-sm font-normal text-gray-500"><?php echo $projectpage['description']; ?></p>
                                    <p class="text-sm uppercase underline  tracking-widest text-gray-500"><?php echo $projectpage['date']; ?></p>
                                </div>
                            </a>
                        
                        <?php 
                         $counter++; 
                        endforeach; ?>

                        <div class="overflow-x-auto">
                    </div>
                           
        </div>
    </div>
    
</div>
</div>
</div>
</div>
    </div>

    <script src="script.js"></script>
    
</body>
</html>