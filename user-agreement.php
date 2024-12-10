<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dev.playasport.in/user-agreement by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2024 10:17:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Play A Sport</title>
    <!-- Bootstrap css  -->
<link rel="stylesheet" href="frontend/css/bootstrap.min.css">
<!-- slick slider css  -->
<link rel="stylesheet" href="frontend/css/slick-theme.css">
<link rel="stylesheet" href="frontend/css/slick.css">
<link rel="stylesheet" href="frontend/css/animate.css">
<!-- main css  -->
<link rel="stylesheet" href="frontend/css/style.css">
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/select2%404.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet"
    href="../cdn.jsdelivr.net/npm/select2-bootstrap-5-theme%401.2.0/dist/select2-bootstrap-5-theme.min.css" />
<link rel="stylesheet" href="frontend/css/toastr.min.css">
    
    <!-- fav icon  -->
    <link rel="apple-touch-icon" sizes="57x57" href="frontend/images/favicon/apple-icon-57x57.html">
    <link rel="apple-touch-icon" sizes="72x72" href="frontend/images/favicon/apple-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="60x60" href="frontend/images/favicon/apple-icon-60x60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="frontend/images/favicon/apple-icon-76x76.html">
    <link rel="apple-touch-icon" sizes="114x114" href="frontend/images/favicon/apple-icon-114x114.html">
    <link rel="apple-touch-icon" sizes="120x120" href="frontend/images/favicon/apple-icon-120x120.html">
    <link rel="apple-touch-icon" sizes="144x144" href="frontend/images/favicon/apple-icon-144x144.html">
    <link rel="apple-touch-icon" sizes="152x152" href="frontend/images/favicon/apple-icon-152x152.html">
    <link rel="apple-touch-icon" sizes="180x180" href="frontend/images/favicon/apple-icon-180x180.html">
    <link rel="icon" type="image/png" sizes="192x192"
        href="frontend/images/favicon/android-icon-192x192.html">
    <link rel="icon" type="image/png" sizes="32x32"
        href="frontend/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="frontend/images/favicon/favicon-96x96.html">
    <link rel="icon" type="image/png" sizes="16x16"
        href="frontend/images/favicon/favicon-16x16.png">
    <!-- <link rel="manifest" href="https://dev.playasport.in/frontend/images/favicon/manifest.json"> -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <!-- start header  -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="frontend/images/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.html">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin/login.html" target="_blank">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="coaching/login.html" target="_blank">Coaching Center</a>
                        </li>

                        <li class="nav-item">
                            <div class="bg-btn">
                                
                                <a class="primary-btn btn-shadow red-btn" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" role="button">Let's
                                    Connect</a>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header  -->
    <!-- Let's Connect Form Starts -->
<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center gap-3">
            <img src="frontend/images/logo.png" alt="" class="offcanvas-logo">
            <h3 id="offcanvasRightLabel">Let's Connect</h3>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="https://dev.playasport.in/contact-us" method="POST" id="contact-us">
            <input type="hidden" name="_token" value="d9QPKsxpmLEmY8KLa5Li7ArF6bzvwyIsU8bObN9r" autocomplete="off">            <div class="form-group d-flex flex-column ">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value=""
                    placeholder="Enter Your Name" class="form-control mt-2">
                            </div>
            <div class="form-group d-flex flex-column ">
                <label for="number">Contact Number</label>
                <input type="tel" id="number" name="contact_number" value=""
                    placeholder="Enter Your Contact Number" class="form-control mt-2">
                            </div>
            <div class="form-group d-flex flex-column ">
                <label for="e-mail">E-mail</label>
                <input type="email" id="e-mail" name="email" value=""
                    placeholder="Enter Your E-mail" class="form-control mt-2">
                            </div>
            <div class="form-group d-flex flex-column ">
                <label for="user-name">User's Name (Student/Candidate)</label>
                <input type="text" id="user-name" name="user_name" value=""
                    placeholder="Enter Your User Name" class="form-control mt-2">
                            </div>
            <div class="form-group d-flex flex-column ">
                <label for="associated">Name of the Sports Academy associated with</label>
                <input type="text" id="associated" value=""
                    placeholder="Enter Your Answer" name="coaching_name" class="form-control mt-2">
                            </div>
            <div class="form-group d-flex flex-column ">
                <label for="feedback">Your Feedback/Query</label>
                <textarea name="query" id="feedback" cols="30" rows="5" class="form-control mt-2"
                    placeholder="Add Your Query"></textarea>
                            </div>
            <div class="form-group d-flex flex-column ">
                <label for="suggetions">Your Suggestions/Requirements (If Any)</label>
                <textarea name="suggestion" id="suggetions" cols="30" rows="5" class="form-control mt-2"
                    placeholder="Add Suggestions"></textarea>
                            </div>
            <div class="form-group d-flexn flex-column">
                <label for="satisfy">How satisfied are you with Play A Sport?</label>
                <div class="d-flex form-group justify-content-center gap-5 mt-2">
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="flexRadioDefault1">1</label>
                        <input class="form-check-input" data-error-container="#satisfy_error" type="radio"
                            name="satisfaction_level" value="1"                             id="flexRadioDefault1">
                    </div>
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="flexRadioDefault2">2</label>
                        <input class="form-check-input" data-error-container="#satisfy_error" type="radio"
                            name="satisfaction_level" value="2"                             id="flexRadioDefault2">
                    </div>
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="flexRadioDefault3">3</label>
                        <input class="form-check-input" data-error-container="#satisfy_error" type="radio"
                            name="satisfaction_level" value="3"                             id="flexRadioDefault3">
                    </div>
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="flexRadioDefault4">4</label>
                        <input class="form-check-input" data-error-container="#satisfy_error" type="radio"
                            name="satisfaction_level" value="4"                             id="flexRadioDefault4">
                    </div>
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="flexRadioDefault5">5</label>
                        <input class="form-check-input" data-error-container="#satisfy_error" type="radio"
                            name="satisfaction_level" value="5"                             id="flexRadioDefault5">
                    </div>
                </div>
                                <span id="satisfy_error"></span>
            </div>
            <div class="form-group d-flex flex-column">
                <label for="recommend">How likely are you to recommend Play A Sport to your peers/friends?</label>
                <div class="d-flex form-group justify-content-center gap-5 mt-2">
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="recomendedRadio1">1</label>
                        <input class="form-check-input" data-error-container="#recommend_error" type="radio"
                            name="recommend_level" value="1"  id="recomendedRadio1">
                    </div>
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="recomendedRadio2">2</label>
                        <input class="form-check-input" data-error-container="#recommend_error" type="radio"
                            name="recommend_level" value="2"  id="recomendedRadio2">
                    </div>
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="recomendedRadio3">3</label>
                        <input class="form-check-input" data-error-container="#recommend_error" type="radio"
                            name="recommend_level" value="3"  id="recomendedRadio3">
                    </div>
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="recomendedRadio4">4</label>
                        <input class="form-check-input" data-error-container="#recommend_error" type="radio"
                            name="recommend_level" value="4"  id="recomendedRadio4">
                    </div>
                    <div class="radio-conatiner">
                        <label class="form-check-label" for="recomendedRadio5">5</label>
                        <input class="form-check-input" data-error-container="#recommend_error" type="radio"
                            name="recommend_level" value="5"  id="recomendedRadio5">
                    </div>
                                    </div>
                <span id="recommend_error"></span>

            </div>
            <div class="from-group">
                <label for="get-to-know">How did you get to know about Play A Sport?</label>
                <div class=" form-group justify-content-center gap-5 mt-2">
                    <div class="get-to-know-radio-container">
                        <input class="form-check-input" type="radio" data-error-container="#media_source_error"
                            name="media_source" value="social_media"                             id="getToknowRadio1">
                        <label class="form-check-label" for="getToknowRadio1">Social Media (Instagram, Facebook,
                            etc)</label>
                    </div>
                    <div class="get-to-know-radio-container">
                        <input class="form-check-input" type="radio" data-error-container="#media_source_error"
                            name="media_source" value="print_media"                             id="getToknowRadio2">
                        <label class="form-check-label" for="getToknowRadio2">Print Media (Newspapers, Leaflets,
                            Pamphlets, etc)</label>
                    </div>
                    <div class="get-to-know-radio-container">
                        <input class="form-check-input" type="radio" data-error-container="#media_source_error"
                            name="media_source" value="digital_media"                             id="getToknowRadio3">
                        <label class="form-check-label" for="getToknowRadio3">Digital Media (Website, Online Videos,
                            Podcasts, etc)</label>
                    </div>
                                        <span id="media_source_error"></span>
                </div>
            </div>
            <div class="from-group">
                <label for="contact-us">Would you like to contact us?</label>
                <div class=" form-group justify-content-center gap-5 mt-2">
                    <div class="get-to-know-radio-container">
                        <input class="form-check-input" data-error-container="#is_contact_us_error" type="radio"
                            name="is_contact_us" value="1"  id="contactRadio1">
                        <label class="form-check-label" for="contactRadio1">Yes</label>
                    </div>
                    <div class="get-to-know-radio-container">
                        <input class="form-check-input" data-error-container="#is_contact_us_error" type="radio"
                            name="is_contact_us" value="0"  id="contactRadio2">
                        <label class="form-check-label" for="contactRadio2">No</label>
                    </div>
                                        <span id="is_contact_us_error"></span>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="primary-btn red-btn">Submit</button>
            </div>
        </form>
    </div>
</div>


<!-- Let's Connect Offcanvas Ends -->
    <!-- all popup start  -->
    <div class="signup-modals">
        <div class="modal sign-up fade" id="exampleModalToggle" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="signup-content">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-sm-5 mb-md-0">
                                    <div class="sinup-right-content">
                                        <h2>Let’s Connect with
                                            <span class="text-circle">
                                                <span class="behind-cicle">Play A Sport </span>
                                                <span data-value="2" class="mouse-animation center-cicle object"></span>
                                            </span>
                                        </h2>
                                        <p>Sign up now and enter the sports community with Play a sport!</p>
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Enter Your Full Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Enter Your Email Address">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I Accept Terms & Conditions
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bg-btn">
                                        <a class="primary-btn btn-shadow red-btn" data-bs-target="#exampleModalToggle2"
                                            data-bs-toggle="modal" data-bs-dismiss="modal">Sign In</a>
                                        <span></span>
                                    </div>
                                    <!-- Coaching Admin Login -->
                                    <div class="coaching-admin">
                                        <h4>Or</h4>
                                        <div class="coaching-admin-links">
                                            <div class="coaching-admin-content">
                                                <h4 class="pb-0 mb-0">Admin Login:</h4>
                                                <a class="" href="admin/login.html"
                                                    target="_blank">Admin</a>
                                            </div>
                                            <div class="coaching-admin-content">
                                                <h4 class="pb-0 mb-0">Coaching Center Login:</h4>
                                                <a class="" href="coaching/login.html"
                                                    target="-blank">Coaching Center</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 display-none">
                                    <div class="about-screen">
                                        <div class="mobile-frame">
                                            <div class="screenshot-bg-circle"></div>
                                            <div class="screen-shot">
                                                <img class="img-fluid"
                                                    src="frontend/images/Social_app_2.gif"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal game-popup fade" id="exampleModalToggle2" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="signup-content">
                        <div class="container-fluid">
                            <div class="game-popup-content">
                                <h2>Play and Complete the <span class="text-circle"><span
                                            class="behind-cicle">Game</span>
                                        <span data-value="2" class="mouse-animation center-cicle object"></span>
                                    </span>
                                    for sign in</h2>
                                <p>Are you a Gamer? Complete the game on the first try or share and challenge your
                                    friends. Get free access to Play A Sport thanks to your skill!</p>
                                <div class="game-instructions row align-items-center">
                                    <div class="col-md-4">
                                        <div class="instructions ">
                                            <div class="">
                                                <ul>
                                                    <li>
                                                        <p>Turn your rotation off to play from smartphone</p>
                                                    </li>
                                                    <li>
                                                        <p>Don't fall down to win the game</p>
                                                    </li>
                                                    <li>
                                                        <p>Single click tojump, double click to super jump</p>
                                                    </li>
                                                    <li>
                                                        <p>Enjoy it!</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="game">
                                            <img src="frontend/images/join-section-img.jpg"
                                                alt="" class="game-screen">
                                            <!-- <div class="play-game">
                                            <button data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                                                data-bs-dismiss="modal"> <img src="https://dev.playasport.in/frontend/images/play-ic.svg"
                                                    alt=""></button>
                                            <span>Start Game</span>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal game-share-popup fade" id="exampleModalToggle3" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="signup-content">
                        <div class="container-fluid">
                            <div class="game-share-popup-content text-center">
                                <img class="oops-img" src="frontend/images/opps-ic.svg"
                                    alt="">
                                <h2>Oops Sorry...!<br>
                                    Try After <span class="text-circle">30 min <span data-value="2"
                                            class="mouse-animation center-cicle object"></span>
                                    </span>... For Signin</h2>
                                <div class="or-line"><span class="line-text"></span><span class="or">or</span>
                                </div>
                                <p>You can share link on social media to play the game again <br> <span
                                        class="red-text">Right Now</span></p>
                                <div class="social-media share-game">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><img
                                                    src="frontend/images/share-g-ig-ic.svg"
                                                    alt=""></a></li>
                                        <li><a href="#"><img
                                                    src="frontend/images/share-g-wtsapp-ic.svg"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <button class="copy-url">Copy Url to share &#x1F4CB;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- all popup end  -->
    <!-- chatbot start  -->
    <div class="chatbot-box">
        <div class="toggle-chatbot">
            <div class="chatbot-header">
                <div class="chatbot-profile">
                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png" alt="">
                    </div><span>Play A Sport</span>
                </div>
                <div class="min-close">
                    <button><img src="frontend/images/min-chatbot-ic.svg" alt=""></button>
                    <button class="close-chatbot"><img src="frontend/images/close-chatbot-ic.svg"
                            alt=""></button>
                </div>
            </div>
            <div class="chatbot-body">
                <div class="chat-scroll">
                    <div class="chat-box">
                        <ul>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>
                            <li>
                                <div class="massage">
                                    <div class="chatbot-dp"><img src="frontend/images/chatbot-dp.png"
                                            alt=""></div>
                                    <span>Hello, how can i help?</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="chat-box-footer">
                <div class="select-msg-slider">
                    <ul class="items">
                        <li><img src="frontend/images/country-flg-ic-1.svg" alt=""
                                class="select-msg-ic"><span class="select-msg-name">Dubai</span></li>
                        <li><img src="frontend/images/country-flg-ic-1.svg" alt=""
                                class="select-msg-ic"><span class="select-msg-name">Dubai</span></li>
                        <li><img src="frontend/images/country-flg-ic-1.svg" alt=""
                                class="select-msg-ic"><span class="select-msg-name">Dubai</span></li>
                        <li><img src="frontend/images/country-flg-ic-1.svg" alt=""
                                class="select-msg-ic"><span class="select-msg-name">Dubai</span></li>
                        <li><img src="frontend/images/country-flg-ic-1.svg" alt=""
                                class="select-msg-ic"><span class="select-msg-name">Dubai</span></li>

                    </ul>
                </div>
                <div class="msg-input">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Message..." aria-label="Username"
                            aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1"><button><img
                                    src="frontend/images/chatbot-send-ic.svg"
                                    alt=""></button></span>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="chat-bot-btn"><img src="https://dev.playasport.in/frontend/images/chatbot-ic.svg" alt=""></div> -->
    </div>
    <!-- chatbot end  -->
    <!-- Main Starts -->
    <main>
        <!-- User Agreement -->
<div class="orange-container">
            <div class="container">
                <div class="user-agreement-page contact-page ">
                    <h1 class="text-center">User Agreement</h1>
                    <div class="agreement">
                        <p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(255, 255, 255); padding-bottom: 8px; font-size: 16px; line-height: 22px; font-family: &quot;Atyp Display&quot;; background-color: rgb(239, 72, 35);">This&nbsp;<span style="font-weight: 600;">Platform Listing Agreement&nbsp;</span>(hereinafter referred to as&nbsp;<span style="font-weight: 600;">"Agreement"</span>) is entered into on this the ____ day of ______ (hereinafter referred to as&nbsp;<span style="font-weight: 600;">"Effective Date"</span>), at Kolkata, India .</p><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">BY AND BETWEEN</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE Technology Private Limited, [CIN: U93190WB2023PTC262029]&nbsp;<span style="font-weight: 600;">a Private Limited Company incorporated under the Companies Act, 2013 and having its registered office at AE-694 Sector 1, Salt Lake City, Bidhan Nagar AE Market, North 24 Parganas, Salt Lake, West Bengal, India, 700064 (hereinafter referred to as&nbsp;</span>“SISE”,&nbsp;<span style="font-weight: 600;">which expression shall, unless repugnant to the meaning or context hereof, be deemed to include all heirs, successors and permitted assigns) of the&nbsp;</span>FIRST PART;</p></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">AND</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Play a Sport, a Company incorporated under the laws of India and having its office at AE-694 Sector 1, Salt Lake City, West Bengal (hereinafter referred to as the</span>&nbsp;“Institution”,&nbsp;<span style="font-weight: 600;">which expression shall, unless repugnant to the meaning or context hereof, be deemed to include all successors and permitted assigns) of the&nbsp;</span>SECOND PART.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“SISE”</span>&nbsp;and the&nbsp;<span style="font-weight: 600;">“Institution”</span>&nbsp;shall hereinafter individually be referred to as&nbsp;<span style="font-weight: 600;">“Party”</span>&nbsp;as the context may require and collectively be referred to as&nbsp;<span style="font-weight: 600;">“Parties”</span>.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">WHEREAS</span>&nbsp;SISE is a Company that operates an online Platform titled “Play A Sport” ( “<span style="font-weight: 600;">PAS</span>”) that serves as an intermediary between its Users (as more fully described in this Agreement) and diverse sports coaching institutions dedicated to coaching children;</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">WHEREAS</span>&nbsp;the Institution is engaged in providing sports coaching to children above the age of [___] years in sports such as –[______________] and desires to be included as one of the sports coaching institutions on SISE’s Platform;</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">AND WHEREAS</span>, the Parties wish to enter into this binding Agreement to establish the terms and conditions under which they will jointly undertake to fulfil the Purpose, as more fully described in this Agreement and subject to the terms and conditions contained herein.</p></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">THEREFORE, IN CONSIDERATION OF THE MUTUAL COVENANTS CONTAINED HEREIN AND OTHER GOOD AND VALUABLE CONSIDERATION, THE RECEIPT AND SUFFICIENCY OF WHICH IS HEREBY ACKNOWLEDGED, THE PARTIES AGREE AS FOLLOWS:</h4><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">DEFINITIONS AND INTERPRETATIONS</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Applicable Laws”</span>&nbsp;shall mean acts, rules, ordinances, regulations, notifications, circulars, or decisions of any executive, judicial, administrative, or quasi-judicial authority or another document.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Application”</span>&nbsp;means SISE’s software application “Play A Sport” that is available for download on mobile phones, desktops and other digital devices.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Approvals”</span>&nbsp;means sanctions, permissions, consents, validations, confirmations, licenses, and other authorizations obtained and/or required to be obtained from any Government Body.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Agreement”</span>&nbsp;means this Platform Listing Agreement along with its Schedule, Appendix, or Annexure thereto and any other mutually agreed on modifications of this Agreement.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Commission”</span>&nbsp;means the amount payable by the Institute to SISE being a percentage (%) of Net Sales, as set out in the Form.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Confidential Information”</span>&nbsp;means any information, data, trade secrets, proprietary knowledge, business processes, financial data, customer lists, marketing strategies, operational procedures, technology, intellectual property, artefacts, tools, methods, data or information, that relates to either Party or any of the parties existing or contemplated business activities, technology. Confidential Information also includes all customer related information including any rates and discounts and with respect to the Institution, it shall include the End Customer Database. The terms and conditions of this Agreement and any other information, whether oral, written, or in electronic form, that is disclosed by one Party to the other Party (in connection with this Agreement. Confidential Information may also include information disclosed by either Party to its respective staff, contractors, or third parties who are authorized to have access to such information for the purpose of fulfilling their responsibilities pursuant to this Agreement, provided that such staff, contractors, or third parties are subject to confidentiality obligations no less restrictive than those set forth in this Agreement.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Confidential Information does not include information that:</span></p><ul class="number" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: upper-roman;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Is or becomes publicly available without breach of this Agreement;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Is lawfully obtained by the Receiving Party from a third party without restrictions on disclosure;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Was already known to the Receiving Party prior to disclosure by the Disclosing Party; or</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Is independently developed by the Receiving Party without reference to or use of the Disclosing Party's Confidential Information.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Effective Date”</span>&nbsp;means the date of execution of this Agreement by the Parties.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Fees”</span>&nbsp;means the total amount in Indian Rupees set out in the Form towards the respective Products or Services to be purchased by the User and shall include applicable taxes and other charges as may be applicable.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Intellectual Property”</span>&nbsp;means patents, rights to Inventions, copyright and related rights, trade marks, business names and domain names, rights in get-up, goodwill and the right to sue for passing off or unfair competition, rights in designs, rights in computer software, database rights, rights to use, and protect the confidentiality of, confidential information (including know-how and trade secrets) and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, renewals or extensions of, and rights to claim priority from, such rights and all similar or equivalent rights or forms of protection which subsist or will subsist now or in the future in any part of the world.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Net Sales”</span>&nbsp;means the Fees payable by a User to the Institute towards purchasing of the Products or Services availed by the User offered by the Institute.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Personal Data”</span>&nbsp;means any data about an individual who is identifiable by or in relation to such data.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Platform”</span>&nbsp;means SISE’s Website&nbsp;<span style="font-weight: 600;">Play a Sport&nbsp;</span>and its Application&nbsp;<span style="font-weight: 600;">Play a Sport.</span></p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Platform Services”</span>&nbsp;means delivery of information via the Platform whether existing now or in the future, information about the listed coaching institutes, providing means to access them, sale of memberships and subscriptions and display, marketing and/or sale of services by SISE through the Platform and other Products or Services provided through the Platform to promote sports training/coaching.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Persons”</span>&nbsp;means any natural person, limited or unlimited liability company, corporation, partnership (whether limited or unlimited), proprietorship, Hindu undivided family, trust, union, association, government or any agency or political subdivision thereof or any other entity that may be treated as a person under applicable law.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Products”</span>&nbsp;means the pass for attending classes, one-day class, vouchers or coupons through the Site or PAS Platform.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Privacy Policy”</span>&nbsp;means the privacy policy of SISE with respect to treatment of Users’ information as provided here.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Services”</span>&nbsp;means the provision of providing coaching, training with respect to various sports including providing, facilities for providing structured training, coaching, and resources for the development of children's athletic skills and overall sports education by the Institution. This includes, but is not limited to, the coaching staff, programs, facilities, and services offered by the Institution.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“SOPs”</span>&nbsp;shall mean and denote “Standard Operating Procedures” as prepared by SISE and annexed as Schedule A and Schedule B to this Agreement.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Territory”</span>&nbsp;means the territory of Kolkata, India</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Transaction Support Services”</span>&nbsp;shall include services in relation to support the sale of the Products and Services by SISE to the Institution which shall include its listing on the Platform, Payment Facilitation Services, customer support services and any other additional services that may be agreed between the parties.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Users”</span>&nbsp;means any Person who or which uses the Services and Products, including any Persons who or which access the Platform or access the content displayed thereof.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“User Database”</span>&nbsp;means all data / information (as may be updated from time to time) about the persons/ entities including their names, addresses, contact details, queries, orders and other requests made available by such persons / entities on the Platform or otherwise captured by the Platform that shall further include the usage, behavior, trends and other statistical information / data relating to such persons / entities, who (i) access the Platform or otherwise get invitation to the Platform or correspond with the Platform, (ii) place any order for Products or Services on the Platform, or (iii) send any enquiry/ request with respect to the Platform, and shall include all analysis and records based on such aforementioned information. For the avoidance of doubt, any list, description or other grouping of consumers or customers or any derivative work from User shall be deemed to be User Database.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">“Website”</span>&nbsp;means SISE’s website –Play a Sport</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The words which are used in this Agreement which have special meanings, have been defined in the body of this Agreement.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The provisions of this Agreement together with the schedules form a part of this Agreement and shall have effect as if set out in full in the body of this Agreement and any reference to this Agreement includes the schedules.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Words denoting the singular shall include the plural and vice versa.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Words denoting any gender include all genders.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The headings in this Agreement are inserted for convenience only and shall be ignored in construing any meaning in this Agreement.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">PURPOSE</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The purpose of this Agreement is to establish a collaboration between SISE and the Institute to facilitate the listing of the Institute's Products and Services in the Territory on the Platform. The collaboration aims to provide Users of the Platform with the opportunity to enroll their children in the Institute's coaching programs, thereby enhancing accessibility and promoting the Institute's services to a broader audience.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Parties agree that this Agreement does not create any exclusivity between SISE and the Institute.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Parties hereby voluntarily agree to be bound by the terms of this Agreement from the Effective Date and acknowledge that the terms set out herein are for the benefit of each other and are legally binding and enforceable.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">INSTITUTE’S COVENANTS</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees to curate and list its offers, Products and Services value for the Users as per the format annexed as Schedule B (“<span style="font-weight: 600;">Form</span>”) to this Agreement and in accordance with the terms of this Agreement applicable from the Effective Date.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute hereby confirms that it has the adequate facilities, Approvals, skilled, certified trainers and coaches for providing their services and that it has made no false, incorrect or inaccurate representation towards the same on the Platform.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute acknowledges and agrees that for rendering its Services it will be in the possession of Personal Data of children i.e. the students and therefore, it is liable to handle any and all such information with due care and in line with the SOP listed at Schedule B to this Agreement.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute must possess complete rights, title, and interest in the content shared on the Platform, including but not limited to description of services, photographs, artwork, creatives, logos, pictures, videos, music, and write-ups ("<span style="font-weight: 600;">Content</span>"). The Institute grants SISE a non-exclusive, royalty-free, irrevocable, perpetual right to utilize, modify, adapt, publish, translate, create derivative works, distribute, upload, and display the Content on the Platform.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute will provide its Content to SISE for promotional and marketing activities pertaining to the Platform.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees to provide accurate details pertaining to the Products and Services offered by it on the Platform along with the details of the operational days and timings for offering their Services. Further, a change in any substantial information pertaining to the Institute shall be immediately updated on the Platform.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute acknowledges that SISE holds no liability for Institute-provided Content displayed on the Platform. The Institute permits SISE to use its logo and brand name for advertisement and marketing purposes.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute must possess necessary intellectual property rights from relevant third parties collaborating for providing its Products and Services on the Platform. The Institute assures SISE of rights to sub-license such intellectual property for listing and displaying the same on the Platform.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute will apprise SISE of any potential offers or discounts or change in its fees and accordingly updated the same on the Platform.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute allows SISE to collect the fees paid by Users for availing the Institute’s Products and Services on the Platform. Further, the Institute allows SISE to deduct Commission and Tax Deducted at Source (TDS) from the value of the fees paid by the User and transfer the remaining amounts as per the payment settlement process outlined in the Form.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">If applicable tax laws require the Institute to deduct TDS on SISE's Commission, the Institute shall deposit such TDS and claim a refund upon submission of TDS certificate (Form 16A).</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute must not discriminate against Users from availing any of its offers, discounts etc.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute cannot charge additional amounts above the Fees for the Users, unless such amounts is payable towards any other Products or Services that are offered by the Institute (but not listed on the Platform).</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute permits SISE to contact it via various communication modes for facilitating the purchase of its Products or Services or addressing any issues.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute must adhere to the terms of this Agreement and provide all the Products and Services as mentioned on the Platform.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees and understands that nothing in this Agreement prevents SISE from promoting or marketing the Products or Services of other institutions.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute is solely responsible for the various aspects pertaining to the quality, of the Products and Services offered by it</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees and confirms that it abides by the SOPs at Schedule A to this Agreement.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees to obtain consent from the parents/guardians of children prior to enrolling them for any of their Services .</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute assures compliance with applicable GST laws and other indirect tax laws.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institutes ensures possession of required licenses and permissions for offering at the Institutes, and SISE will not liable for non-compliance.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute confirms that it will reimburse SISE for any misdeclaration or inaccurate or false information shared by it on the Platform.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute acknowledges SISE's non-involvement and non-liability for the offered Products and Services.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE decides the placement and removal of the listing of the Institute on its Platform and reserves the right to communicate reasons for rejection or removal to the Institute.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE does not guarantee customer reach or turnover to the Institute for purchased Products and Services and holds no responsibility for the Institute’s losses.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute is solely responsible for any loss, damage, or injury caused to third parties.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE acts solely as a booking agent, disclaiming responsibility for the Institute’s actions or services.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE pays the Institutes for purchased Products and Services only.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">CONTENT GUIDELINES FOR INSTITUTE</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute shall ensure that any Content uploaded on the Platform complies with the Applicable Laws, and may be subject to disabling or investigation. If the Institute is found in violation of laws, regulations, the terms of this Agreement, or the privacy policy of the Platform, SISE reserves the right to immediately block the Institute’s access to the Platform and may reject, remove, or delete non-compliant Content posted by the Institute, taking appropriate legal actions available under various statutes.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute acknowledges that SISE is not obligated to monitor the Institute’s or anyone else's access to or use of the Platform for violations of the terms of this Agreement, or to review or edit the Content. However, SISE reserves the right to do so to operate and improve services (including, without limitation, fraud prevention, risk assessment, investigation, and customer support), to ensure compliance with the terms of this Agreement, and to comply with Applicable Laws or legal requirements.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees to use the Platform for lawful purposes only and will not violate any laws, regulations, ordinances, or other applicable government or international law requirements.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">SISE COVENANTS</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE will provide Transaction Support Services for Users to make payments for purchasing the Products and Services.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE shall provide the Institute access to the portal _________, where the Institute can list their Fees for Users.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE will transfer to the Institute the collected Fees from Customers, deducting the Commission, applicable taxes, and/or any other due amounts payable to SISE.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE will collect and deposit Tax Collected at Source (TCS) on the Fees, following the provisions of the Central Goods and Services Tax Act, 2017 for Deals categorized as_______.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE will collect and pay taxes under Section 8(a) of the Central Goods and Services Tax Act, 2017, on the Fees paid towards the Institute’s Products and Services.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE will deduct TDS as per the Income-tax Act, 1961 from the Fees at the applicable rate.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE reserves the right to remove/suspend Content related to the Institute from the Platform at its sole discretion, with prior notice to the Institute.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">A detailed order receipt shall be shared with the User upon the purchase of Products or Services of the Institute and SISE shall generate a tax invoice for the User on behalf of the Institute.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">COMMISSION</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees and acknowledges that in lieu of the Platform Services, it shall pay SISE the Commission at the rates specified in the Form.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Parties agree that SISE may change Commission rates or include additional charges/fees from time to time, communicating such changes via email or other modes to the Institute with a prior notice of forty-five (45) days.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Payment Settlement Process: The Institute acknowledges that any Net Sales collected by SISE for the Institute shall be remitted by SISE to the Institute after deducting:</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Commission and applicable taxes.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Other due amounts or charges payable to SISE under the Form and/or the terms of this Agreement.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute authorizes SISE to set off, withhold, and deduct any amounts owed by the Institute or its affiliates to SISE, from the Net Sales, applying these amounts towards their dues. This deduction shall be considered part of the Commission payable to SISE.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">After deducting the above amounts, SISE will remit the Net Sales due to the Institute on the day specified in the Form.</span></p><ul class="number" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: upper-roman;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">If the day for the payment of the Net Sales to the Institute falls on a non-business day, the payment shall be processed on the next working day.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE will provide the Institute with a monthly invoice within seven (7) days from the preceding month's last date, indicating the Commission and other payable amounts on the portal _______</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">All invoices will be issued by SISE to comply with Goods &amp; Services Tax (GST) laws.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">All payable amounts to SISE under the terms of this Agreement will exclude applicable taxes, and taxes will be charged separately.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute is responsible for all tax-related liabilities and undertakes to indemnify SISE against any tax liability arising from non-payment of taxes.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Notwithstanding the above, SISE reserves the right to set off, withhold, or deduct payments due to SISE under the Form against any payable amounts by SISE to the Institute or its affiliates under any other agreement or arrangement.</p></li></ul></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">TERM AND TERMINATION</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Agreement between the Parties commences on the Effective Date and remains valid and binding unless terminated as per these Terms.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Either Party may terminate the Form and the terms of this Agreement by issuing a thirty (30) days prior written notice to the other Party</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE reserves the right to immediately terminate the Agreement or suspend the Platform Service by halting the listing of the Institute on the Platform if the Institute breaches these terms or violates Applicable Laws or due to insolvency events. No refund will be provided for such terminations due to Institute breaches.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE retains the authority to promptly terminate this Agreement and expel the Institute from its Platform if there is an order from the appropriate authority upholding breach concerning the Personal Data of the students/Users by the Institute. Should a User submit a complaint supported by documented proof about the breach or improper use of Personal Data by the Institute, SISE will temporarily suspend the Institute's listing for one week. This suspension will remain until the decision from the relevant legal authority is received after resolving the dispute.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">In the event that this Agreement is terminated prior to Users availing the Services of the Institute, SISE can refunds the amount to Users.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees that termination by SISE according to this clause fulfills the arrangement without liability to the Institute.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">LICENSE</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute grants SISE an unrestricted, non-exclusive, royalty-free license for the Content and/or information provided by the Institute for inclusion on the Platform and other required purposes. This includes using the Institute’s name in Google ad words for advertising and creating derivative works or marketing materials. Content transmitted by the Institute to SISE may be considered non-confidential.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">CONFIDENTIALITY</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Both parties agree to treat disclosed Confidential Information as confidential and not to disclose it to third parties unless authorized. This clause excludes information already known, publicly available, disclosed by a third party without confidentiality obligation, or developed independently.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">WARRANTY AND INDEMNITY</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute warrants to provide a thirty (30) days notice in case of business cessation, indemnifying SISE otherwise.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute represents compliance with license conditions and Indian laws.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute indemnifies SISE against claims arising from breaches, Products and Services offered, Content shared, statutory proceedings, or non-compliance with Approvals and/or Applicable Laws.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE warrants reasonable skill and care in its obligations but does not guarantee uninterrupted or error-free Platform availability.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">USER DATA</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees to use User Data only to fulfill its obligations under the terms of this Agreement, not for any other purposes or disclosures to third parties. The Institute will handle User Data with security measures and comply with SISE’s Privacy Policy.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">LIMITATION OF LIABILITY</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE excludes liability for indirect or consequential losses, except for liabilities that cannot be excluded by law. SISE's aggregate liability shall not exceed the Fees paid by the User.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">ASSIGNMENT OF RIGHTS</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute agrees and acknowledges that its rights and obligations cannot be transferred without SISE’s written consent. SISE may assign or transfer these Terms to any person.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">GOVERNING LAW AND JURISDICTION</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">These terms of this Agreement are governed by Indian Law, with the courts of Kolkata having exclusive jurisdiction.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">If any dispute arises amongst the Parties during the subsistence of this Agreement or thereafter, in connection with or arising out of this Agreement, the Parties shall endeavor to settle such dispute amicably through mutual discussions in the first instance which (if the dispute is unresolved within 30 (thirty) days of the commencement of such mutual discussion) will be followed by referral to arbitration by a sole arbitrator to be appointed by the both the Parties, with mutual consent. The arbitration will be conducted in English, and the seat and venue of arbitration will be at Kolkata, West Bengal, India. The Arbitration proceedings shall be in accordance with the provisions of the Arbitration and Conciliation Act, 1996 for the time being in force or any other statutory modification or re-enactment thereof.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">WAIVERS</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The waiver of a breach of this Agreement or the failure of a Party to exercise any right under this Agreement shall in no event constitute a waiver as to any other breach, whether similar or dissimilar in nature, or prevent the exercise of any right under this Agreement.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">SEVERABILITY</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Each provision of this Agreement shall be interpreted in such a manner as to be effective and valid under Applicable Law. The invalidity or unenforceability of any provision of this Agreement shall in no way affect the validity or enforceability of any other provision hereof. Any invalid or unenforceable provision shall be deemed severed from this Agreement and the balance of this Agreement shall be construed and enforced as if this Agreement did not contain the particular provisions(s) held to be invalid or unenforceable.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">FORCE MAJEURE</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">A Party shall not be liable for any failure to fulfill any terms of this Agreement for the period that such failure or delay is due to causes beyond its reasonable control, including but not limited to acts of God, war, pandemic, epidemic, strikes or labor disputes, embargoes, government orders or any other force majeure event.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">ENTIRE AGREEMENT</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">This Agreement contains the entire agreement and understanding between the Parties with regard to the subject matter and supersedes and cancels all prior discussions, negotiations, agreements and understandings between the parties, whether written or oral.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">MISCELLANEOUS</span></p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Neither party is liable for failure or delay due to reasons beyond its control.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">All notices under this Agreement shall be provided in writing or electronically to the designated addresses.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">SISE</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Contact Person:</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Designation:</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Email id:</p></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Institute</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Contact Person:</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Designation:</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Email id:</p></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Institute acknowledges and agrees to be bound by SISE’s privacy policy</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE reserves the right to modify the terms of this Agreement with prior notice and without liability.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The relationship between SISE and the Institute is that of independent contractors.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">IN WITNESS WHEREOF</span>, each of the undersigned has duly executed this Platform Listing Agreement on behalf of the Parties hereto.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">For SISE</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">First Party _________________</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Name:</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">For the Institute</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Second Party _____________</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Name:</p></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">SCHEDULE – A</h4><p class="text-underline" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Title: Standard Operating Procedure for Children's Sports Training Institution</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Objective:</span>&nbsp;This SOP aims to outline the procedures and guidelines for managing and conducting sports training sessions for children, ensuring safety, efficiency, and quality in our institution.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Scope:</span>&nbsp;This procedure applies to all staff, trainers, and participants involved in sports training programs for children at [Institution Name].</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Procedure:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Participant Enrollment:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Clearly define age brackets and eligibility criteria for participating in different training programs.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Collect necessary documentation, including medical history and consent forms from parents/guardians.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Safety Measures:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Ensure facilities and equipment comply with safety standards suitable for children's use.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Conduct routine inspections and maintenance checks of sports equipment and facilities.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Implement and communicate emergency procedures for injuries or accidents.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Staff Training and Qualification:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Provide specialized training to all staff and trainers in child development, safety protocols, and first aid.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Ensure all trainers possess necessary certifications and clearances for working with children.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Training Program Structure:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Develop age-appropriate training modules focusing on skill development, fitness, and sportsmanship.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Tailor programs to meet diverse skill levels and abilities, emphasizing inclusivity.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Schedule adequate rest periods and hydration breaks during training sessions.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Parental/Guardian Communication:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Maintain open channels of communication with parents/guardians regarding program schedules, progress, and any concerns.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Establish a feedback mechanism to address parental inquiries and feedback promptly.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Code of Conduct and Discipline:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Establish clear behavioral guidelines and expectations for participants.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Enforce disciplinary actions if necessary, adhering to a fair and consistent disciplinary process.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Health and Hygiene Protocols:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Emphasize personal hygiene practices among participants, including regular handwashing and appropriate attire.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Implement protocols for handling and sanitizing equipment and facilities.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Record Keeping and Documentation:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Maintain accurate records of participant attendance, injuries, and incidents during training sessions.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Securely store all participant information in compliance with data protection regulations.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Continuous Improvement:</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Conduct regular assessments and evaluations of training programs to identify areas for improvement.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Solicit feedback from participants, parents, and staff to enhance program effectiveness.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Compliance with Regulations:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Ensure adherence to local, state, and national regulations governing sports training institutions for children.</p></li></ul></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">SCHEDULE B</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Standard Operating Procedure: Data Collection of Children</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Objective:</span>&nbsp;This Standard Operating Procedure outlines the guidelines and protocols for the lawful and compliant collection of data involving children by the Institute.</p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Purpose:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">To lawfully and transparently collect and handle personal data of children in accordance with Applicable Laws.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">To establish clear procedures for the collection, storage, and processing of children's data in a manner that respects their rights to privacy and protection.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Scope:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">This SOP applies to all staff members involved in the collection, handling, or processing of children's data within the Institute</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">It encompasses all forms of data collection methods, whether in-person, online, or through third-party systems.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Responsibilities:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Data Collection Team: Responsible for collecting data from children and ensuring compliance with this SOP, especially regarding consent and data handling.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Data Protection Officer (DPO): Oversees and ensures compliance with Applicable Laws and serves as the point of contact for data protection matters.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Management: Provides necessary resources and support to maintain adherence to the SOP and the legal requirements.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Lawful Basis for Processing:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Lawful Processing: Data collection from children will primarily require parental consent or other legal grounds for processing.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Verifiable Parental Consent: Obtain explicit and verifiable consent from parents or legal guardians before processing any personal data of children.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Data Collection Procedures:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Consent Forms: Use clear, simple language on consent forms, ensuring they are easily comprehensible by children and their guardians.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Purpose Limitation: Only collect data necessary for the specified purpose, ensuring data minimization principles are applied.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Age Verification: Implement mechanisms to verify the age of children and ensure they meet the minimum age requirements as defined by the Applicable Laws (usually 17 years or lower as per local law).</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Security Measures: Employ robust security measures for both physical and digital data collection to safeguard against unauthorized access or breaches.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Data Storage and Protection:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Secure Storage: Maintain secure storage of collected data, utilizing encryption and access controls to prevent unauthorized access.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Data Retention: Retain data only for the necessary duration and purposes, ensuring compliance with Applicable Laws detailing the retention requirements and lawful grounds for processing.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Data Subject Rights and Transparency:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Informative Notices: Provide clear and concise information to children and their guardians about their rights, the purpose of data collection, and how their data will be processed.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Data Subject Requests: Establish procedures for handling data subject requests, including access, rectification, erasure, and objection as per Applicable Laws and judicial precedents.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Reporting and Incident Response:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Data Breach Reporting: Promptly report any data breaches or incidents to the Data Protection Officer.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Incident Response: Implement procedures to respond effectively and promptly to data breaches or unauthorized access incidents.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Staff Training and Awareness:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Staff Training: Provide comprehensive training to staff members regarding data protection obligations, data protection, and the sensitivity of handling children's data.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Regular Awareness: Maintain ongoing awareness programs to keep staff updated on the latest privacy laws related changes and best practices in data protection.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Compliance and Review:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Regular Audits: Conduct regular audits and reviews to assess compliance with the legal requirements, updating procedures accordingly.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Monitoring and Improvement: Monitor data collection practices and take corrective measures to ensure continuous compliance.</p></li></ul></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Conclusion:</span></p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Non-compliance: Failure to adhere to this SOP may result in penalties, fines, or legal actions as per the existing laws.</p></li></ul></li></ul></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery script  -->
<script src="frontend/js/jquery-3.6.0.min.js"></script>
<script src="../cdn.jsdelivr.net/npm/select2%404.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Bootstrap script  -->
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
<!-- slick slider script  -->
<script src="frontend/js/slick.min.js"></script>
<!-- main script  -->
<script src="frontend/js/script.js"></script>
<!-- Wow js  -->
<script src="frontend/js/wow.min.js"></script>
<script src="frontend/js/toastr.min.js"></script>

<script>






</script>
   
                <script src="assets/js/jquery.validate.min.js"></script>
        <script src="frontend/js/custom_home.js"></script>
        <script>

            // In your Javascript (external .js resource or <script> tag)
            $(document).ready(function() {
                $('.js-example-basic-single').select2({
                    dropdownParent: $('#exampleModalToggle')
                });

                $("#contact-us").validate({
                    rules: {
                        name: {
                            required: true,
                            not_empty: true,
                            alpha_space: true,
                            minlength: 3,
                            maxlength: 50,
                        },
                        contact_number: {
                            required: true,
                            not_empty: true,
                            maxlength: 16,
                            minlength: 6,
                            digits: true,
                        },
                        email: {
                            required: true,
                            maxlength: 80,
                            email: true,
                            valid_email: true,
                        },
                        user_name: {
                            required: true,
                            not_empty: true,
                            no_space: true,
                            alphaonly: true,
                            minlength: 3,
                            maxlength: 50,
                        },
                        coaching_name: {
                            required: true,
                            not_empty: true,
                            alpha_space: true,
                            minlength: 3,
                            maxlength: 50,
                        },
                        query: {
                            required: true,
                            not_empty: true,
                            alpha_space: true,
                            minlength: 3,
                            maxlength: 1000,
                        },
                        suggestion: {
                            required: true,
                            not_empty: true,
                            alpha_space: true,
                            minlength: 3,
                            maxlength: 1000,
                        },
                        satisfaction_level: {
                            required: true,
                        },
                        recommend_level: {
                            required: true,
                        },
                        media_source: {
                            required: true,
                        },
                        is_contact_us: {
                            required: true,
                        },
                    },
                    messages: {
                        name: {
                            required: "The name field is required.",
                            not_empty: "The name does not allow only space.",
                            alphaonly: "The name must only contain letters",
                            minlength: "The name must be at least 3 characters.",
                            maxlength: "The name must be at least 50 characters.",
                        },
                        user_name: {
                            required: "The user name field is required.",
                            not_empty: "The user name does not allow only space.",
                            alphaonly: "The user name must only contain letters",
                            no_space: "The user name must not have space.",
                            minlength: "The user name must be at least 3 characters.",
                            maxlength: "The user name must be at least 50 characters.",
                        },
                        contact_number: {
                            required: "The mobile number field is required.",
                            not_empty: "The mobile number does not allow only space.",
                            maxlength: "The mobile number may not be greater than 16 characters.",
                            minlength: "The mobile number must be at least 6 characters.",
                            pattern: "The mobile number must be a number.",
                        },
                        email: {
                            required: "The email address field is required.",
                            maxlength: "The email address may not be greater than 80 characters.",
                            email: "The email address must be a valid email address.",
                            valid_email: "The email address must be a valid email address.",
                        },
                        coaching_name: {
                            required: "The coaching name field is required.",
                            not_empty: "The coaching name does not allow only space.",
                            minlength: "The coaching name must be at least 3 characters.",
                            maxlength: "The coaching name must be at least 255 characters.",
                        },
                        query: {
                            required: "The feedback/query field is required.",
                            not_empty: "The feedback/query does not allow only space.",
                            alpha_space: "The feedback/query must only contain letters",
                            minlength: "The feedback/query must be at least 3 characters.",
                            maxlength: "The feedback/query must be at least 50 characters.",
                        },
                        suggestion: {
                            required: "The suggestions/requirements field is required.",
                            not_empty: "The suggestions/requirements does not allow only space.",
                            alpha_space: "The suggestions/requirements must only contain letters",
                            minlength: "The suggestions/requirements must be at least 3 characters.",
                            maxlength: "The suggestions/requirements must be at least 50 characters.",
                        },
                        satisfaction_level: {
                            required: "The satisfication field is required.",
                        },
                        recommend_level: {
                            required: "The recommendation field is required.",
                        },
                        media_source: {
                            required: "The media source field is required.",
                        },
                        is_contact_us: {
                            required: "The contact us field is required.",
                        },
                    },
                    errorClass: 'invalid-feedback',
                    errorElement: 'span',
                    highlight: function(element) {
                        if ($(element).attr('type') == 'radio') {
                            let name = $(element).attr('name');
                            $("input[name='" + name + "']").removeClass("is-invalid");
                            let siblings = $(this).siblings('label');
                            if (siblings.length > 0) {
                                siblings.removeClass('text-danger');
                            }
                        } else {
                            $(element).addClass('is-invalid');
                            var siblings = $(element).siblings('label');
                            if (siblings.length > 0) {
                                siblings.addClass('text-danger');
                            }
                        }
                    },
                    unhighlight: function(element) {
                        $(element).removeClass('is-invalid');
                        var siblings = $(element).siblings('label');
                        if (siblings.length > 0) {
                            siblings.removeClass('text-danger');
                        }
                    },
                    errorPlacement: function(error, element) {
                        if (element.attr("data-error-container")) {
                            error.appendTo(element.attr("data-error-container"));
                        } else {
                            $("#email-error-custom").hide();
                            error.insertAfter(element);
                        }
                    }
                });

                $('#contact-us').submit(function() {
                    if ($(this).valid()) {
                        $("input[type=submit], input[type=button], button[type=submit]").prop("disabled",
                            "disabled");
                        return true;
                    } else {
                        return false;
                    }
                });
            });
        </script>
        <!-- wow js -->
        <!-- <script>
            new WOW().init();
        </script> -->


    </main>
    <!-- Main Ends -->
    <!-- footer  -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="left-desc">
                    <h4>Play A Sport</h4>
                    <p>Choose any sports of your choice and Join today with Play a Sport! </p>
                    <div class="social-media">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/PlayASportIndia"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="mailto:playasport2023@gmail.com"><i class="fa-regular fa-envelope"></i></a></li> 
                            <li><a target="_blank" href="https://www.instagram.com/playasport.in/"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a target="_blank" href="tel:9230981841"><i class="fa-brands fa-whatsapp"></i></a></li>

                        </ul>
                        <div class="download-section">
                            <p>Available on</p>
                            <div class="d-flex align-items-sm-center gap-3 flex-column flex-sm-row ">
                                <a href="https://play.google.com/store/apps/details?id=com.sportsentertainment" target="_blank">
                                    <img src="frontend/images/newimages/button-Play-store.png" alt="">
                                </a>
                                <a href="https://apps.apple.com/in/app/play-a-sport/id6670251279" target="_blank">
                                    <img src="frontend/images/newimages/button-app-store.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-navbar">
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#exampleModalToggle" data-bs-toggle="modal">Sign In</a></li>
                        <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="refund-cancelation-policy.html">Refund and Cancellation policy </a></li>
                        <li><a href="cookie-policy.html">Cookie Policy</a></li>
                        <li><a href="user-agreement.html">User Agreement</a></li>
                        <li><a href="deletion-policy.html">Deletion Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="copy-right text-center">
                <p>&copy; 2024 Play a Sport. All Rights Reserved</p>
            </div>
        </div>
    </footer></body>


<!-- Mirrored from dev.playasport.in/user-agreement by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2024 10:17:52 GMT -->
</html>
