  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Concern</title>

      <!-- tab logo image -->
      <link rel="shortcut icon" href="../../assets/images/UA-Logo.png" type="image/x-icon">

      <link rel="stylesheet" href="../../dist/output.css" />
      <!-- custom -->
      <link rel="stylesheet" href="../../src/custom.css" />

      <!-- font inter -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

      <!-- font roboto -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@400;500;700;900&display=swap"
          rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
          integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- sweetalert2 -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.css">

  </head>

  <body>
      <!-- navbar -->
      <header class="custom-padding bg-shade-yellow">
          <nav class="flex items-center justify-between">
              <img src="../../assets/images/qride-trike-logo.png" alt="" class="w-[86px] h-16">
              <img src="../../assets/images/UA-Logo.png" alt="" class="w-16 h-16">
          </nav>
      </header>

      <!-- content -->
      <section class="custom-layout custom-height">
          <div class="custom-content">
              <label for="email_address" class="mb-10 w-full text-shade-black font-[900] font-roboto text-base">
                  If you are a UA student, your email should have <span class="text-shade-blue">@ua.edu.ph</span> and if
                  you are non UA ​​students, you should
                  use <span class="text-shade-blue">@gmail.</span>
                  <br>
                  <br>
                  <input type="text" id="email_address" name="email_address"
                      class="py-3 pl-3 bg-[#D9D9D9] rounded-xl w-full border-none font-inter font-medium text-shade-black text-lg" />
              </label>
              <label for="complainant_number" class="mb-10 w-full text-shade-black font-[900] font-roboto text-base">
                  Enter your Mobile Number (Required)
                  <br>
                  <br>
                  <input type="number" id="complainant_number" name="complainant_number" inputmode="numeric"
                      pattern="[0-9]*"
                      class="py-3 pl-3 bg-[#D9D9D9] rounded-xl w-full border-none font-inter font-medium text-shade-black text-lg"
                      inputmode="numeric" pattern="[0-9]*" />
              </label>
              <label for="message" class="grid gap-5 text-shade-black font-roboto font-[500] text-xl text-center">
                  State your concerns( if don’t have any leave it blank)
                  <textarea name="message" id="message" cols="30" rows="10"
                      class="py-3 pl-3 bg-[#D9D9D9]  w-full border-none  rounded-xl text-lg text-shade-black font-roboto  font-[500]"></textarea>
              </label>
              <div class="mt-5">
                  <button type="button" id="nextBtnHerbert"
                      class="bg-shade-yellow text-shade-deep-blue border-none font-roboto text-lg p-3 rounded-2xl w-full hover:text-shade-white hover:bg-shade-blue">
                      Next
                  </button>
              </div>
          </div>
      </section>

      <!-- sweetalert2 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.js"></script>

      <!-- custom js -->
      <script src="../../src/script.js"></script>
  </body>

  </html>