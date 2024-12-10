<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dev.playasport.in/faq by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2024 10:17:52 GMT -->
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
        <!-- privacy policy  -->
<div class="orange-container ">
            <div class="container">
                <div class="faq-page contact-page">
                    <h1 class="text-center">FAQs – Play a Sport</h1>
                    <div class="faqs">
                        <div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><div class="question-heading" style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px;"><h3 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; line-height: 30px; font-size: 24px; color: var(--white-color); text-decoration-line: underline;">About Play a Sport -Getting you Started.</h3></div><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">What is Play a Sport ?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Play A Sport is a platform that enables its Users to discover and connect with various Institutions that are providing coaching, training with respect to various sports including providing, facilities for providing structured training, coaching, and resources for the development of children's athletic skills and overall sports education by the Institution. This includes, but is not limited to, the coaching staff, programs, facilities, and services offered by the Institution.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Where is our corporate office located?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Our office is located at registered office at AE-694 Sector 1, Salt Lake City, Bidhan Nagar AE Market, North 24 Parganas, Saltlake, West Bengal, India, 700064.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Is registration at Play a sport free?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">A minimum fees of INR 100/- is payable by the Users for using the Services on the Platform.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><div class="question-heading" style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px;"><h3 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; line-height: 30px; font-size: 24px; color: var(--white-color); text-decoration-line: underline;">Play Hour by Play a Sport</h3></div><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can I cancel my participation?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">No refund will be offered against the membership fees paid by the User for availing the Services on the Platform. Users are requested to go through the Refund &amp; Cancellation policy on our Platform.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How can I get a discount?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The discounts, if available will be shared on the Platform and/or also informed to the Users via their emails and phone numbers, as shared with SISE.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can I get my friend along?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">No, only the Users that have purchased the Services of the Institution can avail the same. Other than the User/ person enrolled by the User, no other person can avail the Services or attend any session</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Who can join?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Any individual can join the Platform and upon the payment of the requisite fees, avail the Services offered by the Institutes.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><div class="question-heading" style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px;"><h3 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; line-height: 30px; font-size: 24px; color: var(--white-color); text-decoration-line: underline;">Academies : Places to Play</h3><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px; font-style: italic;"><span style="font-weight: 600;">Discover, Book &amp; List Academies</span></p></div><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can I search by academy on the app?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Yes, you can.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">I cannot see any academy near my area? Why is that?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We are trying our best to partner with as many sports institutions as possible however, it is possible that the institutions near your area have not yet partnered with us.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Where can I get information regarding equipment?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">There will be a dedicated marketplace inside the Play a Sport app and/or available from the academies directly.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">What does the academy rating signify?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The ratings are an average of the reviews received from the Users of our platform that have availed the Services offered by the Academy.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How to rate an academy or submit a feedback to the academy?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Users that have purchased the Services of a particular Institute/Academy from our Platform are given an option to share their reviews/ratings from their account-orders-review option. A feedback can also be submitted along with the rating.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">I had made an offline booking, can the issue be resolved through academy?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We do not offer offline booking. All the purchases/bookings have to be made online and any issue pertaining thereto may be addressed to our grievance officer at Play a Sport Customer Care Support. Please find the same at our Contact Us page.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">I have an issue with a academy, how do I report?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Please send the details of your issue with the academy to our grievance officer at&nbsp;<a href="mailto:admin@playasport.in" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><span style="font-weight: 600;">admin@playasport.in</span></a>&nbsp;.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><div class="question-heading" style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px;"><h3 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; line-height: 30px; font-size: 24px; color: var(--white-color); text-decoration-line: underline;">Booking academy &amp; Experiences</h3><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px; font-style: italic;"><span style="font-weight: 600;">On-Demand Booking of academy, Events, Tournaments etc.</span></p></div><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How do I Book a academy?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Once you select the academy/institute of your choice, you will be given option to select the term/duration of the training along with the corresponding costs, you may select the plan best suited to you. Upon selecting the plan, you can proceed with checking out the cart and make the payment towards the Services selected by you.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">My bookings are not reflecting in the app after confirmation.</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">It may take upto 24 hours for the bookings to get reflected on your account. However, if after 24 hours also the issue persist, please write to our grievance officer at&nbsp;<a href="mailto:admin@playasport.in" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><span style="font-weight: 600;">admin@playasport.in</span></a>.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Do I need to show the booking ID at the academy before using the slot?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Yes , Play a Sport will issue an Unique ID upon registration, also please carry your id proof for confirming your identity at the academy.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">I need invoices/receipts for my past/upcoming bookings?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The data pertaining to your bookings/invoices will be available in your account profile -orders section. In case you are unable to retrieve the same please write to our grievance officer at&nbsp;<a href="mailto:admin@playasport.in" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><span style="font-weight: 600;">admin@playasport.in</span></a>.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">The academy I booked is closed. Can I move bookings from one academy to another?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">No. The bookings made for one academy can not be interchanged for another academy.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can I make one booking on behalf of 4 people or more?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Yes, It is Possible but All the credentials and IDs will be separate, For Ex- One Phone number cannot be associated with more than one account.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">If I don’t use the package/subscription , will I get my money back?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Please refer to our refund &amp; cancellation policy at Refund and Cancellation Page.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can an offline booking be rescheduled/cancelled through Play a Sport?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">We do not offer offline bookings.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><div class="question-heading" style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px;"><h3 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; line-height: 30px; font-size: 24px; color: var(--white-color); text-decoration-line: underline;">Rescheduling</h3><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px; font-style: italic;"><span style="font-weight: 600;">Rescheduling Academy Slots, Rescheduling Policies, Charges etc.</span></p></div><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How to reschedule a booking?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Yes , Rescheduling is possible but please refer to our Refund and Cancellation Policy for unused booking and rescheduling.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can a rescheduled booking be cancelled?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Please refer to our Refund and Cancellation Policy for unused booking and rescheduling.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can I change the Academy after booking?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">No. Since the payment has been made by you towards the Services offered by one Academy, the same cannot be changed to another Academy.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can I reschedule/transfer a booking from one venue to another?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">No. This option is not available.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can the booking be rescheduled/changed from one sport to another?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">This depends on the policy of the academy/institution whose Services has been purchased by you. Please write to our grievance officer at&nbsp;<a href="mailto:" "="" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><span style="font-weight: 600;">admin@playasport.in</span></a>.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">I paid a higher amount during my initial booking, after rescheduling the cost is less, how will I get the balance amount?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">In that case , The excess amount will be sent to your wallet of Play a Sport.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><div class="question-heading" style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px;"><h3 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; line-height: 30px; font-size: 24px; color: var(--white-color); text-decoration-line: underline;">Play a Sport stats &amp; Academy Ratings</h3><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px; font-style: italic;"><span style="font-weight: 600;">Change Self Rating of Skill, Rate Academy &amp; more</span></p></div><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How to change Self-Rating?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">I booked one academy yesterday, but it's not reflecting on the app!</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can I know who has rated me?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">No. The ratings are kept anonymous.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Who can I give ratings to?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The Academy/Institute whose Services you have availed of, you can review them.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">I missed rating a Academy? Can I rate them later?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Yes, you can.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><div class="question-heading" style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px;"><h3 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; line-height: 30px; font-size: 24px; color: var(--white-color); text-decoration-line: underline;">Payments</h3><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px; font-style: italic;"><span style="font-weight: 600;">Saved Cards, Transaction Related Queries</span></p></div><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">What modes of payment are accepted?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Payments can be made via Debit Card, Credit cards and UPI.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">I have made full payment at the Academy for my Sports but it still shows ‘payment to be made’ in the app?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">It may take upto 24 hours for the bookings to get reflected on your account. However, if after 24 hours also the issue persist, please write to our grievance officer at&nbsp;<a href="mailto:admin@playasport.in" style="color: var(--white-color); transition: all 0.25s ease-in-out 0s;"><span style="font-weight: 600;">admin@playasport.in</span></a>.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">What does refund within 5-7 business days mean?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">It means that the refund will be made to you withing 5-7 working days (not counting the weekends or public holidays)</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How do I identify a transaction made in Play a Sport on my credit or debit card statement?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">The money debited from your account towards your purchases will be credited to SISE account.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How to remove previously saved cards details from the app?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">From your profile section, you can modify the saved cards details and delete the ones that are not required.</p></li></ul></div><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><div class="question-heading" style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 10px;"><h3 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; line-height: 30px; font-size: 24px; color: var(--white-color); text-decoration-line: underline;">Account &amp; Settings</h3><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px; font-style: italic;"><span style="font-weight: 600;">Profile, Delete Account, Privacy Policy, Terms of Service etc.</span></p></div><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How to edit profile Information?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Select your profile on the website/application and choose the edit option and modify the information as required.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How to change my profile picture?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Select your profile on the website/application and choose the edit photo option and modify the information as required.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How to change mobile number without losing Play a Sport stats data?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">Select your profile on the website/application and choose the edit photo option and modify the information as required.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">How do I Reset/Delete my account?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">On your profile, you can select the option to Delete account, upon clicking the same there will be a pop up asking you if your decision is final and upon your confirmation, your account will be deleted.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Can I log-in with 2 numbers/Accounts at the same time?</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 8px; line-height: 22px;">No. The Platform only allows single user with single number to login at a time.</p></li></ul></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- privacy policy  -->
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


<!-- Mirrored from dev.playasport.in/faq by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2024 10:17:52 GMT -->
</html>
