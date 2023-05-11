<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
    <link rel="stylesheet" href="http://demo.roxie-hamburg.com/home/css/style.css">
    <meta name="format-detection" content="telephone=no">
    <title>Roxie Hamburg</title>
    <!-- bootstrap cdn CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://demo.roxie-hamburg.com/home/img/icons/favicon.png" />
    <!-- Livewire Styles -->
    <style>
    .modal-dialog {
        background-image: linear-gradient(to top, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2));
    }

    [wire\:loading],
    [wire\:loading\.delay],
    [wire\:loading\.inline-block],
    [wire\:loading\.inline],
    [wire\:loading\.block],
    [wire\:loading\.flex],
    [wire\:loading\.table],
    [wire\:loading\.grid],
    [wire\:loading\.inline-flex] {
        display: none;
    }

    [wire\:loading\.delay\.shortest],
    [wire\:loading\.delay\.shorter],
    [wire\:loading\.delay\.short],
    [wire\:loading\.delay\.long],
    [wire\:loading\.delay\.longer],
    [wire\:loading\.delay\.longest] {
        display: none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill,
    select:-webkit-autofill,
    textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill {
        from {}
    }
    </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

<body>
    <style>
    .image_container {
        position: relative;
        text-align: center;
        color: white;
    }

    .btnCloseInner {
        color: white;
    }

    /* Centered text */
    .left_centered {
        position: absolute;
        top: 50%;
        left: 0;
        background-color: #B91646;
        padding: 5px;
        border-radius: 0px 10px 10px 0px;
        min-width: 95%;
        /* transform: translate(-50%, -50%); */
    }
    </style>
    <style>
    .ticket_text {
        font-size: 18px !important;
        font-weight: bolder !important;
        margin-left: 20px;
    }
    </style>
    <style>
    /* body {
            overflow: hidden;
        } */
    /* Hide scrollbar for Chrome, Safari and Opera */
    #overlay_dating_form::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    #overlay_dating_form {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .close-icon {
        top: 10px;
        right: 10px;
    }

    #overlay_dating_form {
        padding: 60px 100px 60px 100px;
        position: fixed;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: transparent;
        z-index: 2;

        /* background-color: rgb(255, 255, 255,0.2); */
        box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
        overflow-y: scroll;
    }

    .cursorClass {
        cursor: pointer
    }

    #overlay_dating_form .card-ticket {
        padding: 5% 0px;
        background-color: rgb(214 204 203 / 20%);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border-radius: 4px 30px 4px 4px;
    }

    .btnSubmit button {
        background: #ba1646;
        padding: 15px 40px;
        border-color: #bb1646;
        border-radius: 1px;
    }

    .card-body .btn.btn-primary {
        background-color: #B91646;
        max-width: 45%;
        width: 100%;
        padding: 10px;
        border-color: #B91646;
        border-radius: 4px;
    }

    .card-body .btn.btn-primary:hover {
        background-color: #ab1843 !important
    }

    .main_btn .btn.btn-primary {
        background-color: #B91646;
        max-width: 171px;
        width: 100%;
        padding: 10px;
        border-color: #B91646;
        border-radius: 4px;
        margin-top: 5px;
    }

    .main_btn .btn.btn-primary:hover {
        background-color: #ab1843
    }

    body #speed_dating .card.mobBorder {
        border-radius: 10px 10px 5px 5px !important;
    }

    @media(max-width:500px) {
        #overlay_dating_form {
            width: 100%;
            padding: 50px 15px;
        }

        #overlay_dating_form .card-ticket .card-body.row h1 {
            font-size: 18px;
            margin-top: 10px;
        }

        #overlay_dating_form .card-ticket .card-body.row .card .ticket_text {
            font-size: 14px !important;
            margin-left: 0;
            padding-left: 12px;
        }

        #overlay_dating_form form .card-body img {
            width: 30px;
            margin: 0 5px;
        }

        .btnSubmit button {
            padding: 15px 30px;
        }

        .iconsMob {
            width: 50px
        }

        body #speed_dating .card.mobBorder {
            border-radius: 20px 20px 10px 10px !important;
        }

        .right-end {
            right: 10px !important;
        }
    }
    </style>





    <div class="wrapper">
        <style>
        /* Style The Dropdown Button */
        .dropbtn {
            background: none;
            /* background-color: #4CAF50; */
            color: white;
            /* padding: 16px; */
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
            margin: 4rem 1.5rem;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            right: 0;
            display: none;
            position: absolute;
            background-color: black;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            margin: 0 !important;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f7e0e080
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropbtn {
            display: block;
        }

        /* Show the dropdown menu on hover */
        .dropdown .dropbtn.active {
            border-bottom: 3px solid #B91646;
        }

        /* Style The Dropdown Button */
        .dropbtn-mob {
            padding: 2rem;
            background: none;
            /* background-color: #4CAF50; */
            color: white;
            /* padding: 16px; */
            font-size: 1.5rem;
            border: none;
            cursor: pointer;
        }



        /* The container <div> - needed to position the dropdown content */
        .dropdown-mob {
            position: relative;
            display: inline-block;
            /* margin: 4rem 1.5rem; */
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content-mob {
            right: 0;
            display: none;
            position: absolute;
            background-color: black;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content-mob a {
            margin: 0 !important;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content-mob a:hover {
            background-color: #f7e0e080
        }

        /* Show the dropdown menu on hover */
        .dropdown-mob:hover .dropdown-content-mob {
            display: block;
        }

        /* Show the dropdown menu on hover */
        .dropdown-mob:hover .dropbtn-mob {
            display: block;
            border-bottom: 3px solid #B91646;
        }

        /* Show the dropdown menu on hover */
        .dropdown-mob .dropbtn-mob .active {
            border-bottom: 3px solid #B91646;
        }
        </style>
        <div class="menu-window disable-dbl-tap-zoom">
            <button class="close-btn">x</button>
            <img src="http://demo.roxie-hamburg.com/home/img/icons/Logo.svg" class="logo" alt="Roxie Logo">
            <ul class="links   menuItemslist">
                <a class="sp-top" href="http://demo.roxie-hamburg.com">
                    <li><span class="br-b  mt_0">Startseite</span> </li>
                </a>

                <div class="dropdown-mob sp-top disabledHover deopdown-custom">
                    <button class="dropbtn-mob" style="margin: 0 auto;padding:10px!important"> <span
                            class="br-b mt_0">Speise +</span> </button>
                    <div class="dropdown-content-mob">
                        <a href="http://demo.roxie-hamburg.com/speisekarte" class="">-Speisekarte</a>
                        <a href="http://demo.roxie-hamburg.com/mittagstisch" class="">-Mittagstisch</a>
                        <a href="http://demo.roxie-hamburg.com/empfehlung" class="">-Empfehlung</a>
                    </div>
                </div>
                <a class="sp-top" href="http://demo.roxie-hamburg.com/speed-dating">
                    <li><span class="br-b">SpeedDating</span></li>
                </a>
                <div class="line-link"></div>

                <a class="sp-top" href="http://demo.roxie-hamburg.com/aktuelles">
                    <li><span class="br-b">Aktuelles</span></li>
                </a>

                <a class="sp-top" href="http://demo.roxie-hamburg.com/kontakt">
                    <li><span class="br-b   last_Br">Kontakt</span></li>
                </a>
            </ul>
        </div>
        <nav class="navbar-fixed-top">
            <div class="menu-btn">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="links">
                <a href="http://demo.roxie-hamburg.com" class="">
                    <li>Startseite</li>
                </a>
                <div class="dropdown">
                    <button class="dropbtn ">Speise +</button>
                    <div class="dropdown-content">
                        <a href="http://demo.roxie-hamburg.com/speisekarte" class="">-Speisekarte</a>
                        <a href="http://demo.roxie-hamburg.com/mittagstisch" class="">-Mittagstisch</a>
                        <a href="http://demo.roxie-hamburg.com/empfehlung" class="">-Empfehlung</a>
                    </div>
                </div>
                <a href="http://demo.roxie-hamburg.com/speed-dating" class="active">
                    <li>SpeedDating</li>
                </a>
                <a href="http://demo.roxie-hamburg.com/aktuelles" class="">
                    <li>Aktuelles</li>
                </a>
                <a href="http://demo.roxie-hamburg.com/kontakt" class="">
                    <li>Kontakt</li>
                </a>
            </ul>
        </nav>

        <div class="content" id="aktuelles">
            <header id="aktuelles">
                <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating.svg" id="icon" alt="" />
                <h1>SpeedDating</h1>
            </header>

            <article class="paragraph" id="aktuelles">
                <span>Kaufen Sie ein Ticket, um Ihr Leben mit Liebe zu versüßen</span>
            </article>
            <div class="main_btn text-center">
                <a href="" class="btn btn-primary">
                    Warteliste
                </a>
            </div>
            <br><br><br><br>

            <div id="speed_dating" class="container-fluid">
                <div wire:id="Etyg037xbdemVr8coBcX"
                    wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;Etyg037xbdemVr8coBcX&quot;,&quot;name&quot;:&quot;speed-dating&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;speed-dating&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;46b2c290&quot;,&quot;data&quot;:{&quot;tickets&quot;:[],&quot;ticket_id_for_component&quot;:null,&quot;ticket_form_visible&quot;:false},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;tickets&quot;:{&quot;class&quot;:&quot;App\\Models\\Ticket&quot;,&quot;id&quot;:[10,9,8],&quot;relations&quot;:[&quot;book_tickets&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;15e2fdf881945ad01d926992f59eaf1dfe6a46a04334bfc1fa87fa51d6fe1e88&quot;}}"
                    class="row gy-5">


                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="card mobBorder" style="width: 25rem;border: none;overflow:hidden">
                            <div class="image_container">
                                <img src="http://demo.roxie-hamburg.com/home/img/speed-dating.jpg" class="card-img-top"
                                    alt="...">
                                <div class="left_centered">NUR NOCH WENIGE PLÄTZE</div>
                            </div>

                            <div class="card-body text-dark ticket_text">
                                <div class="d-flex flex-row mb-4 ">
                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/age-group.svg"
                                        class="iconsMob" alt="">
                                    <h1 class="ticket_text my-auto">65-80 Jahre</h1>
                                </div>
                                <div class="d-flex flex-row mb-4">
                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/calendar.svg"
                                        class="iconsMob" alt="">
                                    <h1 class="ticket_text my-auto">Mai 26 | Fre | 21:00</h1>

                                </div>
                                <div class="d-flex flex-row mb-4">

                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/ticket.svg"
                                        class="iconsMob" alt="">
                                    <h1 class="ticket_text my-auto">30,00€</h1>
                                </div>
                                <div class="d-flex flex-row mb-5" style="margin-top: 50px;">

                                    <button class="btn btn-primary position-relative"
                                        style="background-color: #B91646; top: 2rem" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Anmelden</button>
                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/lovely-pair.svg"
                                        alt="" class="position-absolute bottom-0 end-0  right-end"
                                        style="width: 130px;height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="card mobBorder" style="width: 25rem;border: none;overflow:hidden">
                            <div class="image_container">
                                <img src="http://demo.roxie-hamburg.com/home/img/speed-dating.jpg" class="card-img-top"
                                    alt="...">
                                <div class="left_centered">NUR NOCH WENIGE PLÄTZE</div>
                            </div>

                            <div class="card-body text-dark ticket_text">
                                <div class="d-flex flex-row mb-4 ">
                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/age-group.svg"
                                        class="iconsMob" alt="">
                                    <h1 class="ticket_text my-auto">25-35 Jahre</h1>
                                </div>
                                <div class="d-flex flex-row mb-4">
                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/calendar.svg"
                                        class="iconsMob" alt="">
                                    <h1 class="ticket_text my-auto">Mai 25 | Don | 17:30</h1>

                                </div>
                                <div class="d-flex flex-row mb-4">

                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/ticket.svg"
                                        class="iconsMob" alt="">
                                    <h1 class="ticket_text my-auto">30,00€</h1>
                                </div>
                                <div class="d-flex flex-row mb-5" style="margin-top: 50px;">

                                    <button class="btn btn-primary position-relative"
                                        style="background-color: #B91646; top: 2rem"
                                        wire:click="showNested(9)">Anmelden</button>
                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/lovely-pair.svg"
                                        alt="" class="position-absolute bottom-0 end-0  right-end"
                                        style="width: 130px;height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="card mobBorder" style="width: 25rem;border: none;overflow:hidden">
                            <div class="image_container">
                                <img src="http://demo.roxie-hamburg.com/home/img/speed-dating.jpg" class="card-img-top"
                                    alt="...">
                                <div class="left_centered">NUR NOCH 5 FREIE PLÄTZE</div>
                            </div>

                            <div class="card-body text-dark ticket_text">
                                <div class="d-flex flex-row mb-4 ">
                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/age-group.svg"
                                        class="iconsMob" alt="">
                                    <h1 class="ticket_text my-auto">35-45 Jahre</h1>
                                </div>
                                <div class="d-flex flex-row mb-4">
                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/calendar.svg"
                                        class="iconsMob" alt="">
                                    <h1 class="ticket_text my-auto">Mai 17 | Mit | 18:30</h1>

                                </div>
                                <div class="d-flex flex-row mb-4">

                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/ticket.svg"
                                        class="iconsMob" alt="">
                                    <h1 class="ticket_text my-auto">20,99€</h1>
                                </div>
                                <div class="d-flex flex-row mb-5" style="margin-top: 50px;">

                                    <button class="btn btn-primary position-relative"
                                        style="background-color: #B91646; top: 2rem"
                                        wire:click="showNested(8)">Anmelden</button>
                                    <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/lovely-pair.svg"
                                        alt="" class="position-absolute bottom-0 end-0  right-end"
                                        style="width: 130px;height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Livewire Component wire-end:Etyg037xbdemVr8coBcX -->
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div style="background-color:transparent;" class="modal-content">
                        <div class="col d-flex justify-content-end p-2">

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <form action="{{route('ticket.submit')}}" method="POST">
                            @csrf
                           <div class="row">
                                <div class="col">
                                    <h1 class="text-white mb-5 text-center">
                                        Ihre Bestellung:
                                    </h1>
                                    <div class="card carWd">
                                        <div class="card-body text-dark ticket_text">
                                            <div class="d-flex flex-row mb-md-5 mb-3 mt-3">
                                                <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/age-group.svg"
                                                    class="icon" />
                                                <h1 class="ticket_text my-auto">
                                                    65-80 Jahre
                                                </h1>
                                            </div>
                                            <div class="d-flex flex-row mb-md-5 mb-3 mt-3">
                                                <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/calendar.svg"
                                                    class="icon" />
                                                <h1 class="ticket_text my-auto">
                                                    Mai 26 | Fre | 21:00
                                                </h1>
                                            </div>
                                            <div class="d-flex flex-row mb-md-5 mb-3 mt-3">
                                                <img src="http://demo.roxie-hamburg.com/home/img/icons/speed-dating/ticket.svg"
                                                    class="icon" />
                                                <h1 class="ticket_text my-auto">
                                                    <input type="hidden" name="price" value="30">
                                                    30,00€
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carWd">
                                        <div>
                                            <label for="" class="text-dark mt-2">
                                                Haben sie einen Gutscheincode?
                                            </label>
                                        </div>
                                        <div class="d-flex promo mt-3">
                                            <div class="form__group">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h1 class="text-white mb-5 text-center">
                                        Kontaktdaten:
                                    </h1>
                                    <h4 class="text-white">1. Person</h4>
                                    <div class="input-group mb-2">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" name="firstName" class="form-control"
                                                    placeholder="Enter First Name">
                                            </div>
                                            <div class="col">
                                                <input type="text" name="lastName" class="form-control"
                                                    placeholder="Enter Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <input type="radio" name="gender" class="" value="male"> Male
                                            </div>
                                            <div class="col-auto">
                                                <input type="radio" name="gender" class="" value="female"> Female
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-2">
                                        <select name="age" class="form-select form-control">
                                            <option value="">--Select Age--</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>

                                        </select>
                                    </div>
                                    <div class="input-group mb-2">
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="Enter Mobile Number" required>
                                    </div>
                                    <div class="input-group mb-2">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter email address" required>
                                    </div>
                                    <div class="input-group mb-2">
                                    <button class="btn btn-primary"
                                        style="background-color: #B91646;">Submit</button>
                                    </div>

                                </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $(".deopdown-custom").click(function() {
                if ($(this).hasClass('enableHover')) {
                    $(this).removeClass('enableHover');
                    $(this).addClass('disableHover');
                } else {
                    $(this).removeClass('disableHover');
                    $(this).addClass('enableHover');
                }

            });
            </script>
            <footer>

                <img src="http://demo.roxie-hamburg.com/home/img/icons/Logo.svg" alt="">
                <ul id="footer-pages">
                    <li><a href="http://demo.roxie-hamburg.com/impressum">Impressum</a></li>
                    <li><a href="http://demo.roxie-hamburg.com/datenschutz">Datenschutzerklärung</a></li>
                </ul>
                <h6>© Roxie Hamburg 2022</h6>
            </footer>
        </div>
        <!-- bootstrap cdn JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
        <!-- Livewire Scripts -->

        <script src="/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false"
            data-turbolinks-eval="false"></script>
        <script data-turbo-eval="false" data-turbolinks-eval="false">
        if (window.livewire) {
            console.warn(
                'Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.'
            )
        }

        window.livewire = new Livewire();
        window.livewire.devTools(true);
        window.Livewire = window.livewire;
        window.livewire_app_url = '';
        window.livewire_token = 'j0pTmeLRdRsrFAiTbw6EBEB1igFvPrdilaFHqxKA';

        /* Make sure Livewire loads first. */
        if (window.Alpine) {
            /* Defer showing the warning so it doesn't get buried under downstream errors. */
            document.addEventListener("DOMContentLoaded", function() {
                setTimeout(function() {
                    console.warn(
                        "Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js"
                    )
                })
            });
        }

        /* Make Alpine wait until Livewire is finished rendering to do its thing. */
        window.deferLoadingAlpine = function(callback) {
            window.addEventListener('livewire:load', function() {
                callback();
            });
        };

        let started = false;

        window.addEventListener('alpine:initializing', function() {
            if (!started) {
                window.livewire.start();

                started = true;
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            if (!started) {
                window.livewire.start();

                started = true;
            }
        });
        </script>
        <script>
        $('body').on('click', '.btnCloseInner', function() {
            $('.btnCloseModal').trigger('click');
        });
        </script>
        <script src="http://demo.roxie-hamburg.com/home/js/app.js"></script>
</body>

</html>