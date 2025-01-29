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
            width: 90%;
            max-width: 600px;
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
        <div class="w-full h-[300px] md:h-[550px]">
            <img src="../../Images/studentgroup.jpg" alt="students" class="w-full h-full">
        </div>
        <div class="flex flex-col justify-center gap-10 mt-8 md:px-20">
            <div class="text-4xl md:text-4xl text-gray-800 font-semibold pl-6">Student Life</div>
            <div class="flex md:flex-row justify-center gap-4 items-center md:justify-evenly md:items-start  flex-col-reverse">
                <div class="flex flex-col gap-2">
                    <div class="text-xl text-gray-800 font-semibold">Life on Riverside campus involves:</div>
                    <ul class="list-disc">
                        <li>Rigorous academics</li>
                        <li>Competitive sports</li>
                        <li>Music & arts</li>
                        <li>Technology in the classroom</li>
                    </ul>
                </div>
                
                <div class="swiper-container md:w-[600px] md:h-[350px] w-[95%] h-[200px]">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="../../Images/swiperimg1.jpg" alt="swiper1" class="w-full h-full"></div>
                      <div class="swiper-slide"><img src="../../Images/swiperimg2.png" alt="swiper1" class="w-full h-full"></div>
                      <div class="swiper-slide"><img src="../../Images/swiperimg3.png" alt="swiper1" class="w-full h-full"></div>
                      <div class="swiper-slide"><img src="../../Images/swiperimg4.png" alt="swiper1" class="w-full h-full"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <button class="swiper-button swiper-button-prev">&#10094;</button>
                    <button class="swiper-button swiper-button-next">&#10095;</button>
                  </div>

            </div>
        </div>
        <div class="video-container flex w-full mb-8 mt-4 justify-center items-center">
          <iframe  class=" md:w-[1000px] w-[95%] md:h-[550px] h-[350px]"
          src="https://www.youtube.com/embed/GxkwBUp1gsA?si=KKtfHnzNFi0T3Ou3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen" 
            allowfullscreen>
          </iframe>
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
        prevButton.addEventListener('click', () => {
          moveToSlide(currentIndex - 1);
        });
    
        nextButton.addEventListener('click', () => {
          moveToSlide(currentIndex + 1);
        });
      </script>
    
</body>
</html>