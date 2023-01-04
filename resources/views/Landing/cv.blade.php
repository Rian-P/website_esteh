{{-- @extends('landing.layouts.app') --}}



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="keywords"
            content="software house, IT Konsultan, IT, Web Development, Mobile Apps Development, Startup, Android"
        />
        <meta name="author" content="estehcreative" />
        <meta
            name="description"
            content="Esteh Creative, Innovating Technology to Deliver Happiness."
        />
        <meta name="og:image" content="images/home/ogg.png" />
        <!-- <link rel="apple-touch-icon" sizes="57x57" href="images/logo/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/logo/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/logo/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/logo/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/logo/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/logo/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/logo/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/logo/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/logo/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/logo/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/logo/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon-16x16.png"> -->
        <link rel="manifest" href="images/logo/manifest.json" />
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- For Window Tab Color -->
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#fff" />
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#fff" />
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#fff" />
        <title>
            Esteh Creative - Innovating Technology to Deliver Happiness
        </title>
        <!-- Favicon -->
        <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/fav-icon/favicon-esteh.ico"
        />
        <!-- Main style sheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!-- responsive style sheet -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/esteh.css" />

        <script src="https://cdn.tailwindcss.com"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <!-- Fix Internet Explorer ______________________________________-->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="vendor/html5shiv.js"></script>
            <script src="vendor/respond.js"></script>
        <![endif]-->
        <!-- Hotjar Tracking Code for https://esteh.id -->
        <script>
            (function (h, o, t, j, a, r) {
                h.hj =
                    h.hj ||
                    function () {
                        (h.hj.q = h.hj.q || []).push(arguments);
                    };
                h._hjSettings = { hjid: 1665578, hjsv: 6 };
                a = o.getElementsByTagName("head")[0];
                r = o.createElement("script");
                r.async = 1;
                r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
                a.appendChild(r);
            })(
                window,
                document,
                "https://static.hotjar.com/c/hotjar-",
                ".js?sv="
            );
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=UA-157475869-1"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "UA-157475869-1");
        </script>
    </head>

    <body>
        {{-- <div class="flex flex-col text-center w-full  mt-40 mb-20">
            <h1
                class="sm:text-3xl xl:text-5xl font-medium title-font text-black"
            >
                CURICULUM VITTAE
            </h1>
        </div> --}}

        <section >
            <div class="container mx-auto flex px-40 py-24 md:flex-row flex-col items-center">
                @foreach($team as $item)
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center ">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $item->name }}</h1>
                    <p class="mb-8 leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis voluptatibus saepe hic voluptatem autem deleniti.</p>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="{{asset('storage/image/team/'.$item->image)}}">
                </div>
                @endforeach
            
            </div>
        </section>

        <section >
            <div class="container mx-auto flex px-40 py-24 md:flex-row flex-col items-center">
                @foreach($team as $item)
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="images/cv/school.png">
                </div>
                <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center ">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Riwayat Sekolah</h1>
                <p class="mb-8 leading-relaxed">{{ $item->pendidikan }}</p>
                </div>
                @endforeach
            </div>
        </section>

        <section >
            <div class="container px-40 pt-24 pb-40 mx-auto">
                @foreach($team as $item)
                <div class="flex flex-col text-center w-full mb-20">
                    <h1
                        class="sm:text-3xl xl:text-5xl font-medium title-font text-gray-900"
                    >
                        PORTFOLIO
                    </h1>
                </div>
                <div class="flex flex-wrap -m-4">
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative shadow-lg">
                            <img
                                alt="gallery"
                                class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{asset('storage/image/team/'.$item->image3)}}"
                            />
                            <div
                                class="px-8 py-10 relative z-10 w-full border-2 border-gray-200 bg-hijau opacity-0 hover:opacity-100"
                            >
                                <h1
                                    class="title-font text-lg font-medium text-gray-900 mb-3"
                                >
                                xxxxxxxxxxxxxxx
                                </h1>
                                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis voluptatibus saepe hic voluptatem autem deleniti?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 mx-auto p-4">
                        <div class="flex relative shadow-lg ">
                            <img
                                alt="gallery"
                                class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{asset('storage/image/team/'.$item->image2)}}"
                            />
                            <div
                                class="px-8 py-10 relative z-10 w-full border-2 border-gray-200 bg-hijau opacity-0 hover:opacity-100"
                            >
                                <h1
                                    class="title-font text-lg font-medium text-gray-900 mb-3"
                                >
                                    xxxxxxxxxxxxxxx
                                </h1>
                                <p class="leading-relaxed">
                                    Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Veritatis expedita odio,
                                    doloribus fuga praesentium quisquam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 mx-auto p-4">
                        <div class="flex relative shadow-lg">
                            <img
                                alt="gallery"
                                class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{asset('storage/image/team/'.$item->image1)}}"
                            />
                            <div
                                class="px-8 py-10 relative z-10 w-full border-2 border-gray-200 bg-hijau opacity-0 hover:opacity-100"
                            >
                                <h1
                                    class="title-font text-lg font-medium text-gray-900 mb-3"
                                >
                                    xxxxxxxxxxxxxxx
                                </h1>
                                <p class="leading-relaxed">
                                    Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Veritatis expedita odio,
                                    doloribus fuga praesentium quisquam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Optional JavaScript _____________________________  -->
        <!-- jQuery -->
        <script src="vendor/jquery.2.2.3.min.js"></script>
        <!-- Popper js -->
        <script src="vendor/popper.js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- menu  -->
        <script src="vendor/mega-menu/assets/js/custom.js"></script>
        <!-- AOS js -->
        <script src="vendor/aos-next/dist/aos.js"></script>
        <!-- WOW js -->
        <script src="vendor/WOW-master/dist/wow.min.js"></script>
        <!-- owl.carousel -->
        <script src="vendor/owl-carousel/owl.carousel.min.js"></script>

        <!-- cubeportfolio -->
        <script src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: "#FAFAFB",
                            soft: "#FEECED",
                            hijau: "#0de49d",
                            secondary: "#F2404D",
                            primary2: "#792027",
                            primary3: "#F0F1F2",
                        },
                        fontFamily: {
                            inter: "Inter, sans-serif",
                        },
                    },
                },
            };
        </script>

        <!-- Theme js -->
        <script src="js/theme.js"></script>
    </body>
</html>