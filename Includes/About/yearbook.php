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
<body>
<?php include '../navbar.php'; ?>
    <div class="mt-[70px]">
        <div class="flex flex-col">
            <div>
                <img src="../../Images/Yearbook/DSC_0275-2.jpg" class="h-[500px] w-[100%]"/>
            </div>
            <div class="flex md:flex-row flex-col w-[100%]">
                <div class="flex-1">
                    <img src="../../Images/Yearbook/Screen-Shot-2017-12-07-at-7.03.19-PM.png" class="h-[150px] w-[100%]"/>
                </div>
                <div class="flex-1">
                    <img src="../../Images/Yearbook/Screen-Shot-2017-12-07-at-7.04.55-PM.png" class="h-[150px] w-[100%]"/>
                </div>
            </div>
        </div>     
    </div>

    <div class="flex md:flex-row gap-[80px] flex-col justify-center ml-[20px] mt-[50px] ">
    <div>
        <div class="flex flex-col justify-center items-center">
            <div class="flex md:flex-row flex-col">
                <div class="table-item border md:w-auto w-[250px] p-2 border-gray bg-white cursor-pointer" onclick="showContent('content1', this)">Riverside History</div>
                <div class="table-item border p-2 border-gray bg-gray-300 cursor-pointer" onclick="showContent('content2', this)">Alumni Stories</div>
                <div class="table-item border p-2 border-gray bg-gray-300 cursor-pointer" onclick="showContent('content3', this)">Student Life</div>
                <div class="table-item border p-2 border-gray bg-gray-300 cursor-pointer" onclick="showContent('content4', this)">Sports</div>
            </div>
            <div class="flex md:flex-row bg-gray flex-col">
                <div class="table-item p-2 md:w-auto w-[250px] border border-gray bg-gray-300 cursor-pointer" onclick="showContent('content5', this)">Student Portraits</div>
                <div class="table-item p-2 bg-gray-300 cursor-pointer" onclick="showContent('content6', this)">Smart Village</div>
            </div>
        </div>
    
    <div class="mt-4">
        <div id="content1" class="content text-center">[pdf-embedder url="https://projectindia.org/wp-content/uploads/2017/12/Student-Portraits.pdf" title="Riverside History"]</div>
        <div id="content2" class="content hidden text-center">[pdf-embedder url="https://projectindia.org/wp-content/uploads/2017/12/Student-Portraits.pdf" title="Alumni Stories"]</div>
        <div id="content3" class="content hidden text-center">[pdf-embedder url="https://projectindia.org/wp-content/uploads/2017/12/Student-Portraits.pdf" title="Student Life"]</div>
        <div id="content4" class="content hidden text-center"></div>
        <div id="content5" class="content hidden text-center">[pdf-embedder url="https://projectindia.org/wp-content/uploads/2017/12/Student-Portraits.pdf" title="Student Portraits"]</div>
        <div id="content6" class="content hidden text-center">[pdf-embedder url="https://projectindia.org/wp-content/uploads/2017/12/Student-Portraits.pdf" title="Smart Village"]</div>
    </div></div>

    <div><img src="../../Images/Yearbook/Table-of-contents-e1512654042656.jpg" class="md:w-[350px] w-[300px] h-[700px]"/></div>
</div>
    
    </div> 
    <script>
        function showContent(id, element) {
            document.querySelectorAll('.content').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.table-item').forEach(el => el.classList.remove('bg-white'));
            document.querySelectorAll('.table-item').forEach(el => el.classList.add('bg-gray-300'));
            
            document.getElementById(id).classList.remove('hidden');
            element.classList.add('bg-white');
            element.classList.remove('bg-gray-300');
        }
        document.addEventListener("DOMContentLoaded", function() {
            showContent('content1', document.querySelector('.table-item'));
        });
    </script>
</body>
</html>
