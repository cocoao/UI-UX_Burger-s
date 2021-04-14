<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BURGER's</title>
  
  <!-- favicon link -->
  <link rel="icon" href="/burgers/img/burgers_favicon.png">
  <link rel="apple-touch-icon" href="/burgers/img/burgers_favicon.png">

  <!-- font awesome font link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- css style link -->
  <link rel="stylesheet" href="/burgers/css/reset.css">
  <link rel="stylesheet" href="/burgers/css/style.css">
  <link rel="stylesheet" href="/burgers/css/bug_or.css">
  <link rel="stylesheet" href="/burgers/css/animation.css">
  <link rel="stylesheet" href="/burgers/css/media.css">

  <!-- jquery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/burgers/js/custom.js"></script>
</head>
<body>
  <div class="wrap">
    <?php
      include $_SERVER['DOCUMENT_ROOT']."/burgers/include/header.php"
    ?>
    <section class="pageNav">
      <a href="/burgers/pages/bug_or_how.php" class="active">HOW TO</a>
      <a href="/burgers/pages/bug_or_re.php">RECOMMEND</a>
      <a href="/burgers/pages/bug_or_cus.php">CUSTOM</a>
    </section>
    <section class="howBoxes">
      <div class="howBox">
        <div class="imgBox">
          <img src="/burgers/img/howto_burger_8.png" alt="how_to_image">
        </div>
        <div class="eleSelBox eleBox">
          <div class="howSel">
            <h4>RECOMMAND</h4>
            <span>BURGER'S에서 조합한 메뉴를 맛보기</span>
          </div>
          <div class="howSel">
            <h4>CUSTOM</h4>
            <span>나만의 조합 만들기</span>
          </div>
        </div>
      </div>
      <div class="howBox">
        <div class="imgBox">
          <img src="/burgers/img/howto_burger_1.png" alt="how_to_image">
        </div>
        <div class="eleBox">
          <h4>BURGER BUN<i>필수 1개 선택</i></h4>
          <div>
            <span>통밀번</span>
            <span>호밀번</span>
            <span>참깨번</span>
            <span>검은깨번</span>
            <span>먹물번</span>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php
    include $_SERVER['DOCUMENT_ROOT']."/burgers/include/footer.php"
  ?>
</body>
</html>