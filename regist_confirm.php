<!doctype HTML>
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
                <li><A HREF = "regist.php">アカウント登録</A></li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>

        <main>

            <h1>アカウント登録確認画面</h1>

            <div class="confirm">

                <p>名前（性）
                    <?php echo $_POST['family name']; ?>
                </p>
                
                <p>名前（名）
                    <?php echo $_POST['last name']; ?>
                </p>

                <p>カナ（性）
                    <?php echo $_POST['family name kana']; ?>
                </p>

                <p>カナ（名）
                    <?php echo $_POST['last name kana']; ?>
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
                    <?php echo $_POST['postal code']; ?>
                </p>

                <p>住所（都道府県）
                    <?php echo $_POST['prefecture']; ?>
                </p>

                <p>住所（市区町村）
                    <?php echo $_POST['address 1']; ?>
                </p>

                <p>住所（番地）
                    <?php echo $_POST['address 2']; ?>
                </p>

                <p>アカウント権限
                    <?php echo $_POST['authority']; ?>
                </p>



                <form action="regist.php">                
                    <input type = "submit" class = "button1" value = "前に戻る">
                </form>
                                                    
                <form action = "regist_insert.php" method = "post">
                    <input type = "submit" class = "button2" value = "登録する" >
                </form>        
        
            </div>

        </main>

        <footer>
        
            Copyright D.I.Works| D.I.Blog is the one which provides A to Z about programming
        
        </footer>

    </body>

</html>