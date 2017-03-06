<html>
    <head>
        <meta http-equiv="refresh" content="0" url="../index.html">﻿
    </head>
    <body>
        <?php
        $headers = 'From: '.$_POST['name'].' e-mail: '.$_POST['email'].'\r\n'.
                'Content-Type: text/html; charset=utf-8';
        $to = 'xyrex54@gmail.com';
        $subject = $_POST['subject'].'\n';
        $message = $_POST['content'].'\n';
        mail($to, $subject, $message, $headers);
        ?>
    </body>
</html>