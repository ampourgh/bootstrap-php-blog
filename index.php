<!DOCTYPE html>
<html>

<head>
    <title>Emerson - Home</title>
    <?php include('./include/head.php'); ?>

</head>

<body>

    <?php include('./include/navbar.php');?>

    <?php include('./include/modal-banner.php');?>
    <?php include('./include/modal-banner-2.php');?>
    <?php include('./include/modal-form.php');?>

    <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1 class="text-truncate" data-bs-hover-animate="bounce" style="font-family: Cinzel, serif;">THE NEWSROOM</h1><span class="subheading">Get all the latest news from Emerson Pour</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
      <?php include('./include/blog-post-template.php'); ?>
    </section>

    <footer class="bg-dark">
      <?php include('./include/footer.php'); ?>
    </footer>

    <?php include('./include/js-imports.php');?>

</body>

</html>
