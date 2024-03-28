<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<?
$PROP = array();

$PROP['NAME'] = $_POST['NAME'];
$PROP['EMAIL'] = $_POST['EMAIL']; 
$PROP['PHONE'] = $_POST['PHONE'];  
$PROP['EMAIL_FROM'] = COption::GetOptionString("hellodigital.turbosite", "emailFrom");  
$PROP['EMAIL_TO'] = COption::GetOptionString("hellodigital.turbosite", "emailTo");

CEvent::Send('TURBOSITE_DEMO', 's1', array(
    'NAME' => $PROP['NAME'], 
    'EMAIL' => $PROP['EMAIL'],
    'PHONE' => $PROP['PHONE'],
    'DATE_CREATE' => date("d.m.Y H:i:s"),
    'EMAIL_FROM' => $PROP['EMAIL_FROM'],
    'EMAIL_TO' => $PROP['EMAIL_TO'],
    "CODE" => uniqid()
));

header("Location: " . SITE_DIR);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>