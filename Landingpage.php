<!DOCTYPE html>
    <html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BRJ || Landing Page</title>
        <link rel="icon" href="https://media.discordapp.net/attachments/963226363362422794/1023559540899323914/iconbrj.png" type="image/x-icon">
        <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link rel="stylesheet" href="<?= base_url("application/assets/style.css") ?>">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Mukta:wght@500&family=Rubik:wght@600&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
       

    </head>
    <body class="bg-[#42C2FF] ">

    <!-- SPLASH -->
<div class="intro">
    <h1 class="logo-header">
        <span class="logo"><img src="https://media.discordapp.net/attachments/1022146956648271932/1023087963200040970/22467-big-house-home-building-maison-0012-mocca-animation.gif" width="900" alt=""></span>
    </h1>
</div>

<style>
.intro {
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        background-color: #FDFCFA;
        transition: 1s;
        overflow: hidden;
    }
    .logo-header{
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }
    .logo{
        position: relative;
        display: inline-block;
        bottom: -20px;
        margin-top: 10rem;
        opacity: 0;
    }
    .logo.active {
        bottom: 0;
        opacity: 1; 
        transition: ease-in-out 0.5s;
    }
    .logo.fade{
        bottom: 150px;
        opacity: 0;
        transition: ease-in-out 0.5s;
    }
</style>
        
<div class="mx-auto mt-48" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="">
            <div class="bg-white md:h-96 md:w-3/5 md:mx-12 md:py-5 md:rounded-md md:shadow-2xl mb-10 md:shadow-blue-500 flex items-center justify-center">
                <div class="mx-32">
                    <h1 class="text-4xl opacity-70 font-['Nunito Sans'] font-bold select-none">Spesialis</h1>
                    <br>
                    <h1 class="text-4xl opacity-70 font-['Nunito Sans'] font-bold select-none">Membantu Pengembangan</h1>
                    <br>
                    <h1 class="text-4xl opacity-70 font-['Nunito Sans'] font-bold select-none">Tugas</h1>
                    <p class="ml-1 mt-6 font-[400] font-['Nunito Sans'] opacity-70 text-lg select-auto">Basecamp menyediakan layanan yang membantu mengerjakan dan <br> pengembangan segala tugas untuk membantu mengoptimalkan nilai dan <br> memperindah warna rapor.</p>
                    <button class="mt-3 ml-[-6px] py-3 px-3 text-xl font-['Nunito Sans']  uppercase font-[350] opacity-80 hover:opacity-100 hover:border-b-4 rounded-tl-lg rounded-tr-lg border-blue-500 hover:pb-3 transition-all duration-300 ease-in-out hover:delay-50">Hubungi Kami</button>
                    <button class="py-3 ml-[-6px] px-3 text-xl font-['Nunito Sans'] uppercase font-[350] opacity-80 hover:hover:opacity-100 hover:border-b-4 rounded-tl-lg rounded-tr-lg border-blue-500 hover:pb-3 transition-all duration-300 ease-in-out hover:delay-50">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>
