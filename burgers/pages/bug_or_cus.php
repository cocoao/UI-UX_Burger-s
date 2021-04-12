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
      <a href="#" class="active">CUSTOM</a>
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
        <button type="button" class="topping">Topping</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="sauce">Sauce</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="side">Side</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="beverage">Beverage</button>
      </div>
      <div class="cusSel">
      <?php
      include $_SERVER['DOCUMENT_ROOT']."/burgers/include/bur_or_cus_sel.php"
      ?>   
      </div>
      <div class="viewPay">
        <div class="cusView">
          <div class="bun bunUp one">
            <img src="/burgers/img/cu_view_bun_01_01.png" alt="view_bun">
            <img src="/burgers/img/cu_view_bun_01_02.png" alt="view_bun">
            <img src="/burgers/img/cu_view_bun_01_01.png" alt="view_bun">
            <img src="/burgers/img/cu_view_bun_01_01.png" alt="view_bun">
            <img src="/burgers/img/cu_view_bun_01_01.png" alt="view_bun">
          </div>
          <div class="patty one">
            <img src="/burgers/img/cu_view_pa_01.png" alt="view_patty">
            <img src="/burgers/img/cu_view_bun_01_02.png" alt="view_bun">
            
          </div>
          <div class="cheese one">
            <img src="/burgers/img/cu_view_ch_01.png" alt="view_cheese">
          </div>
          <div class="vegetable more">
            <img src="/burgers/img/cu_view_ve_01.png" alt="view_vegetable">
            <img src="/burgers/img/cu_view_ve_03.png" alt="view_vegetable">
            <img src="/burgers/img/cu_view_ve_03.png" alt="view_vegetable">
          </div>
          <div class="topping more">
            <img src="/burgers/img/cu_view_ve_01.png" alt="view_vegetable">
            <img src="/burgers/img/cu_view_ve_03.png" alt="view_vegetable">
            <img src="/burgers/img/cu_view_ve_03.png" alt="view_vegetable">
          </div>
          <div class="bun bunDown more">
            <img src="/burgers/img/cu_view_bun_01_02.png" alt="view_bun">
            <img src="/burgers/img/cu_view_bun_01_01.png" alt="view_bun">
            <img src="/burgers/img/cu_view_bun_01_02.png" alt="view_bun">
            <img src="/burgers/img/cu_view_bun_01_02.png" alt="view_bun">
            <img src="/burgers/img/cu_view_bun_01_02.png" alt="view_bun">

          </div>
        </div>
        <div class="cusPay">
          <div class="payList">
            <p>Bun</p>
            <p>patty</p>
            <p>Cheese</p>
            <p>Vegetable</p>
            <p>Topping</p>
            <p>Sauce</p>
            <p>Side</p>
            <p>Beverage</p>
          </div>
          <div class="selList">
            <p class="bun"></p>
            <p class="patty"></p>
            <p class="cheese"></p>
            <p class="vegetable"></p>
            <p class="topping"></p>
            <p class="sauce"></p>
            <p class="side"></p>
            <p class="beverage"></p>
          </div>
          <div class="paySum">
            <p>총 결제 금액<em>0원</em></p>
            
            <button>주문하기</button>
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