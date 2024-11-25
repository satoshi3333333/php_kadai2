<?php
//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnection Error:'.$e->getMessage());
}

//２．データ登録SQL作成
$sql = "SELECT * FROM php_kadai2_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron">


<table>
<?php foreach($values as $v){ ?>
  <tr>
    <td>q1サービスに対する満足度<?=$v["q1_manzokudo"]?></td>
    <td>q1の理由<?=$v["q2_reason"]?></td>
    <td>品質の良さ<?=$v["q3_quality"]?></td>
    <td>使いやすさ<?=$v["q3_usability"]?></td>
    <td>価格<?=$v["q3_price"]?></td>
    <td>サポート<?=$v["q3_support"]?></td>
    <td>人に勧めたいか<?=$v["q4_recommend"]?></td>
    <td>勧めたい理由<?=$v["q5_q4reason"]?></td>
    <td>感想<?=$v["q6_review"]?></td>
    <td>名前<?=$v["name"]?></td>
    <td>年齢<?=$v["age"]?></td>
    <td>性別<?=$v["seibetsu"]?></td>
    <td>きっかけ<?=$v["kikkake"]?></td>
    <td>頻度<?=$v["hindo"]?></td>
  </tr>
<?php } ?>
</table>


  </div>
</div>
<!-- Main[End] -->
<script>
  const a = '<?php echo $json; ?>';
  console.log(JSON.parse(a));
</script>
</body>
</html>
