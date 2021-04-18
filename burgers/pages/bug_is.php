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
  <link rel="stylesheet" href="/burgers/css/bug_is.css">
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
    <section class="pageNav pageIs">
      <a href="/burgers/pages/bug_is.php#info" class="active">BURGER'S <i> is</i></a>
      <a href="/burgers/pages/bug_is.php#use">BURGER'S <i> use</i></a>
      <a href="/burgers/pages/bug_is.php#spot">BURGER'S <i> spot</i></a>
    </section>
    <section class="isBoxes isSection">
      <div class="isImg">
        <img src="/burgers/img/is_is.png" alt="is_is_image">
      </div>
      <div class="isTxt">
        <div class="sectionTit">
          <p>BURGUR'S <i>is</i></p>
        </div>
        <h3>PREMIUM CUSTOM BURGER</h3>
        <p>Burger's는 개개인의 특성이 강한 시대에 발맞춘 프리미엄 커스텀 버거로 남들과 똑같지 않은 내가 원하는 것들로만 만들어진 자신만의 버거를 맛볼 수 있는 브랜드입니다.<br>
           Burger's는 일반 버거와는 차별화된 버거를 제공합니다. 원하는 재료를 넣고 빼며 선택할 수 있습니다.</p>
      </div>
    </section>
    <section class="useBoxes isSection">
      <div class="isTxt">
        <div class="sectionTit">
          <p>BURGUR'S <i>use</i></p>
        </div>
        <h3>BURGER ELEMENT</h3>
        <p>Burger's는 고기를 직접 불에 구워 조리하는 직화 방식으로 담백하고 풍부한 맛과 향을 선보이며, 신선한 야채와 다양한 재료들로 색다른 조합을 만나볼 수 있습니다.</p>
        <button>자세히 보기</button>
      </div>
      <div class="isImg useImg">
        <div class="imgBox">
          <div class="useHover">
            <span>통밀번</span>
            <span>호밀번</span>
            <span>참깨번</span>
            <span>검은깨번</span>
            <span>먹물번</span>
          </div>
          <h4>BUN</h4>
          <img src="/burgers/img/is_use_01.jpg" alt="is_use_bun">
        </div>
        <div class="imgBox">
          <div class="useHover">
            <span>소고기</span>
            <span>돼지고기</span>
            <span>닭고기</span>
            <span>새우</span>
            <span>버섯</span>
            <span>콩</span>
          </div>
          <h4>PATTY</h4>
          <img src="/burgers/img/is_use_02.jpg" alt="is_use_patty">
        </div>
        <div class="imgBox">
          <div class="useHover">
            <span>양상추</span>
            <span>토마토</span>
            <span>양파</span>
            <span>피망</span>
            <span>베이컨</span>
            <span>해쉬브라운</span>
          </div>
          <h4>TOPPING</h4>
          <img src="/burgers/img/is_use_03.jpg" alt="is_use_topping">
        </div>
      </div>
    </section>
    <section class="spotBoxes isSection">
      <div class="mapBox">
        <div class="isTxt">
          <div class="sectionTit">
            <p>BURGUR'S <i>spot</i></p>
          </div>
          <form action="#" class="spotBox">
            <input type="text">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101219.84507526795!2d126.81636417547168!3d37.552232734058634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9c06a939f9fd%3A0x7403cca890b034f8!2z67KE6rGw7YK5IOqwgOyWkeydtOuniO2KuA!5e0!3m2!1sko!2skr!4v1618584189034!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </section>
  </div>
  <?php
    include $_SERVER['DOCUMENT_ROOT']."/burgers/include/footer.php"
  ?>
</body>
</html>