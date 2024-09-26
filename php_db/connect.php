<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP+DB</title>
 </head>
 
 <body>
     <p>
         <?php
         $dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
         $user = 'root';
        // MAMPを利用しているMacユーザーの方は、''ではなく'root'を代入してください
         $password = '';
 
         $pdo = new PDO($dsn, $user, $password);
         try {
            $pdo = new PDO($dsn, $user, $password);
            echo 'データベースの接続に成功しました。';
        } catch (PDOException $e) {
            echo 'データベースの接続に失敗しました: ' . $e->getMessage();
        }
         ?>
     </p>
 </body>
 
 </html>