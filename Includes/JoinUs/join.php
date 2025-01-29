<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        mode: "jit",
        theme: {
          extend: {},
        },
        variants: {},
        plugins: [],
      };
    </script>
    <style>
        .custom-button {
            border: 2px solid #007bff;
            color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            border-radius: 8px;
            background-color: white;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            transition: all 0.2s ease-in-out;
          }
      
          /* Hover Effect with Arrow and Color Change */
          .custom-button:hover {
            background-color: #e3e4e6;
            
            padding-right: 25px;
          }
      
          .custom-button:hover::after {
            content: '>';
            color:#007bff;
            margin-left: 10px;
            padding-left: 4px;
            transition: transform 0.1s;
          }
    </style>
  </head>
  <body class="flex flex-col justify-center items-center gap-6">
  <?php include '../navbar.php'; ?>
    <div class="w-full h-[330px] md:h-[500px] mt-[70px]">
      <img src="../../Images/brighten.jpg" alt="joinus" class="w-full h-full" />
    </div>
    <div class="flex flex-col mx-4 justify-center items-center text-center gap-4">
      <div class="text-3xl md:text-4xl text-gray-900">
        Register your student with Riverside School today!
      </div>
      <div class="text-xl text-gray-800">
        For more information, please contact us at 08862-26492.
      </div>
    </div>
    <div class="flex flex-col md:w-[30%] w-[95%] mx-8 justify-center items-center ">
        <div class=" text-lg text-gray-700 gap-2">
      <div>School Timings: 9:30am-3:50pm Monday – Saturday</div>
      <div>
        <div>For filling application, please provide:</div>
        <div>
          <div>– Copy of Aadhar Card</div>
          <div>– Copy of DOB</div>
          <div>– 2 Photos</div>
        </div>
      </div>
      <div class="flex flex-row  my-6 justify-around ">
        <button class="px-4 py-2 border-2 border-blue-500 rounded-sm text-blue-500 font-semibold hover:border-none custom-button">Fees</button>
        <button class="px-4 py-2 border-2 border-blue-500 rounded-sm text-blue-500 font-semibold hover:border-none custom-button">Application</button>

    </div>
</div>
    </div>
  </body>
</html>
