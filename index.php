<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
</head>
<body class="bg-white text-gray-900 font-sans">
    <?php include 'Includes/navbar.php'; ?>

    <!-- Hero Section -->
    <div class="relative w-full h-[350px] md:h-[650px] flex items-center justify-center bg-cover bg-center mt-[65px]" style="background-image: url('./Images/bg.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative text-center text-white">
            <h1 class="text-3xl md:text-5xl font-bold">Riverside International School</h1>
            <p class="text-lg md:text-xl mt-2">“Making His Name Known”</p>
        </div>
    </div>

    <!-- Our Vision Section -->
    <div class="bg-gray-100 py-12 px-6 md:px-8 text-center shadow-lg">
        <h2 class="text-3xl md:text-4xl font-semibold text-royal-blue-700">Our Vision</h2>
        <p class="text-gray-700 mt-2 max-w-6xl mx-auto text-xl md:text-2xl">
            To provide exceptional education in the sub-continent through an international school with cross-cultural and international exchange programs.
        </p>
    </div>

    <!-- Donation Section -->
    <div class="text-center py-10">
        <button class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg text-lg">DONATE</button>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto px-6 md:px-12 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center">
            <img src="./Images/meetOurStaff.jpg" alt="Meet Our Staff" class="w-50 h-50 md:w-[350px] md:h-[350px] rounded-full mx-auto object-cover">
            <p class="mt-4 font-medium text-royal-blue-700">Meet Our Staff</p>
        </div>
        <div class="text-center">
            <img src="./Images/joinOurSchool.jpg" alt="Join Our School" class="w-50 h-50 md:w-[350px] md:h-[350px] rounded-full mx-auto object-cover">
            <p class="mt-4 font-medium text-royal-blue-700">Join Our School</p>
        </div>
        <div class="text-center">
            <img src="./Images/cm.jpg" alt="News and Updates" class="w-50 h-50 md:w-[350px] md:h-[350px] rounded-full mx-auto object-cover">
            <p class="mt-4 font-medium text-royal-blue-700">News and Updates</p>
        </div>
    </div>

    <!-- Video and Goals Section -->
    <div class="container mx-auto px-6 md:px-12 py-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="video">
            <div class="relative w-full h-0 pb-[56.25%]">
                <iframe class="absolute top-0 left-0 w-full h-full" 
                    src="https://www.youtube.com/embed/DcbkuwA4uwg" 
                    frameborder="0" allowfullscreen>
                </iframe>
            </div>
        </div>
        <div class="goals bg-gray-1 p-2 md:p-10  rounded-lg shadow-sm">
            <h2 class="text-2xl font-bold text-royal-blue-700 mb-10 text-center">Our Goals</h2>
            <ul class="space-y-10 text-gray-700">
                <li class="flex space-x-4">
                    <i class="fa-regular fa-lightbulb text-royal-blue-700 fa-2x"></i>
                    <span><span class="font-bold text-royal-blue-300">To provide</span> the highest standard of curriculum through a blending of Indian and American educational concepts.</span>
                    
                </li>
                <li class="flex space-x-4">
                    <i class="fa-solid fa-globe text-royal-blue-700 fa-2x"></i>
                    <span><span class="font-bold text-royal-blue-300">To equip</span> students to deal with issues of the global community through a course of study enhanced with multi-cultural elements.</span>
                </li>
                <li class="flex space-x-4 ">
                    <i class="fa-solid fa-book text-royal-blue-700 fa-2x"></i>
                    <span><span class="font-bold text-royal-blue-300">To promote</span> the highest standards of self-discipline and character through emphasis on Biblically-based ethical and moral expectations.</span>
                </li>
                
            </ul>
        </div>
    </div>
</body>
</html>
