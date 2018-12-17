<div class="row" style="padding: 0 10%;">

<?php
// since the file is an include, the JSON file is being accessed from outside /include
$json = json_decode(file_get_contents('./assets/data/index.json'), true);
$jsonArr = $json['arr'];
$jsonCount = count($jsonArr);
$val = 5;

if (isset($_GET['pagination']) && $_GET['pagination'] != 1) {
  $val *= $_GET['pagination'];

  $headlineStart = $val - 5;
  $headlineCount = $val - 2;
  $jsonStart = $val - 1;
  $jsonEnd = $val;

  $arr = [$headlineStart, $headlineCount, $jsonStart, $jsonEnd];

  for ($d = 0; $d < count($arr); $d++) {
    if ($arr[$d] >= $jsonCount) {
      $arr[$d] = $jsonCount;
    }
    if($d == 3) {
      $headlineStart = $arr[0];
      $headlineCount = $arr[1];
      $jsonStart = $arr[2];
      $jsonEnd = $arr[3];
    }
  }

} else {
  $headlineStart = $val - 5;
  $headlineCount = $val - 2;
  $jsonStart = $val - 1;
  $jsonEnd = $val;
}

for ($i = $headlineStart; $i < $headlineCount; $i++) {
  echo '
  <div data-aos-delay="0" class="col-sm bounce animated">
    <div class="card" style="width: 22rem;">
      <img class="card-img-top" src="assets/img/card.svg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">' . $jsonArr[$i]['id'] . '.) ' . $jsonArr[$i]['title'] . '</h5>
        <p class="card-text">' . $jsonArr[$i]['desc'] . '</p>
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

          <nav aria-label="Page navigation example">

            <?php

            for ($jsonStart = 3; $i < $jsonEnd; $i++) {
              echo '
                <div class="post-preview">
                    <a href="#">
                        <h2 data-aos="fade" data-aos-duration="1000" data-aos-once="true" class="post-title">' . $jsonArr[$i]['id'] . '.) ' . $jsonArr[$i]['title'] . '</h2>
                        <h3 data-aos="fade" data-aos-duration="1000" data-aos-delay="250" data-aos-once="true" class="post-subtitle">' . $jsonArr[$i]['desc'] . '</h3>
                    </a>
                    <p data-aos="fade" data-aos-duration="1000" data-aos-delay="350" data-aos-once="true" class="post-meta">Posted by&nbsp;<a href="#">' . $jsonArr[$i]['time'] . '</a></p>
                </div>
                <hr>';
            };

            ?>


            <ul class="pagination justify-content-end">
              <li class="page-item <?php if (!isset($_GET['pagination']) || $_GET['pagination'] == 1) {echo "disabled";} ?>">
                <a class="page-link" href="./index.php?pagination=<?php echo ($_GET['pagination'] - 1); ?>" tabindex="-1">Previous</a>
              </li>
              <?php
                $pageNum = 1;
                for ($d = 0; $d < $jsonCount; $d += 5) {
                    echo '<li class="page-item';

                    if ($_GET['pagination'] == $pageNum) {
                      echo ' disabled';
                    }

                    echo '"><a class="page-link" href="./index.php?pagination=' . $pageNum . '">' . $pageNum . '</a></li>';
                    $pageNum++;
                }
               ?>
              <li class="page-item <?php if ($jsonEnd == $jsonCount) {echo "disabled";} ?>">
                <a class="page-link" href="./index.php?pagination=<?php echo ($_GET['pagination'] + 1); ?>">Next</a>
              </li>
            </ul>
          </nav>
          
        </div>
    </div>
</div>
