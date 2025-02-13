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
</head>
<body>
    <div class="flex flex-col items-center justify-center gap-4">
    <?php include '../navbar.php'; ?>
        <div class="w-[96%] md:w-[80%] mx-auto overflow-x-auto mt-[70px]">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <!-- Table Title Row -->
                <thead>
                  <tr class="bg-blue-600">
                    <th colspan="5" class="text-3xl text-gray-700 text-center py-3  font-bold">Tuition</th>
                  </tr>
                  <!-- Table Header Row -->
                  <tr class="bg-yellow-500 text-center text-lg text-gray-800">
                    <th class="border border-gray-300 px-4 py-2">Class</th>
                    <th class="border border-gray-300 px-4 py-2">Current Year School Annual Fees</th>
                    <th class="border border-gray-300 px-4 py-2">Monthly Fees</th>
                    <th class="border border-gray-300 px-4 py-2">Admission Fees</th>
                    <th class="border border-gray-300 px-4 py-2">Application Fees</th>
                  </tr>
                </thead>
          
                <!-- Table Body -->
                <tbody class="bg-white text-center text-gray-700 text-lg font-semibold">
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">LKG</td>
                    <td class="border border-gray-300 px-4 py-2">7800</td>
                    <td class="border border-gray-300 px-4 py-2">650</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">UKG</td>
                    <td class="border border-gray-300 px-4 py-2">7800</td>
                    <td class="border border-gray-300 px-4 py-2">650</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">I</td>
                    <td class="border border-gray-300 px-4 py-2">8160</td>
                    <td class="border border-gray-300 px-4 py-2">680</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">II</td>
                    <td class="border border-gray-300 px-4 py-2">8160</td>
                    <td class="border border-gray-300 px-4 py-2">680</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">III</td>
                    <td class="border border-gray-300 px-4 py-2">8760</td>
                    <td class="border border-gray-300 px-4 py-2">730</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">IV</td>
                    <td class="border border-gray-300 px-4 py-2">8760</td>
                    <td class="border border-gray-300 px-4 py-2">730</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">V</td>
                    <td class="border border-gray-300 px-4 py-2">9120</td>
                    <td class="border border-gray-300 px-4 py-2">760</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">VI</td>
                    <td class="border border-gray-300 px-4 py-2">9480</td>
                    <td class="border border-gray-300 px-4 py-2">790</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">VII</td>
                    <td class="border border-gray-300 px-4 py-2">9480</td>
                    <td class="border border-gray-300 px-4 py-2">790</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">VIII</td>
                    <td class="border border-gray-300 px-4 py-2">10,660</td>
                    <td class="border border-gray-300 px-4 py-2">888</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">IX</td>
                    <td class="border border-gray-300 px-4 py-2">10,660</td>
                    <td class="border border-gray-300 px-4 py-2">888</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">X</td>
                    <td class="border border-gray-300 px-4 py-2">12,480</td>
                    <td class="border border-gray-300 px-4 py-2">1040</td>
                    <td class="border border-gray-300 px-4 py-2">2500</td>
                    <td class="border border-gray-300 px-4 py-2">250</td>
                  </tr>
                </tbody>
              </table>
              
        </div>
        <div class='w-[96%] md:w-[80%] mx-auto overflow-x-auto mb-10'>
            <table class="min-w-full border-collapse border border-gray-300">
                <!-- Table Title -->
                 <caption class="text-center text-4xl my-6 font-bold text-gray-800">Hostel Fees</caption>
                <thead>
                  
                  <tr class="bg-blue-600 text-gray-800 text-2xl text-center">
                    <th class="border border-gray-300 px-4 py-2">Sl.no</th>
                    <th class="border border-gray-300 px-4 py-2">Expense Calculation/day</th>
                    <th class="border border-gray-300 px-4 py-2">Cost</th>
                  </tr>
                </thead>
                <tbody class="bg-white text-center text-gray-700 text-lg font-semibold">
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">1</td>
                    <td class="border border-gray-300 px-4 py-2">Food</td>
                    <td class="border border-gray-300 px-4 py-2">140</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">2</td>
                    <td class="border border-gray-300 px-4 py-2">Snack</td>
                    <td class="border border-gray-300 px-4 py-2">10</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">3</td>
                    <td class="border border-gray-300 px-4 py-2">Total</td>
                    <td class="border border-gray-300 px-4 py-2">150</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">4</td>
                    <td class="border border-gray-300 px-4 py-2">Per Month</td>
                    <td class="border border-gray-300 px-4 py-2">4500</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">5</td>
                    <td class="border border-gray-300 px-4 py-2">Laundry</td>
                    <td class="border border-gray-300 px-4 py-2">500</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">6</td>
                    <td class="border border-gray-300 px-4 py-2">Total Per Month</td>
                    <td class="border border-gray-300 px-4 py-2">5000</td>
                  </tr>
                  <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">7</td>
                    <td class="border border-gray-300 px-4 py-2">Per Year</td>
                    <td class="border border-gray-300 px-4 py-2">55000</td>
                  </tr>
                </tbody>
              </table>
        </div>

    </div>

</body>
</html>