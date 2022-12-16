<?php

// $id = "";
$family_name = $_POST["FamilyName"];
$last_name = $_POST["LastName"];
$family_name_kana = $_POST["FamilyNameKana"];
$last_name_kana = $_POST["LastNameKana"];
$mail = $_POST["mail"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$postal_code = $_POST["PostalCode"];
$prefecture = $_POST["prefecture"];
$address_1 = $_POST["address1"];
$address_2 = $_POST["address2"];
$authority = $_POST["authority"];
$delete_flag = "";
$registered_time = NULL;
$update_time = NULL;

mb_internal_encoding("utf8");

$dbh = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
// $sql = "INSERT INTO 7_programming(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time,update_time) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$sql = "INSERT INTO programming(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time,update_time) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $dbh -> prepare($sql);
// $data[] = $id;
$data[] = $family_name;
$data[] = $last_name;
$data[] = $family_name_kana;
$data[] = $last_name_kana;
$data[] = $mail;
$data[] = $password;
$data[] = $gender;
$data[] = $postal_code;
$data[] = $prefecture;
$data[] = $address_1;
$data[] = $address_2;
$data[] = $authority;
$data[] = $delete_flag;
$data[] = $registered_time;
$data[] = $update_time;
$stmt -> execute($data);
    
$dbh = null;

// $pdo ->exec("insert into 7_programming(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)
// values('".$_POST['FamilyName']."','".$_POST['LastName']."','".$_POST['FamilyNameKana']."','".$_POST['LastNameKana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['PostalCode']."','".$_POST['prefecture']."','".$_POST['address1']."','".$_POST['address2']."','".$_POST['authority']."');");

?>

<!doctype HTML>
<html lang = "ja">
    <head>
        <meta charset="utf-8">
        <title>アカウント登録完了画面</title>
        <link rel="stylesheet"type="text/css" href="style_regist.css">
    </head>
    
    <body>

        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li><A HREF = "regist.html">アカウント登録</A></li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>

        <h1>アカウント登録完了画面</h1>
        
        <div class = "confirm">
            <p>登録完了しました</p>
        </div>

        <form action = "regist.html">                
            <input type = "button" class = "button1" value = "TOPページへ戻る">
        </form>

        <footer>
        
            Copyright D.I.Works| D.I.Blog is the one which provides A to Z about programming
        
        </footer>
        
    </body>
    
</html>