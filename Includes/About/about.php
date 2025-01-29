<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'royal-blue': {
                            DEFAULT: '#4169E1',
                            '50': '#EEF1FC',
                            '100': '#D9E0F9',
                            '200': '#B0BFF2',
                            '300': '#879DEB',
                            '400': '#5E7CE4',
                            '500': '#4169E1',
                            '600': '#2650CB',
                            '700': '#1D3D9B',
                            '800': '#152B6B',
                            '900': '#0C1A3B',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @media (min-width: 1024px) {
            .group:hover .group-hover\:block {
                display: block;
            }
        }
        .swiper-slide img {             
            width: 100vw;             
            height: 80vh;             
            object-fit: cover;         
        }    
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php include '../navbar.php'; ?>

    <!-- Swiper Section -->
    <div class="flex items-center justify-center min-h-screen w-full">
        <div class="w-full h-screen">         
            <div class="swiper mySwiper relative w-full h-[80%]">             
                <div class="swiper-wrapper">                 
                    <div class="swiper-slide relative">                     
                        <img src="../../Images/Aug77-mori.jpg" alt="Image 1">                     
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-xl font-bold">Slide 1 Content</div>                 
                    </div>                 
                    <div class="swiper-slide relative">                     
                        <img src="../../Images/Subbamma-house-1974a.jpg" alt="Image 2">                     
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-xl font-bold">Slide 2 Content</div>                 
                    </div>             
                </div>             
                <div class="absolute inset-y-0 left-0 flex items-center px-4 z-10">                 
                    <button class="swiper-button-prev cursor-pointer text-white text-2xl">                     
                        <i class="fa-solid fa-chevron-left"></i>                 
                    </button>             
                </div>             
                <div class="absolute inset-y-0 right-0 flex items-center px-4 z-10">                 
                    <button class="swiper-button-next cursor-pointer text-white text-2xl">                     
                        <i class="fa-solid fa-chevron-right"></i>                 
                    </button>             
                </div>             
                <div class="swiper-pagination"></div> <!-- Pagination dots -->
            </div>     
        </div>  
        </div>   
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>     
        <!-- <script>         
            const swiper = new Swiper(".mySwiper", {             
                loop: false,             
                navigation: {                 
                    nextEl: ".swiper-button-next",                 
                    prevEl: ".swiper-button-prev",             
                },             
                pagination: {                 
                    el: ".swiper-pagination",                 
                    clickable: true,             
                },             
                allowSlidePrev: true,             
                allowSlideNext: true,             
                speed: 500,         
            });     
        </script>  -->

    <!-- Additional Content -->
    <div class="mt-[10px] mb-[20px]">
        <div class="flex flex-col gap-[30px] justify-center items-center">
            <img src="../../Images/20-21-transp.png"/>
            <div class="text-[40px] text-[gray] ">Our Emblem</div>
        </div>
        <div class="flex md:flex-row flex-col md:gap-[200px] gap-[40px] mt-[50px] justify-center items-center">
            <div class="flex flex-col gap-[5px] justify-center items-center">
                <div class="text-[20px] text-[gray] font-semibold">The Book</div>
                <div class="text-[gray]">Represents the Word of Knowledge</div>
            </div>
            <div class="flex flex-col gap-[5px] justify-center items-center">
                <div class="text-[20px] text-[gray] font-semibold">The Book</div>
                <div class="text-[gray]">Represents the Word of Knowledge</div>
            </div>
            <div class="flex flex-col gap-[5px] justify-center items-center">
                <div class="text-[20px] text-[gray] font-semibold">The Book</div>
                <div class="text-[gray]">Represents the Word of Knowledge</div>
            </div>
        </div>
        <div class="mt-[50px] flex justify-center items-center">
        <div class="bg-blue-500 md:h-[250px] h-[400px] p-[25px] w-[80%] flex justify-center items-center flex-col gap-[3px]">
            <div class="text-[30px] text-[white]">Our Commitment</div>
            <p class="text-[20px] text-[white]"><span class="font-bold">To provide </span>attention, love, and care for children entrusted to us in the spirit of Christ.</p>
            <p class="text-[20px] text-[white]"><span class="font-bold">To provide</span >help for the qualified underprivileged children through future scholarships. </p>
        </div>
    </div>
    
    
    <div class="text-center text-[50px] text-[gray] mt-[50px]">Heritage</div>
    
    <div class="flex md:flex-row gap-[30px] justify-center  flex-col mt-[30px]">
        <div class="md:w-[500px] text-center mt-[20px] w-[300px] ml-[30px]">
            <p class="text-[20px] text-[black]">
                <span class="font-bold">ONE WOMAN’S VISION</span>
                transformed her community through three generations of faith 
                and perseverance. A woman of courage and strength, Subbamma devoted her life to mirroring the love of Jesus. Project India
                 Compassion Trust continues her legacy by providing education,
                  health care, and spiritual care.
            </p>
        </div>
        <div ><img src="../../Images/Aug77-mori.jpg" class="md:h-[370px] md:w-[550px] h-[200px] w-[300px] ml-[30px]"/></div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>     
    <script defer>         
        const swiper = new Swiper(".mySwiper", {             
            loop: false,             
            navigation: {                 
                nextEl: ".swiper-button-next",                 
                prevEl: ".swiper-button-prev",             
            },             
            pagination: {                 
                el: ".swiper-pagination",                 
                clickable: true,             
            },             
            allowSlidePrev: true,             
            allowSlideNext: true,             
            speed: 500,         
        });     
    </script> 
</html>
