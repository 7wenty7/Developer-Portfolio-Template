<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
    <title>Portfolio - Slim Bouras</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    <link rel="icon" type="image/x-icon" href="images/icon-f.ico">
</head>
<body>
<?php
session_start(); // Start the session

if (isset($_SESSION['success_message'])) {
    echo '<div class="success-message" style="background-color: #FB8500; text-align: center; color: white; padding: 5px 10px; border-radius: 5px;">' . $_SESSION['success_message'] . '</div>';
    unset($_SESSION['success_message']); 
}
?>
    
    <header>
        <div id="logo"><a href="index.php"><img src="images/logo-sb.svg" alt=""></a></div>
        <div class="burger-menu">
            <i class="fas fa-bars"></i>
        </div>
        <div id="nav">
            <a href="https://cv.slimbouras.com/">CV</a>
            <a href="about.html">À PROPOS</a>
            <a href="projects.html">PROJETS</a>
            <a href="contact.html">CONTACT</a>
        </div>
    </header>
    <main>
        
        <!-- About me  -->
        <section id="about">
            <div class="container">
                <div class="about-text">
                    <h1>Hello, c'est<strong> Slim Bouras</strong></h1>
                    <p>Étudiant passionné en développement web 🚀. <br>J'améliore constamment mes compétences et explore divers domaines. Passionné par la fintech et le développement de jeux vidéo.</p>
                    <div class="social-icons">
                        <a href="mailto:contact@slimbouras.com" class="social-link"><i class="fa-regular fa-envelope fa-2xl"></i></a>
                        <a href="https://github.com/7wenty7" class="social-link"><i class="fa fa-github fa-2xl"></i></a>
                        <a href="https://www.linkedin.com/in/slimbouras/" class="social-link"><i class="fa fa-linkedin fa-2xl"></i></a>
                    </div>
                    <div class="action-buttons">
                        <a href="mailto:contact@slimbouras.com" class="button">Hire Me</a>
                        <a href="https://cv.slimbouras.com/" class="button-transparent">Voir CV</a>
                    </div>
                </div>
                <div class="about-animation">
                    <img src="images/slim.png" alt="">
                    <!-- Placeholder for dynamic CSS animation or interactive element -->
                </div>
            </div>
        </section>
        
        



        <!-- My Skills -->


        <!-- "My Skills" Section -->
        <h1 class="sub-title">Mes Compétences</h1>
        <div class="skills-section">
            
        <div class="skills-content">
            <h2>Maîtrise</h2>
            
            
            <!-- Circular Progress Bar for HTML & CSS -->
            <div class="wrapper">

                
                
                
                <!-- Skill 1 -->
                <div>
                    <div class="title">HTML & CSS</div>
                    <div class="circle" data-value="0.85" data-skill="HTML & CSS"><strong></strong></div>
                </div>
                <!-- Skill 2 -->
                <div>
                    <div class="title">JavaScript</div>
                    <div class="circle" data-value="0.70" data-skill="JavaScript"><strong></strong></div>
                </div>
                <!-- Skill 3 -->
                <div>
                    <div class="title">PHP</div>
                    <div class="circle" data-value="0.70" data-skill="React JS"><strong></strong></div>
                </div>
                <!-- Additional skills as needed -->
                <div>
                    <div class="title">Python</div>
                    <div class="circle" data-value="0.60" data-skill="React JS"><strong></strong></div>
                </div>

                <div>
                    <div class="title">SQL</div>
                    <div class="circle" data-value="0.80" data-skill="React JS"><strong></strong></div>
                </div>

                <div>
                    <div class="title">Node Js</div>
                    <div class="circle" data-value="0.25" data-skill="React JS"><strong></strong></div>
                </div>
                <div>
                    <div class="title">Vue Js</div>
                    <div class="circle" data-value="0.2" data-skill="React JS"><strong></strong></div>
                </div>
                <div>
                    <div class="title">Flutter</div>
                    <div class="circle" data-value="0.15" data-skill="React JS"><strong></strong></div>
                </div>
            </div>
        </div>
            
            
        
         <!-- Graph on the left -->
        <div id="skills"> <!-- Skills details on the right -->
            <h2>À LA RECHERCHE CONSTANTE DE NOUVEAUX HORIZONS TECHNIQUES ✨</h2>

            <!-- Language & Technos -->
            <img src="images/css-3-svgrepo-com.svg" alt="">
            <img src="images/html-5-svgrepo-com.svg" alt="">
            <img src="images/docker-svgrepo-com.svg" alt="">
            <img src="images/git-svgrepo-com.svg" alt="">
            <img src="images/js-svgrepo-com.svg" alt="">
            <img src="images/php3-svgrepo-com.svg" alt="">
            <img src="images/python-svgrepo-com.svg" alt="">
            <img src="images/mariadb-svgrepo-com.svg" alt="">
            <img src="images/mysql-logo-svgrepo-com.svg" alt="">
            <img src="images/node-js-svgrepo-com.svg" alt="">
            <img src="images/flutter-svgrepo-com.svg" alt="">
            <!-- selling points  -->
            <div class="sellp"><img src="images/coding2.svg" alt=""><p>Design interactif avec HTML, CSS et JavaScript, enrichi par une touche créative.</p></div>
            <div class="sellp"><img src="images/coding2.svg" alt=""><p>Développement robuste avec PHP et une gestion agile des bases de données MariaDB.</p></div>
            <div class="sellp"><img src="images/coding2.svg" alt=""><p>Environnements de développement optimisés grâce à Docker et Git.</p></div>
            <div class="sellp"><img src="images/coding2.svg" alt=""><p>Administration efficace des bases de données via MariaDB et PhpMyAdmin.</p></div>
            <div class="sellp"><img src="images/coding2.svg" alt=""><p>Scripts puissants et automatisation avec Python, pour des solutions flexibles et efficaces.</p></div>
            <!-- Proficiency chart  -->
        </div>
    </div>
</div>


    <div id="my-projects">
    <h2 class="sub-title">Mes Projets</h2>
    <div class="carousel">
        <div class="carousel-inner">
            <!-- First Slide with 3 Projects -->
            
                <!-- Project 1 -->
                <div class="project-box">
                    <img src="images/wedo.png" alt="Project Image">
                    <h3>Site WeDo Distribution Services</h3>
                    <p>Site E-commerce B2B conçus avec Wordpress et WooCommerce</p>
                    <div class="project-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">PHP</span>
                        <span class="tag">Javascript</span>
                        <span class="tag">SQL</span>
                        <span class="tag">WooCommerce</span>
                    </div>
                    <a href="https://www.wedodistribution.tn/" class="button">Voir le Projet</a>
                </div>
                
                <!-- Project 2 -->
                <div class="project-box">
                    <img src="images/velostar.png" alt="Project Image">
                    <h3>Site Velostar Organisation</h3>
                    <p>Site vitrine conçus avec worpress.</p>
                    <div class="project-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">PHP</span>
                        <span class="tag">Wordpress</span>

                    </div>
                    <a href="https://velostarorganisation.com/" class="button">Voir le Projet</a>
                </div>
                <!-- Project 3 -->
                <div class="project-box">
                    <img src="images/logov1.svg" alt="Project Image">
                    <h3>Modèle de CV pour développeurs en ligne</h3>
                    <p>Developer-CV-Template est un modèle de CV élégant pour développeurs en HTML, CSS et JS, offrant des modes sombre et clair, des capacités multilingues et une personnalisation facile.</p>
                    <div class="project-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">JavaScript</span>
                    </div>
                    <a href="https://github.com/7wenty7/Developer-CV-Template" class="button">Voir le Projet</a>
                </div>

                <div class="project-box">
                    <img src="images/logov1.svg" alt="Project Image">
                    <h3>Portfolio pour développeurs</h3>
                    <p>Un modèle élégant et personnalisable en HTML, CSS, JavaScript et PHP , conçu pour mettre en valeur les compétences et les projets de manière claire et attrayante.</p>
                    <div class="project-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">PHP</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">SQL</span>
                    </div>
                    <a href="https://github.com/7wenty7/Developer-Portfolio-Template" class="button">Voir le Projet</a>
                </div>
               
        </div>

    </div>
    <a href="projects.html" class="button-transparent">Voir Plus de Projets</a>
    </div>
    <div class="contact-form-section">
    <h2 class="sub-title">Contactez-Moi</h2>
    <form id="contact-form" action="contact.php" method="POST">
        <div class="form-group">
            <input type="text" id="name" name="name" placeholder="Nom Prénom" required>
        </div>
        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="text" id="object" name="object" placeholder="Objet" required>
        </div>
        <div class="form-group">
            <textarea id="message" name="message" placeholder="Votre Message" rows="4" required></textarea>
        </div>
        <button type="submit" class="button">Envoyer</button>
    </form>
    </div>

        
    </main>
    <button id="back-to-top" title="Go to top">↑</button>
    <footer>
        <div class="footer">
        <div class="row">
        <a href="mailto:contact@slimbouras.com"><i class="fa-regular fa-envelope"></i></a>
        <a href="https://github.com/7wenty7"><i class="fa fa-github"></i></a>
        <a href="https://www.linkedin.com/in/slimbouras/"><i class="fa fa-linkedin"></i></a>
        </div>
        
        <div class="row">
        <ul>
            <li><a href="../cv.slimbouras.com">CV</a></li>
            <li><a href="about.html">À PROPOS</a></li>
            <li><a href="projects.html">PROJETS</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
        </div>
        
        <div class="row">
         Copyright © 2024 Slim Bouras - All rights reserved  
        </div>
        </div>
        </footer>
        <script>
            $(document).ready(function() {
                let observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if(entry.isIntersecting) {
                            var $circle = $(entry.target).find('.circle');
                            var value = $circle.data('value');
                            var skill = $circle.data('skill');

                            $circle.circleProgress({
                                startAngle: -1.55,
                                value: value,
                                size: 100, 
                                fill: {gradient: ['#FB8500', '#FFD60A']},
                                animation: { duration: 2000 }
                            }).on('circle-animation-progress', function(event, progress, stepValue) {
                                $(this).find('strong').text(Math.round(stepValue * 100) + '%');
                            });

                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.2 
                });

                $('.wrapper div').each(function() {
                    observer.observe(this);
                });
            });
            




        </script> 
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("back-to-top").style.display = "block";
              } else {
                document.getElementById("back-to-top").style.display = "none";
              }
            }
            
            // When the user clicks on the button, scroll to the top of the document
            document.getElementById("back-to-top").onclick = function() {topFunction()};
            
            function topFunction() {
              document.body.scrollTop = 0; // For Safari
              document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
            }
            </script>
            <script>
                $(document).ready(function() {
                    $('.burger-menu').click(function() {
                    $('#nav').slideToggle();
                                        });
                                            });

            </script>
                
    <script src="https://kit.fontawesome.com/d23bd1244a.js" crossorigin="anonymous"></script><script src="carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>