<div class="row" style="padding: 0 10%;">

<?php
include('arr.php');
for ($i = 0; $i < 3; $i++) {
  echo '
  <div data-aos-delay="0" class="col-sm bounce animated">
    <div class="card" style="width: 22rem;">
      <img class="card-img-top" src="assets/img/card.svg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">' . $arrBlog[$i][0] . '.) ' . $arrBlog[$i][1] . '</h5>
        <p class="card-text">' . $arrBlog[$i][2] . '</p>
        <div class="text-center"><a href="#" class="btn btn-primary">Learn More</a></div>
      </div>
    </div>
  </div>
  ';
};
 ?>
</div>

<br><hr><br>

<div class="container">
    <div class="row" style="margin: 17px;">
        <div class="col-md-10 col-lg-8 col-xl-11 offset-xl-0 bounce animated">

            <?php

            for ($i = 3; $i < count($arrBlog); $i++) {
              echo '
                <div class="post-preview">
                    <a href="#">
                        <h2 data-aos="fade" data-aos-duration="1000" data-aos-once="true" class="post-title">' . $arrBlog[$i][0] . '.) ' . $arrBlog[$i][1] . '</h2>
                        <h3 data-aos="fade" data-aos-duration="1000" data-aos-delay="250" data-aos-once="true" class="post-subtitle">' . $arrBlog[$i][2] . '</h3>
                    </a>
                    <p data-aos="fade" data-aos-duration="1000" data-aos-delay="350" data-aos-once="true" class="post-meta">Posted by&nbsp;<a href="#">' . $arrBlog[$i][3] . '</a></p>
                </div>
                <hr>';
            };

            ?>
            <div class="clearfix"><button class="btn btn-primary float-right" type="button" style="background-color: rgb(0,0,0);">Older Posts&nbsp;⇒</button></div>
        </div>
    </div>
</div>
