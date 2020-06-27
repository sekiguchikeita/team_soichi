<!---Register form for 計画表-->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>計画表</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./style.css">
  
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="select.php">共有画面（達成度）</a>
          <a class="navbar-brand" href="result.php">ユーザーページ（結果まとめページ想定）</a>
        </div>
      </div>
    </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<h1>計画表</h1>
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    
     <label>Task: <input type="text" name="task"></label><br>
     <label>end date: <input type="text" name="end_date"></label><br>
     <label>Tag: <select id="tag" name="tag"></label><br>
                        <option value="python">Python</option>
                        <option value="php">Php</option>
                        <option value="React">React</option>
                        <option value="Javascript">Javascript</option> 
                </select>
     <label>leave some commment here: <br> <textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <label>予想所要時間: <input type="int" name="how_long"></label><br>
     <input type="submit" value="submit">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
