<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo ->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>

<!doctype HTML>
<html lang = “ja”>
    <head>
        <meta charset　=　"utf-8">
        <title>アカウント登録完了画面</title>
        <link rel　=　"stylesheet"　type　=　"text/css" href　=　"style_regist.css">
    </head>
    
    <body>

        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li><A HREF = "regist.php">アカウント登録</A></li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>

        <h1>アカウント登録完了画面</h1>
        
        <div class = "confirm">
            <p>登録完了しました</p>
        </div>

        <form action="index_blog.html">                
            <input type = "submit" class = "button1" value = "TOPページに戻る">
        </form>

        <footer>
        
            Copyright D.I.Works| D.I.Blog is the one which provides A to Z about programming
        
        </footer>
        
    </body>
    
</html>