<?php
//ログインチェック
session_start();
include('functions.php');


//db接続
$pdo = connectToDb();

//2. データ表示SQL作成
$sql = 'SELECT*FROM gs_bm_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//3. データ表示
$view = '';
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<div class="card">';
        $view .= '<div class="card-body">';
        $view .= '<h4 class="card-title">' . $result['name'];
        $view .= '</h4>';
        $view .= '<a href="detail_nologin.php?id=' . $result['id'] . '" class="badge badge-primary">detail</a>';
        $view .= '<p class="card-text">' . $result['comment'];
        $view .= '</p>';
        $view .= '<p class="card-text">' . '☆' . $result['hoshi'];
        $view .= '</p>';
        $view .= '<a href="' . $result['url'] . '" class="card-link">' . 'link';
        $view .= '</a>';
        $view .= '</div>';
        $view .= '</div>';
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>リスト表示</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <div>
            <h1>Bookmark</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Bookmark登録</a></li>
                <li class="nav-item"><a class="nav-link" href="select_nologin.php">Bookmark一覧</a></li>
            </ul>
        </nav>
    </header>

    <div class="list">
        <ul class="datalist">
            <!-- ここにDBから取得したデータを表示しよう -->
            <?= $view ?>
        </ul>
    </div>

</body>

</html>