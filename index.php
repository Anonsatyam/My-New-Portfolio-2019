<?php
  require_once('config.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Satyam Singh</title>
</head>

<body>
    <div id="particle">
        <header id="home">
            <nav class="nav-wrapper transparent z-depth-1">
                <div class="container">
                    <a href="#" class="brand-logo black-text">Logo</a>
                    <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                        <i class="material-icons black-text">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down black-text">
                        <li><a class="nav_list black-text" href="#home">Home</a></li>
                        <li><a class="nav_list black-text" href="#about">ABOUT</a></li>
                        <li><a class="nav_list black-text" href="#skills">SKILLS</a></li>
                        <li><a class="nav_list black-text" href="#works">MY WORKS</a></li>
                        <li><a class="nav_list black-text" href="#contact">CONTACT</a></li>
                        <li><a href="https://www.instagram.com/satya.m_singh/"
                                class="tooltipped btn-floating btn-small indigo-darken-4 transparent social"
                                data-tooltip="Instagram">
                                <i class="fab fa-instagram black-text"></i>
                            </a></li>
                        <li><a href="https://github.com/Anonsatyam"
                                class="tooltipped btn-floating btn-small indigo-darken-4 transparent social"
                                data-tooltip="Github">
                                <i class="fab fa-github black-text"></i>
                            </a></li>
                        <li><a href="https://www.linkedin.com/in/satyam-singh-01bab5173/"
                                class="tooltipped btn-floating btn-small indigo-darken-4 transparent social"
                                data-tooltip="Linkedin">
                                <i class="fab fa-linkedin black-text"></i>
                            </a></li>
                    </ul>
                    <ul class="sidenav" id="mobile-menu">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#skills">SKILLS</a></li>
                        <li><a href="#works">MY WORLS</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">
            <div class="text">
                <div class="row center">
                    <img class="circular--square circle" src="image/man.jpg" />
                </div>
                <div class="wrapper">
                    <h2 class=" center name"><a href="">Satyam Singh</a></h2>
                </div>
                <div class="wrapper center green-text accent-4">
                    <div class="centeredBox">
                        <span id="typewriter" data-array=""></span>
                        <span class="cursor"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="container section" id="about">
        <div class="row">
            <h2 class="center head black-text scroll">About Me</h2>
            <div class="col s12 l6 ">
                <img class="my_img materialboxed" src="Image/IMG_8099.jpg" alt="">
            </div>
            <div class="col s12 l6 ">
                <h6 class="light-blue-text text-darker-4 about_me_heading center">Hi! I'm <span>Satyam Singh</span></h6>
                <p class="about_me_para center">I am a student cum Web
                    Developer and I am currently working as a Front-end Developer with an Indian
                    Software based company <b>Amaze Internet Service Pvt. Ltd.</b>

                    We have high-quality employers and they are experts in their domain field, that's why I have
                    offered this much of services. I will make sure that you will get services at affordable and
                    cheapest price.

                    I am ready for your project always. And if you hire me, you will get the perfect result you
                    want in a short time.
                </p>
                <div class="container center">
                    <ul class="buttons">
                        <li><a href="SatyamKumar_InternshalaResume.pdf"
                                class="waves-effect light-blue btn button_data"><i
                                    class="material-icons left">get_app</i>My Resume</a></li>
                        <li><a href="#contact" class="waves-effect light-blue btn button_data"><i
                                    class="material-icons left">business_center</i>Hire Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="skills section" id="skills">
        <div class="main col s12 l6 offset-l2">
            <h4 class="center white-text head" id="skills_level">My Skills</h4>
            <ul class="tabs transparent center">
                <li class="tab sol s6">
                    <a href="#front_dev" class="white-text text-darker-4">Frontend Skills</a>
                </li>
                <li class="tab sol s6">
                    <a href="#back_dev" class="white-text text-darker-4">Backend Skills</a>
                </li>
            </ul>
            <div class="box">
                <div class="col s12" id="front_dev">
                    <canvas class="animation" data-size="1025" id="vertical-chart-f"
                        aria-label="Oscar's Skills Graph On Desktop" role="img"></canvas>
                    <canvas class="animation" data-size="1024" id="horizontal-chart-f"
                        aria-label="Oscar's Skills Graph On Mobile" role="img"></canvas>
                </div>
                <div class="col s12" id="back_dev">
                    <canvas class="animation" data-size="1025" id="vertical-chart-b"
                        aria-label="Oscar's Skills Graph On Desktop" role="img"></canvas>
                    <canvas class="animation" data-size="1024" id="horizontal-chart-b"
                        aria-label="Oscar's Skills Graph On Mobile" role="img"></canvas>
                </div>
            </div>
        </div>
    </section>
    <section class="container section" id="works">
        <h4 class="center black-text head scroll" id="skills_level">Latest Works.</h4>
        <h6 class="center light-blue-text" id="latest_work_para">Here below is some of my recent works</h6>
        <div class="row">
            <div class="col s12 m4 cards">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed" src="image/Bitrdp.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content grey lighten-5">
                        <h4 class="center light-blue-text darken-1 about_me_heading">BITRDP</h4>
                        <p class="center black-text about_me_para">I am a very simple card. I am good at containing
                            small bits of
                            information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action grey lighten-5 center">
                        <a href="https://bitrdp.com/" class="waves-effect light-blue btn">View This Project</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 cards">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed" src="image/Amazingrdp.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content grey lighten-5">
                        <h4 class="center light-blue-text darken-1 about_me_heading">AMAZINGRDP</h4>
                        <p class="center black-text about_me_para">I am a very simple card. I am good at containing
                            small bits of
                            information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action center grey lighten-5">
                        <a href="https://amazingrdp.com/" class="waves-effect light-blue btn">View This Project</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 cards">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed" src="image/Amaze.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content grey lighten-5">
                        <h4 class="center light-blue-text darken-1 about_me_heading">AMAZE</h4>
                        <p class="black-text center about_me_para">I am a very simple card. I am good at containing
                            small bits of
                            information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action center grey lighten-5">
                        <a href="https://amazeinternet.com/" class="waves-effect light-blue btn">View This Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="testim" class="container section testim">
        <h4 class="center black-text head scroll" id="client_says">What My Client Says.</h4>
        <div class="wrap">

            <span id="right-arrow" class="arrow right black-text fa fa-chevron-right"></span>
            <span id="left-arrow" class="arrow left black-text fa fa-chevron-left "></span>
            <ul id="testim-dots" class="dots">
                <li class="dot active"></li>
                <!--
							-->
                <li class="dot black-text"></li>
                <!--
							-->
                <li class="dot black-text"></li>
                <!--
							-->
                <li class="dot black-text"></li>
                <!--
							-->
                <li class="dot black-text"></li>
            </ul>
            <div id="testim-content" class="cont">

                <div class="active">
                    <div class="img"><img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg" alt="">
                    </div>
                    <h2 class="light-blue-text">Lorem P. Ipsum</h2>
                    <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                </div>

                <div>
                    <div class="img"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg" alt=""></div>
                    <h2 class="light-blue-text">Mr. Lorem Ipsum</h2>
                    <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                </div>

                <div>
                    <div class="img"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg" alt=""></div>
                    <h2 class="light-blue-text">Lorem Ipsum</h2>
                    <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                </div>

                <div>
                    <div class="img"><img src="https://image.ibb.co/kL6AES/Top_SA_Nicky_Oppenheimer.jpg" alt="">
                    </div>
                    <h2 class="light-blue-text">Lorem De Ipsum</h2>
                    <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                </div>

                <div>
                    <div class="img"><img src="https://image.ibb.co/gUPag7/image.jpg" alt=""></div>
                    <h2 class="light-blue-text">Ms. Lorem R. Ipsum</h2>
                    <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                </div>

            </div>

        </div>
        <!--         </div> -->
    </section>

    <section class="container section " id="contact">
        <h2 class="center"><b>Let's Get in touch!</b></h2>
        <h6 class="center light-blue-text" id="latest_work_para">Give me a call, shoot me an email or drop a line below
            and I will get back to you shortly!</h6>
        <div class="row details">
            <div class="col s13 l5 center details">
                <!-- <h4>Contact Details</h4> -->
                <ul>
                    <li><i class="material-icons prefix small">email</i></li>
                    <li><a href="mailto:satyamdeveloper98@gmail.com"><b>Satyamdeveloper98@gmail.com</b></a></li>
                    <li><i class="material-icons small">phone</i></li>
                    <li><a href="#"><b>+91-6200970152</b></a></li>
                    <li><i class="material-icons small">home</i></li>
                    <li><a href="#"><b>Jaipur National University<br>
                                Main Campus, Jagatpura,<br>
                                Jaipur, Rajasthan<br>
                                Pin Code - 302017</b></a></li>
                </ul>
            </div>
            <div class="col s12 l5 offset-l2">
                <form action="#">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="name" type="text" class="validate" name='name'>
                        <label for="name">Your Name</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Your Email</label>
                    </div>
                    <div class="input-field option_field">
                        <i class="material-icons prefix offset-l1">business_center</i>
                        <select class="options">
                            <option id='interest' value="" disabled selected><label for="interest">I am interested in</label>
                            </option>
                            <option value="1">Web Development</option>
                            <option value="2">App Development</option>
                            <option value="3">Digital Marketing</option>
                        </select>
                        <!-- <label for="option">Materialize Select</label> -->
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input id="phone" type="tel" class="validate">
                        <label for="phone">Telephone</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">message</i>
                        <textarea id="message" class="materialize-textarea" data-length="120"></textarea>
                        <label for="message">Message</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">attach_file</i>
                        <!-- <label for="textarea1">Select Files</label><br> -->
                        <input id="files" for='files' type="file" name="myFile" multiple><br><br>
                    </div>
                    <div class="input-field center">
                        <button class="btn light-blue" id="submit"><i
                                class="material-icons right">send</i>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-copyright black white-text">
            <div class="container center foot">
                <p class="foot_massage">© 2019 All rights reserved & Design by <b>Satyam Singh</b></p>
                <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
        </div>
    </footer>

    <!--Popup-->
    <div id="boxes">
        <div id="dialog" class="window">
            <h2 class="red-text"><i class="medium material-icons prefix">laptop_mac</i></h2>
            <p class="black-text"><b>This Website Is Still In Progress</b>.</p>
            <div class="center" id="popupfoot"><a href="#" class=" close green-textwaves-effect waves-light btn"><i
                        class="material-icons right">close</i>Close</a></div>
        </div>
        <div id="mask"></div>
    </div>

    <!--PreLoader-->





    <script src="particle.js" defer="defer"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js'></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="style.js"></script>
    <script type='text/javascript'>
        $(document).ready(function () {
            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.tabs').tabs();
            $('.tooltipped').tooltip();
        });

        $(function(){
        $('#submit').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){
        var name = $('#name').val();
        var email = $('#email').val();
        var interest = $('#interest').val();
        var phone = $('#phone').val();
        var message = $('#message').val();
        var files = $('#files').val();
        e.preventDefault();
        $.ajax({
            type:'POST',
            url: 'process.php',
            data:{name:name, email:email, interest:interest, phone:phone, message:message, files:files},
            success: function(data){
            Swal.fire({
                'title':'Successfull',
                'text': data,
                'type':'success'
            })
            },
            error: function(data){
            Swal.fire({
                'title':'Errors',
                'text':'There Were Errors',
                'type':'error'
            })
            }
        });
            
        }else{
            
        }
        
        });
        
        
    });
    </script>

</body>

</html>