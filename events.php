<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Listing</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<body class="bg-gray-50 ">
<?php include 'Includes/navbar.php'; ?>
  <div class="container  m-auto mt-20">
    <div class="max-w-6xl mx-auto p-4">
        <!-- Top Navigation -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-6">
                <div class="flex items-center space-x-4">
                    <button class="text-royal-blue-600 hover:text-royal-blue-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button class="text-royal-blue-600 hover:text-royal-blue-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    <button class="text-gray-600 border text-[9px] px-2 py-1 rounded-sm text-royal-blue-800">Today</button>
                </div>
                <div class="flex items-center space-x-1">
                    <button id="calendar-trigger" class="text-xl font-semibold text-royal-blue-700 hover:text-royal-blue-500">
                        Upcoming
                    </button>
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
            <div class="relative inline-block text-left">
                <button id="viewToggle" class="text-gray-600 p-2">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <rect x="3" y="3" width="7" height="7" rx="1"/>
                        <rect x="14" y="3" width="7" height="7" rx="1"/>
                        <rect x="3" y="14" width="7" height="7" rx="1"/>
                        <rect x="14" y="14" width="7" height="7" rx="1"/>
                    </svg>
                </button>
                <div id="viewDropdown" class="hidden absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1">
                        <button class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <rect x="3" y="3" width="7" height="7" rx="1"/>
                                <rect x="14" y="3" width="7" height="7" rx="1"/>
                                <rect x="3" y="14" width="7" height="7" rx="1"/>
                                <rect x="14" y="14" width="7" height="7" rx="1"/>
                            </svg>
                            List
                        </button>
                        <button class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <rect x="3" y="4" width="18" height="16" rx="2"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                            </svg>
                            Month
                        </button>
                        <button class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <rect x="3" y="4" width="18" height="16" rx="2"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            Day
                        </button>
                    </div>
                </div>
            </div>
            <input type="text" id="calendar-input" class="hidden">
        </div>

        <!-- No Upcoming Events Section -->
        <div class="bg-gray-100 px-8 py-6 mb-6 text-center rounded-lg">
            <p class="text-gray-600">There are no upcoming events.</p>
        </div>

        <!-- Events List Section -->
        <div>
            <h2 class="text-lg font-semibold mb-4 text-royal-blue-800">Latest Past Events</h2>
            
            <!-- Event Items -->
            <div class="space-y-8">
                <!-- Alumni Reunion -->
                <div class="flex space-x-4">
                    <div class="text-center w-16">
                        <span class="text-sm text-gray-500 block">AUG</span>
                        <span class="text-2xl font-bold block text-royal-blue-900">25</span>
                        <span class="text-xs text-gray-500 block">2024</span>
                    </div>
                    <div>
                        <h3 class="font-semibold text-royal-blue-800">Alumni Reunion</h3>
                        <p class="text-sm text-gray-600 mt-1">Welcome to our Alumni Reunion! Join us for an evening of networking and catching up with fellow alumni. We'll enjoy live music and a buffet dinner.</p>
                    </div>
                </div>

                <!-- Children's Day -->
                <div class="flex space-x-4">
                    <div class="text-center w-16">
                        <span class="text-sm text-gray-500 block">NOV</span>
                        <span class="text-2xl font-bold block text-royal-blue-900">14</span>
                        <span class="text-xs text-gray-500 block">2024</span>
                    </div>
                    <div>
                        <h3 class="font-semibold text-royal-blue-800">Children's Day</h3>
                        <p class="text-sm text-gray-600 mt-1">Join us while the children in the school celebrate and enjoy engaging activities with a long drawn preparation.</p>
                    </div>
                </div>

                <!-- Independence Day -->
                <div class="flex space-x-4">
                    <div class="text-center w-16">
                        <span class="text-sm text-gray-500 block">AUG</span>
                        <span class="text-2xl font-bold block text-royal-blue-900">15</span>
                        <span class="text-xs text-gray-500 block">2024</span>
                    </div>
                    <div>
                        <h3 class="font-semibold text-royal-blue-800">Independence Day</h3>
                        <p class="text-sm text-gray-600 mt-1">Join us as we celebrate our nation's independence with a variety of patriotic songs, speeches, and games.</p>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
  </div>

    <script>
        // Calendar initialization
        const calendarInput = document.getElementById('calendar-input');
        const calendar = flatpickr(calendarInput, {
            inline: false,
            dateFormat: "Y-m-d",
            onChange: function(selectedDates, dateStr) {
                console.log('Selected date:', dateStr);
            }
        });

        document.getElementById('calendar-trigger').addEventListener('click', function() {
            calendar.toggle();
        });

        // View dropdown functionality
        const viewToggle = document.getElementById('viewToggle');
        const viewDropdown = document.getElementById('viewDropdown');

        viewToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            viewDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!viewDropdown.contains(e.target) && !viewToggle.contains(e.target)) {
                viewDropdown.classList.add('hidden');
            }
        });
    </script>
</body>
</html>