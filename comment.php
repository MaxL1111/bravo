<?php
// Если не было запроса типа пост значит открываем форму
if(empty($_POST))
  include __DIR__ . '/view/form/comment_shop.php';
// иначе попытка отправки запроса
else {

    $bSend = false;
    $to = $_POST['mail'];
    $subject = 'Отзыв от ' . $_POST['name'];
    $message = $_POST['text'];

    // попытка отправки отзыва на указаный ящик
    if (!empty($to) && !empty($subject) && !empty($message))
        $bSend = mail($to, $subject, $message);

    // проверяем результат отправки и информируем о нем пользователя
    if ($bSend)
        include __DIR__ . '/view/form/comment_shop_success.php';
    else
        include __DIR__ . '/view/form/comment_shop_fail.php';
}