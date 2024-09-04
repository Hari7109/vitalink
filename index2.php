<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <header class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex-1 md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="#">
                        <span class="sr-only">Home</span>
                        <img src="img/vite_logo.png" alt="" srcset="" class="h-8">
                    </a>
                </div>

                <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#home"> Home </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#about"> About </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#Q&A"> Q&A </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#contact"> Contact us </a>
                            </li>
                            
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#">
                                    <!-- dropdown -->
                                    <div class="relative">
                                        <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">
                                            <a href="#" class="border-e px-4 py-2 text-sm/none text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                                Get Started
                                            </a>
                                            <button id="menu-button" class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                                <span class="sr-only">Menu</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div id="menu-dropdown" class="absolute end-0 z-10 mt-2 w-56 divide-y divide-gray-100 rounded-md border border-gray-100 bg-white shadow-lg hidden" role="menu">
                                            <div class="p-2">
                                                <strong class="block p-2 text-xs font-medium uppercase text-gray-400"> Login </strong>
                                                <a href="#" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">Doctor Login</a>
                                                <a href="#" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">Nurse Login</a>
                                                <a href="#" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">Patient Login</a>
                                                <a href="#" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">Pharmacist Login</a>
                                            </div>
                                            <div class="p-2">
                                                <strong class="block p-2 text-xs font-medium uppercase text-gray-400"> Signup </strong>
                                                <a href="#" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">Doctor Signup</a>
                                                <a href="#" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">Nurse Signup</a>
                                                <a href="#" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">Pharmacist Signup</a>
                                                <a href="#" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">Patient Signup</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- dropdown end -->
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div class="flex items-center gap-4">
                        <div class="block md:hidden">
                            <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sections -->
    <section id="home">
      

<section
  class="relative bg-[url('img/hero.jpg')] bg-cover bg-center bg-no-repeat"
>
  <div
    class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"
  ></div>

  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
  >
    <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
      One Link, 

        <strong class="block font-extrabold text-rose-700"> One Health </strong>
      </h1>

      <p class="mt-4 max-w-lg sm:text-xl/relaxed">
      VitaLink consolidates your medical information into one secure platform, making it easier for you and your healthcare providers to access and update your records with confidence
      </p>

      <div class="mt-8 flex flex-wrap gap-4 text-center">
        <a
          href="#"
          class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
        >
          Get Started
        </a>

        <a
          href="#"
          class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto"
        >
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>

        <!-- Home content -->
    </section>

    <section id="about">
       

<section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2">
  <div class="p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
      <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
        About Us
      </h2>

      <p class="hidden text-gray-500 md:mt-4 md:block">
      At VitaLink, we simplify healthcare by connecting patients, doctors, nurses, pharmacists, and administrators in one secure platform. Our mission is to provide easy access to your medical information, ensuring seamless communication and efficient care.
<br> <br>
Why VitaLink?
<br> <br>
<p>
<ul>
    <li>Centralized Access: All your health data in one place.</li>
    <li>Secure and Private: Your information is protected with top-notch security.</li>
    <li>Effortless Communication: Streamlined collaboration for better care.</li>
</ul>
</p>


We’re dedicated to improving healthcare with innovation and ease.
      </p>

      <div class="mt-4 md:mt-8">
        <a
          href="#"
          class="inline-block rounded bg-red-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400"
        >
          Get Started Today
        </a>
      </div>
    </div>
  </div>

  <img
    alt=""
    src="img/aboutus.jpg"
    class="h-56 w-full object-cover sm:h-full"
  />
</section>
        <!-- About content -->
    </section>
<!--  -->
    <section id="Q&A">
    <div class="space-y-4">
    <details class="group [&_summary::-webkit-details-marker]:hidden" open>
        <summary
            class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900">
            <h2 class="font-medium">What is VitaLink?</h2>

            <svg
                class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </summary>

        <p class="mt-4 px-4 leading-relaxed text-gray-700">
            VitaLink is a comprehensive platform designed to connect patients, doctors, nurses, pharmacists, and administrators. It centralizes medical information to streamline healthcare management and communication.
        </p>
    </details>

    <details class="group [&_summary::-webkit-details-marker]:hidden">
        <summary
            class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900">
            <h2 class="font-medium">Who can use VitaLink?</h2>

            <svg
                class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </summary>

        <p class="mt-4 px-4 leading-relaxed text-gray-700">
        VitaLink is designed for healthcare professionals including doctors, nurses, pharmacists, hospital administrators, and patients. Each role has specific features tailored to their needs.
        </p>
    </details>

    <details class="group [&_summary::-webkit-details-marker]:hidden">
        <summary
            class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900">
            <h2 class="font-medium">How can I access my medical information?</h2>

            <svg
                class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </summary>

        <p class="mt-4 px-4 leading-relaxed text-gray-700">
        Once registered, you can access your medical information through our secure portal. You can view your records, update details, and share information with your healthcare providers as needed.
     </p>
    </details>
</div>
    <!-- faq -->
    </section>

    <section id="contact">

<footer class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="lg:grid lg:grid-cols-2">
      <div
        class="border-b border-gray-100 py-8 lg:order-last lg:border-b-0 lg:border-s lg:py-16 lg:ps-16"
      >
        <div class="block text-teal-600 lg:hidden">
          <img src="img/vite_logo.png" alt="" srcset="">
        </div>

        <div class="mt-8 space-y-4 lg:mt-0">
          <span class="hidden h-1 w-10 rounded bg-teal-500 lg:block"></span>

          <div>
            <h2 class="text-2xl font-medium text-gray-900">CONTACT US</h2>

            <p class="mt-4 max-w-lg text-gray-500">


            We’re here to help!

Whether you have questions, need support, or want to provide feedback, our team is ready to assist you. <br>
Email: support@vitalink.com <br>
Phone: +1-800-123-4567 <br>
Address: 123 Health Lane, Wellness City, HC 45678 <br>

            </p>
          </div>
          <form class="mt-6 w-full" action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="b5514d23-6367-4fa2-b16b-fd5362d1a303">
            <label for="UserEmail" class="sr-only"> Email </label>

            <div
              class="rounded-md border border-gray-100 p-2  sm:flex sm:items-center sm:gap-4"
            >
              <input
                type="text"
                id="name"
                placeholder="Enter your name"
                class="w-full border-none focus:border-transparent  sm:text-sm"
              />
            </div>
            <br>
            <div
              class="rounded-md border border-gray-100 p-2 focus-within:ring sm:flex sm:items-center sm:gap-4"
            >
              <input
                type="email"
                id="UserEmail"
                placeholder="john@rhcp.com"
                class="w-full border-none focus:border-transparent  sm:text-sm"
              />
 
            </div>
            <br>
            <div
              class="rounded-md border border-gray-100 p-2 focus-within:ring sm:flex sm:items-center sm:gap-4"
            >
            
              <textarea name="message" id="message" placeholder="write your thought"></textarea>

            </div>
            <br>
            <button type="submit"
                class="mt-1 w-full rounded bg-teal-500 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white transition-none hover:bg-teal-600 sm:mt-0 sm:w-auto sm:shrink-0"
              >
                Submit
              </button>
          </form>
        </div>
      </div>

      <div class="py-8 lg:py-16 lg:pe-16">
        <div class="hidden text-teal-600 lg:block">
          <img src="img/vite_logo.png" alt="" srcset="">
        </div>

        <div class="mt-8 grid grid-cols-1 gap-8 sm:grid-cols-3">
          <div>
            <p class="font-medium text-gray-900">Services</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> 1on1 Coaching </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Company Review </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> HR Consulting </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> SEO Optimisation </a>
              </li>
            </ul>
          </div>

          <div>
            <p class="font-medium text-gray-900">Company</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> About </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Meet the Team </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
              </li>
            </ul>
          </div>

          <div>
            <p class="font-medium text-gray-900">Helpful Links</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Contact </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> FAQs </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Live Chat </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="mt-8 border-t border-gray-100 pt-8">
          <ul class="flex flex-wrap gap-4 text-xs">
            <li>
              <a href="#" class="text-gray-500 transition hover:opacity-75"> Terms & Conditions </a>
            </li>

            <li>
              <a href="#" class="text-gray-500 transition hover:opacity-75"> Privacy Policy </a>
            </li>

            <li>
              <a href="#" class="text-gray-500 transition hover:opacity-75"> Cookies </a>
            </li>
          </ul>

          <p class="mt-8 text-xs text-gray-500">&copy; 2022. Company Name. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
        <!-- Contact content -->
    </section>

    <script>
        const menuButton = document.getElementById('menu-button');
        const menuDropdown = document.getElementById('menu-dropdown');

        menuButton.addEventListener('click', () => {
            menuDropdown.classList.toggle('hidden');
        });

        // Optional: Close the dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!menuButton.contains(event.target) && !menuDropdown.contains(event.target)) {
                menuDropdown.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
