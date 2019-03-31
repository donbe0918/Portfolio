

<!-- cssファイルの読み込みをさせる -->
<!-- BootstrapのCSS読み込み -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- BootstrapのJS読み込み -->
<script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">



<!-- ページの本体 -->
<!DOCTYPE html>
<html>
<head>
<!-- 一番上のタイトル画面 -->
  <meta charset="utf-8">
  <title>勉強会の応募フォーム</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <!-- <div class="header-left">Progate</div> -->
    <!-- <div class="header-right">
      <ul>
        <li></li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>-->
  </div> 

  <div class="main">
    
    <div class="contact-form">
      <div class="form-title">応募フォーム</div>
      <form method="post" action="sent.blade.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">

        <!-- 年齢を選択させる -->
        <div class="form-item">年齢</div>
        <select name="age">
          <option value="未選択">選択してください</option>
          <!-- for文を用いて6歳から100歳までをoptionで選択できるように。 -->
          <?php 
            for ($i = 6; $i <= 100; $i++) {
              echo "<option value='{$i}'>{$i}</option>";
            } 
          ?>
        </select>

        <div class="form-item">参加日程</div>
        <?php 
          $types = array('3/31(日)', '4/6(土)', '4/7(日)', '4/14(日)',);
         ?>
        <!-- この下にselectタグを書いていきましょう -->
        <select name="category">
          <option value="未選択">選択してください</option>
           <?php
             foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
             }
           ?>

        </select>

        <div class="form-item">意気込みをお書きください！</div>
        <textarea name="body"></textarea>

        <input type="submit" value="送信">
      </form>
    </div>
  </div>
  
  <!-- <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div> -->
</body>
</html>