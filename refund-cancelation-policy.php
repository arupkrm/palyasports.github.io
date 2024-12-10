<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dev.playasport.in/refund-cancelation-policy by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2024 10:17:52 GMT -->
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
        <!-- Refund and cancellation policy-->
<div class="orange-container">
            <div class="container">
                <div class="refund-and-cancelation-page contact-page ">
                    <h1 class="text-center">Refund and Cancellation policy </h1>
                    <div class="cancellation-policies">
                        <p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(255, 255, 255); padding-bottom: 0px; font-size: 16px; line-height: 22px; font-family: &quot;Atyp Display&quot;; background-color: rgb(239, 72, 35);">Thank you for availing our Services. Please read our policy on refund and cancellation (<span style="font-weight: 600;">“Refund &amp; Cancellation Policy”</span>) regarding any subscription/membership or purchase of Products from our Platform since this will provide you with the important information about your orders/purchases on our Platform.</p><div style="color: rgb(255, 255, 255); font-family: &quot;Atyp Display&quot;; font-size: 16px; background-color: rgb(239, 72, 35);"><ul class="number-count" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: decimal;"><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Refund Policy</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">In respect of purchases made on the Platform, you hereby acknowledge and agree that no refund will be initiated unless, stated otherwise in this Refund &amp; Cancellation Policy.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Grievance Officer</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">A refund may be initiated by us/SISE pursuant to you making a written complaint to our grievance officer and the grievance officer shall acknowledge the receipt of your complaint within 48 (forty eight) hours and resolve the same within 1 (one) month. The following are the contact details of our grievance officer:</p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;"><span style="font-weight: 600;">Name:</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;"><span style="font-weight: 600;">Designation:</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;"><span style="font-weight: 600;">Email id:</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;"><span style="font-weight: 600;">Phone:</span></p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">The grievance officer upon receipt of a refund request shall issue a ticket number which can be relied upon by the User to track the status of their request.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Once the grievance officer has examined and verified the veracity of your request and you will receive an email letting you know that SISE may initiate a refund, per your request.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Refunds</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">The User may file a refund request with the grievance officer upon the occurrence of any of the following events:</p><ul class="alphabet" style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: lower-alpha;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">The Institution is unable to provide the Services requested by you;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">The Institution‘s Services are deemed to be sub-par or not satisfactory, however, documentary evidence will have to be shared by the User to corroborate such claims;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">The Institution has notified about a change of timing for offering its Services, and the same are not suitable to the User.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">The User agrees and acknowledges that any coupon or voucher used during purchase, will be reactivated back on your account as long as it has not expired.</p></li></ul></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Processing of Refund</h4><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Your request will be processed within the timeline specified below:</p><div class="table-responsive"><table class="" style="caption-side: bottom; border: 1px solid var(--white-color); margin: 20px auto; text-wrap: nowrap;"><thead style="border-style: solid; border-width: 0px;"><tr style="border-style: solid; border-width: 0px;"><th style="text-align: center; border: 1px solid var(--white-color); padding: 5px 10px;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px; font-weight: 400;"><span style="font-weight: 600;">Mode of Payment</span></p></th><th style="text-align: center; border: 1px solid var(--white-color); padding: 5px 10px;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px; font-weight: 400;"><span style="font-weight: 600;">Mode of Refund</span></p></th><th style="text-align: center; border: 1px solid var(--white-color); padding: 5px 10px;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px; font-weight: 400;"><span style="font-weight: 600;">Timelines</span></p></th></tr></thead><tbody style="border-style: solid; border-width: 0px;"><tr style="border-style: solid; border-width: 0px;"><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Credit cards / Debit Cards / UPIs Credit cards/debit Cards/UPI</p></td><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Credited to Bank Account</p></td><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">5-7 Business Days</p></td></tr><tr style="border-style: solid; border-width: 0px;"><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Net Banking (NEFT)/ Net Banking Account</p></td><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Credited to Bank Account</p></td><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">5-7 Business Days</p></td></tr><tr style="border-style: solid; border-width: 0px;"><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">E-Wallets</p></td><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Respective E-Wallets</p></td><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">3-5 Business Days</p></td></tr><tr style="border-style: solid; border-width: 0px;"><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Play A Sport Wallet</p></td><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Play A Sport Wallet</p></td><td style="border: 1px solid var(--white-color); padding: 5px 10px; text-align: center;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">1 Business Day</p></td></tr></tbody></table></div><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">*Please note that these timelines are tentative and are subject to SISE’s policies and/or the guidelines for banking transactions framed by the Reserve Bank of India.</p></li><li><h4 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 28px; font-size: 22px; color: var(--white-color);">Cancellation Policy</h4><ul style="padding: 0px 0px 0px 2rem; margin-right: 0px; margin-left: 0px; list-style: disc;"><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">In the event that the User chooses to cancel their class with the Institution, it must be done at least 1 (one) week in advance and the fees for the cancellation will be refunded as credits in the User’s profile account and can be used by the User for booking other classes/sessions with any partner Institution on the Platform. However, SISE reserves the right to penalize excessive / delayed / last-minute cancellations by a User. Under single class booking, not falling under memberships, delayed / last –minute cancellation may attract penalty.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">The User can cancel their subscription to the Platform at any point in time and the processing fees for the subscription for the next month will not be charged by SISE.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">SISE at its sole discretion may cancel your purchase of Services:</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">If there has been incomplete payment made by the User on the Platform;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">If SISE suspects that a User has undertaken fraudulent transaction or a transaction not as per the Terms of use of the Platform;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">If the Services purchased by the User are not available;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">Due to any circumstances beyond the control of SISE or due to logistical issues, as may be applicable;</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">In the above cases, SISE will refund the fees paid by the User.</p></li><li><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: var(--white-color); padding-bottom: 0px; line-height: 22px;">SISE maintains a list of all fraudulent transactions and non-complying Users and reserves the right to deny access to such Users at any time or cancel any orders placed by them in future.</p></li></ul></li></ul></div>
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


<!-- Mirrored from dev.playasport.in/refund-cancelation-policy by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2024 10:17:52 GMT -->
</html>
