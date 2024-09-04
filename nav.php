<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex-1 md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="#">
                        <span class="sr-only">Home</span>
                        <img src="vite_logo.png" alt="" srcset="" class="h-8">
                    </a>
                </div>

                <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Home </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> About </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#">
                                    <!-- dorp -->

                                    <div class="relative">
                                        <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">
                                            <a
                                                href="#"
                                                class="border-e px-4 py-2 text-sm/none text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                                Get Started
                                            </a>

                                            <button id="menu-button" class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                                <span class="sr-only">Menu</span>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="size-4"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div
                                            id="menu-dropdown"
                                            class="absolute end-0 z-10 mt-2 w-56 divide-y divide-gray-100 rounded-md border border-gray-100 bg-white shadow-lg hidden"
                                            role="menu">
                                            <div class="p-2">
                                                <strong class="block p-2 text-xs font-medium uppercase text-gray-400"> Login </strong>

                                                <a
                                                    href="#"
                                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                                    role="menuitem">
                                                    Doctor Login
                                                </a>

                                                <a
                                                    href="#"
                                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                                    role="menuitem">
                                                    Nurse Login
                                                </a>

                                                <a
                                                    href="#"
                                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                                    role="menuitem">
                                                    Patient Login
                                                </a>

                                                <a
                                                    href="#"
                                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                                    role="menuitem">
                                                    Pharmacist Login
                                                </a>
                                            </div>

                                            <div class="p-2">
                                                <strong class="block p-2 text-xs font-medium uppercase text-gray-400"> Signup </strong>

                                                <div>
                                                <a
                                                    href="#"
                                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                                    role="menuitem">
                                                    Doctor Signup
                                                </a>
                                                <a
                                                    href="#"
                                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                                    role="menuitem">
                                                    Nurse Signup
                                                </a>
                                                <a
                                                    href="#"
                                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                                    role="menuitem">
                                                    Pharmacist Signup
                                                </a>
                                                <a
                                                    href="#"
                                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                                    role="menuitem">
                                                    Patient Signup
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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

                                    <!-- drop end -->
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Contact us </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Projects </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Blog </a>
                            </li>
                        </ul>
                    </nav>

                    <div class="flex items-center gap-4">
                        <div class="sm:flex sm:gap-4">
                            <a
                                class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow"
                                href="#">
                                Login
                            </a>

                            <div class="hidden sm:flex">
                                <a
                                    class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                                    href="#">
                                    Register
                                </a>
                            </div>
                        </div>

                        <div class="block md:hidden">
                            <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>

</html>