<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Pra1</title>
</head>
<body>
    <header>
        <h1>Curio</h1>
    </header>  
    <main>
    <div class="grid-container">
        <div class="grid1">
            <h2>Alles wat je moet weten</h2>
                <div class="info">
                    <div class="box1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo labore alias molestiae corporis pariatur blanditiis ullam magnam quam cumque quae, beatae odio excepturi possimus ipsam obcaecati, aspernatur voluptates voluptatem. Eaque!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptatibus maxime iusto ratione odit. Recusandae voluptas illo a nesciunt culpa asperiores distinctio, eligendi porro enim error fugiat vitae, obcaecati et!
                        </p>
                    </div>
                    <div class="box2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo labore alias molestiae corporis pariatur blanditiis ullam magnam quam cumque quae, beatae odio excepturi possimus ipsam obcaecati, aspernatur voluptates voluptatem. Eaque!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aliquid nesciunt numquam velit ab debitis, blanditiis, natus porro in ad optio provident, eos deserunt et libero atque corporis tempore dicta?
                    </p>
                    </div>
                    <div class="box3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo labore alias molestiae corporis pariatur blanditiis ullam magnam quam cumque quae, beatae odio excepturi possimus ipsam obcaecati, aspernatur voluptates voluptatem. Eaque!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae atque, laboriosam obcaecati labore illum debitis asperiores soluta sunt quibusdam, esse, officiis recusandae aperiam necessitatibus consequatur ipsa voluptate perferendis sapiente.
                    </p>
                    </div>
                </div>
            </div>

            <div class="grid2">
                <p>Hier ziet u alle curio locaties in Breda</p>

                <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="img/img1.jpg" style="width:80%">
                <div class="text">Biesdonkweg 31</div>
                </div>

                <div class="mySlides fade">
                <img src="img/img2.jpg" style="width:80%">
                <div class="text">Biesdonkweg 33</div>
                </div>

                <div class="mySlides fade">
                <img src="img/img3.jpg" style="width:80%">
                <div class="text">Frankenthalerstraat 15</div>
                </div>

                <div class="mySlides fade">
                <img src="img/img4.jpg" style="width:80%">
                <div class="text">Markendaalseweg 35</div>
                </div>

                <div class="mySlides fade">
                <img src="img/img5.jpg" style="width:80%">
                <div class="text">Terheijdenseweg 414</div>
                </div>

                <div class="mySlides fade">
                <img src="img/img6.jpg" style="width:80%">
                <div class="text">Terheijdenseweg 348</div>
                </div>

                <div class="mySlides fade">
                <img src="img/img7.jpg" style="width:80%">
                <div class="text">Terheijdenseweg 350</div>
                </div>

                <div class="mySlides fade">
                <img src="img/img8.jpg" style="width:80%">
                <div class="text">Wilhelminasingel 33</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                </div>

                <script>
                    let slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                    showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                    showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    }
                </script>

                <div class="weetjes">
                    <div class="slaging">
                        <p> De slaginsratio is: 95%</p>
                    </div>

                    <div class="moeilijk">
                        <p>Het moeilijkste blok: Blok D</p>
                    </div>

                    <div class="docentenrating">
                        <p>Docenten rating: 8.3</p>
                    </div>

                    <div class="leerlingrating">
                        <p>Leerlingen rating: 7</p>
                    </div>
                </div> 

            </div>
        </div>
    </main>       
        <!-- Hier komen docenten foto's-->
        <div class="docenten">
        <p>Hier is ons docenten team:</p>
            <div class="scrollmenu">
                <img src="img/docent1.jpg" style="width: 20%">
                <img src="img/docent2.png" style="width: 20%">
                <img src="img/docent3.jpg" style="width: 20%">
                <img src="img/docent4.jpg" style="width: 20%">
                <img src="img/docent5.png" style="width: 20%">
                <img src="img/docent6.png" style="width: 20%">
                <img src="img/docent7.png" style="width: 20%">
                <img src="img/docent8.jpg" style="width: 20%">
                <img src="img/docent9.jpg" style="width: 20%">
                <img src="img/docent10.jfif" style="width: 20%">
                <img src="img/docent11.png" style="width: 20%">
                <img src="img/docent11.png" style="width: 20%">
                <img src="img/docent11.png" style="width: 20%">
                <img src="img/docent11.png" style="width: 20%">
            </div>
        </div>
</body>
<footer>
    <p>Contact</p>
    <p>infopunt@curio.nl</p>
</footer>
</html>
