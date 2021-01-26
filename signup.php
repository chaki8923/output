




<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>新規登録</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <header>
    <div class="site-width">
       <h1><a href="">chaki ryou</a></h1>
        <nav class="top-nav">
            <ul>
               <?php if(empty($_SESSION['user_id'])){?>
    
                <li><a href="">ログイン</a></li>
                <li><a href="">新規登録</a></li>
<?php }else{ ?>
                <li><a href="">マイページへ</a></li>
                <li><a href="">ログアウト</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    </header>
    <body>
        <div class="site-width">
            <h1 class="body-title">新規登録</h1>
            <form action="" class="form" method="post">
               <div class="area-msg">
                <lavel class = "<?php if(!empty($err_msg)) echo err; ?>">
                   Email
                    <input type="text" name="email" class="email">
                </lavel>
               </div>
               <div class="area-msg">
                <lavel class = "<?php if(!empty($err_msg)) echo err; ?>">
                   パスワード<span style="font^size:12px">*6文字以上</span>
                    <input type="password" name="pass" class="pass">
                </lavel>
               </div>
               <div class="area-msg">
                <lavel class = "<?php if(!empty($err_msg)) echo err; ?>">
                   パスワード（再入力）
                    <input type="password" name="pass_re" class="pass_re">
                </lavel>
               </div>
               <input type="submit" value="登録">
            </form>
        </div>
    </body>
    
</html>