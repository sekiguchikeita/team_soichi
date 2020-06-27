<?php
//1. POSTデータ取得
session_start();

// make session



// receive reacord data 
$name = $_POST['name'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$role = $_POST['role'];
$life_flg = $_POST['life_flg'];


//2. DB接続します
include("funcs.php");
$pdo = db_conn();





//３．データ登録SQL作成 // bined var (:dsakj) to recieved value from Post request to html
$stmt = $pdo->prepare("INSERT INTO gs_user_table(name, lid, lpw, role, life_flg)VALUES(:name, :lid, :lpw, :role, :life_flg)");
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":lid", $lid, PDO::PARAM_STR); 
$stmt->bindValue(":lpw", $lpw, PDO::PARAM_STR);  // IT SHOULD BE CORRESPONDED TO YOUR SETTING ON DB IN MYSQLFOR STR : Integer（数値の場合 PDO::PARAM_INT) 
$stmt->bindValue(":role", $role, PDO::PARAM_INT);
$stmt->bindValue(":life_flg", $life_flg, PDO::PARAM_INT);

$status = $stmt->execute(); // IT returns boolean (fail or success)

//４．データ登録処理後

  //*** function化する！*****************
// get the record 
// the below method for getting ONE record , assuming we'll get only one record since id is unique
// when successfully login,


$_SESSION["chk_ssid"] = session_id(); // when session start, it issues nuique key
$_SESSION["name"] = $name; // fetch data from server to Session (in live)　
$_SESSION["lid"] = $lid;                      // for displaying username when you log out or staying login
$_SESSION["role"] = $role; // $Session means that server handle it 

redirect("select.php");





?>