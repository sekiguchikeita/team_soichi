<?php
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る
//2. $id = POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更
session_start();
$lid = $_SESSION['lid'];
$task = $_POST['task'];
$createdAt = $_POST['createdAt'];
$endDate = $_POST['endDate'];
$tag = $_POST['tag'];
$comment = $_POST['comment'];
$targetTime = $_POST['targetTime'];
$taskid = $_POST['taskid'];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();





//３．データ登録SQL作成 // bined var (:dsakj) to recieved value from Post request to html
$update = $pdo->prepare("UPDATE crud SET task=:task, createdAt=:createdAt, endDate=:endDate, tag=:tag, comment=:comment, targetTime=:targetTime  WHERE taskid=:taskid");
$update->bindValue(":task", $task, PDO::PARAM_STR);  // IT SHOULD BE CORRESPONDED TO YOUR SETTING ON DB IN MYSQLFOR STR : Integer（数値の場合 PDO::PARAM_INT) 
$update->bindValue(":createdAt", $createdAt, PDO::PARAM_STR);
$update->bindValue(":endDate", $endDate, PDO::PARAM_STR);
$update->bindValue(":tag", $tag, PDO::PARAM_STR);
$update->bindValue(":comment", $comment, PDO::PARAM_STR);
$update->bindValue(":targetTime", $targetTime, PDO::PARAM_STR);
$update->bindValue(":taskid", $taskid, PDO::PARAM_INT);   //Integer（数値の場合 PDO::PARAM_INT)
$status = $update->execute(); // IT returns boolean (fail or success)




//４．データ登録処理後

if($status==false){
  //*** function化する！*****************
  sql_error($stmt);
}else{
  //*** function化する！*****************
  redirect("select.php");

}


?>
