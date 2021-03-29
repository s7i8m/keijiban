<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>4eachblog掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=php_1;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keijiban");
        
        ?>
        
        
        <img src="4eachblog_logo.jpg" class="logo">
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録ホーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        
        
        <main>
            <div class="main">
                <div class="left">
                    <h2>プログラミングに役立つ掲示板</h2>
                    
                    <div class="form1">
                        <h3>入力フォーム</h3>
                        <form method="post" action="insert.php">
                            <div>
                                <label>ハンドルネーム<br></label>
                                <input type="text" class="text" size="35" name="handlename">
                            </div>
                            <div>
                                <label>タイトル<br></label>
                                <input type="text" class="text" size="35" name="title">
                            </div>
                            <div>
                                <label>コメント<br></label>
                                <textarea cols="50" rows="10" class="textarea" name="comments"></textarea>
                            </div>
                            <input type="submit" class="submit" value="送信する">
                        </form>
                        </div>
                    
                    
                    <?php
                    foreach ($stmt as $row) {
                        echo "<div class='title'>";
                        echo "<h3>".$row['title']."</h3>";
                        echo "<div class='comments'>";
                        echo $row['comments'];
                        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                   
                </div>
            
            
                <div class="right">
                    <h3>人気の記事</h3>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP Myadminの使い方</li>
                        <li>今人気のエディタ　Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                
                    <h3>オススメリンク</h3>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                
                    <h3>カテゴリ</h3>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </main>
        <footer>
            copyright © internous | 4each blog the which provides A to Z about programming.
        </footer>
    </body>
</html>