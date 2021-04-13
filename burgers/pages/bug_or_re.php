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
      <a href="#">HOW TO</a>
      <a href="/burgers/pages/bug_or_re.php" class="active">RECOMMEND</a>
      <a href="/burgers/pages/bug_or_cus.php">CUSTOM</a>
    </section>
    <section class="recBoxes">
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>포크버거</p>
          <img src="/burgers/img/ex_burger_01.png" alt="recommend_burger_01">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>포크버거</p>
          <img src="/burgers/img/ex_burger_02.png" alt="recommend_burger_01">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>포크버거</p>
          <img src="/burgers/img/ex_burger_03.png" alt="recommend_burger_01">
        </div>
      </div>
    </section>
  </div>
  <?php
    include $_SERVER['DOCUMENT_ROOT']."/burgers/include/footer.php"
  ?>
</body>
</html>