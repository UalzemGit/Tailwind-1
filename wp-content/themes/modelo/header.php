<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php wp_title(); ?></title>
   <?php wp_head(); ?>




   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   <!-- swiper css:  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body <?php body_class(); ?>>




   <header>
      <div class="flex bg-black w-full px-3 md:px-20 py-4">

         <div class="container flex items-center mx-auto">

            <div>
               <a href="#">
                  <img class="w-20 md:w-125px" src="<?php echo get_stylesheet_directory_uri(); ?>/img/spotify-logo.png" alt="Spotify">
               </a>
            </div>

            <div class="flex justify-end flex-1 md:hidden text-white text-3xl">
               <i class="fas fa-bars"></i>
            </div>

            <div class="items-end flex-1 text-white font-bold hidden md:flex">
               <nav class="flex-1">
                  <ul class="flex justify-end flex-1">
                     <li class="px-4 hover:text-hoverspt text-sm">
                        <a href="#">Premium</a>
                     </li>

                     <li class="px-4 hover:text-hoverspt text-sm">
                        <a href="#">Ajuda</a>
                     </li>

                     <li class="px-4 hover:text-hoverspt text-sm">
                        <a href="#">Baixar</a>
                     </li>

                     <li class="px-4 hover:text-hoverspt text-sm">
                        <a href="http://teste-tailwind-00.local/">Home</a>
                     </li>

                     <li class="px-4 hover:text-hoverspt text-sm">
                        <span class="border-r border-white"></span>
                     </li>

                     <li class="px-4 hover:text-hoverspt text-sm">
                        <a href="#">Log In</a>
                     </li>

                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </header>