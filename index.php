<?php
    require("connexion/commandes.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logos.png">
    <title>TKA-portfolio</title>
    <!-- css files -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!--==== styles switcher====-->
    <link rel="stylesheet" href="css/color-1.css" class="alternative-style" title="color-1" disabled>
    <link rel="stylesheet" href="css/color-2.css" class="alternative-style" title="color-2" disabled>
    <link rel="stylesheet" href="css/color-3.css" class="alternative-style" title="color-3" disabled>
    <link rel="stylesheet" href="css/color-4.css" class="alternative-style" title="color-4" disabled>
    <link rel="stylesheet" href="css/color-5.css" class="alternative-style" title="color-5" disabled>
    <link rel="stylesheet" href="css/color-6.css" class="alternative-style" title="color-6" disabled>
    <link rel="stylesheet" href="css/styles-switcher.css">
</head>
<body class="dark">
    <!-- ====main container start=== -->
    <div class="main-container">
        <!--====aside start===-->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>T</span>ka</a>
            </div>
            <div class="nav-toggle">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home">Home</i></a></li>
                <li><a href="#about"><i class="fa fa-user">About</i></a></li>
                <li><a href="#service"><i class="fa fa-list">Services</i></a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase">Portfolio</i></a></li>
                <li><a href="#contact"><i class="fa fa-comments">Contacts</i></a></li>
            </ul>
        </div>
        <!--====aside End===-->
        <!--=== main content start ====-->
        <div class="main-content">
            <section class="home section" id="home" style="padding: 0 !important; margin:0 !important;">
                <div class="container">
                    <div class="caption-header" style="background-image: url('img/bg_image_1.jpg');">
                        <h4 class="fw-normal">Welcome</h4>
                        <h1 class="fw-light mb-4">I'm <b class="fg-theme">TEKEU KANA </b> ARSENE</h1>
                        <div class="badge" style="background-color: var(--skin-color); color: var(--bg-black-200) !important;">DEV WEB</div>
                    </div>
                    <div class="row padd-15">
                        <div class="home-img padd-15">
                            <img src="img/person.jpg" alt="person">
                        </div>
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello , my name is <span class="name">Arsene Tekeu</span></h3>
                            <h3 class="my-profesion">I'm a <span class="typing">web designer</span></h3>
                            <p>I'm a web designer with extensive experience for over 5 years. My expertise is to create and website design , graphic design and many more...</p>
                            <a href="#contact" class="btn hire-me">Hire Me</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--=== home selection end ====-->
            <!--=== About selection start ====-->
            <section class="about section" id="about">
                <div class="container">
                    <div class="row"><div class="section-title padd-15">
                        <h2>About Me</h2>
                    </div></div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>I'm ARSENE TEKEU and <span>Web Developper</span></h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                        Accusantium similique reiciendis voluptatem nesciunt. 
                                        Necessitatibus, corporis maiores optio porro error iste reprehenderit pariatur incidunt 
                                        vel culpa maxime quisquam quia ducimus omnis ullam. Earum, voluptates deserunt blanditiis quos, 
                                        fugiat dignissimos molestiae laborum perferendis, 
                                        nihil nemo id? Expedita alias beatae neque debitis rem ex, culpa quam adipisci excepturi.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday : <span>5 Mars</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age : <span>20 ans</span></p>
                                        </div><div class="info-item padd-15">
                                            <p>Email : <span>arsenetekeu@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>website : <span>arsenetekeu.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>phone : <span>+237 654736265</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City : <span>Douala, MAKEPE MISSOKE (LAS VEGAS)</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>freelance : <span>Available</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="cv/cv_ARSENE_TEKEU.pdf" class="btn">Download CV</a>
                                            <a href="#contact" class="btn hire-me">hire me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;"></div>
                                                <div class="skill-percent">76%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>JS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 50%;"></div>
                                                <div class="skill-percent">50%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>PHP</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 50%;"></div>
                                                <div class="skill-percent">50%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>HTML</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 80%;"></div>
                                                <div class="skill-percent">80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!--=== timeline item ===-->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2021-2025
                                                    </h3>
                                                    <h4 class="timeline-tile">University Diploma of Technology</h4>
                                                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Impedit commodi quis cupiditate aliquid eaque. Iste, 
                                                        perspiciatis animi dolorem ex quae obcaecati magnam. 
                                                        At aliquid commodi modi?</p>
                                                </div>
                                                <!--=== timeline item ===-->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2021-2025
                                                    </h3>
                                                    <h4 class="timeline-tile">University Diploma of Technology</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Impedit commodi quis cupiditate aliquid eaque. Iste, 
                                                        perspiciatis animi dolorem ex quae obcaecati magnam. 
                                                        At aliquid commodi modi?</p>
                                                </div>
                                                <!--=== timeline item ===-->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2021-2025
                                                    </h3>
                                                    <h4 class="timeline-tile">University Diploma of Technology</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Impedit commodi quis cupiditate aliquid eaque. Iste, 
                                                        perspiciatis animi dolorem ex quae obcaecati magnam. 
                                                        At aliquid commodi modi?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!--=== timeline item ===-->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2021-2025
                                                    </h3>
                                                    <h4 class="timeline-tile">University Diploma of Technology</h4>
                                                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Impedit commodi quis cupiditate aliquid eaque. Iste, 
                                                        perspiciatis animi dolorem ex quae obcaecati magnam. 
                                                        At aliquid commodi modi?</p>
                                                </div>
                                                <!--=== timeline item ===-->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2021-2025
                                                    </h3>
                                                    <h4 class="timeline-tile">University Diploma of Technology</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Impedit commodi quis cupiditate aliquid eaque. Iste, 
                                                        perspiciatis animi dolorem ex quae obcaecati magnam. 
                                                        At aliquid commodi modi?</p>
                                                </div>
                                                <!--=== timeline item ===-->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2021-2025
                                                    </h3>
                                                    <h4 class="timeline-tile">University Diploma of Technology</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Impedit commodi quis cupiditate aliquid eaque. Iste, 
                                                        perspiciatis animi dolorem ex quae obcaecati magnam. 
                                                        At aliquid commodi modi?</p>
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
            <!--=== About selection End ====-->
            <!--=== service selection start ====-->
            <section class="service section" id="service">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!--==== service item start ====-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-mobile-alt"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                            </div>
                        </div>
                        <!--==== service item End ====-->
                        <!--==== service item start ====-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                            </div>
                        </div>
                        <!--==== service item End ====-->
                        <!--==== service item start ====-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-palette"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                            </div>
                        </div>
                        <!--==== service item End ====-->
                        <!--==== service item start ====-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                            </div>
                        </div>
                        <!--==== service item End ====-->
                        <!--==== service item start ====-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                            </div>
                        </div>
                        <!--==== service item End ====-->
                        <!--==== service item start ====-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                            </div>
                        </div>
                        <!--==== service item End ====-->
                    </div>
                </div>
            </section>
            <!--=== service selection End ====-->
            <!--=== portfolio selection start ====-->
            <section class="portfolio section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portfolio-heading padd-15">
                            <h2>My last projets :</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!--==== portfolio item start====-->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="img/work/work-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--==== portfolio item start====-->
                        <!--==== portfolio item start====-->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="img/work/work-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--==== portfolio item start====-->
                        <!--==== portfolio item start====-->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="img/work/work-6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--==== portfolio item start====-->
                        <!--==== portfolio item start====-->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="img/work/work-7.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--==== portfolio item start====-->
                        <!--==== portfolio item start====-->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="img/work/work-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--==== portfolio item start====-->
                        <!--==== portfolio item start====-->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="img/work/work-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--==== portfolio item start====-->
                    </div>
                </div>
            </section>
            <!--=== portfolio selection End ====-->
            <!--=== contact selection start ====-->
            <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15">Have you any questions ?</h3>
                    <h4 class="contact-sub-title padd-15"> I'M AT YOUR SERVICES</h4>
                    <div class="row">
                        <!--=== contact info item start ====-->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Calls us on</h4>
                            <p>+237 654736265</p>
                        </div>
                        <!--=== contact info item End ====-->
                        <!--=== contact info item start ====-->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Office</h4>
                            <p>Douala, MAKEPE MISSOKE (LAS VEGAS)</p>
                        </div>
                        <!--=== contact info item End ====-->
                        <!--=== contact info item start ====-->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email </h4>
                            <p>arsenetekeu@gmail.com</p>
                        </div>
                        <!--=== contact info item End ====-->
                        <!--=== contact info item start ====-->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-globe-europe"></i></div>
                            <h4>Website</h4>
                            <p>www.mondomaine.com</p>
                        </div>
                        <!--=== contact info item End ====-->
                    </div>
                    <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
                    <h4 class="contact-sub-title padd-15"> I'M VERY RESPONSIVE TO MESSAGES</h4>
                    <!--=== contact form start ===-->
                    <div class="row">
                        <div class="contact-form padd-15">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="text" name="nom" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <input type="text" name="objet" class="form-control" placeholder="subjet" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <textarea name="sms" class="form-control" id="" placeholder="Messages..." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <button type="submit" name="envoyer" class="btn">Send Messages</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!--=== contact form End ===-->
                </div>
            </section>
            <!--=== contact selection End ====-->
        </div>
        <!--=== main content End ====-->
    </div>
    <!-- ====main container End=== -->
    <!--==== styles switcher start ====-->
    <div class="styles-switcher">
        <div class="styles-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas"></i>
        </div>
        <h4>Thmes Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
            <span class="color-6" onclick="setActiveStyle('color-6')"></span>
        </div>
    </div>
    <!--==== styles switcher End ====-->
    <!-- ====JS file=== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js" integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <script src="js/styles-switcher.js"></script>
</body>
</html>
<?php
if(isset($_POST['envoyer'])){
    if(isset($_POST['nom']) AND isset($_POST['email']) AND isset($_POST['objet']) AND isset($_POST['sms']) ){
        if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['objet']) AND !empty($_POST['sms']) ){

            $nom=htmlspecialchars(strip_tags($_POST['nom']));
            $email=htmlspecialchars(strip_tags($_POST['email']));
            $objet=htmlspecialchars(strip_tags($_POST['objet']));
            $sms=htmlspecialchars(strip_tags($_POST['sms']));
            $messages ='merci de contacter arsenetech ! en quoi pouvons nous vous aidez ?';
            $adressemail= 'arsenetekeu@gmail.com';
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                try{
                    ajouter($nom,$email,$objet,$sms);
                    mail($email,$objet,$messages, $adressemail);
                    mail($adressemail,$objet,$messages, $email);
                }catch(Exception $e){
                    echo $e->getMessage();
                }
            }
        }
    }
}
?>
