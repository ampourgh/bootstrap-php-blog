<!DOCTYPE html>
<html>

<head>
    <title>Emerson - Contact</title>
    <?php include('./include/head.php'); ?>
</head>

<body>

    <?php include('./include/navbar.php');?>

    <header class="masthead" style="background-image:url('assets/img/contact-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>Contact Me</h1><span class="subheading">Have questions? I have answers.</span></div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls"><label>Name</label><input class="form-control" type="text" required="" placeholder="Name" id="name"><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls"><label>Email Address</label><input class="form-control" type="email" required="" placeholder="Email Address" id="email"><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls"><label>Phone Number</label><input class="form-control" type="tel" required="" placeholder="Phone Number" id="phone"><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-3"><label>Message</label><textarea class="form-control" rows="5" required="" placeholder="Message" id="message" data-validation-required-message="Please enter a message."></textarea><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary" type="submit" id="sendMessageButton">Send</button></div>
                </form>
            </div>
        </div>
    </div>
    <hr>

    <?php include('./include/footer.php'); ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/clean-blog.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
