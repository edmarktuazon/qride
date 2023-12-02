<!-- navbar toggler -->
<div class="flex items-center justify-around gap-4 p-6 sm:hidden">
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2  text-sm  rounded-lg sm:hidden hover:bg-shade-white focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 hover:text-shade-blue">
        <span class="sr-only">Open sidebar</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path
                d="M0 8C0 6.7922 1.0345 6.13267 2.24141 6.08618C3.40941 6.04119 5.234 6 8 6C10.766 6 12.5906 6.04119 13.7586 6.08618C14.9655 6.13267 16 6.7922 16 8C16 9.2078 14.9655 9.86733 13.7586 9.91382C12.5906 9.95881 10.766 10 8 10C5.234 10 3.40941 9.95881 2.24141 9.91382C1.0345 9.86733 0 9.2078 0 8Z"
                fill="#ACB4C9" />
            <path
                d="M0 14C0 12.7922 1.0345 12.1327 2.24141 12.0862C3.40941 12.0412 5.234 12 8 12C10.766 12 12.5906 12.0412 13.7586 12.0862C14.9655 12.1327 16 12.7922 16 14C16 15.2078 14.9655 15.8673 13.7586 15.9138C12.5906 15.9588 10.766 16 8 16C5.234 16 3.40941 15.9588 2.24141 15.9138C1.0345 15.8673 0 15.2078 0 14Z"
                fill="#ACB4C9" />
            <path
                d="M0 2C0 0.792196 1.0345 0.132669 2.24141 0.0861783C3.40941 0.0411862 5.234 0 8 0C10.766 0 12.5906 0.0411862 13.7586 0.0861783C14.9655 0.132669 16 0.792196 16 2C16 3.2078 14.9655 3.86733 13.7586 3.91382C12.5906 3.95881 10.766 4 8 4C5.234 4 3.40941 3.95881 2.24141 3.91382C1.0345 3.86733 0 3.2078 0 2Z"
                fill="#ACB4C9" />
        </svg>
    </button>

    <!-- welcome nav -->
    <div class="block bg-shade-white sm:hidden">
        <div class="flex items-center gap-3">
            <img src="./assets/images/qride-trike-logo.png" alt="" class="w-16 h-12">
            <div>
                <h1 class="font-roboto text-shade-black font-[900] text-base sm:text-5xl">
                    Welcome, <?php echo $_SESSION['username']; ?> 🎉
                </h1>
                <p class="font-roboto text-shade-gray text-sm sm:text-base">
                    Here are the report in your QRide account today.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- sidebar -->
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-full px-5 py-4 bg-shade-blue overflow-auto transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="flex items-center gap-5">
        <a href="javascript:void(0)" class="flex items-center gap-2 pt-4 pl-2.5 mb-5 text-shade-white font-inter">
            <img src="./assets/images/qride-trike-logo.png" class="w-16 h-12" alt="logo" />
            <div class="flex flex-wrap items-center gap-0 sm:gap-2">
                <span class="self-center text-xl font-medium whitespace-nowrap">
                    QRide
                </span>
                <span class="text-gray-300 text-xs font-inter">
                    Dashboard
                </span>
            </div>
        </a>
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button"
            class="inline-flex items-center p-2 mt-2  text-sm  rounded-lg sm:hidden hover:bg-shade-white focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 hover:text-shade-blue">
            <span class="sr-only">Open sidebar</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path
                    d="M0 8C0 6.7922 1.0345 6.13267 2.24141 6.08618C3.40941 6.04119 5.234 6 8 6C10.766 6 12.5906 6.04119 13.7586 6.08618C14.9655 6.13267 16 6.7922 16 8C16 9.2078 14.9655 9.86733 13.7586 9.91382C12.5906 9.95881 10.766 10 8 10C5.234 10 3.40941 9.95881 2.24141 9.91382C1.0345 9.86733 0 9.2078 0 8Z"
                    fill="#ACB4C9" />
                <path
                    d="M0 14C0 12.7922 1.0345 12.1327 2.24141 12.0862C3.40941 12.0412 5.234 12 8 12C10.766 12 12.5906 12.0412 13.7586 12.0862C14.9655 12.1327 16 12.7922 16 14C16 15.2078 14.9655 15.8673 13.7586 15.9138C12.5906 15.9588 10.766 16 8 16C5.234 16 3.40941 15.9588 2.24141 15.9138C1.0345 15.8673 0 15.2078 0 14Z"
                    fill="#ACB4C9" />
                <path
                    d="M0 2C0 0.792196 1.0345 0.132669 2.24141 0.0861783C3.40941 0.0411862 5.234 0 8 0C10.766 0 12.5906 0.0411862 13.7586 0.0861783C14.9655 0.132669 16 0.792196 16 2C16 3.2078 14.9655 3.86733 13.7586 3.91382C12.5906 3.95881 10.766 4 8 4C5.234 4 3.40941 3.95881 2.24141 3.91382C1.0345 3.86733 0 3.2078 0 2Z"
                    fill="#ACB4C9" />
            </svg>
        </button>
    </div>
    <hr>
    <ul class="font-[700] my-10 font-inter">
        <div class="grid grid-rows-2">
            <div class="space-y-4 h-[300px]">
                <li>
                    <a href="admin_home_dashboard.php"
                        class="sidebar-menu flex items-center p-2 text-shade-white rounded-lg hover:bg-shade-white hover:text-shade-blue  group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M14.2495 19.4992V14.9991C14.2495 14.8001 14.1704 14.6094 14.0298 14.4687C13.8891 14.3281 13.6984 14.2491 13.4995 14.2491H10.4995C10.3005 14.2491 10.1098 14.3281 9.96912 14.4687C9.82847 14.6094 9.74945 14.8001 9.74945 14.9991V19.4992C9.74945 19.698 9.67045 19.8888 9.52981 20.0294C9.38918 20.1701 9.19844 20.2491 8.99954 20.2492L4.50009 20.2497C4.40159 20.2498 4.30406 20.2304 4.21305 20.1927C4.12205 20.155 4.03936 20.0998 3.9697 20.0301C3.90005 19.9605 3.8448 19.8778 3.8071 19.7868C3.7694 19.6958 3.75 19.5982 3.75 19.4997V10.8316C3.75 10.7271 3.77183 10.6238 3.8141 10.5282C3.85637 10.4326 3.91814 10.347 3.99545 10.2767L11.4949 3.45778C11.633 3.33226 11.8129 3.2627 11.9995 3.2627C12.186 3.26269 12.3659 3.33223 12.504 3.45775L20.0045 10.2767C20.0818 10.347 20.1436 10.4326 20.1859 10.5282C20.2282 10.6238 20.25 10.7271 20.25 10.8316V19.4997C20.25 19.5982 20.2306 19.6958 20.1929 19.7868C20.1552 19.8778 20.1 19.9605 20.0303 20.0301C19.9606 20.0998 19.878 20.155 19.7869 20.1927C19.6959 20.2304 19.5984 20.2498 19.4999 20.2497L14.9994 20.2492C14.8005 20.2491 14.6097 20.1701 14.4691 20.0295C14.3285 19.8888 14.2494 19.698 14.2495 19.4992V19.4992Z"
                                stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="ml-3">Home</span>
                    </a>
                </li>
                <li>
                    <a href="admin_report_dashboard.php"
                        class="sidebar-menu flex items-center p-2 text-shade-white rounded-lg  hover:bg-shade-white hover:text-shade-blue group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 5.25H3C2.58579 5.25 2.25 5.58579 2.25 6V18C2.25 18.4142 2.58579 18.75 3 18.75H21C21.4142 18.75 21.75 18.4142 21.75 18V6C21.75 5.58579 21.4142 5.25 21 5.25Z"
                                stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.7495 15.75H18.7495" stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M11.2495 15.75H12.7495" stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M2.24951 9.08008H21.7495" stroke="#EAEAEA" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">UA Reports</span>
                    </a>
                </li>
                <li>
                    <a href="admin_non_ua_report_dashboard.php"
                        class="sidebar-menu flex items-center p-2 text-shade-white rounded-lg  hover:bg-shade-white hover:text-shade-blue group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 12V3" stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M19.794 7.5L4.20557 16.5" stroke="#EAEAEA" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M3.15008 13.6454C2.76041 11.5366 3.13532 9.35796 4.20749 7.50072C5.27966 5.64348 6.97883 4.22933 8.99988 3.51221V10.268L3.15008 13.6454Z"
                                stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12.0002 3C13.577 3.00029 15.1261 3.41485 16.4923 4.20216C17.8585 4.98947 18.9938 6.1219 19.7847 7.48605C20.5755 8.8502 20.9941 10.3982 20.9985 11.975C21.0029 13.5518 20.5929 15.1021 19.8097 16.4706C19.0264 17.8391 17.8973 18.9779 16.5355 19.7728C15.1737 20.5676 13.627 20.9908 12.0502 20.9999C10.4734 21.0089 8.92191 20.6035 7.55108 19.8243C6.18024 19.0451 5.03818 17.9194 4.23926 16.56"
                                stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Non UA Reports</span>
                    </a>
                </li>
                <li>
                    <a href="admin_price_dashboard.php"
                        class="sidebar-menu flex items-center p-2 text-shade-white rounded-lg  hover:bg-shade-white hover:text-shade-blue group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 5.25H3C2.58579 5.25 2.25 5.58579 2.25 6V18C2.25 18.4142 2.58579 18.75 3 18.75H21C21.4142 18.75 21.75 18.4142 21.75 18V6C21.75 5.58579 21.4142 5.25 21 5.25Z"
                                stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.7495 15.75H18.7495" stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M11.2495 15.75H12.7495" stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M2.24951 9.08008H21.7495" stroke="#EAEAEA" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Price List</span>
                    </a>
                </li>
                <li>
                <li>
                    <a href="archive_report.php"
                        class="sidebar-menu flex items-center p-2 text-shade-blue bg-shade-white rounded-lg  group">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                            xmlns:xlink="http://www.w3.org/1999/xlink" height="18px" version="1.1" viewBox="0 0 18 18"
                            width="18px">
                            <title />
                            <desc />
                            <defs />
                            <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                                <g fill="#EAEAEA" stroke="#0047BD" id="Core"
                                    transform="translate(-381.000000, -3.000000)">
                                    <g id="archive" transform="translate(381.000000, 3.000000)">
                                        <path
                                            d="M17.5,2.2 L16.1,0.5 C15.9,0.2 15.5,0 15,0 L3,0 C2.5,0 2.1,0.2 1.8,0.5 L0.5,2.2 C0.2,2.6 0,3 0,3.5 L0,16 C0,17.1 0.9,18 2,18 L16,18 C17.1,18 18,17.1 18,16 L18,3.5 C18,3 17.8,2.6 17.5,2.2 L17.5,2.2 Z M9,14.5 L3.5,9 L7,9 L7,7 L11,7 L11,9 L14.5,9 L9,14.5 L9,14.5 Z M2.1,2 L2.9,1 L14.9,1 L15.8,2 L2.1,2 L2.1,2 Z"
                                            id="Shape" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Archive</span>
                    </a>
                </li>
                <li>
            </div>
            <div class="grid items-end">
                <li>
                    <a href="admin_logout.php"
                        class="sidebar-menu flex items-center p-2 text-shade-white rounded-lg  hover:bg-shade-white hover:text-shade-blue group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M16.3135 8.0625L20.2499 12L16.3135 15.9375" stroke="#EAEAEA" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.75 12H20.2472" stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M9.75 20.25H4.5C4.30109 20.25 4.11032 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V4.5C3.75 4.30109 3.82902 4.11032 3.96967 3.96967C4.11032 3.82902 4.30109 3.75 4.5 3.75H9.75"
                                stroke="#EAEAEA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign out</span>
                    </a>
                </li>
            </div>
        </div>
    </ul>

</aside>