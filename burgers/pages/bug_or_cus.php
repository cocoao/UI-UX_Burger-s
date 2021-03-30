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
      <a href="#">RECOMMEND</a>
      <a href="#">CUSTOM</a>
    </section>
    <section class="cusBox">
      <div class="title">
        CUSTOM ORDER
      </div>
      <div class="cusNav">
        <button type="button" class="bun">Bun</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="patty">patty</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="cheese">Cheese</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="vegetable">Vegetable</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="source">Source</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="side">Side</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="beverage">Beverage</button>
      </div>
      <div class="cusSel">
        <div class="bun selectBox selectBox_on">
          <div class="select">
            <img src="/burgers/img/cu_bun_01.png" alt="bun_01">
            <div class="selHover">통밀번</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_bun_02.png" alt="bun_02">
            <div class="selHover">참깨번</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_bun_03.png" alt="bun_03">
            <div class="selHover">호밀번</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_bun_04.png" alt="bun_04">
            <div class="selHover">먹물번</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_bun_05.png" alt="bun_05">
            <div class="selHover">먹물참깨번</div>
          </div>
        </div>
        <div class="patty selectBox selectBox_do">
          <div class="select">
            <img src="/burgers/img/cu_bun_01.png" alt="bun_01">
            <div class="selHover">통밀번</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_bun_02.png" alt="bun_02">
            <div class="selHover">참깨번</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_bun_03.png" alt="bun_03">
            <div class="selHover">호밀번</div>
          </div>
        </div>
      </div>
      <div class="viewPay">
        <div class="cusView"></div>
        <div class="cusPay">
          <div class="payList">
            <p>Bun</p>
            <p>patty</p>
            <p>Cheese</p>
            <p>Vegetable</p>
            <p>Source</p>
            <p>Side</p>
            <p>Beverage</p>
          </div>
          <div class="selList">
            <p class="bun"></p>
            <p class="patty"></p>
            <p class="cheese"></p>
            <p class="vegetable"></p>
            <p class="source"></p>
            <p class="side"></p>
            <p class="beverage"></p>
          </div>
          <div class="paySum">
            <p>총 결제 금액</p>
            <em>18,000원</em>
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