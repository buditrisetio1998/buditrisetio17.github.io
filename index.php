<?php

$service = [];
$skills = [
    ["logo"=>"html5.png", "name"=>"HTML"],
    ["logo"=>"css3.png", "name"=>"CSS"],
    ["logo"=>"js.png", "name"=>"JavaScript"],
    ["logo"=>"php.png", "name"=>"PHP"],
    ["logo"=>"bs.png", "name"=>"Bootstrap"],
    ["logo"=>"ci.png", "name"=>"Code Igniter 3"],
    ["logo"=>"git.png", "name"=>"Git"],
    ["logo"=>"github.png", "name"=>"GitHub"],
    ["logo"=>"c.png", "name"=>"C/C++"], 
    ["logo"=>"mysql.png", "name"=>"MySql"],
    ["logo"=>"corel.png", "name"=>"CorelDraw"],
    ["logo"=>"ai.png", "name"=>"Ilustrator"],
    ["logo"=>"ps.png", "name"=>"Photoshop"],
    ["logo"=>"pr.png", "name"=>"Premiere Pro"],
    ["logo"=>"ae.png", "name"=>"After Effect"],
];

$resume_work = [
    ["date"=>"November 2021 - May 2022", "pt"=>"PT. Tirta Alam Segar", "section"=>"Production Operator"],
    ["date"=>"January 2021 - April 2021", "pt"=>"PT. Maju Mapan Gemilang", "section"=>"Staff IT"],
    ["date"=>"April 2019 - April 2020", "pt"=>"PT. Sumitomo Construction Machinery Indonesia", "section"=>"Production Operator"],
    ["date"=>"August 2016 - July 2018", "pt"=>"PT. Astra Honda Motor", "section"=>"Production Operator"],
];

$resume_edu = [
    ["date"=>"2018 - 2022","institution"=>"University of Buana Perjuangan Karawang","major"=>"Bachelor of Compuer Science"],
    ["date"=>"2013 - 2016","institution"=>"SMAN 2 Cikampek","major"=>"High School of Science"],
];

$project_web = [
    ["title"=>"Company Profile", "text"=>"HTML, CSS, JS, Bootstrap", "wallpaper"=>"company.png"],
    ["title"=>"Flood Detection Thesis Project", "text"=>"HTML, CSS, JS, Bootstrap, MySql, C++,Microcontroller", "wallpaper"=>"flood.png"],
    ["title"=>"CRUD Point of Sales", "text"=>"Code Igniter 3, PHP, JS, Bootstrap, MySql", "wallpaper"=>"sales.png"],
];
$project_media = [
    ["title"=>"UBP Techno Day Feed's Instagram Design", "text"=>"CorelDraw, Adobe Photoshop", "wallpaper"=>"utd.png", "link"=>"https://www.instagram.com/ubptechnoday_/?hl=id" ],
    ["title"=>"KKN Tamansari Village Feed's Instagram Design", "text"=>"CorelDraw, Adobe Photoshop", "wallpaper"=>"kkn.png", "link"=>"https://www.instagram.com/kkn2021.tamansari/?hl=id" ],
    ["title"=>"Student Associations Feed's Instagram Design", "text"=>"CorelDraw, Adobe Photoshop", "wallpaper"=>"himatif.png", "link"=>"https://www.instagram.com/himatifubp/?hl=id" ],
];
$project_video = [
    ["title"=>"PKKMB UBP Flayer Video","text"=>"CorelDraw, Ilustrator, Premiere Pro, After Effect","video"=>"https://youtube.com/embed/aysD5HPr2Zk"],
    ["title"=>"Short Video Project","text"=>"Premiere Pro","video"=>"https://youtube.com/embed/nLcukr5rIA0"],
];
$project_grafis = [];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- AOS -->
  </head>

  <body id="home">
    <nav class="menu">
      <div class="logo">
        <a href="#home"><img src="foto/logo3.png" alt="" /></a>
      </div>

      <ul class="menu-list">
        <li></li>
        <li><a href="#home">Home</a></li>
        <li><a href="#resume">Resume</a></li>
        <li><a href="#project">Project</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <div class="menu-toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
<!-- txt 1 -->
    <div class="container">
      <div class="txt1">
        <div class="fade" data-aos="fade-up">
          <h3>Hi I'm</h3>
          <h1>Budi Tri Setio</h1>
          <h2>[ Web Developer & Graphic Designer ]</h2>
          <p>"I'm a Fresh Graduate of Bachelor Computer Science. I have passion for web develop such as HTML, CSS, PHP, and JS and for graphic design such as CorelDraw and Adobe CS"</p>
          <button class="b1">
            <a href="./cv.pdf" download class="download-btn">Download CV <i class="fa-solid fa-download"></i> </a>
          </button>
          <button class="b2">
            <a href="mailto:buditrisetio17@gmail.com">e-mail</a>
          </button>
        </div>
      </div>
<!-- txt 1 -->
<!-- txt 2 -->
      <div class="txt2">
        <div class="fade" data-aos="fade-up"><h3>Service</h3></div>
        <div class="service">
            <div class="s1" data-aos="fade-up">
                <div class="radius"><i class="fa-sharp fa-solid fa-desktop"></i></div>
                <p>"Developing an interface website"</p>
            </div>
            <div class="s2" data-aos="fade-up">
                <div class="radius"><i class="fa-solid fa-code"></i></div>
                <p>"Developing an function website"</p>
            </div>
            <div class="s3" data-aos="fade-up">
                <div class="radius"><i class="fa-sharp fa-solid fa-pen-nib"></i></div>
                <p>"Designing ilustration for website and media social"</p>
            </div>
            <div class="s4" data-aos="fade-up">
                <div class="radius"><i class="fa-sharp fa-solid fa-play"></i></div>
                <p>"Making video ilustration"</p>
            </div>
        </div>
      </div>
<!-- txt 2  -->
<!-- txt 3 -->
      <div class="txt3">
        <div class="fade" data-aos="fade-up"><h3>Skill's & Technology</h3></div>
        <div class="technology">
            <?php foreach( $skills as $skill): ?>
                <div class="t1" data-aos="fade-up">
                    <img src="foto/<?= $skill["logo"]; ?>"/>
                    <p><?= $skill["name"]; ?></p>
                </div>        
            <?php endforeach; ?>       
        </div>
      </div>
<!-- txt 3 -->
<!-- txt 4 -->
      <div class="txt4" id="resume">
        <div class="fade" data-aos="fade-up"><h3>Resume</h3></div>
        <div class="work">
            <h4 data-aos="fade-up">Work Experience</h4>
            <div class="linework" data-aos="fade-up">
                <div class="work2" data-aos="fade-up">
                    <ul>
                        <?php foreach( $resume_work as $work): ?>
                            <li>
                                <div class="bord" data-aos="fade-up"><h6><?=$work["date"]; ?></h6></div>
                                <div class="tas" data-aos="fade-up">
                                    <h5><?=$work["pt"]; ?></h5>
                                    <p><?=$work["section"]; ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="edu">
            <h4 data-aos="fade-up">Educational</h4>
            <div class="lineedu" data-aos="fade-up">
                <div class="edu2" data-aos="fade-up">
                    <ul>
                        <?php foreach($resume_edu as $edu) : ?>
                            <li>
                                <div class="bord" data-aos="fade-up"><h6><?= $edu["date"]; ?></h6></div>
                                <div class="srj" data-aos="fade-up">
                                    <h5><?= $edu["institution"]; ?></h5>
                                    <p><?= $edu["major"]; ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
      </div>
<!-- txt 4 -->
<!-- txt 5 -->
    <div class="txt5" id="project">
        <div class="fade" data-aos="fade-up"><h3>My Project's</h3></div>

        <div class="webp1">
          <h4 data-aos="fade-up">Web Project's</h4>       
            <div class="webborder" data-aos="fade-up">
                <?php foreach( $project_web as $web): ?>
                    <div class="wp1">
                        <div class="wptop">
                            <h5><?= $web["title"]; ?></h5>
                            <p><?= $web["text"]; ?></p>
                        </div>
                        <div class="wpbot"><div class="img1" style="background-image:url(foto/<?= $web["wallpaper"]; ?>) ;"></div></div>
                    </div>
                <?php endforeach; ?>
          </div>
        </div>

        <div class="sosmedp1">
          <h4 data-aos="fade-up">Social Media Project's</h4>
            <div class="sosmedborder">
                <?php foreach( $project_media as $media): ?>
                    <div class="sp1" data-aos="fade-up">
                        <div class="sptop">
                            <h5><?= $media["title"]; ?></h5>
                            <p><?= $media["text"]; ?></p>
                        </div>
                        <div class="spmid"><div class="img1" style="background-image:url(foto/<?= $media["wallpaper"]; ?>) ;"></div></div>
                        <div class="spbot"><a href="<?= $media["link"]; ?>">Visit Link</a></div>
                    </div>
                <?php endforeach; ?>
          </div>
        </div>

        <div class="videop1">
          <h4 data-aos="fade-up">Video Project</h4>
            <div class="videoborder">
                <?php foreach( $project_video as $video): ?>
                    <div class="vp1" data-aos="fade-up">
                        <div class="vptop">
                            <h5><?= $video["title"]; ?></h5>
                            <p><?= $video["text"]; ?></p>
                        </div>
                        <div class="vpbot1">
                            <iframe src="<?= $video["video"]; ?>"></iframe>
                        </div>
                    </div>  
                <?php endforeach; ?>
          </div>
        </div>

    </div>
<!-- txt 5 -->
<!-- txt 6 -->
      <div class="txt6" id="contact">
        <div class="fade" data-aos="fade-up"><h3>My Contact's</h3></div>
        <div class="contact">
          <div class="mc1" data-aos="fade-up">
            <div class="radius">
              <a href="https://api.whatsapp.com/send/?phone=%2B6282261539829&text&type=Hi%20Everyone"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <p>+62-822-6153-9829</p>
          </div>
          <div class="mc2" data-aos="fade-up">
            <div class="radius">
              <a href="https://www.instagram.com/btstyo__/"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <p>@btstyo__</p>
          </div>
          <div class="mc3" data-aos="fade-up">
            <div class="radius">
              <a href="https://web.facebook.com/buditrisetio/"><i class="fa-brands fa-facebook"></i></a>
            </div>
            <p>Budi Tri Setio</p>
          </div>
          <div class="mc4" data-aos="fade-up">
            <div class="radius">
              <a href="https://www.linkedin.com/in/budi-tri-setio-591b5b220/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <p>Budi Tri Setio</p>
          </div>
          <div class="mc5" data-aos="fade-up">
            <div class="radius">
              <a href="https://github.com/buditrisetio"><i class="fa-brands fa-github"></i></a>
            </div>
            <p>buditrisetio</p>
          </div>
          <div class="mc6" data-aos="fade-up">
            <div class="radius">
              <a href="mailto:buditrisetio17@gmail.com"><i class="fa-solid fa-at"></i></a>
            </div>
            <p>buditrisetio17@gmail.com</p>
          </div>
        </div>
      </div>

      <div class="txt7"></div>

      <!-- dekorasi -->
      <div class="lines">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="sosmedfix">
          <div class="sosmed">
            <a href="https://api.whatsapp.com/send/?phone=%2B6282261539829&text&type=Hi%20Everyone"><i class="fa-brands fa-square-whatsapp"></i></a>
            <a href="https://www.instagram.com/btstyo__/"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="https://web.facebook.com/buditrisetio/"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://www.linkedin.com/in/budi-tri-setio-591b5b220/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/buditrisetio"><i class="fa-brands fa-github"></i></a>
          </div>
        </div>
        <div class="line3"></div>
      </div>
      <!-- dekorasi -->
    </div>
    <footer class="bot">
      <p>Created by <i class="fa-solid fa-heart"></i> Budi Tri Setio <i class="fa-regular fa-copyright"></i> copyright 2022</p>
    </footer>

    <!-- AOS SCRIPT -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- AOS SCRIPT -->

    <!-- SLIDE HUMBURGER MENU -->
    <script>
      const menuToggle = document.querySelector(".menu-toggle input");
      const nav = document.querySelector("nav ul");

      menuToggle.addEventListener("click", function () {
        nav.classList.toggle("slide");
      });
    </script>
    <!-- SLIDE HUMBURGER MENU -->
  </body>
</html>
