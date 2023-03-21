<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav__left">
                <p><b>Zmat24</b></p>
            </div>
            <div class="nav__right">
                <ul class="nav__list">
                    <li class="nav__item"><b><a href="#">Home</a></b></li>
                    <li class="nav__item"><a href="#about">About</a></li>
                    <li class="nav__item"><a href="#skills">Skills</a></li>
                    <li class="nav__item"><a href="https://blokchainology.com">Blokchainology</a></li>
                    <li class="nav__item"><a href="#" class="contact">Cantact</a></li>
                    <li class="nav__item"><a href="#footer">Call me</a></li>
                </ul>
            </div>
        </nav>
        <div class="header__tit">
            <div class="header__title">
                <h1>Hi, I'm Zmat24</h1>
            </div>
            <div class="header__sub-title">
                <p>Developer , Trader , AI</p>
            </div>
            <div class="header__last-works">
                <p>Last Works</p>
            </div>
        </div>
    </header>
    <main>
        <div class="main__about" id="about">
            <h1>About</h1>
            <p>Lorem ipsum dolor sit amet, Arcu, sed nisi, mi, arcu libero phasellus tincidunt. Rhoncus, diam penatibus aliquet tellus, in rutrum augue. Pellentesque senectus risus consectetur et sed purus sed. Consectetur adipiscing elit. Egestas porttitor nulla nulla egestas odio pharetra egestas aliquet mollis. 

                Arcu, sed nisi, mi, arcu libero phasellus tincidunt. Rhoncus, diam penatibus aliquet tellus, in rutrum augue. Pellentesque senectus risus consectetur et sed purus sed. Consectetur adipiscing elit. Egestas porttitor nulla nulla egestas odio pharetra egestas aliquet mollis. diam penatibus aliquet tellus, in rutrum augue. Pellentesque.</p>
        </div>

        <div class="main__skills" id="skills">
            <div class="skills__title">
                <h1>Skills</h1>
            </div>
            <div class="skills__main-container">
                <div class="skills__img">
                    <img src="./images/matin.jpg" alt="" width="350px"><br>
                    <a href="https://Blokchainology.com/team/matinsoleymani">Go My Profile In Blokchainology</a>
                </div>
                <div class="skills__item">
                    <div class="item__title">
                        <h2>Developer</h2>
                    </div>
                    <div class="item__lang">
                        <div class="threec">
                            <div class="item__html">
                                <p>Html</p>
                            </div>
                            <div class="item__css">
                                <p>Css</p>
                            </div>
                            <div class="item__js">
                                <p>Java Script</p>
                            </div>
                        </div>
                        <div class="threec">
                            <div class="item__php">
                                <p>PHP</p>
                            </div>
                            <div class="item__python">
                                <p>Python</p>
                            </div>
                            <div class="item__r">
                                <p>R</p>
                            </div>
                        </div>
                        <div class="threec">
                            <div class="item__laravel">
                                <p>Laravel</p>
                            </div>
                            <div class="item__react">
                                <p>React js</p>
                            </div>
                            <div class="item__sass">
                                <p>Sass</p>
                            </div>
                        </div>
                    </div>
                    <div class="item__lang">
                        <div class="threec">
                            <div class="item__jquery">
                                <p>Jquery</p>
                            </div>
                            <div class="item__jslib">
                                <p>Js librarys</p>
                            </div>
                            <div class="item__gitgithub">
                                <p>Git & Github</p>
                            </div>
                        </div>
                        <div class="threec">
                            <div class="item__wordpress">
                                <p>Wordpress</p>
                            </div>
                            <div class="item__ubnto">
                                <p>Ubuntu</p>
                            </div>
                            <div class="item__bootstrap">
                                <p>Bootstrap</p>
                            </div>
                        </div>
                        <div class="threec">
                            <div class="item__seo">
                                <p>SEO</p>
                            </div>
                            <div class="item__ps">
                                <p>Photoshop</p>
                            </div>
                            <div class="item__Ai">
                                <p>DataScience & BigData </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <form class="contact__form" action="./controllers/sendMessageController.php" method="post">
        <h3>Send Message For Me</h3>
        <input type="text" name="name" id="name" placeholder="Enter Name: " required>
        <input type="email" name="email" id="email" placeholder="Enter Email: " required>
        <textarea name="message" id="textm" cols="30" rows="10" placeholder="Enter Message: " required></textarea>
        <button id="Submit-contact-form">Submit & Send</button>
    </form>

    <footer id="footer">
        <div class="footer__continer">
            <div class="footer__rows">
                <a href="https://github.com/matinsoleymni">Github</a>
                <a href="https://Blokchainology.com/team/matinsoleymani">Blokchainology</a>
                <a href="">Telegram</a>
                <a href="">Instalgram</a>
            </div>
            <div class="footer__rows">
                <a href="https://Blokchainology.com"><img src="./images/logos/logo.png" width="150px" alt="Logo"></a>
            </div>
            <div class="footer__rows">
                <a href="tel:09032142858">+989032142858</a>
                <a href="mailto:matinsoleymni@gmail.com">Matinsoleymni@gmail.com</a>
            </div>
        </div>
    </footer>

    <script src="./js/app.js"></script>
    <?php 
        echo "<script>alert('Your Message Sent :)')</script>";
    ?>
</body>
</html>