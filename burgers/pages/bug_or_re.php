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
      <a href="/burgers/pages/bug_or_how.php">HOW TO</a>
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
          <p>버거스 버거</p>
          <img src="/burgers/img/or_re_01.png" alt="recommend_burger_01">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>더블블랙 버거</p>
          <img src="/burgers/img/or_re_02.png" alt="recommend_burger_02">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>그린 버거</p>
          <img src="/burgers/img/or_re_03.png" alt="recommend_burger_03">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>비프 버거</p>
          <img src="/burgers/img/or_re_04.png" alt="recommend_burger_04">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>포크 버거</p>
          <img src="/burgers/img/or_re_05.png" alt="recommend_burger_05">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>치킨 버거</p>
          <img src="/burgers/img/or_re_06.png" alt="recommend_burger_06">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>더블베지 버거</p>
          <img src="/burgers/img/or_re_07.png" alt="recommend_burger_07">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>베이컨 버거</p>
          <img src="/burgers/img/or_re_08.png" alt="recommend_burger_08">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>에그 버거</p>
          <img src="/burgers/img/or_re_09.png" alt="recommend_burger_09">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>슬림 버거</p>
          <img src="/burgers/img/or_re_10.png" alt="recommend_burger_10">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>머쉬룸 버거</p>
          <img src="/burgers/img/or_re_11.png" alt="recommend_burger_11">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>더블치즈 버거</p>
          <img src="/burgers/img/or_re_12.png" alt="recommend_burger_12">
        </div>
      </div>
      <div class="reBox">
        <div class="reHover">
          <button><p>자세히보기</p></button>
          <button><p>주문하기</p></button>
        </div>
        <div class="imgBox">
          <p>피클 버거</p>
          <img src="/burgers/img/or_re_13.png" alt="recommend_burger_13">
        </div>
      </div>
    
    </section>
  </div>
  <?php
    include $_SERVER['DOCUMENT_ROOT']."/burgers/include/footer.php"
  ?>
</body>
</html>