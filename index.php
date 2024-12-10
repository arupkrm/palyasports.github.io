<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dev.playasport.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2024 10:17:01 GMT -->
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
	
	<style>
	
	.svg-inline--fa {
    display: var(--fa-display, inline-block);
    height: 1em;
    overflow: visible;
    vertical-align: -.125em;
}
	
	
	@media only screen and (max-width: 475px) {
    .carousel {
   
    margin-top: 16%;
    }
	.img-resize{
		width:20%;
	}
	.d-flex {
    display: inherit !important;
}
	
	}
	
	@media only screen and (min-width: 476px) and (max-width: 675px) {
    .carousel {
   
    margin-top: 10%;
    }
	.img-resize{
		width:20%;
	}
	.d-flex {
    display: inherit !important;
}
}
	</style>
	
	
	
	
</head>

<body>
   <?php include('header.php')?>
   
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
            <!-- banner section start-->
    <div class="home-bg-color">
        <div class="home-banner">
		<!-- <img src="images/android.jpg" class="img-fluid" style="position:relative;"/> -->
		                       <!-- <div class="bg-btn" style=" top:-30%; left:26%"> -->
                                
                                <!-- <a class="primary-btn btn-shadow red-btn" data-bs-toggle="offcanvas" -->
                                    <!-- data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" role="button">Download Now -->
                                    <!-- </a> -->
                                <!-- <span></span> -->
                            <!-- </div> -->
							
							
							
							
							
							
							
							
							
							<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> -->
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/android.jpg" alt="Los Angeles" class="d-block" style="width:100%; position:relative;">
	  <!-- <img src="images/android.jpg" class="img-fluid" style="position:relative;"/> -->
	  
	   <div class="bg-btn" style=" top:60%; left:17%; position:absolute;">
                                
                                <!-- <a class="primary-btn btn-shadow red-btn" data-bs-toggle="offcanvas" -->
                                    <!-- data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" role="button"><img src="frontend/images/newimages/button-Play-store.png" alt=""> Download On Android App -->
                                    <!-- </a> -->
                                    <!-- <a class="primary-btn btn-shadow red-btn" data-bs-toggle="offcanvas" -->
                                    <!-- data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" role="button"><i class="fa-brands fa-apple"></i>Download Now -->
                                    <!-- </a> -->
						<div class="d-flex align-items-sm-center gap-3 flex-column flex-sm-row ">
                                <a href="https://play.google.com/store/apps/details?id=com.sportsentertainment" target="_blank">
                                    <img src="frontend/images/newimages/button-Play-store.png" alt="" class="img-fluid img-resize">
                                </a>
                                <a href="https://apps.apple.com/in/app/play-a-sport/id6670251279" target="_blank">
                                    <img src="frontend/images/newimages/button-app-store.png" alt="" class="img-fluid img-resize">
                                </a>
                        </div>
                                
        </div>
	  
	  
    </div>
    <div class="carousel-item"> 
      <img src="images/ios.jpg" alt="Chicago" class="d-block" style="width:100%; position:relative;"> 
	  <div class="bg-btn" style=" top:60%; left:17%; position:absolute;">
                                
                      <div class="d-flex align-items-sm-center gap-3 flex-column flex-sm-row ">
                                <a href="https://play.google.com/store/apps/details?id=com.sportsentertainment" target="_blank">
                                    <img src="frontend/images/newimages/button-Play-store.png" alt="" class="img-fluid img-resize">
                                </a>
                                <a href="https://apps.apple.com/in/app/play-a-sport/id6670251279" target="_blank">
                                    <img src="frontend/images/newimages/button-app-store.png" alt="" class="img-fluid img-resize">
                                </a>
                        </div>
        </div>
    </div>
    <!-- <div class="carousel-item"> -->
      <!-- <img src="images/android.jpg" alt="New York" class="d-block" style="width:100%"> -->
    <!-- </div> -->
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
							
							
							
							
							
							
							
							
		
            <!-- <div class="container h-100"> -->
                <!-- <div class="banner-slider h-100"> -->
                    <!-- <div class="main-slider h-100"> -->
                        <!-- <div class="banner-item h-100"> -->
                            <!-- <div class="banner-left wow fadeIn"> -->
                                <!-- <h2>From the  -->
                                    <!-- <span class="text-circle"> <span class="behind-cicle">comfort</span> -->
                                        <!-- <span data-value="2" class="mouse-animation object"></span> -->
                                    <!-- </span>of your home -->
                                <!-- </h2> -->
                                <!-- <div> -->
                                    <!-- <h4 class="pb-2">Search and Select your favorite Sports Academies and Services on your device.</h4> -->
                                    <!-- <h4>Choose any sports of your choice and Join today with Play a Sport! </h4> -->
                                <!-- </div> -->
                                <!-- <div class="bg-btn"> -->
                                    <!-- <a class="primary-btn btn-shadow red-btn" data-bs-toggle="offcanvas" -->
                                    <!-- data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" role="button"  href="#">Just Play a Sport !!</a> -->
                                    <!-- <span></span> -->
                                <!-- </div> -->

                            <!-- </div> -->
                            <!-- <div class="banner-right h-100 wow fadeInUpBig"> -->

                                <!-- <img src="frontend/images/bannerImg.png" alt=""> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="main-slider"> -->
                        <!-- <div class="banner-item h-100"> -->
                            <!-- <div class="banner-left"> -->
                                <!-- <h2>HI, I AM PLAY A SPORT. -->
                                    <!-- Your <span class="text-circle"> <span class="behind-cicle">AI Sports</span> -->
                                        <!-- <span data-value="2" class="mouse-animation object"></span> -->
                                    <!-- </span> -->
                                    <!-- Assistant</h2> -->
                                <!-- <h4>Make your app chats into sports search engine for free</h4> -->
                                <!-- <div class="bg-btn"> -->
                                    <!-- <a class="primary-btn btn-shadow red-btn" data-bs-toggle="offcanvas" -->
                                    <!-- data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" role="button" href="#">Just Play a Sport !!</a> -->
                                    <!-- <span></span> -->
                                <!-- </div> -->

                            <!-- </div> -->
                            <!-- <div class="banner-right h-100"> -->
                                <!-- <img src="frontend/images/bannerImg.png" alt=""> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
			
			
			
			
			
        </div>
    </div>
    <!-- banner section end-->

    <!-- about section  -->
    <section class="about-us" style="background: antiquewhite;">
        <div class="container">
            <div class="content-wrap">
                <div class="row">
                    <div class="col-xl-11 mx-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div data-wow-offset="400" class="about-screen wow fadeIn">
                                    <div class="mobile-frame">
                                        <div class="screenshot-bg-circle"></div>
                                        <div class="screen-shot">
                                            <img class="img-fluid" src="frontend/images/newimages/about-section-image.jpg" alt=""> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div data-wow-offset="400" class="about-content wow fadeIn">
                                    <h2>About
                                        <span class="text-circle"><span class="behind-cicle">Play a Sport,</span>
                                            <span data-value="2" class="mouse-animation center-cicle object"></span>
                                        </span>
                                        Your AI Sports Assistant
                                    </h2>
                                    <div class="about-desc">
                                        <p>Play A Sport is an initiative to amalgamate Sports with Technology and
                                            create an online platform to build more room for the sports community.

                                        </p>
                                        <p>

                                            Play A Sport will be an application through which a user will be able to
                                            access a Sport of his/her choice and be able to play/learn the same.
                                        </p>
                                        <!-- <div class="bg-btn">
                                            <a class="primary-btn btn-shadow red-btn" href="">Read More</a>
                                            <span></span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- join with us section  -->
    <section class="join-with-us">
        <div class="container">
            <div class="content-wrap">
                <div class="row">
                    <div class="col-xl-11 mx-auto">
                        <div class="section-title">
                            <h2>
                                <span class="text-circle">
                                    <span class="behind-cicle">Play a Sport -</span>
                                    <span data-value="2" class="mouse-animation center-cicle object"></span>
                                </span> <br>
                                Join With Us </h2>
                        </div>
                        <div class="time-line">
                            <div class="join-time-line">
                                <span data-wow-offset="400" class="timeline-dot wow fadeIn"></span>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="join-us-conten">
                                            <h3>Sign-up, Get On board & Choose a Sport</h3>
                                            <div class="join-us-desc">
                                                <p>Attention, Coaches/Owners!! Get your academy on boarded & join our community for free.</p>
                                                <p>Are you a Sports lover / Sports Seeker ? </p>
                                                <p>Join your favourite academy on the ease and challenge your
                                                    friends. Get access to Play a Sport,enhance your sporting skills. </p>
                                            </div>
                                            <div class="bg-btn">
                                                <a class="primary-btn btn-shadow red-btn" href="#">Let’s Try It</a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <div data-wow-offset="400" class="game-screen wow fadeIn">
                                            <div class="mobile-frame">

                                                <div class="screenshot-bg-circle"></div>
                                                <div class="screen-shot">
                                                    <img class="img-fluid" src="frontend/images/join-section-img.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="timeline-screen">
                                        <div data-wow-offset="300" class="choose-app wow fadeIn">
                                            <span data-wow-offset="300" class="timeline-dot"></span>
                                            <div class="timeline-content">
                                                <h4>Choose Your Academy</h4>
                                                <p>Search and Find your favourite Sports Academy on your device with
                                                    Play A Sport. Install Play a Sport, Log IN / Sign UP and get
                                                    access to everything that you need to find your favourite sports
                                                    academy .</p>
                                                <!-- <p>Interface – Same as on the chatbot but replaced with academies.</p>     -->
                                            </div>
                                            <div class="mobile-frame ">

                                                <div class="screenshot-bg-circle"></div>
                                                <div class="screen-shot">
                                                    <img class="img-fluid" src="frontend/images/Social_Chat_app.gif"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="timeline-screen left-screen pb-0 border-none">
                                        <div data-wow-offset="600" class="choose-app wow fadeIn">
                                            <div class="before-transprent"> <span class="timeline-dot"></span><span
                                                    class="bg-trans"></span></div>
                                            <div class="timeline-content">
                                                <h4>Start Conversational Commerce</h4>
                                                <p>Search and book your Sports Academies and services in seconds.</p>
                                                <!-- <p>Interface – Same Interface of Ai chat but with Play a Sport.</p> -->
                                            </div>
                                            <div class="mobile-frame ">

                                                <div class="screenshot-bg-circle"></div>
                                                <div class="screen-shot">
                                                    <img class="img-fluid" src="frontend/images/Social_app_2.gif" alt="">
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

        </div>
    </section>

    <!-- why choose us  -->
    <section class="choose-us" style="background:antiquewhite">
        <div class="container">
            <div class="section-title text-md-center">
                <h2>Why Choose 
                    <span class="text-circle">
                        <span class="behind-cicle">Play a Sport </span>
                        <span data-value="2" class="mouse-animation center-cicle object"></span>
                    </span> </h2>
            </div>
            <div class="content-wrap">
                <div class="row">
                    <div class="col-xl-11 mx-auto">
                        <div class="choose-timeline">
                            <div class="timeline-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="choose-content mt-5 mt-md-0">
                                            <h4>Comfort, Speedy and Accurate </h4>
                                            <p>Are you looking for a quicker way to know about your favourite sport academy?</p>
                                            <p>Search, compare and buy with a text or voice message with your
                                                favourite Play a sport app. Turn your instant messaging channels
                                                into powerful Sports search engines!</p>
                                            <p> Your one stop solution to access Sports & Sports related activities
                                                specifically designed to promote grassroots sports/amateur players
                                                in and around your locality.</p>
                                            
                                            <div class="bg-btn">
                                                <a class="primary-btn btn-shadow red-btn" href="#">Let’s Try It</a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-md-flex">
                                        <div data-wow-offset="600" class="choose-screen wow fadeIn">
                                            <div class="choose-img">
                                                <img class="img-fluid" src="frontend/images/newimages/whychoose-one.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="choose-content mt-5 mt-md-0">
                                            <h4></h4>
                                            <P>To become a seamless integration between the physical and digital
                                                world of Sports where an user can access various sports
                                                coaching/activity centres and get enrolled in one according to their
                                                choice of time & location.</P>
                                            <p>To create temporary sports facilities in places where there is
                                                scarcity of sports coaching/activity centres. Promoting Women's
                                                participation by providing them seamless access to sporting
                                                facilities beyond school/college level.</p>
                                            <p>To create a sports community for children and parents in order to
                                                develop their passion for sports.</p>
                                            <div class="bg-btn">
                                                <a class="primary-btn btn-shadow red-btn" href="#">Let’s Try It</a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-md-flex">
                                        <div data-wow-offset="600" class="choose-screen wow fadeIn">
                                            <div class="choose-img">
                                                <img class="img-fluid" src="frontend/images/newimages/whychoose-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="choose-content mt-5 mt-md-0">
                                            <h4>Planning to Play a Sport </h4>
                                            <p>Best Back-end Support For your favourite Sport.</p>
                                            <p>Choose from over multiple Sports Academies with all possible
                                                information in detail.</p>
                                            <p>Find the best sport academies and Services with Play A Sport. </p>
                                            <div class="bg-btn">
                                                <a class="primary-btn btn-shadow red-btn" href="#">Let’s Try
                                                    It</a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-md-flex">
                                        <div data-wow-offset="600" class="choose-screen wow fadeIn">
                                            <div class="choose-img">
                                                <img class="img-fluid" src="frontend/images/newimages/why-choose-two.jpg" alt="">
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
    </section>

    <!-- how is work  -->
    <section class="how-is-work" style="background:antiquewhite">
        <div class="container">
            <div class="how-is-content text-center">
                <h2>How It
                        <span class="text-circle">
                        <span class="behind-cicle">Works </span>
                        <span data-value="2" class="mouse-animation center-cicle object"></span>
                    </span>
                </h2>
                <p class="black-text">Booking and Selecting your Favourite Sport is now as easy as messaging a
                    friend. Use over Facebook Messenger, Instagram and Whatsapp and Find Play a Sport.</p>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div data-wow-offset="400" class="how-img wow fadeIn">

                        <div class="how-is-screen order-2">
                            <div class="mobile-frame">
                                <div class="screenshot-bg-circle "></div>
                                <div class="screen-shot burgundy">
                                    <img class="img-fluid" src="frontend/images/Social_app_2.gif" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="how-is-right order-3">
                            <div class="poin-one hover-point">
                                <h4>Easy Search</h4>
                                <p>Search your Favourite Sports / Sporting Academies and Services or Just fill the
                                    preference form and Choose from our best suggestions for you.</p>
                            </div>
                            <div class="poin-two hover-point">
                                <h4>Get Deal</h4>
                                <p>Get the best deal for your Favourite Sport Academies and Services with us.</p>
                            </div>
                        </div>
                        <div class="how-is-left order-1">
                            <div class="poin-one hover-point">
                                <h4>Easy Search</h4>
                                <p>Send us a message with your city, dates, & preferences related to your Sport and
                                    Academy</p>
                            </div>
                            <div class="poin-two hover-point">
                                <h4>Get Deal</h4>
                                <p>We send you deals only available over private 1:1 messaging.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
	
    <?php include('footer.php') ?>
</body>



</html>
