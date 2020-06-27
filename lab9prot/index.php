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
  <nav class="navbar">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">Archive</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    
     <label>Task: <input type="text" name="task"></label><br>
     <label>created at: <input type="text" name="createdAt"></label><br>
     <label>end date: <input type="text" name="endDate"></label><br>
     <label>Tag: <select id="tag" name="tag"></label><br>
                        <option value="python">Python</option>
                        <option value="php">Php</option>
                        <option value="React">React</option>
                        <option value="Javascript">Javascript</option> 
                </select>
     <label>leave some commment here: <br> <textArea name="coment" rows="4" cols="40"></textArea></label><br>
     <label>予想所要時間: <input type="int" name="targetTime"></label><br>
     <input type="submit" value="submit">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
