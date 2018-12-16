<!DOCTYPE html>
<html>

<head>
    <title>Emerson - Blog Post</title>
    <?php include('./include/head.php'); ?>
</head>

<body>

    <?php include('./include/navbar.php');?>

    <header class="masthead" style="background-image:url('assets/img/post-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="post-heading">
                      <h1 data-aos="fade" data-aos-duration="1000" data-aos-once="true">H1 Title with 1000ms duration bounce</h1>
                        <h2 data-aos="fade" data-aos-duration="1000" data-aos-delay="250" data-aos-once="true" class="subheading">H2 much like the H2 but with a 250ms delay</h2><span data-aos="fade" data-aos-duration="1000" data-aos-delay="350" data-aos-once="true" class="meta">Emerson Pourghaed, December 14, 2018 -- p tag with 350ms delay</span></div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p>Article content will be inserted here.</p>
                </div>
            </div>
        </div>
    </article>

    <?php include('./include/footer.php'); ?>

    <?php include('./include/js-imports.php');?>
</body>

</html>
