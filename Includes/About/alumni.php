<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            mode: 'jit',
            theme: {
                extend: {},
            },
            variants: {},
            plugins: [],
        }
    </script>
    <style>
        .swiper-container {
            width: 100vw; /* Full screen width */
            max-width: 100%;
            height: auto;
            overflow: hidden;
            position: relative;
            background: white;
            border-radius: 10px;
        }

        .swiper-wrapper {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .swiper-slide {
            min-width: 100%;
            text-align: center;
            font-size: 24px;
            padding: 20px;
        }

        .swiper-pagination {
            display: flex;
            justify-content: center;
            position: absolute;
            bottom: 10px;
            width: 100%;
        }

        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background-color: #999;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .swiper-pagination-bullet.active {
            background-color: #333;
        }

        .swiper-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }

        .swiper-button-prev {
            left: 10px;
        }

        .swiper-button-next {
            right: 10px;
        }
    </style>
</head>
<body>
<?php include '../navbar.php'; ?>
    <div class="flex flex-col gap-8 mt-[50px]">
        <div class="swiper-container  md:h-[500px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="../../Images/Alumni/0J5B1049-small.jpg" alt="swiper1" class="w-full h-full"></div>
                <div class="swiper-slide"><img src="../../Images/Alumni/0J5B1351.jpg" alt="swiper2" class="w-full h-full"></div>
                <div class="swiper-slide"><img src="../../Images/Alumni/0J5B1538.jpg" alt="swiper3" class="w-full h-full"></div>
                
            </div>
            <div class="swiper-pagination mt-[20px]"></div>
            <button class="swiper-button swiper-button-prev">&#10094;</button>
            <button class="swiper-button swiper-button-next">&#10095;</button>
        </div>
    </div>
   <div class="text-[30px] text-[black] mt-[10px] md:ml-[170px] ml-[20px]">Riverside School Alumni</div>
    <div class="video-container flex w-full mb-8 mt-4 justify-center items-center">
        <iframe class="md:w-[1000px] w-[95%] md:h-[550px] h-[350px]"
        src="https://www.youtube.com/embed/C4BDNNr2dhE"

            
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
        </iframe>
    </div>



    
    <div class="flex gap-[10px] md:ml-[200px] ml-[100px]">
        <!-- Facebook Icon -->
        <a href="https://www.facebook.com/riverside.mori" target="_blank" class="flex justify-center items-center w-10 h-10 border border-black text-black rounded-full hover:bg-black hover:text-white transition">
            <i class="fab fa-facebook-f text-lg"></i>
        </a>

        <!-- Follow Button -->
        <a href="https://www.facebook.com/riverside.mori" target="_blank" class="px-4 py-2 border border-black text-black rounded-md hover:bg-black hover:text-white transition">
            Follow
        </a>
    </div>



    <div class="max-w-6xl mx-auto grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 mt-[50px]">
        
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../../Images/Alumni/IMG_0051-400x250.jpg" alt="Alumni 1" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-semibold">Alumni Stories: Jasmine Ganta</h3>
                <p class="text-gray-500 text-sm">by ProjectIndiaAdmin | Jul 13, 2017</p>
                <p class="text-gray-700 mt-2">
                    Journey Back To Riverside Riverside School is not only a school, but has been a home for thousands of students over the past 20 years. For Jasmine, the Riverside Campus is deeply connected to her life journey. Starting in day care and attending all the way through 8th...
                </p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../../Images/Alumni/IMG_6293-e1512827554952.jpg" alt="Alumni 2" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-semibold">Alumni Stories: Yadla Ranisha</h3>
                <p class="text-gray-500 text-sm">by ProjectIndiaAdmin | Jul 3, 2017</p>
                <p class="text-gray-700 mt-2">Core values formed from life in hostel for Ranisha Yadla. Ranisha graduated from Riverside in 2007 and got her degree in Pharmacy Technology at Vishnu College in Bhimavaram. She now works at OPTUM in Bangalore as a medical coder. "My favorite memories were growing up...</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../../Images/Alumni/15896333_1191835657565504_5113375634876553096_o-e1512827610373.jpg" alt="Alumni 3" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-semibold">Alumni Stories: Harish Pindi</h3>
                <p class="text-gray-500 text-sm">by ProjectIndiaAdmin | Jul 3, 2017</p>
                <p class="text-gray-700 mt-2">Helping People Through Smart Village Harish, who studied at Riverside for his primary school years, is currently attending California State University, Northridge, getting his Master's Degree in Computer Science. He alwaysdreamed of doing something big with his life,...</p>
            </div>
        </div>

    </div>




    <script>
        const swiperWrapper = document.querySelector('.swiper-wrapper');
        const slides = document.querySelectorAll('.swiper-slide');
        const pagination = document.querySelector('.swiper-pagination');
        const prevButton = document.querySelector('.swiper-button-prev');
        const nextButton = document.querySelector('.swiper-button-next');

        let currentIndex = 0;
        const totalSlides = slides.length;

        // Create pagination bullets
        slides.forEach((_, index) => {
            const bullet = document.createElement('div');
            bullet.classList.add('swiper-pagination-bullet');
            if (index === 0) bullet.classList.add('active');
            pagination.appendChild(bullet);
            bullet.addEventListener('click', () => moveToSlide(index));
        });

        const bullets = document.querySelectorAll('.swiper-pagination-bullet');

        function updatePagination() {
            bullets.forEach((bullet, index) => {
                bullet.classList.toggle('active', index === currentIndex);
            });
        }

        function moveToSlide(index) {
            if (index >= 0 && index < totalSlides) {
                currentIndex = index;
                swiperWrapper.style.transform = `translateX(-${100 * currentIndex}%)`;
                updatePagination();
            }
        }

        // Button event listeners
        prevButton.addEventListener('click', () => moveToSlide(currentIndex - 1));
        nextButton.addEventListener('click', () => moveToSlide(currentIndex + 1));
    </script>
</body>
</html>
