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
                <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img src="img/img1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="img/img2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
                </div>

                <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="img/img3.jpg" style="width:100%">
                <div class="text">Caption Three</div>
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
                </div>
            </div>
        </div>
    </main>
</body>
</html>
