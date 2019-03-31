<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
m-n1 / m-*-n#
p-1 / p-*-#
pt-1 / pt-*-#
pr-1 / pr-*-#
pb-1 / pb-*-#
pl-1 / pl-*-#
px-1 / px-*-#
py-1 / py-*-#
Utility: Text
font-weight-bold
font-weight-bolder
font-weight-light
font-weight-lighter
font-weight-normal
text-decoration-none
font-italic
text-monospace
text-justify
text-nowrap
text-*-left
text-*-right
text-*-center
text-lowercase
text-uppercase
text-capitalize
text-truncate
text-body
text-black-50
text-white-50
text-muted
text-hide
text-break
Created and maintained by Alexander Rechsteiner.

Please send feedback via email or Twitter.

Check out my Bootstrap templates and Bootstrap themes or learn how to customize Bootstrap (with video).

Code snippet
Copy
<!-- カードを使って文字を入れる -->
<div class="card">
  <div class="card-body">
    <h4 class="card-title">年齢</h4>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">
        <!-- 年齢の選択 -->
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
    </p>
    <a href="#!" class="card-link">Card link</a>
    <a href="#!" class="card-link">Another link</a>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>