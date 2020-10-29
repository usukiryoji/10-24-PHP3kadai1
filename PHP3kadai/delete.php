<?php
//1.php
// select.phpのphpコードをマルッとコピーしてきます
//msqlとデータ取得の箇所を修正
require('funcs.php');
$id = $_GET['id'];



$pdo = db_conn();
$stmt = $pdo->prepare('DELETE FROM gs_bm1_table WHERE id=:id');

$stmt->bindValue(':id', h($id), PDO::PARAM_INT);     
$status = $stmt->execute(); //実行
//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}