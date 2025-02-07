<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <title>Faculty</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
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
        <style>
            @media (min-width: 1024px) {
                .group:hover .group-hover\:block {
                    display: block;
                }
            }
        </style>
    </head>
    <body>
        <?php include '../navbar.php'; ?>
    <div class="p-[10px] mt-[50px]">
            <div><img src="../../Images/Faculty & Staff _ Project India/DSCN1784.jpg"alt="name"class="w-full"></div>
            <div class="flex flex-col pt-[20px] lg:pl-[200px] lg:pr-[200px]">
            <div class="text-4xl pt-[10px] p-[20px]">Faculty and Staff</div>
            <div class="pt-[30px] pb-[20px] text-2xl p-[20px]">Management</div>
            <div class="flex flex-wrap gap-[70px] md:justify-center lg:justify-start justify-center p-[20px]">
                <div class="flex flex-col ">
                    <div><img src="../../Images/Faculty & Staff _ Project India/First.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                    <div class="text-blue-500 text-xl w-[170px] font-bold">Prof. Solomon Darwin</div>
                    <div class="lw-[170px] pt-[15px]">UC Berkeley</div>
                    <div class="w-[170px]">Chairman, Project India</div>
                </div>
                <div class="flex flex-col ">
                    <div><img src="../../Images/Faculty & Staff _ Project India/Second.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                    <div class="text-blue-500 text-xl w-[170px] font-bold">Prof. Mattew Sanders</div>
                    <div class="w-[200px] pt-[15px]">Azusa Pacific University, CA, USA
                        International Superintendent, Riverside School, Project India</div>
                   
                </div>
                <div class="flex flex-col ">
                    <div><img src="../../Images/Faculty & Staff _ Project India/Third.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                    <div class="text-blue-500 text-xl w-[170px] font-bold">Pastor Vijayam</div>
                    <div class="w-[170px] pt-[15px]">Board Member, Project India</div>
                    
                </div>
                <div class="flex flex-col ">
                    <div><img src="../../Images/Faculty & Staff _ Project India/Fourth.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                    <div class="text-blue-500 text-xl w-[170px] font-bold">Prof. Solomon Darwin</div>
                    <div class="w-[170px] pt-[15px]">Judah Darwin</div>
                    <div class="w-[170px]">CEO, Project India</div>
                </div>
                <div class="flex flex-col ">
                    <div><img src="../../Images/Faculty & Staff _ Project India/Fifth.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                    <div class="text-blue-500 text-xl w-[170px] font-bold">Kishore Babu Yelurin</div>
                    <div class="w-[170px] pt-[15px]">MA, B.Ed, TPT, B.Li.Sc</div>
                    <div class="w-[170px]">Headmaster, Riverside School</div>
                </div>
                <div class="flex flex-col ">
                    <div><img src="../../Images/Faculty & Staff _ Project India/Sixth.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                    <div class="text-blue-500 text-xl w-[170px] font-bold">Martha Nalli</div>
                    <div class="w-[170px] pt-[15px]">Facilities Manager, Project India</div>
                   
                </div>
                
            </div>

                    <div class="text-2xl font-semibold p-[20px]">Faculty & Staff</div>
                    <di class="flex flex-wrap gap-[70px] md:justify-center lg:justify-start justify-center p-[20px]">
                        <div class="flex flex-col md:pt-[40px]">
                            <div><img src="../../Images/Faculty & Staff _ Project India/New.jpg" class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Annela Flores</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">B.A. Music Therapy</div>
                            <div class="w-[170px]">Music Teacher</div>
                        </div>
                        <div class="flex flex-col md:pt-[40px]">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Eight.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">Bharat P</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">M.S.C. Physics</div>
                            <div class="w-[170px]">Physics, Classes 6-10</div>
                        </div>
                        <div class="flex flex-col md:pt-[40px]">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Nine.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Elsu Matthew</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">N.TTC</div>
                            <div class="w-[170px]">English, EVS</div>
                        </div>
                        <div class="flex flex-col lg:pt-[40px]">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Tenth.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Ch.Sarada Lakshmi</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">M.A. Hindi HPT</div>
                            <div class="w-[170px]">B.A.(Sp. Telugu) B.Ed</div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Eleven.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">Elsu Mathew</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">N.TTC</div>
                            <div class="w-[170px]">English,EVS</div>
                           
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twelve.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">G.Ganapati Rao</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">M.A. Hindi HPT</div>
                            <div class="w-[170px]">Hindi, Classes 6-10</div>
                            
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Thirteen.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Helen Chevakula</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">Receptionist</div>
                            <div class="w-[170px]">Diploma in Civil</div>

                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Fourteen.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Indira Thota</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">6-10 Biology</div>
                            <div class="w-[170px]">Bsc.Bed, MA (English)</div>
                          
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Fifteen.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Joby Mathew</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">Hostel Warden

                            </div>
                          
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Sixteen.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">John Adabala
                            </div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">Book Keeping</div>
                           
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Seventeen.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Laxmi Nedunuri</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">B.A. B.Ed (HPT)</div>
                            <div class="w-[170px]">Hindi, Classes 1-5</div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Eighteen.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Manswitha J
                            </div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">B.tech</div>
                            <div class="w-[170px]">Class 1&2</div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Nineteen.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">Mary k</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">U.K.G</div>

                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twenty.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Matthews Thankachan</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">BA, D.Ed</div>
                            <div class="w-[170px] pt-[15px]">Social Studies</div>
                            
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twentyone.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">Prasanthi</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">PT</div>
                           
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twentytwo.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Pushpa Maity</div>
                         
                            <div class="w-[170px]">Lower Kindergarten</div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twentythree.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Rajesh Kollabathula
                            </div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">B.tech,</div>
                            <div class="w-[170px]">Maths Class (6 -10)</div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twentyfour.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class=" text-xl w-[170px] font-bold">Rambabu</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">B.com(B.E.D)</div>
                            <div class="w-[170px]">Social Studies(6-10)</div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twentyfive.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">Sarah Geddam</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">B.A. B.Ed</div>
                            <div class="w-[170px]">Telugu, Classes 1-5</div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twentysix.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">Sasi Chellaboina</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">MBA</div>
                            <div class="w-[170px]">Computer,
                                Classes 1-9</div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twentyseven.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">Smily Choppala</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">B.Tech</div>
                            <div class="w-[180px] pt-[15px]">Mathematics, Classes 1-5</div>
                           
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twentyeight.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">surya jyothi J</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">B.sc(B.E.D)</div>
                            <div class="w-[170px] pt-[15px]">class 1</div>
                            
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Twentynine.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">SusanThankachan</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">English,Classes 3-6</div>
                            <div class="w-[170px]">MA, B.ed</div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Thirty.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">Treesamma Joseph</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">M.A English</div>
                            <div class="w-[170px]">HighSchool English Teacher
                                </div>
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Thirtyone.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">Sameera Jillella</div>
                            
                        </div>
                        <div class="flex flex-col ">
                            <div><img src="../../Images/Faculty & Staff _ Project India/Thirtytwo.jpg"class="w-[300px] h-[300px] lg:w-[200px] lg:h-[200px]"></div>
                            <div class="text-xl w-[170px] font-bold">William</div>
                            <div class="text-gray-400 w-[170px] pt-[15px]">Account Section</div>
                          
                        </div>
                       
                    </div>
                </div>


       
            </div>
    </body>
</html>