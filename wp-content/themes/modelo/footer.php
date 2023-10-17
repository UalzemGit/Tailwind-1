<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Ili
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>




<footer>
    <div class="grid grid-cols-1 md:grid-cols-6 bg-black text-white p-4 md:p-20">
        <div class="md:col-span-1 pt-10 md:pt-0">
            <a href="#">
                <img class="w-20 md:w-132px" src="<?php echo get_stylesheet_directory_uri(); ?>/img/spotify-logo.png" alt="Spotify">
            </a>
        </div>
        <div class="md:col-span-1 pt-10 md:pt-4">
            <h3 class="uppercase text-gray-500 text-xs tracking-widest mb-5 font-bold">Empresa</h3>
            <ul>
                <li class="mb-5"><a href="#">Sobre</a></li>
                <li class="mb-5"><a href="#">Empregos</a></li>
                <li class="mb-5"><a href="#">For the Record</a></li>
            </ul>
        </div>

        <div class="md:col-span-1 pt-10 md:pt-4">
            <h3 class="uppercase text-gray-500 text-xs tracking-widest mb-5 font-bold">Comunidades</h3>
            <ul>
                <li class="mb-5"><a href="#">Para Artistas</a></li>
                <li class="mb-5"><a href="#">Desenvolvedores</a></li>
                <li class="mb-5"><a href="#">Publicidade</a></li>
                <li class="mb-5"><a href="#">Investidores</a></li>
                <li class="mb-5"><a href="#">Fornecedores</a></li>
            </ul>
        </div>

        <div class="md:col-span-1 pt-10 md:pt-4">
            <h3 class="uppercase text-gray-500 text-xs tracking-widest mb-5 font-bold">Links Úteis</h3>
            <ul>
                <li class="mb-5"><a href="#">Ajuda</a></li>
                <li class="mb-5"><a href="#">Player da web</a></li>
                <li class="mb-5"><a href="#">App móvel grátis</a></li>
            </ul>
        </div>

        <div class="md:col-span-2 pt-10 md:pt-4">
            <ul class="flex md:justify-end">
                <li class="flex items-center justify-center text-2xl bg-gray-900 w-12 h-12 rounded-full hover:text-green-main mx-2"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="flex items-center justify-center text-2xl bg-gray-900 w-12 h-12 rounded-full hover:text-green-main mx-2"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="flex items-center justify-center text-2xl bg-gray-900 w-12 h-12 rounded-full hover:text-green-main mx-2"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        </div>

        <div class="md:col-span-4 mt-20">
            <ul>
                <li class="inline-block text-xs text-gray-600 mr-4"><a href="#">Legal</a></li>
                <li class="inline-block text-xs text-gray-600 mr-4"><a href="#">Centro de Privacidade</a></li>
                <li class="inline-block text-xs text-gray-600 mr-4"><a href="#">Política de Privacidade</a></li>
                <li class="inline-block text-xs text-gray-600 mr-4"><a href="#">Cokies</a></li>
                <li class="inline-block text-xs text-gray-600 mr-4"><a href="#">Sobre Anúncios</a></li>
            </ul>
        </div>

        <div class="md:col-span-2 mt-20">
            <p class="flex justify-end text-gray-500 text-xs">&copy; <?php echo date('Y'); ?> Spotify AB</p>
        </div>
    </div>
</footer>








<?php wp_footer(); ?>






</body>

</html>