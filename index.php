<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProFute</title>
    <link href="styles/styles.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="./styles/assets/education.png">
</head>
<body>
    <!-- <style>
        body {
            background-color: red;
        }
    </style> -->
    <header>
        <div class="logoProfute">
            <img src="./styles/assets/education.png" class="logo">
            <h1>ProFute</h1>
        </div>
        <div>
            <nav>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
        <div>
            <input type="text" placeholder="Search..">
            <a href="register.php" class="button">Register</a>
            <a href="login.php" class="button">Log In</a>
        </div>
    </header>
    <main>
        <!-- Landing Page -->
        <div class="landingPage" id="home">
                <div>
                    <h3>Easiest Learning Platform</h3>
                    <p>ProFute is one of the most useful app that eliminated tutorial-hell and teach you crucial skills in Industry</p>
                </div>
        <!-- Skills visual -->
         <div>
            <ul>
                <li>Figma</li>
                <li>Canva</li>
                <li>Visual Thinking</li>
            </ul>
         </div>
         <a class="buttonLanding" href="/register.html">Let's get start</a>
        </div>
         <!-- Profil Lembaga -->
          <div class="ourProfile" id="about">
            <h3>Our Profile</p>
            <p>Lembaga pelatihan kursus digital ProFute melatih anda untuk memiliki skills mumpuni yang memiiki peluang kerja yang baik. Program pelatihan ini memiliki pengajar yang berpengalaman dalam bidang visual serta telah mengajar di berbagai lembaga</p>
          </div>
          <!-- Program - Informasi pelatihan -->
          <div class="ourProgram">
            <h3>Our Program & Information</h3>
            <div>
                <div>
                    <h3>Figma</h3>
                    <p>Figma often used to design website. In this program, you would be teached on fundamental of figma and using this app properly</p>
                    <a href="/cardOne.html" >More</a>
                </div>
                <div>
                    <h3>Canva</h3>
                    <p>Canva is the popular website to make enggaging design. The advantage of using canva is free and the fundamental can be teached in this course with expert mentor</p>
                    <a href="/cardTwo.html">More</a>
                </div>
                <div>
                    <h3>Visual Thinking</h3>
                    <p>Our brain has capacity to think creative. This course will teach you how to create good design such as basic color theory and how to brainstorming idea</p>
                    <a href="/cardThree.html">More</a>
                </div>
            </div>
          </div>
          <!-- News and article -->
           <div class="newsArticle" id="news">
            <h3>News & Article</h3>
            <select id="dropdown" name="options">
                <option value="all">All Articles</option>
                <option value="newest">Recent Articles</option>
                <option value="oldest">Oldest Articles</option>
            </select>
            <div id="articles">
                <div class="oldest">
                    <h3>ProFute student won the design competition in Jakarta</h3>
                    <p>One of the competitive competition held in jakarta and has a lot of members. Joata has won the competition gaining a gold medal in Website design using figma</p>
                </div>
                <div class="oldest">
                    <h3>ProFute selected as best course website in Indonesia by top lecturer in art division</h3>
                    <p>Rokari as an expert in art and design choose ProFute as competent company to teach young people how to design properly</p>
                </div>
                <div class="newest">
                    <h3>Universal learning achieved by Profute</h3>
                    <p>profute has won over five category</p>
                </div>
                <div class="oldest">
                    <h3>Universal learning achieved by Profute</h3>
                    <p>profute has won over five category</p>
                </div>
            </div>
           </div>
            <!-- Photo and video -->
           <div class="gallery">
                <h3>ProFute Gallery</h3>
                <div class="imageCarousel">
                    <button class="nav-button prev" id="prevBtn">&#60;</button>
                    <div>
                        <img src="/styles/assets/picOne.png" id="imageCarousel">
                        <img src="/styles/assets/picTwo.png" id="imageCarousel">
                        <img src="/styles/assets/picThree.png" id="imageCarousel">
                    </div>
                    <button class="nav-button next" id="nextBtn">&#62;</button>
                </div>
           </div>
           <footer id="contact">
                <div>
                    <p>Copyright © 2024 by Profute</p>
                    <p>Made by Aldo</p>
                    <p>Company related: LuarSekolah</p>
                </div>
                <div>
                    <p>Contact Us<p>
                    <p>xerc.muharram@gmail.com</p>
                    <p>Social Media</p>
                    <div class="socialMedia">
                        <a href="https://discord.com" target="_blank">
                            <img src="styles/assets/discord.png" alt="Discord">
                        </a>
                        <a href="https://instagram.com" target="_blank">
                            <img src="styles/assets/instagram.png" alt="Instagram">
                        </a>
                    </div>
                </div>
           </footer>
    </main>
    <script src="index.js"></script>
</body>
</html>