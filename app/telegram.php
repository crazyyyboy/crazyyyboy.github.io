<?php

/* https://api.telegram.org/bot1138020656:AAGK3KJPo1Mhuag0HIpqACrCMd7i58Oc6KA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$token = "1138020656:AAGK3KJPo1Mhuag0HIpqACrCMd7i58Oc6KA";
$chat_id = "-298885934";
$arr = array(
  'Имя пользователя: ' => $name,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>