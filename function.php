<?php
//エラーログとるかどうか
ini_set('log_errors','on');
//どこのディレクトリに吐き出すか
ini_set('error_log','php.log');
//開発終わったらfalseにするかも
$debug_flg = true;
//デバック関数
function debug($str){
global $debug_flg;
    if($debug_flg){
        eeror_log('デバッグ:'.$str);
    }
}

//セッションの一時保存場所変更
session_save_path("/var/tmp/");
//ガーページコレクションの削除期限延長
ini_set('session.gc_maxlifetime', 60*60*24*31);
//クッキーの有効期限も延長
ini_set('session.cookie_lifetime',60*60*24*31);
//セッションスタート
session_start();
//なりすまし防止でセッションid新しくする
session_regenerate_id();

function debuglog(){
    debug('>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>画面処理開始');
    debug('セッションID'.print_r(session_id(),true));
    debug('今のセッションの中身:'.print_r($_SESSION,true));
    if(!empty($_SESSION['login_time']) && !empty($_SESSION['limit'])){
        debug('ログイン期日タイムスタンプ:'.print_r($_SESSION['login_time']) + $_SESSION['limit']);
    }
}


//エラー定数用意
define('SG01','入力必須です。');
define('SG01','入力必須です。');
define('SG01','入力必須です。');
define('SG01','入力必須です。');
define('SG01','入力必須です。');



?>
