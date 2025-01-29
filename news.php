<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
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
<?php include 'Includes/navbar.php'; ?>
    <!-- Hero Image Section -->
    <div class="relative w-full h-80 sm:h-96 lg:h-[500px] mt-[65px]">
        <img src="./Images/news_hero_image.jpg" alt="Hero image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-12 text-royal-blue-800">Project India & Riverside School News</h1>

        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/sample_blogpost.jpg" alt="sample blogpost" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-blue-royal-900">Sample Blogpost</h2>
                    <div class=" text-sm mb-2 text-royal-blue-400">Mar 29, 2018 | 0 Comments</div>
                    <p class="text-gray-700 mb-4">Hello, my name is ramya, in last days in the campus conduct sports 9th &10th class students.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>

            <!-- Card 2-10 (repeated structure) -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/10th_farewell.jpg" alt="10th Class Farewell" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-royal-blue-900">10th Class Farewell</h2>
                    <div class="text-sm mb-2 text-royal-blue-400">Feb 27, 2018 | 0 Comments</div>
                    <p class="text-gray-700 mb-4"> The 10th Class Farewell was a bittersweet gathering of commemoration and celebration. On February 17, the Riverside staff, faculty, and 9th class students attended a ceremony to honor the beloved students who will soon graduate. The event was filled with joyous song...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>

            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/newyear.jpg" alt="Launching Off The New Year" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-royal-blue-900">Launching Off The New Year</h2>
                    <div class="text-sm mb-2 text-royal-blue-400">Jan 25, 2018 | 0 Comments</div>
                    <p class="text-gray-700 mb-4">Here at Project India, we ended 2017 and began 2018 with thoughtful reflections and praise for what God has done in our lives. We enjoyed beautiful holiday celebrations with the Riverside Staff, Smart Village team, and special guests. Randy Thompson...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>

            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/celebrating_children.jpg" alt="Celebrating the Children" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-royal-blue-900">Celebrating the Children</h2>
                    <div class="text-sm mb-2 text-royal-blue-400">Nov 21, 2017 | 0 Comments</div>
                    <p class="text-gray-700 mb-4">The school bustled with excitement as students prepared their dance performances, fixed their fancy dresses, and hung hundreds of balloons on campus. At Riverside, we celebrated Children’s Day with a festive program full of dance numbers, songs, and touching speeches....</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>

            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/American_nurses.jpg" alt="Riverside Welcomes American Nurses & Outreach Teams" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-royal-blue-900">Riverside Welcomes American Nurses & Outreach Teams</h2>
                    <div class=" text-sm mb-2 text-royal-blue-400">Jun 20, 2017 | 0 Comments</div>
                    <p class="text-gray-700 mb-4">One of the most fruitful times for Project India is every summer when American university and pastoral teams visit Mori to host conferences, youth outreach, and medical camps. Pastors Gerry and Kay Wilson from California…</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>

            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/step_for_smartvillage.jpg" alt="Another Step Forward For Smart Village" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-royal-blue-900">Another Step Forward For Smart Village</h2>
                    <div class="text-royal-blue-400 text-sm mb-2">Jun 19, 2017 | 0 Comments</div>
                    <p class="text-gray-700 mb-4">The foundation is still being laid for the Smart Village Project to begin implementing digital technologies in 456 villages. James Sider, founder of Apollo Fusion as part of Googlex, signed an MoU for clean energy technologies with Mr. Mutyala Naidu of A. Nannaya...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>

            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/Riverside_Student.jpg" alt="Riverside Student Reaches 1st In State Rank" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-royal-blue-900">Riverside Student Reaches 1st In State Rank</h2>
                    <div class="text-royal-blue-400 text-sm mb-2">Jun 19, 2017 | 0 Comments</div>
                    <p class="text-gray-700 mb-4">Pride of Riverside School - Valedictorian, School Captain  & First in the State! Two years ago, our chairman, Solomon Darwin, insisted on having a woman to lead the school’s student body, given that the school was started by his grandmother Subbamma. Vijitha was...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>

            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/inauguration.jpg" alt="Smart Village Inauguration" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-royal-blue-900">Smart Village Inauguration</h2>
                    <div class="text-royal-blue-400 text-sm mb-2">Jun 19, 2016 | 0 Comments</div>
                    <p class="text-gray-700 mb-4">Today, an inaugural ceremony was held in the Village of Mori to commence the prototyping for a scalable village leveraging Digital Technology and Open Innovation.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>

            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/Smart-Village-CBN.jpg" alt="Smart Villages MOU" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-royal-blue-900">Smart Villages MOU</h2>
                    <div class="text-royal-blue-400 text-sm mb-2">Jun 6, 2016 | 0 Comments</div>
                    <p class="text-gray-700 mb-4">Andhra Pradesh Governmnet and Chief Minister, Chandrababu Naidu approve and sign MOU for Smart Village Prototypes.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>

            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="./Images/prototyping_smart_villages.jpg" alt="Prototyping Smart Villages" class="w-full h-50 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-royal-blue-900">Prototyping Smart Villages</h2>
                    <div class="text-royal-blue-400 text-sm mb-2">Feb 6, 2016 | 0 Comments</div>
                    <p class="text-gray-700 mb-4">Solomon Darwin meets with Norwegian Business School to initiate smart village prototypes.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Read more</a>
                </div>
            </article>
        </div>
    </main>
</body>
</html>