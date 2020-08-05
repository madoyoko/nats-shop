<P>メールが送れるかテストするファイル
    <?php
    $to = "madokayoko0810@gmail.com";
    $subject = "メールの件名";
    $honbun = "本文を書くところ\n
    ここで改行になる";
    
 $success =   mail ($to , $subject , $honbun);
 var_dump($success);
 ?>