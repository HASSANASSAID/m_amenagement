<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Cash manager - caisse manager">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="">

    <!-- Title -->
    <title>Catégories - Cash Manager</title>
    <!-- Favicon -->
    <link rel="icon" href="assets_back/images/brand-logos/icon.png">

    <!-- Start::Styles -->

    <!-- Choices JS -->
    <script src="assets_back/libs/choices.js/publicassets_back/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets_back/js/main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="assets_back/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="assets_back/css/styles.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="assets_back/css/icons.css" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="assets_back/libs/node-waves/waves.min.css" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="assets_back/libs/simplebar/simplebar.min.css" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets_back/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets_back/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets_back/libs/choices.js/publicassets_back/styles/choices.min.css">

    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="assets_back/libs/flatpickr/flatpickr.min.css">

    <!-- Auto Complete CSS -->
    <link rel="stylesheet" href="assets_back/libs/@tarekraafat/autocomplete.js/css/autoComplete.css">
    <!-- End::Styles -->

    <!-- Sweetalert CSS -->
    <link rel="stylesheet" href="assets_back/css/sweetalert2.css">

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="assets_back/libs/dropzone/dropzone.css">

    <!-- Quill editor Css -->
    <link rel="stylesheet" href="assets_back/libs/quill/quill.snow.css">
    <link rel="stylesheet" href="assets_back/libs/quill/quill.bubble.css">


</head>

<body class="">



    <!-- Loader -->
    <div id="loader">
        <img src="assets_back/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">

        <!-- Start::main-header -->
        <header class="app-header sticky" id="header">

            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.php" class="header-logo">
                                <img src="assets_back/images/brand-logos/desktop-logo.png" alt="logo"
                                    class="desktop-logo">
                                <img src="assets_back/images/brand-logos/toggle.png" alt="logo" class="toggle-dark">
                                <img src="assets_back/images/brand-logos/desktop-dark.png" alt="logo"
                                    class="desktop-dark">
                                <img src="assets_back/images/brand-logos/toggle.png" alt="logo" class="toggle-logo">
                                <img src="assets_back/images/brand-logos/toggle.png" alt="logo" class="toggle-white">
                                <img src="assets_back/images/brand-logos/desktop-dark.png" alt="logo"
                                    class="desktop-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element mx-lg-0 mx-2">
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-search d-md-block d-none my-auto auto-complete-search">
                        <!-- Start::header-link -->
                        <input type="text" class="header-search-bar form-control" id="header-search"
                            placeholder="Search anything here ..." spellcheck=false autocomplete="off"
                            autocapitalize="off">
                        <a href="javascript:void(0);" class="header-search-icon border-0">
                            <i class="ri-search-line"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <ul class="header-content-right">

                    <!-- Start::header-element -->
                    <li class="header-element d-md-none d-block">
                        <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                            data-bs-target="#header-responsive-search">
                            <!-- Start::header-link-icon -->
                            <i class="bi bi-search header-link-icon"></i>
                            <!-- End::header-link-icon -->
                        </a>
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element country-selector dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                            </svg>

                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                                <img src="assets_back/images/flags/us_flag.jpg" alt="img">
                                            </span>
                                            English
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                        <img src="assets_back/images/flags/spain_flag.jpg" alt="img">
                                    </span>
                                    español
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                        <img src="assets_back/images/flags/french_flag.jpg" alt="img">
                                    </span>
                                    français
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                        <img src="assets_back/images/flags/uae_flag.jpg" alt="img">
                                    </span>
                                    عربي
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                        <img src="assets_back/images/flags/germany_flag.jpg" alt="img">
                                    </span>
                                    Deutsch
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                        <img src="assets_back/images/flags/china_flag.jpg" alt="img">
                                    </span>
                                    中国人
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                        <img src="assets_back/images/flags/italy_flag.jpg" alt="img">
                                    </span>
                                    Italiano
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                        <img src="assets_back/images/flags/russia_flag.jpg" alt="img">
                                    </span>
                                    Русский
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                                </svg>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                </svg>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </li>
                    <!-- End::header-element -->

                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a href="javascript:void(0);" class="header-link">
                            <svg onclick="openFullscreen();" xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 full-screen-open header-link-icon" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                            </svg>
                            <svg onclick="closeFullscreen();" xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 full-screen-close header-link-icon d-none" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25" />
                            </svg>
                        </a>
                        <!-- End::header-link -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div>
                                    <img src="assets_back/images/faces/15.jpg" alt="img"
                                        class="avatar custom-header-avatar avatar-rounded">
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <li>
                                <div class="dropdown-item text-center border-bottom">
                                    <span class="fw-medium">
                                        Zaynab Oubenali
                                    </span>
                                    <span class="d-block fs-12 text-muted">
                                        Gérant
                                    </span>
                                </div>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="profile.php"><i
                                        class="ri-user-line lh-1 p-1 rounded-circle bg-primary-transparent text-primary me-2 fs-14"></i>Profile</a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="/logout"><i
                                        class="ri-door-lock-line lh-1 p-1 rounded-circle bg-primary-transparent text-primary me-2 fs-14"></i>Déconnexion</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::header-element -->


                </ul>
                <!-- End::header-content-right -->

            </div>

        </header>
        <!-- End::main-header -->

       @include('layouts_backend.sidebar')

        <style>
            .bg-cover {
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            .overlay {
                background-color: rgba(0, 0, 0, 0.5);
                /* noir à 30% d'opacité */
                z-index: 1;
            }

            .bg-cover .card-body {
                z-index: 2;
                /* Pour passer au-dessus de l’overlay */
            }

            .category-card {
                background-size: cover;
                background-position: center;
                transition: transform 0.3s ease, filter 0.3s ease;
                cursor: pointer;
                border-radius: 12px;
            }

            .category-card:hover {
                transform: scale(1.03);
                filter: brightness(0.8);
            }

            .category-card .overlay {
                transition: background-color 0.3s ease;
                background-color: rgba(0, 0, 0, 0.38);
                /* effet léger */
            }

            .category-card:hover .overlay {
                background-color: rgba(0, 0, 0, 0.5);
                /* assombrissement plus fort */
            }

            .border-left-primary {
                border-left: 5px solid #7961f5 !important;
            }

            .hover-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
                border-radius: 10px;
            }

            .hover-card:hover {
                transform: scale(1.02);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            }

            .product-quantity-container {
                width: 6.5rem !important;
            }

            .input-group .btn-icon {
                padding: 0.375rem 0.8rem !important;
            }
        </style>
        <!-- Start::app-content -->

        <div class="main-content app-content">
            <div class="container-fluid">


               @yield('top-content')

                @yield('content')



            </div>
        </div>

        <!-- End::app-content -->

        <!-- Start::main-modal -->

        <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                                aria-label="Search Anything ..." aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i
                                    class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::main-modal -->

        @include('layouts_backend.footer')

    </div>

    <!-- Start::main-scripts -->

    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ti ti-arrow-narrow-up fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper JS -->
    <script src="assets_back/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets_back/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="assets_back/js/defaultmenu.min.js"></script>

    <!-- Node Waves JS-->
    <script src="assets_back/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="assets_back/js/sticky.js"></script>

    <!-- Simplebar JS -->
    <script src="assets_back/libs/simplebar/simplebar.min.js"></script>
    <script src="assets_back/js/simplebar.js"></script>

    <!-- Auto Complete JS -->
    <script src="assets_back/libs/@tarekraafat/autocomplete.js/autoComplete.min.js"></script>

    <!-- Color Picker JS -->
    <script src="assets_back/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Date & Time Picker JS -->
    <script src="assets_back/libs/flatpickr/flatpickr.min.js"></script>
    <!-- End::main-scripts -->


    <!-- Orders JS -->
    <script src="assets_back/js/orders.js"></script>

    <!-- Apex Charts JS -->
    <script src="assets_back/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Echarts JS -->
    <script src="assets_back/libs/echarts/echarts.min.js"></script>

    <!-- Ecommerce Dashboard -->
    <script src="assets_back/js/ecommerce-dashboard.js"></script>

    <!-- Sweetalert JS -->
    <script src="assets_back/js/sweet-alert/sweetalert2.min.js"></script>

    <!-- Custom JS -->
    <script src="assets_back/js/custom.js"></script>

    <!-- Custom-Switcher JS -->
    <script src="assets_back/js/custom-switcher.min.js"></script>


    <!-- Pagination table -->
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const rowsPerPage = 10;
            const table = document.getElementById('table-paginations');
            const tbody = table.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));
            const pagination = document.querySelector('.pagination');
            let currentPage = 1;

            function showPage(page) {
                const start = (page - 1) * rowsPerPage;
                const end = start + rowsPerPage;

                rows.forEach((row, index) => {
                    row.style.display = (index >= start && index < end) ? '' : 'none';
                });

                document.querySelectorAll('.pagination .page-item').forEach(item => item.classList.remove('active'));
                const activeItem = document.querySelector(`.pagination .page-item[data-page="${page}"]`);
                if (activeItem) activeItem.classList.add('active');

                currentPage = page;
            }

            function setupPagination() {
                pagination.innerHTML = '';
                const pageCount = Math.ceil(rows.length / rowsPerPage);

                // Previous
                const prevItem = document.createElement('li');
                prevItem.className = 'page-item';
                prevItem.innerHTML = `<a class="page-link" href="javascript:void(0)"> << </a>`;
                prevItem.onclick = () => {
                    if (currentPage > 1) showPage(currentPage - 1);
                };
                pagination.appendChild(prevItem);

                // Pages
                for (let i = 1; i <= pageCount; i++) {
                    const pageItem = document.createElement('li');
                    pageItem.className = 'page-item';
                    pageItem.dataset.page = i;
                    pageItem.innerHTML = `<a class="page-link" href="javascript:void(0)">${i}</a>`;
                    pageItem.onclick = () => showPage(i);
                    pagination.appendChild(pageItem);
                }

                // Next
                const nextItem = document.createElement('li');
                nextItem.className = 'page-item';
                nextItem.innerHTML = `<a class="page-link" href="javascript:void(0)"> >> </a>`;
                nextItem.onclick = () => {
                    if (currentPage < pageCount) showPage(currentPage + 1);
                };
                pagination.appendChild(nextItem);

                showPage(1);
            }

            setupPagination();
        });

        // --------- SEARCH ( FILTER THE TABLE ROWS ) --------------
        document.addEventListener('DOMContentLoaded', function () {

            const searchInput = document.getElementById('search-input');
            if (searchInput) {
                // Get the input element and table
                const table = document.getElementById('products-table-body');
                const rows = table.getElementsByTagName('tr');

                // Add event listener for keyup on search input
                searchInput.addEventListener('keyup', function () {
                    const searchText = searchInput.value.toLowerCase();

                    // Loop through all table rows, and hide those that don't match the search query
                    for (let i = 0; i < rows.length; i++) { // start from 1 to skip header row
                        let shouldHide = true;
                        const cells = rows[i].getElementsByTagName('td');

                        // Loop through all table cells in the row
                        for (let j = 0; j < cells.length; j++) {
                            const cellText = cells[j].textContent.toLowerCase();
                            if (cellText.includes(searchText)) {
                                shouldHide = false;
                                break;
                            }
                        }

                        // Toggle row visibility based on the search query
                        rows[i].style.display = shouldHide ? 'none' : '';
                    }
                });
            }
        });


    </script>


    <script>
        $(document).ready(function () {

            // --------- delete user ---------------------- 
            $('.delete-entity').click(function (e) {
                e.preventDefault();

                var categorieid = $(this).attr('data-id');

                var url = "/categories/delete/%20__ID__"
                url = url.replace("__ID__", categorieid)
                Swal.fire({
                    title: 'Êtes-vous sûr?',
                    text: "Il sera définitivement supprimé !",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: "Annuler",
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, supprimez-le !'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: url,
                            type: 'DELETE',

                            success: function (data) {
                                swal.fire(
                                    'Supprimé !',
                                    "La catégorie a été supprimé.",
                                    'success'
                                );
                                $('.group_' + categorieid).empty();
                            }
                        });
                    }
                });
            });


        });


    </script>



    <script>
        /* Display the page in fullscreen */
        var elem = document.documentElement;

        /* View in fullscreen */
        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
        }

        /* Close fullscreen */
        function closeFullscreen() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) { /* Safari */
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) { /* IE11 */
                document.msExitFullscreen();
            }
        }

        // Listen for fullscreen change event
        document.addEventListener("fullscreenchange", handleFullscreenChange);
        function handleFullscreenChange() {

            let open = document.querySelector(".full-screen-open");
            let close = document.querySelector(".full-screen-close");

            if (document.fullscreenElement || document.webkitFullscreenElement || document.msFullscreenElement) {
                // Update icon for fullscreen mode
                close.classList.add("d-block");
                close.classList.remove("d-none");
                open.classList.add("d-none");
            } else {
                // Update icon for non-fullscreen mode
                close.classList.remove("d-block");
                open.classList.remove("d-none");
                close.classList.add("d-none");
                open.classList.add("d-block");
            }
        }
    </script>


</body>

</html><!-- This code use for render base file -->