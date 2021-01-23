<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Portfolio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
        <script src="js/smooth-scroll.js" type="text/javascript"></script>
        <link rel="stylesheet" href="newcss.css">
    </head>
    <body>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
        

        <!----------- NavBar ---------->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a class="navbar-brand" href="#">Talal <span>Mustafa</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>



        <!--------- Carousel --------->
        <div class="hide">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="images/pf121.jpg" alt="First slide">
                        <div id="carousel-text" class="carousel-caption">
                            <h5 class="animated slideInDown" style="animation-delay: 1s">Front-end Web <span>Developer.</span></h5>
                            <p class="animated fadeInUp" style="animation-delay: 2s">Based on HTML, CSS, Bootstrap and  jQuery with CSS Media Queries.If you are an employer looking to hire, you can get in touch with me here.</p>
                            <p class="animated zoomIn" style="animation-delay: 1s"><a id="hire-me" href="#footer">Hire Me</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!---------- About --------->
        <section id="about">
            <h1>About</h1>
            <div class="container">
                <p>My name is Talal Mustafa and I am a 24 years old graduate of BSc Electrical Engineering from FAST-NUCES Lahore. I passed out in September, 2020 and since that I've been working on Front-end Website Development . I've been making sample / practice projects so that I could work / build my career in the mentioned field . I have done my work based on HTML5 , CSS3 , BOOTSTRAP4 and jQuery with CSS media Queries . Currently I am looking for a job and working on some of my other sample / practice projects too . I would love to build my career with a company where I can work passionately benefiting the company and increasing my growth and knowledge at the same time . My hobbies are automobiles , gaming , outdoor games and travelling . Thank you for visiting my profile and wish me luck . </p>
            </div>
        </section>



        <!---------- Projects -------->

        <section id="projects">
            <h1>Projects</h1>
            <div class="container  ">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <img id="" class="myImg img-fluid ml-2 mt-5  mx-auto d-block" src="images/project-1.png" alt="Project-1">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <img id="" class="myImg img-fluid ml-2 mt-5  mx-auto d-block" src="images/project-2.png" alt="Project-2">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <img id="" class="myImg img-fluid ml-2 mt-5  mx-auto d-block" src="images/project-3.png" alt="Project-3">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <img id="" class="myImg img-fluid ml-2 mt-5  mx-auto d-block" src="images/project-4.png" alt="Project-4">
                    </div>
                </div>
            </div>
            <!--The Modal--> 
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementsByClassName("myImg");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                for (var i = 0; i < 4; i++) {
                    img[i].onclick = function () {
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    };
                }
                ;

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function () {
                    modal.style.display = "none";
                };
            </script>    
        </section>
        <!---------- Footer ---------->
        <section id="footer">
            <div class="title-text">
                <h1>Contact</h1>
            </div>
            <div class="footer-row">
                <div class="footer-left">
                    <h1>Social</h1>
                    <p><i class="fa fa-facebook"></i>https://web.facebook.com/talal.mustafa.712</p>
                    <p><i class="fa fa-instagram"></i>https://www.instagram.com/talal91196/</p>
                    <p><i class="fa fa-twitter"></i>https://twitter.com/TalalMustafa911</p>
                </div>
                <div class="footer-right">
                    <h1>Personal</h1>
                    <p>Lahore<i class="fa fa-map-marker"></i></p>
                    <p>talalmustafa911@gmail.com<i class="fa fa-envelope"></i></p>
                    <p>https://www.linkedin.com/in/talal-mustafa/<i class="fa fa-linkedin"></i></p>
                    <p>+923354067256<i class="fa fa-phone"></i></p>
                </div>
            </div>
            <div class="social-links">
                <a href="https://web.facebook.com/talal.mustafa.712" target="_blank" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/talal91196/" target="_blank" class="fa fa-instagram"></a>
                <a href="https://twitter.com/TalalMustafa911" target="_blank" class="fa fa-twitter"></a>
                <a href="https://www.linkedin.com/in/talal-mustafa/" target="_blank" class="fa fa-linkedin"></a>
                <a href="https://www.youtube.com/channel/UC-LnQq9R_hte1GpkSooxpNA/featured" target="_blank" class="fa fa-youtube"></a>
                <p>Copyrights</p>
            </div>
        </section>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="js/smooth-scroll.js" type="text/javascript"></script>
    </body>
</html>
