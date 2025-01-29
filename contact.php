<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Riverside Residential</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
<?php include 'Includes/navbar.php'; ?>
    <!-- Header Image -->
    <div class="w-full h-[400px] relative mt-[65px]">
        <img 
            src="./Images/bg.jpg"
            alt="Riverside Residential Building" 
            class="w-full h-full object-cover"
        />
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-10 py-8 ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            <!-- Left Column -->
            <div class="space-y-6">
                <h1 class="text-3xl text-gray-800">Contact Us</h1>

                <div class="space-y-2">
                    <p class="text-gray-800">Project India Compassion Trust</p>
                    <p class="text-gray-800">Mori, Moripodu 533250</p>
                    <p class="text-gray-800">East Godavari District, Andhra Pradesh</p>
                </div>

                <div class="space-y-2">
                    <p class="text-gray-800">
                        Email: <a href="mailto:pict@projectindia.org" class="text-blue-500">pict@projectindia.org</a>
                    </p>
                    <p class="text-gray-800">Phone: +91 08862-26492</p>
                </div>

                <button class="group px-6 py-2 text-blue-500 border border-blue-500 rounded hover:bg-gray-100 transition-colors">
                    Application Information 
                    <span class="inline-block ml-1 group-hover:translate-x-1 transition-transform">›</span>
                </button>
            </div>

            <!-- Right Column -->
            
<div class="space-y-4">
    <h2 class="text-2xl text-gray-800">Leave us a message!</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <input 
            type="text" 
            placeholder="Name" 
            class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded focus:border-blue-500 focus:outline-none transition-colors"
        />
        <input 
            type="email" 
            placeholder="Email Address" 
            class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded focus:border-blue-500 focus:outline-none transition-colors"
        />
    </div>
    
    <textarea 
        placeholder="Message" 
        rows="8"
        class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded resize-none focus:border-blue-500 focus:outline-none transition-colors"
    ></textarea>

    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <span class="text-gray-600">2 + 14 =</span>
            <input 
                type="text" 
                class="w-16 px-2 py-1 bg-gray-100 border border-gray-200 rounded focus:border-blue-500 focus:outline-none transition-colors"
            />
        </div>
        <button 
            type="submit" 
            class="group px-8 py-2 bg-blue-500 text-white rounded hover:bg-gray-600 transition-colors"
        >
            Submit
            <span class="inline-block ml-1 group-hover:translate-x-1 transition-transform">›</span>
        </button>
    </div>
</div>
    </div>
</body>
</html>