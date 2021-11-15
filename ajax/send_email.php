<?php
$_POST = json_decode(file_get_contents('php://input'));

$modeMoscow = 0;
/**
 *   @var $DOCUMENT_ROOT
 **/
require_once $DOCUMENT_ROOT."/sxGeo/Helper.php";

$send = 0;
if(isset($_POST->pack)) {
    $post = (array)$_POST->pack;
    if ($post['agree']) {
        $subject = "Заявка с сайта http://урл сайта";
        $to = "какаято почта";
        if($modeMoscow){
            $to = "какаято почта";
        } else {
            $to = "какаято почта";
        }

        $msg = '<strong>Имя:</strong> '.addslashes($post['name'])."<br />";
        $msg .= '<strong>E-mail:</strong> '.addslashes($post['email'])."<br />";
        $msg .= '<strong>Телефон:</strong> '.addslashes($post['phone'])."<br />";
        if($post['quickly']){
            $msg .= "<strong>Прошу ответить срочно.</strong><br />";
        }
        $msg .= '<strong>Текст сообщения:</strong> '.addslashes($post['description'])."<br /><br />";
        $msg .= '<strong>Заявка отправлена со страницы:</strong> <a href="'.addslashes($post['link']).'">'.addslashes($post['link'])."</a>";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Тест <какаято почта>\r\n";
 //       $headers .= 'Cc: anatoly-iv@mail.ru,nikonov@uik.ru' . "\r\n"; // копия сообщения на этот адрес
 //       $headers .= "Bcc: anatoly-iv@mail.ru,nikonov@uik.ru\r\n"; // скрытая копия сообщения на этот

        $send = mail($to, $subject, $msg, $headers);
    }
}

echo json_encode(['status' => 1, 'send' => $send, 'msg' => $msg ]);
?>
