<?php

// 関数ファイル読み込み
include('functions.php');


//入力チェック(受信確認処理追加) insert.phpと同様。タスクと期限が未入力だとエラー
if (
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['url']) || $_POST['url'] == ''
) {
    exit('ParamError');
}

//POSTデータ取得
$name = $_POST['name'];
$url = $_POST['url'];
$comment = $_POST['comment'];
$hoshi = $_POST['hoshi'];
$id = $_POST['id'];

//DB接続します(エラー処理追加)
$pdo = connectToDb();  //connecttodbはfunctions.phpで定義しているもの


//データ登録SQL作成
$sql = 'UPDATE gs_bm_table SET name=:a1,url=:a2,comment=:a3,hoshi=:a4 WHERE id=:id';  //WHERE id=:id入れないと全データが変わってしまう
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
$stmt->bindValue(':a4', $hoshi, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if ($status == false) {
    showSqlErrorMsg($stmt);
} else {
    header('Location:select.php');
    exit;
}
