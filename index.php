<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UFT-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=maeda;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban");
    
   
    
    ?>
    
     <img src="4eachblog_logo.jpg">
 <header>
    <ul>
    <li>トップ</li>
    <li>プロフィール</li>
    <li>4eachについて</li>
    <li>登録フォーム</li>
    <li>問い合わせ</li>
    <li>その他</li>
    </ul>
</header>
    
<main>
<h1>プログラミングに役立つ掲示板</h1>
    
<!--メインフレーム--> 
<form method="post" action="insert.php">
<div class="mainleft">
    <h2 class="mainh2">入力フォーム</h2>
    
 <div>
    <label>ハンドルネーム</label>
     <br>
    <input type ="text" class="text" name="handlename"  size="35">
 </div>
 <div>
    <label>タイトル</label>
     <br>
    <input type ="text" class="text" name="title"  size="35">
 </div>
 <div>
    <label>コメント</label>
     <br>
     <textarea name="comments" rouw="20" cols="35"></textarea>
 </div>
 <div>
    <input type="submit" value="投稿する" class="submit">
 </div>
</div>
</form>
    
<!--サイドメニュー-->
 <div class="right">
     <h2 class="righth2">人気の記事</h2>
        <p>PHPオススメ本</p>
        <p>PHP MｙAdminの使い方</p>
        <p>今人気のエディタ Top5</p>
        <p>HTMLの基礎</p>
     <h2 class="righth2">オススメリンク</h2>
        <p>インターノウス株式会社</p>
        <p>XAMPPのダウンロード</p>
        <p>Eclipseのダウンロード</p>
        <p>Bracketsのダウンロード</p>
     <h2 class="righth2">カテゴリ</h2>
        <p>HTML</p>
        <p>PHP</p>
        <p>MySQL</p>
        <p>JavaScript</p>
 </div>
    
<!--メイン下①-->
  <?php
    while($row = $stmt->fetch()){
        
    echo "<div class='kiji'>";
    echo "<h3>" .$row['title']."</h3>";
    echo "<div class='contents'>";
    echo $row['comments'];
    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
    echo "</div>";
    echo "</div>";
    }
        ?>
</main>
    
<footer>
    copyrightⓒinternous|4eath blog the which provides A to Z about programming.
</footer>
    
</body>
</html>