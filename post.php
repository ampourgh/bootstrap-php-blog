<!DOCTYPE html>
<html>

<head>
    <title>Emerson - Blog Post</title>
    <?php include('./include/head.php'); ?>
</head>

<body>

    <?php include('./include/navbar.php');?>

    <?php include('./include/modal-form.php');?>

    <header class="masthead" style="background-image:url('assets/img/post-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="post-heading">
                      <h1 data-aos="fade" data-aos-duration="1000" data-aos-once="true"><?php echo $_GET['title']; ?></h1>
                        <h2 data-aos="fade" data-aos-duration="1000" data-aos-delay="250" data-aos-once="true" class="subheading"><?php echo $_GET['desc']; ?></h2><span data-aos="fade" data-aos-duration="1000" data-aos-delay="350" data-aos-once="true" class="meta"><?php echo $_GET['time']; ?></span></div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-warning">
                      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET['title']; ?></li>
                    </ol>
                  </nav>
                    <p><?php echo $_GET['desc']; ?></p>
                </div>
            </div>
        </div>
    </article>

    <footer class="bg-dark">
      <?php include('./include/footer.php'); ?>
    </footer>

    <?php include('./include/js-imports.php');?>
</body>

</html>
