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
            <span>조합되있는 메뉴 맛보기</span>
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
      <div class="howBox">
        <div class="imgBox">
          <img src="/burgers/img/howto_burger_2.png" alt="how_to_image">
        </div>
        <div class="eleBox">
          <h4>BURGER PATTY<i>필수 1개 선택</i></h4>
          <div>
            <span>소고기</span>
            <span>돼지고기</span>
            <span>닭고기</span>
            <span>새우</span>
            <span>버섯</span>
            <span>콩</span>
          </div>
        </div>
      </div>
      <div class="howBox">
        <div class="imgBox">
          <img src="/burgers/img/howto_burger_3.png" alt="how_to_image">
        </div>
        <div class="eleBox">
          <h4>CHEESE</h4>
          <div>
            <span>아메리칸치즈</span>
            <span>슈레드치즈</span>
            <span>모차렐라치즈</span>
          </div>
        </div>
      </div>
      <div class="howBox">
        <div class="imgBox">
          <img src="/burgers/img/howto_burger_3.png" alt="how_to_image">
        </div>
        <div class="eleBox">
          <h4>VEGETABLE</h4>
          <div>
            <span>양상추</span>
            <span>로메인</span>
            <span>토마토</span>
            <span>양파</span>
            <span>피망</span>
            <span>오이</span>
            <span>아보카도</span>
            <span>구운양파</span>
          </div>
        </div>
      </div>
      <div class="howBox">
        <div class="imgBox">
          <img src="/burgers/img/howto_burger_3.png" alt="how_to_image">
        </div>
        <div class="eleBox">
          <h4>TOPPING</h4>
          <div>
            <span>페퍼로니</span>
            <span>베이컨</span>
            <span>해쉬브라운</span>
            <span>써니사이드에그</span>
            <span>스크램블에그</span>
            <span>피클</span>
            <span>할라피뇨</span>
            <span>올리브</span>
          </div>
        </div>
      </div>
      <div class="howBox">
        <div class="imgBox">
          <img src="/burgers/img/howto_burger_4.png" alt="how_to_image">
        </div>
        <div class="eleBox">
          <h4>SAUCE</h4>
          <div>
            <span>머스타드</span>
            <span>허니머스타드</span>
            <span>스모크바베큐</span>
            <span>홀스래디쉬</span>
            <span>핫칠리</span>
            <span>스위트칠리</span>
            <span>스위트어니언</span>
            <span>치폴레</span>
            <span>마요네즈</span>
          </div>
        </div>
      </div>
      <div class="howBox">
        <div class="imgBox">
          <img src="/burgers/img/howto_burger_6.png" alt="how_to_image">
        </div>
        <div class="eleBox">
          <h4>SIDE</h4>
          <div>
            <span>프렌치프라이</span>
            <span>어니언링</span>
            <span>치즈스틱</span>
            <span>코코넛쉬림프</span>
            <span>콘샐러드</span>
            <span>코울슬로</span>
          </div>
        </div>
      </div>
      <div class="howBox">
        <div class="imgBox">
          <img src="/burgers/img/howto_burger_9.png" alt="how_to_image">
        </div>
        <div class="eleBox">
          <h4>BEVERAGE</h4>
          <div>
            <span>콜라</span>
            <span>제로콜라</span>
            <span>스프라이트</span>
            <span>탄사수</span>
            <span>자몽에이드</span>
            <span>청포도에이드</span>
            <span>딸기에이드</span>
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