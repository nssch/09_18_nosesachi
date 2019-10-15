<?php
include('functions.php');  //関数を記述したファイル読み込み

//var_dump($_POST);
// 入力チェック
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

//DB接続
// $dbn = 'mysql:dbname=gsacfd04_18;charset=utf8;port=3306;host=localhost';
// $user =  'root';
// $pwd = '';

// try {
//     $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//     exit('dbError:' . $e->getMessage());
// }

//db接続
$pdo = connectToDb();

//データ登録SQL作成
$sql = 'INSERT INTO gs_bm_table(id, name, url, comment,hoshi, indate)VALUES(NULL, :a1, :a2, :a3, :a4, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $hoshi, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    //５．index.phpへリダイレクト
    header('Location: index.php');
}
