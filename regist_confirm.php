<!DOCTYPE html!>
<html lang = "ja">
    
    <head>
        <meta charset = "utf-8">
        <title>アカウント登録確認画面</title>
            <link rel = "stylesheet" type = "text/css" href = "style_regist.css">
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

        <main>

            <h1>アカウント登録確認画面</h1>

            <div class="confirm">

                <p>名前（性）
                    <?php echo $_POST['FamilyName']; ?>
                </p>
                
                <p>名前（名）
                    <?php echo $_POST['LastName']; ?>
                </p>

                <p>カナ（性）
                    <?php echo $_POST['FamilyNameKana']; ?>
                </p>

                <p>カナ（名）
                    <?php echo $_POST['LastNameKana']; ?>
                </p>

                <p>メールアドレス
                    <?php echo $_POST['mail']; ?>
                </p>

                <p>パスワード
                    <?php echo $_POST['password']; ?>
                </p>

                <p>性別
                    <?php echo $_POST['gender']; ?>
                </p>

                <p>郵便番号
                    <?php echo $_POST['PostalCode']; ?>
                </p>

                <p>住所（都道府県）
                    <?php echo $_POST['prefecture']; ?>
                </p>

                <p>住所（市区町村）
                    <?php echo $_POST['address1']; ?>
                </p>

                <p>住所（番地）
                    <?php echo $_POST['address2']; ?>
                </p>

                <p>アカウント権限
                    <?php echo $_POST['authority']; ?>
                </p>


                <input type="button" class = "button1" onClick='history.back()' value="戻る">
                                                    
                <form action = "regist_complete.php" method = "post">
                    <input type = "submit" class = "button2" value = "登録する" >
                    <input type="hidden"  value="<?php echo $_POST['FamilyName']; ?>" name="FamilyName">
                    <input type="hidden"  value="<?php echo $_POST['LastName']; ?>" name="LastName">
                    <input type="hidden"  value="<?php echo $_POST['FamilyNameKana']; ?>" name="FamilyNameKana">
                    <input type="hidden"  value="<?php echo $_POST['LastNameKana']; ?>" name="LastNameKana">
                    <input type="hidden"  value="<?php echo $_POST['mail']; ?>" name="mail">
                    <input type="hidden"  value="<?php echo $_POST['password']; ?>" name="password">
                    <input type="hidden"  value="<?php echo $_POST['gender']; ?>" name="gender">
                    <input type="hidden"  value="<?php echo $_POST['PostalCode']; ?>" name="PostalCode">
                    <input type="hidden"  value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                    <input type="hidden"  value="<?php echo $_POST['address1']; ?>" name="address1">
                    <input type="hidden"  value="<?php echo $_POST['address2']; ?>" name="address2">
                    <input type="hidden"  value="<?php echo $_POST['authority']; ?>" name="authority">                
                </form>
        
            </div>

        </main>

        <footer>
        
            Copyright D.I.Works| D.I.Blog is the one which provides A to Z about programming
        
        </footer>

    </body>

</html>