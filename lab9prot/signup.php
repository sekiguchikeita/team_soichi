<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Log in</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./style.css">
  
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="index.php">Sign up</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="signin_act.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Sign up here</legend>
     <label>name: <input type="text" name="name"></label><br>
     <label>login id: <input type="text" name="lid"></label><br>
     <label>PW:   <input type="text" name="lpw"></label><hr>
     <label>Occupation:   <input type="text" name="role"></label><hr><!--choose by redio button & return num-->
     <input type="hidden" name="life_flg" value=1 >
     <input type="submit" value="submit">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>