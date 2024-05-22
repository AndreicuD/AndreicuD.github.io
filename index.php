<?php 
require ('header.php');
?>
<!-- main banner -->
<section id="home">
    <div class="bgimage"></div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
            <h2 class="hero_title">Andrei</h2>
            <p class="hero_desc">Student at National Computer College "Tudor Vianu"</p>
        </div>
        </div>
    </div>
</section>

<!-- portfolio section-->
<section id="portfolio">
    <div class="container mt-3">
        <h1 class="text-center">Portfolio</h1>
        <div class="row">
            <div class="col-lg-4 mt-4">
                <div class="card">
                    <img class="card-img-top" style="height: 454px;" src="images/MusicApp.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Music Player</h4>
                        <p class="card-text">This is a simple music player app made in Python. It automatically scans for music in the directories where you select and uses Pygame to play the audio.</p>
                        <div class="text-center">
                            <!-- <a href="#" class="btn btn-success">Link</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-4">
                <div class="card portfolioContent">
                    <img class="card-img-top" style="height: 454px;" src="images/BookshelfApp.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Digital Bookshelf</h4>
                        <p class="card-text">With this app you can store information about every book you own, including where it's placed in your house. This uses CSV files to store data.</p>
                        <div class="text-center">
                            <!-- <a href="#" class="btn btn-success">Link</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-4">
                <div class="card portfolioContent">
                    <img class="card-img-top" style="height: 454px;" src="images/NotepadApp.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Notepad</h4>
                        <p class="card-text">This is the classic notepad app that does what every other app of this type does. Can open, modify and save the new file.</p>
                        <div class="text-center">
                            <!-- <a href="#" class="btn btn-success">Link</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p>The above programs have all been made in Python with the Tkinter library and other resources, based on what was needed.</p>
        </div>
        <br>
        <div class="col">
            <div class="card portfolioContent">
                <div id="vvvvvvCarousel" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="height: 712px;" src="images/VVV1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 712px;" src="images/VVV2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 712px;" src="images/VVV3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 712px;" src="images/VVV4.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#vvvvvvCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#vvvvvvCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h4 class="card-title">A game inspired by VVVVVV</h4>
                    <p class="card-text">The inspiration I took comes in the form of reusing the main mechanic of VVVVVV, but basically adding my touch to it. The game is still in the making.
                        But I plan to keep adding to it over time. It is made in Godot, with sprites taken from <a href="https://www.kenney.nl/">Kenney</a>!
                    </p>
                    <div class="text-center">
                        <!-- <a href="#" class="btn btn-success">Link</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section id="music">
    <div class="container mt-3">
        <h1 class="text-center">Music</h1>
        <div class="text-center">
            <p>For music please go to the <b><a href="music.html">Music Page</a></b> or check out my <b><a href="https://www.youtube.com/channel/UCGUDXoS7-IfngFEIg97CIiA" target="_blank">Youtube</a></b>!</p>
        </div>
    </div>
</section>

<!-- about section-->
<section id="about">
    <div class="container mt-4 pt-4">
        <h1 class="text-center">About Me</h1>
        <div class="aboutme-section mt-4">
            <div class="col-lg-4">
                <img src="images/about.jpeg" class= "imageAboutPage" alt="a photo of me">
            </div>

            <div class="aboutme-text">
                <p> 
                    Hello, I'm Huțanu Andrei, a 16-year-old student from Romania. 
                    Since I was a young child, computers have always been my passion, constantly captivating my imagination and sparking dreams of creating
                    innovative programs and games. This fascination led me to enroll at the <b>National Computer College "Tudor Vianu"</b>,
                    where I'm pursuing my dreams of turning my ideas into reality using code!
                    In my six-year coding journey, I've always tried new things, learned from my mistakes and honed my skills. I've seen the power of code to
                    bring my visions to life, and that's what kept me motivated every day.
                    <br>
                    Alongside my passion for coding, I have a deep appreciation for music and its ability to inspire creativity and emotion. I enjoy playing various musical instruments,
                    including the guitar, bass, and drums.
                    Beyond my technical pursuits, I have a keen interest in music and games (including making them). 
                    I'm particularly drawn to unique and innovative programs that challenge the status quo while managing to excel in their own right.
                    Tools like Blender and Godot, with their distinctive approach to creativity, fascinate me.
                    As I continue my journey at the intersection of technology and creativity, I look forward to expanding my knowledge,
                    honing my skills, and ultimately bringing my imaginative projects to life.
                </p>
            </div>
        </div>
    </div>
    <div class="container d-flex mt-4 pt-4 bullet-points justify-content-center">
        <div class="col-lg-4">
            <p style="font-size: 20px;">Some information about me:</p>
            <p>Name: Huțanu Andrei</p>
            <p>Age: 16</li>
            <p>Occupation: Student</p>
        </div>
        <div class="col-lg-4">
            <p style="font-size: 20px;">What I like:</p>
            <p>Games and Music</p>
            <p>Interesting programs that fight against the standard (think Blender, Godot and things like that)</p>
            <p>To code :)</p>
        </div>
    </div>
</section>

<?php
require ('footer.php');
?>