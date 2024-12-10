<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dev.playasport.in/privacy-policy by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2024 10:17:52 GMT -->
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
        <!-- Privacy Policy -->
<div class="orange-container">
            <div class="container">
                <div class="privacy-policy-page contact-page ">
                    <h1 class="text-center">Privacy Policy</h1>
                    <div class="policies">
                        <div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Last updated on 1st January 2024</p></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">This privacy policy is for&nbsp;<span style="font-weight: 600;">SISE Technology Private Limited</span>, a Private Limited Company incorporated under the Companies Act, 2013 and having its registered office at AE-694 Sector 1, Salt Lake City, Bidhan Nagar AE Market, North 24 Parganas, Saltlake, West Bengal, India, 700064 (<span style="font-weight: 600;">&nbsp;“SISE”</span>) (<span style="font-weight: 600;">&nbsp;"we,"</span>&nbsp;<span style="font-weight: 600;">"us,"</span>&nbsp;or&nbsp;<span style="font-weight: 600;">"our"</span>), describes how and why we might collect and share (<span style="font-weight: 600;">"Process"</span>) your information when you use our services (<span style="font-weight: 600;">"Services"</span>), such as when you:</p></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Visit our website at&nbsp;<b><a href="index.html" target="_blank">https://dev.playasport.in/</a></b><span style="font-weight: 600;">&nbsp;</span>, or any website of ours that links to this privacy notice; or</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Download and use our application(s), such as our mobile application —&nbsp;<span style="font-weight: 600;">Play a Sport</span>.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">By using our Services you agree to our use of your personal information (including your Personal Data as envisaged under the data privacy laws of India) as per the terms of this Privacy Policy, as may be amended from time to time by us at our discretion. You hereby confirm and agree to our collection, storing, Processing, transferring and sharing of your personal information (including Personal Data) with third parties or service providers for the purpose set out in this Privacy Policy.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Should you require a copy of the Privacy Policy in any other language identified in the Indian Constitution, we request you to kindly request for the same from us at [________] and we will share the same with you at the earliest.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Personal information, subject to this Privacy Policy will be collected and retained by SISE.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Should you have any concerns or queries regarding the use of your information, our Privacy Policy will assist you in understanding your privacy rights and choices. If you do not agree with our policies and practices, please do not use our Services. If you still have any questions or concerns, please contact us at&nbsp;<span style="font-weight: 600;"><a href="mailto:admin@playasport.in" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;">admin@playasport.in</a></span>&nbsp;.</p></div><div class="table-section" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Index</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><a href="privacy-policy.html#one" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">WHAT INFORMATION OF YOURS DOES SISE COLLECT?</p></a></li><li><a href="privacy-policy.html#two" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">HOW WE PROCESS YOUR INFORMATION?</p></a></li><li><a href="privacy-policy.html#three" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">ON WHAT LEGAL GROUNDS DO WE DEPEND TO HANDLE YOUR INFORMATION?</p></a></li><li><a href="privacy-policy.html#four" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">WHEN DO WE SHARE YOUR PERSONAL INFORMATION AND WITH WHOM?</p></a></li><li><a href="privacy-policy.html#five" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">ACCESS BY CHILDREN</p></a></li><li><a href="privacy-policy.html#six" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">WHAT IS OUR POSITION REGARDING THIRD-PARTY WEBSITES?</p></a></li><li><a href="privacy-policy.html#seven" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">DO WE UTILIZE COOKIES AND ALTERNATIVE TRACKING TECHNOLOGIES?</p></a></li><li><a href="privacy-policy.html#eight" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">HOW DO WE MANAGE SOCIAL MEDIA LOGINS ?</p></a></li><li><a href="privacy-policy.html#nine" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">INTERNATIONAL DATA TRANSFERS</p></a></li><li><a href="privacy-policy.html#ten" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">DATA RETENTION</p></a></li><li><a href="privacy-policy.html#eleven" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SECURITY MEASURES</p></a></li><li><a href="privacy-policy.html#twelve" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">CAN WE MODIFY THIS NOTICE?</p></a></li><li><a href="privacy-policy.html#thirteen" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">HOW CAN YOU CONTACT US REGARDING THIS NOTICE?</p></a></li><li><a href="privacy-policy.html#fourteen" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">HOW CAN YOU REVIEW, UPDATE, OR DELETE YOUR COLLECTED DATA?</p></a></li></ul></div><div class="one" id="one" style="display: flex; flex-direction: column; gap: 8px; color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">WHAT INFORMATION OF YOURS DOES SISE COLLECT?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE only collects the personal information as shared by you with us when you register on our website or mobile application for availing our services or for obtaining information about us or our Products and Services or for contacting us&nbsp;<span style="font-weight: 600;">Personal Information Provided by You&nbsp;</span>. The personal information that we collect depends on the context of your interactions with us and the Services, the choices you make, and the products and features you use. The personal information we collect may include the following</p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Your account related information such as your name, email address, phone number; age;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Mobile Device Access -In order to provide accurate results and assistance, we may request you to allow access to your mobile device's bluetooth, calendar, camera, call, contacts, and other features. If you wish to change our access or permissions, you may do so in your device's settings.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Payment information;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Geolocation - We may request access or permission to track location-based information from your mobile device, either continuously or while you are using our mobile application, to provide certain location-based services. If you wish to change our access or permissions, you may do so in your device's settings.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">IP Address;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">People, addresses and phone numbers in your address book;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Personal description and photograph, if shared by you on your Profile page;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Credit history information;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Past bookings, upcoming books through our Platform</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Cookies and web bacon;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Your preferred sports activities and Institutions;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Membership details</p></li></ul><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">You may opt to not provide certain personal information to us however, the same may affect your overall experience in benefitting from our Products and Services.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The aforementioned Personal information may be collected when you engage in any of the following activities:</p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Granting permission to upload your contacts, including access to mobile device contacts or messages for certain services;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Configure your settings on, provide data access permissions;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Participate in any discussion, feedback or any other community feature as may be shared by us;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Seek alerts on new listings of Institutions, or vacancy in any Institution;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Chatroom, feedback videos, audios et.</p></li></ul><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Sensitive Information&nbsp;</span>. We process sensitive information and only when necessary, with your consent or as otherwise permitted by applicable law, we process the following categories of sensitive information:</p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Medical conditions (if any) fitness regimes;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Credit card/debit card/other payment mode information to facilitate payments for our Services.</p></li></ul><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We use this special category of personal data, for example to share the same with the Institutions that you opt to avail the services of and therefore, to ensure that they have been apprised of the health conditions in advance to provide their best services and care. We require your express consent to collect and process special categories of personal data. You may refuse or revoke your consent at any time, please see the section about&nbsp;<span style="font-weight: 600;">“ON WHAT LEGAL GROUNDS DO WE DEPEND TO HANDLE YOUR INFORMATION”&nbsp;</span>below. A limited number of our personnel will have access to special categories of personal data provided by you .</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Social Media Login Data&nbsp;</span>. We may provide you with the option to register with us using your existing social media account details, like your Facebook, X, Google or other social media account. If you choose to register in this way, we will collect the information described in the section called&nbsp;<span style="font-weight: 600;">"HOW DO WE MANAGE SOCIAL MEDIA LOGINS”</span>.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Automatically collected information</span>. If you use our application, we also may collect the following information if you choose to provide us with access or permission:</p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The internet protocol (IP) address utilized for your computer's internet connection.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Login, email address, and password details.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Device or computer location.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Device metrics encompassing usage times, application usage, connectivity specifics, and any encountered errors or event failures.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Services metrics, involving technical errors, user interactions with service features/content, preferences, backup data, device location during app usage, and uploaded image/file information (e.g., file names, timestamps, and locations).</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Version details and time zone settings.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Purchase and content usage history.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Complete Uniform Resource Locator (URL) clickstream from, to, and within SISE’s websites, including timestamps; products and content viewed or searched; page responsiveness, download issues (e.g., scrolling, clicks, mouse-overs).</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Phone numbers utilized for contacting customer service.</p></li></ul><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Push Notifications</span>. We may request to send you push notifications regarding your account or certain features of the application(s). If you wish to opt out from receiving these types of communications, you may turn them off in your device's settings.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">This information is primarily needed to maintain the security and operation of our application, for troubleshooting, and for our internal analytics and reporting purposes.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">All personal information that you provide to us must be true, complete, and accurate, and you must notify us of any changes to such personal information.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Like many businesses, we also collect information through cookies and similar technologies. You can find out more about this in our Cookie Notice: [Cookie Notice URL].</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Information received from third-party sources</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We may receive information about you from other third-party resources such as public databases, social media platforms, data providers or other third parties and this information may include your email address, phone number, social media profile, IP address etc.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">If you interact with us on a social media platform using your social media account (e.g., Facebook or X), we receive personal information about you such as your name, email address, and gender. Any personal information that we collect from your social media account depends on your social media account's privacy settings.</p></div><div id="two" class="two" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">HOW WE PROCESS YOUR INFORMATION?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We process your information after receiving your consent for the purpose of enhancing your experience while accessing our Services.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Legitimate Interests</span>&nbsp;: We may process your information when we believe it is reasonably necessary to achieve our legitimate business interests and those interests do not outweigh your interests and fundamental rights and freedoms. For example, we may process your personal information for some of the purposes described in order to:</p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Send users information about special offers and discounts on our products and services;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Develop and display personalized and relevant advertising content for our users</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Analyze how our Services are used so we can improve them to engage and retain users</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Support our marketing activities</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Diagnose problems and/or prevent fraudulent activities</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Understand how our users use our products and services so we can improve user experience</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">To enable you to make payments for our Services. We use a third-party service provider to manage payment processing. This service provider is not permitted to store, retain or use information that you will provide other than for the sole purpose of processing the payments on our behalf.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">To seek your feedback about our Service;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Process your requests, enquiries and complaints, customer services and other related activities;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Develop and display personalized content catering to your interests, location etc.;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Identify the usage trends and preferences to further improve your experience</p></li></ul><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Legal Obligations</span>. We may process your information where we believe it is necessary for compliance with our legal obligations, such as to cooperate with a law enforcement body or regulatory agency, exercise or defend our legal rights, or disclose your information as evidence in litigation in which we are involved.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Vital Interests</span>. We may process your information where we believe it is necessary to protect your vital interests or the vital interests of a third party, such as situations involving potential threats to the safety of any person.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Contractual Obligations:</span>&nbsp;We might handle your personal information when we deem it necessary to meet our contractual responsibilities towards you. This includes providing our Services or doing so at your request before finalizing a contract with you.</p></div><div class="three" id="three" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">ON WHAT LEGAL GROUNDS DO WE DEPEND TO HANDLE YOUR INFORMATION?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">In India, the law on data protection is in the process of being executed however, on the basis of the existing practice and guidelines available, we handle your information. There are certain rights available to you as the Data Principal, in relation to the use of your data:</p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Right to Information</span>: You possess the right to receive information regarding the collection and utilization of your personal data, as outlined in this Policy.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Access Rights</span>: You hold the right to access the personal data you've provided by requesting us to furnish the same.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Right to Update/Modify/Rectify information :</span>You retain the right to request us to correct or update your inaccurate or incomplete personal data.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Right to Erasure:</span>&nbsp;You maintain the right to request the deletion of your personal data from our records.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Right to limit processing</span>: You have the right to request us to temporarily or permanently cease processing all or some of your personal data.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Right to Object</span>: You have the right to object to the processing of your personal data under certain circumstances. Additionally, you possess an absolute right to object to the processing of your personal data for direct marketing purposes.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Data Portability Right</span>: You possess the right to request a copy of your personal data in electronic format and have the option to transmit this data for use with another third-party's product or service</p></li></ul><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">In case you want to exercise the rights set out above you can contact our Grievance Officer whose details are set out in Section 13 below.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Your data, provided as a User for our Services, will be processed by us to deliver Services to you or to take preliminary steps before providing such Services, as per your request. If we do not use this data explicitly to provide Services, we will seek your consent explicitly. You have the option to withdraw this consent anytime by contacting us at _________.</p></div><div class="four" id="four" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">WHEN DO WE SHARE YOUR PERSONAL INFORMATION AND WITH WHOM?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Institutions, and Other External Service Providers:</span>&nbsp;We might share your information with third-party vendors, service providers, contractors, or agents ("third parties") who perform services on our behalf and need access to your information for those purposes. We have contractual agreements with these third parties that are designed to protect your personal information. They are only permitted to handle your personal information as per our instructions, refrain from sharing it with any other organization, and commit to safeguarding and retaining the data for the duration specified by us. The categories of third parties with whom we might share personal information include:</p><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Ad Networks</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Affiliate Marketing Programs</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Cloud Computing Services</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Communication &amp; Collaboration Tools</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Data Analytics Services</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Data Storage Service Providers</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Finance &amp; Accounting Tools</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Government Entities</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Order Fulfillment Service Providers</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Payment Processors</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Performance Monitoring Tools</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Product Engineering &amp; Design Tools</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Retargeting Platforms</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Sales &amp; Marketing Tools</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Social Networks</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Testing Tools</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">User Account Registration &amp; Authentication Services</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Website Hosting Service Providers</p></li></ul><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Additionally, there are specific instances where we may need to share your personal information:</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Business Transfers:</span>&nbsp;In situations involving mergers, sale of company assets, financing, or acquisition of our business, we might share or transfer your information.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Google Maps Platform APIs Usage:</span>&nbsp;Certain Google Maps Platform APIs might access and use your information for location-specific requests. We store location data on your device for a specified period. You can revoke consent by contacting us.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Affiliates:</span>&nbsp;We might share your information with our affiliates, requiring them to adhere to this privacy notice.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Business Partners:</span>&nbsp;Your information might be shared with our business partners to provide specific products, services, or promotions.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;"><span style="font-weight: 600;">Other Users:</span>&nbsp;When sharing personal information on public areas or interacting with other users, such information may be publicly visible. Also, interactions via social networks could make certain details accessible to your contacts.</p></div><div class="five" id="five" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">ACCESS BY CHILDREN</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">SISE does not offer Services to children. We provide the Services relevant to children for purchase by adults. If you are below 18 years of age, you may only use SISE’s Services under the supervision of a parent or guardian.</p></div><div class="six" id="six" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">WHAT IS OUR POSITION REGARDING THIRD-PARTY WEBSITES?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Services, which might include our offer wall, could connect to third-party websites, online services, or mobile applications, and display advertisements from non-affiliated third parties. These links may direct you to other websites, services, or applications. Consequently, we do not assure the reliability of such third parties, and we are not accountable for any losses or damages resulting from using these third-party websites, services, or applications. The presence of links to third-party websites, services, or applications does not signify our endorsement. We cannot ensure the safety and confidentiality of information provided to third parties. Any data collected by third parties is beyond the scope of this privacy notice. We do not assume responsibility for the content, privacy practices, or policies of any third parties, including other websites, services, or applications linked to or from the Services. It is advisable to review the policies of these third parties and directly contact them to address any inquiries.</p></div><div class="seven" id="seven" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">DO WE UTILIZE COOKIES AND ALTERNATIVE TRACKING TECHNOLOGIES?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We might employ cookies and akin tracking technologies (such as web beacons and pixels) to obtain or retain information. Detailed information on our utilization of these technologies and how you can decline specific cookies is outlined in our Cookie Notice.: [Cookie Notice URL].</p></div><div class="eight" id="eight" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">HOW DO WE MANAGE SOCIAL MEDIA LOGINS ?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Our Services offer you the option to sign up and log in using your third-party social media account details (such as Facebook or Twitter logins). If you choose this method, we will receive certain profile details from your social media provider. The profile data we receive might vary based on the involved social media provider but typically includes your name, email address, friends list, profile picture, and other information you publicly share on the platform. For instance, if you log in using Facebook, we may request access to additional permissions related to your account, such as your friends, check-ins, and likes, and you have the option to grant or refuse access to each individual permission.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We will utilize the information received solely for the purposes described in this privacy policy or as explicitly communicated to you within the applicable Services. Please note that we do not govern nor take responsibility for other uses of your personal information by your third-party social media provider. We suggest reviewing their privacy notice to comprehend how they gather, utilize, and share your personal information, as well as how to set your privacy preferences on their platforms and apps.</p></div><div class="nine" id="nine" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">INTERNATIONAL DATA TRANSFERS</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We may transfer, store, and process your information in countries outside India however, this will vary basis the Central Government of India’s regulations and permissions, from time to time.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Our servers are situated in India. If you access our Services from a location outside [Country], be aware that we may transfer, store, and process your information in our facilities and by third parties with whom we share your personal information (refer to&nbsp;<span style="font-weight: 600;">" When do we share your personal information and with whom?"&nbsp;</span>above).</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We've implemented protective measures, for personal information transfers between our group companies and with third-party providers. These clauses mandate all recipients to protect personal information processed from India in compliance with the existing laws in India.</p></div><div class="ten" id="ten" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">DATA RETENTION</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We only retain your personal information as long as necessary according to this privacy policy, unless extended by law (like tax or legal requirements). No purpose in this policy warrants holding your personal information longer than specific period tied to user account status or termination/other stipulations.</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">When there's no legitimate business need to process your personal information, we'll either delete or anonymize it. If not feasible (like archived backups), we'll securely store your information while restricting further processing.</p></div><div class="eleven" id="eleven" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">SECURITY MEASURES</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We've implemented reasonable technical and organizational security measures to protect processed personal information. However, no online transmission or data storage is 100%.</p></div><div class="twelve" id="twelve" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">CAN WE MODIFY THIS NOTICE?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Periodically, we may revise this privacy notice. Any updated version will display a revised "Effective Date" and will become operational once accessible. If substantial alterations are made to this notice, we might notify you either by prominently displaying the changes or by directly sending you a notification. We encourage you to frequently review this privacy notice to stay informed about how we protect your information.</p></div><div class="thirteen" id="thirteen" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">HOW CAN YOU CONTACT US REGARDING THIS NOTICE?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">For inquiries or remarks about this notice, you may reach out to our Grievance Office, [ Name], via email at [Email Address], by phone at [Phone Number], or by e-mail at:</p></div><div class="fourteen" id="fourteen" style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">HOW CAN YOU REVIEW, UPDATE, OR DELETE YOUR COLLECTED DATA?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">As per the laws applicable in India, you might have the right to request access to your personal information collected by us, amend that data, or have it erased. To initiate a request to review, update, or delete your personal information, please write to us at.</p></div>
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


<!-- Mirrored from dev.playasport.in/privacy-policy by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2024 10:17:52 GMT -->
</html>
