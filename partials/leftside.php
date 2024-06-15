<?php 
function displayleftside(){
    ?> 
    <div class="sticky top-0 h-screen w-1/6 flex-col space-y-2 border-r bg-gray-100 md:flex overflow-y-auto">
        <a class="flex flex-col w-full cursor-pointer icenter-align space-y-2 px-3 py-2 hover:opacity-90" href="/">
            <img src="/images/brian01.jpg" alt="" class="h-20 w-20 rounded-full transform icenter-align hover:scale-110 transition duration-300">
            <div class="flex flex-col">
                <p class="font-sans font-bold text-gray-800">Mwangi Brian</p>
                <p class="font-display font-medium text-gray-600">Front-End Software Developer</p>
            </div>
        </a>
        <div class="flex w-full flex-col space-y-2 px-3 py-2">
            <a class="flex cursor-pointer items-center space-x-4 rounded p-2 hover:bg-gray-200    text-gray-700 
            <?php
            if($_SERVER['REQUEST_URI'] === "/"){
                // var_dump($_SERVER);
                echo "bg-white text-gray-800 border";
            } else{
                echo " text-gray-700 ";

            }
            ?>
            " href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3zm5 15h-2v-6H9v6H7v-7.81l5-4.5l5 4.5z"/><path fill="currentColor" d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity="0.1"/></svg>
            <p class="text-gray-800">Home</p>
        </a>
        <a class="flex cursor-pointer items-center space-x-4 rounded p-2 hover:bg-gray-200  text-gray-700 
        <?php
            if($_SERVER['REQUEST_URI'] === "/timeline"){
                // var_dump($_SERVER);
                echo "bg-white text-gray-800 border";
            } else{
                echo " text-gray-700 ";

            }
            ?>
        " href="/timeline">
        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20a2 2 0 1 0 4 0a2 2 0 1 0-4 0m0 0H4m10 0h6m-8-5l-2-2H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-3zm-2-7h4m-2-2v4"/></svg>
            <p class="text-gray-700">Timeline</p>
        </a>
        <a class="flex cursor-pointer items-center space-x-4 rounded p-2 hover:bg-gray-200  text-gray-700 
        <?php
            if($_SERVER['REQUEST_URI'] === "/about"){
                // var_dump($_SERVER);
                echo "bg-white text-gray-800 border";
            } else{
                echo " text-gray-700 ";

            }
            ?>
        " href="/about">
        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 9h2V7h-2m1 13c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m-1 15h2v-6h-2z"/></svg>
            <p class="text-gray-700">About</p>
        </a>
        <a class="flex cursor-pointer items-center space-x-4 rounded p-2 hover:bg-gray-200  text-gray-700 
        <?php
            if($_SERVER['REQUEST_URI'] === "/projects"){
                // var_dump($_SERVER);
                echo "bg-white text-gray-800 border";
            } else{
                echo " text-gray-700 ";

            }
            ?>
        " href="/projects"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="currentColor" d="M7.98 18.25c-.29-.9-.57-1.94-.76-3L6 16.07v2.98zM12 4.36S9 6.38 9 13c0 2.25 1 5 1 5h4s1-2.75 1-5c0-6.62-3-8.64-3-8.64M12 13c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2m6 6.05v-2.98l-1.22-.81c-.19 1.05-.47 2.1-.76 3z" opacity="0.1"/><path fill="currentColor" d="M14 11c0-1.1-.9-2-2-2s-2 .9-2 2s.9 2 2 2s2-.9 2-2m-6.02 7.25c-.29-.9-.57-1.94-.76-3L6 16.07v2.98zM12 2s5 2 5 11l2.11 1.41c.56.37.89 1 .89 1.66V22l-5-2H9l-5 2v-5.93c0-.67.33-1.29.89-1.66L7 13c0-9 5-11 5-11m0 2.36S9 6.38 9 13c0 2.25 1 5 1 5h4s1-2.75 1-5c0-6.62-3-8.64-3-8.64m6 14.69v-2.98l-1.22-.81c-.19 1.05-.47 2.1-.76 3z"/></svg>
        <p class="text-gray-700">Projects</p>
    </a>
    <a class="flex cursor-pointer items-center space-x-4 rounded p-2 hover:bg-gray-200  text-gray-700 " 
    <?php
            if($_SERVER['REQUEST_URI'] === "/techstack"){
                // var_dump($_SERVER);
                echo "bg-white text-gray-800 border";
            } else{
                echo " text-gray-700 ";

            }
            ?>
    href="/techstack">
    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 256"><path fill="currentColor" d="M234.36 170a12 12 0 0 1-4.36 16.37l-96 56a12 12 0 0 1-12.1 0l-96-56a12 12 0 0 1 12.09-20.74l90 52.48L218 165.63a12 12 0 0 1 16.36 4.37M218 117.63l-90 52.48l-89.95-52.48A12 12 0 0 0 26 138.37l96 56a12 12 0 0 0 12.1 0l96-56a12 12 0 0 0-12.1-20.74M20 80a12 12 0 0 1 6-10.37l96-56a12.06 12.06 0 0 1 12.1 0l96 56a12 12 0 0 1 0 20.74l-96 56a12 12 0 0 1-12.1 0l-96-56A12 12 0 0 1 20 80m35.82 0L128 122.11L200.18 80L128 37.89Z"/></svg>
        <p class="text-gray-700">Tech Stack</p>
    </a>
</div>
<p class="px-6  font-semibold">Resources</p>

<div class="flex w-full flex-col space-y-1 px-3 py-2">
<a class="flex cursor-pointer items-center space-x-4 rounded p-2 hover:bg-gray-200  text-gray-700 " target="_blank" href="https://linktr.ee/mwangi_brian"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="currentColor" d="m13.736 5.853l4.005-4.117l2.325 2.38l-4.2 4.005h5.908v3.305h-5.937l4.229 4.108l-2.325 2.334l-5.74-5.769l-5.741 5.769l-2.325-2.325l4.229-4.108H2.226V8.121h5.909l-4.2-4.004l2.324-2.381l4.005 4.117V0h3.472zm-3.472 10.306h3.472V24h-3.472z"/></svg>
<p class="text-gray-700">LinkTree</p>
</a>
<a class="flex cursor-pointer items-center space-x-4 rounded p-2 hover:bg-gray-200  text-gray-700 " target="_blank" href="https://docs.google.com/document/d/1LADcV4IhygMLxTdlN_teGl5draJ71iw6/edit"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M14 3v4a1 1 0 0 0 1 1h4"/><path d="M17 21H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7l5 5v11a2 2 0 0 1-2 2"/><path d="M11 12.5a1.5 1.5 0 0 0-3 0v3a1.5 1.5 0 0 0 3 0m2-4.5l1.5 6l1.5-6"/></g></svg>
<p class="text-gray-700">My CV</p>
</a>
</div>
<p class="px-6  font-semibold">Contact</p>
<div class="flex w-full flex-col space-y-1 px-3 py-2">
    <a target="_blank" class="flex cursor-pointer items-center space-x-3 rounded p-3 text-gray-700 hover:bg-gray-200 hover:text-gray-800  " href="mailto:wambuimwangibrian@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 20 20"><path fill="currentColor" d="M14.608 12.172c0 .84.239 1.175.864 1.175c1.393 0 2.28-1.775 2.28-4.727c0-4.512-3.288-6.672-7.393-6.672c-4.223 0-8.064 2.832-8.064 8.184c0 5.112 3.36 7.896 8.52 7.896c1.752 0 2.928-.192 4.727-.792l.386 1.607c-1.776.577-3.674.744-5.137.744c-6.768 0-10.393-3.72-10.393-9.456c0-5.784 4.201-9.72 9.985-9.72c6.024 0 9.215 3.6 9.215 8.016c0 3.744-1.175 6.6-4.871 6.6c-1.681 0-2.784-.672-2.928-2.161c-.432 1.656-1.584 2.161-3.145 2.161c-2.088 0-3.84-1.609-3.84-4.848c0-3.264 1.537-5.28 4.297-5.28c1.464 0 2.376.576 2.782 1.488l.697-1.272h2.016v7.057zm-2.951-3.168c0-1.319-.985-1.872-1.801-1.872c-.888 0-1.871.719-1.871 2.832c0 1.68.744 2.616 1.871 2.616c.792 0 1.801-.504 1.801-1.896z"/></svg>
    <p>Shoot me a Mail !</p>
</a>

<a target="_blank" class="flex cursor-pointer items-center space-x-3 rounded p-3 text-gray-700 hover:bg-gray-200 hover:text-gray-800  " href="https://www.linkedin.com/in/mwangi-brian-68732527b/"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1024 1024"><path fill="currentColor" d="M847.7 112H176.3c-35.5 0-64.3 28.8-64.3 64.3v671.4c0 35.5 28.8 64.3 64.3 64.3h671.4c35.5 0 64.3-28.8 64.3-64.3V176.3c0-35.5-28.8-64.3-64.3-64.3m0 736q-671.7-.15-671.7-.3q.15-671.7.3-671.7q671.7.15 671.7.3q-.15 671.7-.3 671.7M230.6 411.9h118.7v381.8H230.6zm59.4-52.2c37.9 0 68.8-30.8 68.8-68.8a68.8 68.8 0 1 0-137.6 0c-.1 38 30.7 68.8 68.8 68.8m252.3 245.1c0-49.8 9.5-98 71.2-98c60.8 0 61.7 56.9 61.7 101.2v185.7h118.6V584.3c0-102.8-22.2-181.9-142.3-181.9c-57.7 0-96.4 31.7-112.3 61.7h-1.6v-52.2H423.7v381.8h118.6z"/></svg>
<p>Text Me On LinkedIn !</p>
</a>
</div>
</div>
    <?php
}
?>