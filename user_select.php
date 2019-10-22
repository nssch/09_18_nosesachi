<?php
//ログインチェック
session_start();
include('user_functions.php');
checkSessionid();


//db接続
$pdo = connectToDb();

//2. データ表示SQL作成
$sql = 'SELECT*FROM user_table';
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
        // $view .= '<li class="list-group-item">';
        // $view .= '<p>' . $result['name'] . '-' . $result['url'] . '-' . $result['comment'] . '-' . '★' . $result['hoshi'] . '</p>';
        // $view .= '<a href="detail.php?id=' . $result['id'] . '" class="badge badge-primary">Edit</a>';
        // $view .= '<a href="delete.php?id=' . $result['id'] . '" class="badge badge-danger">Delete</a>';
        // $view .= '</li>';
        $view .= '<table class="table" style="table-layout: fixed; overflow-wrap : break-word;">';
        $view .= '<thead class="thead-light">';
        $view .= '<tr>';
        $view .= '<th>' .  '</t>';
        $view .= '<a href="user_detail.php?id=' . $result['id'] . '" class="badge badge-primary">Edit</a>';
        $view .= '<a href="user_delete.php?id=' . $result['id'] . '" class="badge badge-danger">Delete</a>';
        $view .= '<td>' . $result['name'] . '</td>';
        $view .= '<td>' . $result['lid']  . '</td>';
        $view .= '<td>' . $result['lpw']  . '</td>';
        $view .= '<td>' . $result['kanri_flg']  . '</td>';
        $view .= '<td>' . $result['life_flg']  . '</td>';
        $view .= '</tr>';
        $view .= '</tbody>';
        $view .= '</table>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ユーザー管理ページ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Bookmark登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">Bookmark一覧</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_index.php">ユーザー登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_select.php">ユーザー一覧</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">ログアウト</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div>
        <ul class="table">

            <table class="table" style="table-layout: fixed;">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th>ユーザー名</th>
                        <th>ログインID</th>
                        <th>パスワード</th>
                        <th>0:一般<br>1:管理者</th>
                        <th>0:アクティブ<br>1:非アクティブ</th>
                    </tr>
                </thead>
            </table>



            <?= $view ?>
        </ul>
    </div>



</body>

</html>