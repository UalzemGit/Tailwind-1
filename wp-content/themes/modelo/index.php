<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dentalis
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>











<!--  SLIDER USANDO O SWIPPER  -->
<!-- https://swiperjs.com/get-started  -->
<!-- Slider main container -->


















<h1 class="text-center p-10">AQUI A PÁGINA INDEX DO SITE</h1>
<button class="btn-ualzem m-auto">UALZEM</button>

<!--  container no tailwind:  -->
<section class="first-container bg-yellow-200 pb-8">
    <h1 class="text-center p-10 text-2xl">CRIANDO O PRIMEIRO CONTAINER:</h1>
    <div class="container bg-red-300 mx-auto p-6 m-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste odio! Consequatur repudiandae eum perspiciatis saepe porro ullam, quidem nesciunt officiis placeat exercitationem qui. Dicta iste voluptate eum quia quasi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste odio! Consequatur repudiandae eum perspiciatis saepe porro ullam, quidem nesciunt officiis placeat exercitationem qui. Dicta iste voluptate eum quia quasi.</p>
    </div>
</section>


<!-- border box e box content  
<section class="border-boox my-10">
    <div class="container bg-purple-600 border-box p-10">
        <h2>BORDER BOX</h2>
    </div>
    <div class="container bg-teal-500 box-content p-8">
        <h2>BOX CONTENT</h2>
    </div>
</section>

-->


<!-- OVERFLOW  -->
<div class="overflow-auto h-16 m-6 bg-red-400">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae temporibus itaque mollitia maiores exercitationem pariatur porro cupiditate veniam adipisci? Nostrum neque amet, sint aspernatur quo unde recusandae natus ex.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae temporibus itaque mollitia maiores exercitationem pariatur porro cupiditate veniam adipisci? Nostrum neque amet, sint aspernatur quo unde recusandae natus ex.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae temporibus itaque mollitia maiores exercitationem pariatur porro cupiditate veniam adipisci? Nostrum neque amet, sint aspernatur quo unde recusandae natus ex.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae temporibus itaque mollitia maiores exercitationem pariatur porro cupiditate veniam adipisci? Nostrum neque amet, sint aspernatur quo unde recusandae natus ex.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae temporibus itaque mollitia maiores exercitationem pariatur porro cupiditate veniam adipisci? Nostrum neque amet, sint aspernatur quo unde recusandae natus ex.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae temporibus itaque mollitia maiores exercitationem pariatur porro cupiditate veniam adipisci? Nostrum neque amet, sint aspernatur quo unde recusandae natus ex.</p>
</div>




<!--  POSITIONS: -->
<div class="relative h-20 bg-yellow-400">
    <div class="absolute w-10 h-10 bg-purple-600 bottom-6 left-1/2">

    </div>
</div>




<section class="flexbox-tailwinds bg-blue-950 my-20 text-center pb-10">
    <h1 class="text-white py-10">SESSÃO DE FLEXBOX COM TAILWIND</h1>
    <div class="flex flex-row">
        <div class="bg-red-600 p-6 m-2">row</div>
        <div class="bg-red-600 p-6 m-2">row</div>
        <div class="bg-red-600 p-6 m-2">row</div>
    </div>

    <div class="flex flex-col">
        <div class="bg-red-600 p-6 m-2">column</div>
        <div class="bg-red-600 p-6 m-2">column</div>
        <div class="bg-red-600 p-6 m-2">column</div>
    </div>
</section>


<!--  GRID NO TAILWIND:  -->
<section class="grid-tailwinds bg-green-900 my-20 text-center pb-10">
    <h1 class="text-white py-10">SESSÃO DE GRID COM TAILWIND</h1>
    <div class="grid grid-cols-3 gap-2">
        <div class="bg-red-400">01</div>
        <div class="bg-red-400">02</div>
        <div class="bg-red-400">03</div>

    </div>
</section>

<!-- ******** A PARTIR DAQUI USAREI AS CUSTOMIZAÇÕES PERSONALIZADAS PARA TAILWIND  ***** -->
<section class="customizandotail text-7xl">
    <!-- VAMOS CONFIGURAR AS CUSTOMIZAÇÕES LÁ NO tailwind.config -->
    <!-- USANDO AS NOVAS REGRAS QUE CRIEI NO tailwind.config -->
    <h1 class="text-black-ualzem">O NOVO PRETO</h1>
    <h1 class="tex-red-ualzem">O NOVO VERMELHO</h1>
    <h1 class="text-pink-ualzem">A NOVA COR UALZEM</h1>
    <h1 class="text-black-ualze text-ualzem-size">Nova Font Size Ualzem</h1>
    <p class="text-ualzem-paragrafo">MEU NOVO SIZE PARÁGRAFO: Cupiditate sequi voluptatibus, aliquam accusantium repellendus, similique molestiae quia eos in odio id molestias eligendi, quos culpa consequatur labore doloremque impedit ullam?</p>
    <div class="m-6 text-center text-ualzem-paragrafo">
        <h1><a href="http://teste-tailwind-00.local/spotify-clone/">PÁGINA CLONE SPOTIFY USANDO TAILWIND - PROJETO 1 DO CURSO</a></h1>
    </div>
</section>








<?php
get_footer();
