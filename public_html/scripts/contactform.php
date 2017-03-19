        <meta http-equiv="Refresh" CONTENT="0; URL=http://dszczepaniak.pl">
        <?php
        $to = 'xyrex54@gmail.com';
        $subject = 'Wiadomosc od: '.$_POST['name'].' e-mail: '.$_POST['email'];
        $message = 'Temat:'.$_POST['subject'].' Tresc wiadomosci: '.$_POST['content'];
        mail($to, $subject, $message);
        ?>