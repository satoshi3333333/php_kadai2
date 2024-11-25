<!-- DBに送るphpがこれ -->


<?php
//エラー表示
ini_set("display_errors", 1);

//1. POSTデータ取得
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3_1 = $_POST["q3_1"];
$q3_2 = $_POST["q3_2"];
$q3_3 = $_POST["q3_3"];
$q3_4 = $_POST["q3_4"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$source = $_POST["source"];
$frequency = $_POST["frequency"];



//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBconectError:'.$e->getMessage());
}

// indate date 長さいらない

//３．データ登録SQL作成
$sql = "INSERT INTO php_kadai2_table(q1_manzokudo,q2_reason,q3_quality,q3_usability,q3_price,q3_support,q4_recommend,q5_q4reason,q6_review,name,age,seibetsu,kikkake,hindo,indate)VALUES(:q1,:q2,:q3_1,:q3_2,:q3_3,:q3_4,:q4,:q5,:q6,:name,:age,:gender,:source,:frequency,sysdate());";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':q1', $q1, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q2', $q2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q3_1', $q3_1, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':q3_2', $q3_2, PDO::PARAM_STR);
$stmt->bindValue(':q3_3', $q3_3, PDO::PARAM_STR);
$stmt->bindValue(':q3_4', $q3_4, PDO::PARAM_STR);
$stmt->bindValue(':q4', $q4, PDO::PARAM_STR);
$stmt->bindValue(':q5', $q5, PDO::PARAM_STR);
$stmt->bindValue(':q6', $q6, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':source', $source, PDO::PARAM_STR);
$stmt->bindValue(':frequency', $frequency, PDO::PARAM_STR);
$status = $stmt->execute(); //実行役！ true or false

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
header("Location: index.php");
exit();

}
?>
