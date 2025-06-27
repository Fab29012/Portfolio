<?php 
    require 'languages.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
    <head>
        <title><?php echo $translations['title'];?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="global.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=EB+Garamond:ital,wght@1,800&family=Fondamento:ital@0;1&family=Solway:wght@300;400;500;700;800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=EB+Garamond:ital,wght@1,800&family=Fondamento:ital@0;1&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Solway:wght@300;400;500;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav-links">
                    <li><a href="Fabienne_HALLOIN_CV.pdf" onclick="window.open('Fabienne_HALLOIN_CV.pdf', '_blank'); return false;" class="smooth-scroll"><?php echo $translations['resume'];?></a></li>
                    <li><a href="#about-me" class="smooth-scroll"><?php echo $translations['about'];?></a></li>
                    <li><a href="#projects" class="smooth-scroll"><?php echo $translations['project'];?></a></li>
                    <li><a href="#contact-me" class="smooth-scroll"><?php echo $translations['contact'];?></a></li>
                </ul>
                <section class="langue">
                <a href="Index.php?lang=fr" class="languages">FR</a> |
                <a href="Index.php?lang=en" class="languages">EN</a> 
                </section>  
                <!-- Hamburger Menu Icon -->
                 <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                 </div>
            </nav>
        </header>
            <section class="intro">
                <div class="text-container" id="star-container">
                    <h1 id="intro-text"></h1>
                    <span class="dots"></span>
                    <div class="action">
                        <a href="#about-me" class="smooth-scroll"><button><?php echo $translations['learn'];?></button></a>
                    </div>
                </div>
            </section>
            <section class="about-me" id="about-me">
                <!--Left side: Dynamic cards - they will be able to choose-->
                <div class="left-side">
                    <div class="card active" id="bio">
                        <div>
                            <h2><?php echo $translations['mecard'];?></h2>
                            <p><?php echo $translations['meone'];?></p>
                            <p><?php echo $translations['metwo'];?></p>
                            <p><?php echo $translations['methree'];?></p>
                        </div>
                    </div>
                    <div class="card" id="education">
                            <h2><?php echo $translations['educard'];?></h2>
                            <p><?php echo $translations['educardtwo'];?></p>
                            <p><?php echo $translations['educardthree'];?></p>
                            <p><?php echo $translations['educardfour'];?></p>
                    </div>
                    <div class="card" id="coding">
                        <h2><?php echo $translations['codecard'];?></h2>
                        <p><?php echo $translations['codetwo'];?></p>
                        <p><?php echo $translations['codethree'];?></p>
                    </div>
                    <div class="card" id="hobbies">
                        <h2><?php echo $translations['hobcard'];?></h2>
                        <p><?php echo $translations['hobone'];?></p>
                        <p><?php echo $translations['hobtwo'];?></p>
                        <p><?php echo $translations['hobthree'];?></p>
                    </div>
                    
                    <div class="buttons">
                        <button data-card="active"><img class="icones" src="GImages/utilisateur.png"></button>
                        <button data-card="education"><img class="icones" src="GImages/casquette-etudiants.png"></button>
                        <button data-card="coding"><img class="icones" src="GImages/codage.png"></button>
                        <button data-card="hobbies"><img class="icones" src="GImages/hobbies.png"></button>
                    </div>
                </div>
                <!--Right side: image reveal with scroll-->
                <div class="right-side">
                    <img src="GImages/IMG_4953.jpeg">
                </div>
            </section>
            <!--Project section -->
            <section class="projects" id="projects">
                <h2 class="titleproject"><?php echo $translations['projsect'];?></h2>
                <div class="carousel-container">
                    <button class="carousel-btn left" onclick="scrollCarousel(-1)">❮</button>
                        <div class="project-deck">
                            <div class="square" id="project1" onclick="openProject('project1')"><h2><?php echo $translations['blogname'];?></h2></div>
                            <div class="square" id="project2" onclick="openProject('project2')"><h2><?php echo $translations['title2'];?></h2></div>
                            <div class="square" id="project3" onclick="openProject('project3')"><h2><?php echo $translations['figproj'];?></h2></div>
                            <div class="square" id="project4" onclick="openProject('project4')"><h2><?php echo $translations['title3'];?></h2></div>
                            <div class="square" id="project5" onclick="openProject('project5')"><h2><?php echo $translations['bipname'];?></h2></div>
                        </div>
                    <button class="carousel-btn right" onclick="scrollCarousel(1)">❯</button>
                 </div> 
                 
            </section>
            <div class="project-modal" id="project1-modal">
                <div class="modal-content">
                    <button class="close-btn" onclick="closeProject('project1')">✖</button>
                    <h2><?php echo $translations['blogname'];?></h2>
                    <p><?php echo $translations['blogtext'];?></p>
                    <a href=https://github.com/Fab29012/3Ts.git class="githubcode"><p><?php echo $translations['bloggit'];?></p></a>
                    <a href="https://teatalesandtenderhearts.netlify.app" class="see-more"><?php echo $translations['morebutton'];?></a>
                </div>
            </div>
            <div class="project-modal" id="project2-modal">
                <div class="modal-content">
                    <button class="close-btn" onclick="closeProject('project2')">✖</button>
                    <h2><?php echo $translations['title2'];?></h2>
                    <p><?php echo $translations['text6'];?></p>
                    <a href="https://usability-conference.unistra.fr" class="see-more"><?php echo $translations['morebutton'];?></a>
                </div>
            </div>
            <div class="project-modal" id="project3-modal">
                <div class="modal-content">
                    <button class="close-btn" onclick="closeProject('project3')">✖</button>
                    <h2><?php echo $translations['figproj'];?></h2>
                    <p><?php echo $translations['figtext'];?></p>
                    <a href="https://www.figma.com/proto/jasx22a0Ro1FKSBkaaCzkH/Fabienne-HALLOIN-CAWEB-M1?node-id=26-3" class="see-more"><?php echo $translations['morebutton'];?></a>
                </div>
            </div>
            <div class="project-modal" id="project4-modal">
                <div class="modal-content">
                    <button class="close-btn" onclick="closeProject('project4')">✖</button>
                    <h2><?php echo $translations['title3'];?></h2>
                    <p><?php echo $translations['text7'];?></p>
                    <a href="https://etudiants-caweb.unistra.fr/2425/fab_ok/Portfolio/Index.php" class="see-more"><?php echo $translations['morebutton'];?></a>
                </div>
            </div>
            <div class="project-modal" id="project5-modal">
                <div class="modal-content">
                    <button class="close-btn" onclick="closeProject('project5')">✖</button>
                    <h2><?php echo $translations['bipname'];?></h2>
                    <p><?php echo $translations['biptext'];?></p>
                    <a href="link_here" class="see-more"><?php echo $translations['morebutton2'];?></a>
                </div>
            </div>
            <section id="contact">
                <div class="contact-me" id="contact-me">
                    <h2><?php echo $translations['title4'];?></h2>
                    <p><?php echo $translations['text8'];?></p>
                    <form id="contactForm">
                        <input type="text" id="name" name="name" placeholder="<?php echo $translations['form_name'];?>" required>
                        <input type="email" id="email" name="email" placeholder="<?php echo $translations['email'];?>" required>
                        <textarea id="message" name="message" rows="4" placeholder="<?php echo $translations['message'];?>" required></textarea>
                        <button type="submit"><?php echo $translations['submit'];?></button>
                    </form>
                    <p id="successMessage" class="hidden"><?php echo $translations['success'];?></p>
                    <div class="social-links">
                        <a href="mailto:fabienne_halloin@yahoo.com">📧 <?php echo $translations['email_me'];?></a>
                        <a href="tel:+33632122090">📞 <?php echo $translations['call_me'];?></a>
                        <a href="www.linkedin.com/in/fab-halloin" target="_blank">🔗 <?php echo $translations['linkedin'];?></a>
                        <a href="https://github.com/Fab29012" target="_blank"><i class="fa-brands fa-github"></i><?php echo $translations['github'];?></a>
                        <a href="Fabienne_HALLOIN_CV.pdf" download class="resume-button">📄 <?php echo $translations['cv'];?></a>
                    </div>
                </div>
            </section>
        <footer></footer>
        <script src="global.js"></script>
    </body>
</html>