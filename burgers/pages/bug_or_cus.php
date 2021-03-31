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
        <button type="button" class="vegetable">Topping</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="source">Source</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="side">Side</button>
        <i class="fa fa-angle-down"></i>
        <button type="button" class="beverage">Beverage</button>
      </div>
      <div class="cusSel">
        <div class="bun selectBox selectBox_on" value="bun">
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
        <div class="patty selectBox selectBox_do" value="patty">
          <div class="select">
            <img src="/burgers/img/cu_pat_01.png" alt="patty_01">
            <div class="selHover">소고기</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_pat_02.png" alt="patty_02">
            <div class="selHover">돼지고기</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_pat_03.png" alt="patty_03">
            <div class="selHover">닭고기</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_pat_04.png" alt="patty_04">
            <div class="selHover">새우</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_pat_05.png" alt="patty_05">
            <div class="selHover">버섯</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_pat_06.png" alt="patty_06">
            <div class="selHover">콩</div>
          </div>
        </div>
        <div class="cheese selectBox selectBox_do" value="cheese">
          <div class="select">
            <img src="/burgers/img/cu_ch_01.png" alt="cheese_01">
            <div class="selHover">아메리칸치즈</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ch_02.png" alt="cheese_02">
            <div class="selHover">슈레드치즈</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ch_03.png" alt="cheese_03">
            <div class="selHover">모차렐라치즈</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_none.png" alt="cheese_none">
            <div class="selHover">치즈제외</div>
          </div>
        </div>
        <div class="vegetable selectBox selectBox_do" value="vegetable">
          <div class="select">
            <img src="/burgers/img/cu_ve_01.png" alt="vegetable_01">
            <div class="selHover">양상추</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_02.png" alt="vegetable_02">
            <div class="selHover">로메인</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_03.png" alt="vegetable_03">
            <div class="selHover">토마토</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_04.png" alt="vegetable_03">
            <div class="selHover">양파</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_05.png" alt="vegetable_05">
            <div class="selHover">피망</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_06.png" alt="vegetable_06">
            <div class="selHover">오이</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_07.png" alt="vegetable_07">
            <div class="selHover">아보카도</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_08.png" alt="vegetable_08">
            <div class="selHover">구운양파</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_09.png" alt="vegetable_09">
            <div class="selHover">피클</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_10.png" alt="vegetable_10">
            <div class="selHover">할리피뇨</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_ve_11.png" alt="vegetable_11">
            <div class="selHover">올리브</div>
          </div>
          <div class="select">
            <img src="/burgers/img/cu_none.png" alt="vegetable_none">
            <div class="selHover">야채제외</div>
          </div>
        </div>
      </div>
      <div class="viewPay">
        <div class="cusView">
          <div class="bun bunUp">
            <img src="/burgers/img/cu_view_bun_01_01.png" alt="view_bun">
            <img src="/burgers/img/cu_view_bun_01_02.png" alt="view_bun">
          </div>
          <div class="patty"><img src="/burgers/img/cu_view_pa_01.png" alt="view_patty"></div>
          <div class="cheese"><img src="/burgers/img/cu_view_ch_01.png" alt="view_cheese"></div>
          <div class="vegetable">
            <img src="/burgers/img/cu_view_ve_01.png" alt="view_vegetable">
            <img src="/burgers/img/cu_view_ve_03.png" alt="view_vegetable">
            <img src="/burgers/img/cu_view_ve_03.png" alt="view_vegetable">
          </div>
          <div class="bun bunDown">
            <img src="/burgers/img/cu_view_bun_01_02.png" alt="view_bun">
          </div>
        </div>
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