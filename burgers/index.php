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
  <link rel="stylesheet" href="/burgers/css/bug_main.css">
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
    <section class="mainImg">
      <div class="txtBox">
        <h2>PREMIUM <br>CUSTOM BURGER</h2>
        <p>Burger's는 개개인의 특성이 강한 시대에 발맞춘 프리미엄 커스텀 버거로 남들과 똑같지 않은 내가 원하는 것들로만 만들어진 자신만의 버거를 맛볼 수 있는 브랜드입니다.</p>
        <button onclick='javascript:location.href="/burgers/pages/bug_or_cus.php"'>NOW ORDER</button>
      </div>
      <div class="imgWrap">
        <div class="imgBox">
          <img src="/burgers/img/main_burger.png" alt="main_burger">
          <img src="/burgers/img/main_element.png" alt="main_element">
          <img src="/burgers/img/main_line.png" alt="main_line">
          <p></p>
        </div>
      </div>
    </section>
    <section class="howSns">
      <div class="howBox">
        <div class="howTit">
          <em>HOW TO USE</em>
          <i class='fa fa-angle-double-right' onclick="javascript:location.href='/burgers/index.php'"> GO TO DETAIL</i>
        </div>
        <div class="snsBox">
          <i class="fa fa-instagram"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-facebook"></i>
          <i class="fa fa-youtube"></i>
          <i class="fa fa-phone"></i>
        </div>
        <div class="howCon">
          <div class="step">
            <img src="/burgers/img/howto_burger_8.png" alt="how_to_image" class='howToHover'>
            <img src="/burgers/img/howto_burger_7.png" alt="how_to_image">
            <p>추천/커스텀 선택</p>
          </div>
          <i class="fa fa-angle-right"></i>
          <div class="step">
            <img src="/burgers/img/howto_burger_1.png" alt="how_to_image" class='howToHover'>
            <img src="/burgers/img/howto_burger_0.png" alt="how_to_image">
            <p>번 선택</p>
          </div>
          <i class="fa fa-angle-right"></i>
          <div class="step">
            <img src="/burgers/img/howto_burger_2.png" alt="how_to_image" class='howToHover'>
            <img src="/burgers/img/howto_burger_0.png" alt="how_to_image">
            <p>패티 선택</p>
          </div>
          <i class="fa fa-angle-right"></i>
          <div class="step">
            <img src="/burgers/img/howto_burger_3.png" alt="how_to_image" class='howToHover'>
            <img src="/burgers/img/howto_burger_0.png" alt="how_to_image">
            <p>토핑 선택</p>
          </div>
          <i class="fa fa-angle-right"></i>
          <div class="step">
            <img src="/burgers/img/howto_burger_4.png" alt="how_to_image" class='howToHover'>
            <img src="/burgers/img/howto_burger_0.png" alt="how_to_image">
            <p>소스 선택</p>
          </div>
          <i class="fa fa-angle-right"></i>
          <div class="step">
            <img src="/burgers/img/howto_burger_6.png" alt="how_to_image" class='howToHover'>
            <img src="/burgers/img/howto_burger_5.png" alt="how_to_image">
            <p>사이드 선택</p>
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