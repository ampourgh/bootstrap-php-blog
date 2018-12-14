<!DOCTYPE html>
<html>

<head>
    <title>Emerson - Home</title>
    <?php include('./include/head.php'); ?>
</head>

<body>

    <?php include('./include/navbar.php');?>

    <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1 class="text-truncate" data-bs-hover-animate="bounce" style="font-family: Cinzel, serif;">THE NEWSROOM</h1><span class="subheading">Get all the latest news from Emerson Pour</span></div>
                </div>
            </div>
        </div>
    </header>

    <div class="row" style="padding: 0 10%;">
      <div data-aos-delay="0" class="col-sm bounce animated">
        <div class="card" style="width: 22rem;">
          <img class="card-img-top" src="assets/img/card.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-center"><a href="#" class="btn btn-primary">Learn More</a></div>
          </div>
        </div>
      </div>
      <div  data-aos-delay="200" class="col-sm bounce animated">
        <div class="card" style="width: 22rem;">
          <img class="card-img-top" src="assets/img/card.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-center"><a href="#" class="btn btn-primary">Learn More</a></div>
          </div>
        </div>
      </div>
      <div data-aos-delay="400" class="col-sm bounce animated">
        <div class="card" style="width: 22rem;">
          <img class="card-img-top" src="assets/img/card.svg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="text-center"><a href="#" class="btn btn-primary">Learn More</a></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row" style="margin: 17px;">
            <div class="col-md-10 col-lg-8 col-xl-11 offset-xl-0 bounce animated">
                <div class="post-preview">
                    <a href="#">
                        <h2 data-aos="fade" data-aos-duration="1000" data-aos-once="true" class="post-title">H2 Title with 1000ms duration bounce</h2>
                        <h3 data-aos="fade" data-aos-duration="1000" data-aos-delay="250" data-aos-once="true" class="post-subtitle">H3 much like the H2 but with a 250ms delay</h3>
                    </a>
                    <p data-aos="fade" data-aos-duration="1000" data-aos-delay="350" data-aos-once="true" class="post-meta">Posted by&nbsp;<a href="#">Emerson Pourghaed, December 14, 2018 -- p tag with 350ms delay</a></p>
                </div>
                <hr>
                <div class="clearfix"><button class="btn btn-primary float-right" type="button" style="background-color: rgb(0,0,0);">Older Posts&nbsp;⇒</button></div>
            </div>
        </div>
    </div>

    <?php include('./include/footer.php'); ?>

    <!-- Scripts: jQuery, Popper.js, Bootstrap JS, BS Animation, Clean Blog.js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/clean-blog.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
