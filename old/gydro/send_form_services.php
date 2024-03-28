<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отправка формы");
?>

<?
$error = true;

if (!empty(COption::GetOptionString($moduleID, "siteKeyCaptchaSecret")) && 
    !empty(COption::GetOptionString($moduleID, "siteKeyCaptcha")) ) 
{
    $secret = COption::GetOptionString($moduleID, "siteKeyCaptchaSecret");

    if (!empty($_POST['g-recaptcha-response'])) {
        $curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, 'secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $out = curl_exec($curl);
        curl_close($curl);
    
        $out = json_decode($out);
        if ($out->success == true) {
            $error = false;
        } 
    }
}


if ($error && 
    !empty(COption::GetOptionString($moduleID, "siteKeyCaptchaSecret")) && 
    !empty(COption::GetOptionString($moduleID, "siteKeyCaptcha")) ) 
{
	header("Location: " . $_POST['URL']. "?form_error");
}
else {
    $el = new CIBlockElement;
    $iblock_id = intval($_POST['iblock']);

    $PROP = array();

    $PROP['NAME'] = $_POST['NAME'];
    $PROP['SERVICES'] = $_POST['SERVICES']; 
    $PROP['DATE'] = $_POST['datepicker_DATE']; 
    $PROP['MESSAGE'] = $_POST['MESSAGE'];  
    $PROP['EMAIL'] = $_POST['EMAIL'];  
    $PROP['PHONE'] = $_POST['PHONE']; 
    $PROP['EMAIL_FROM'] = COption::GetOptionString("hellodigital.turbosite", "emailFrom");  
    $PROP['EMAIL_TO'] = COption::GetOptionString("hellodigital.turbosite", "emailTo"); 

    $fields = array(
        "DATE_CREATE" => date("d.m.Y H:i:s"),
        "CREATED_BY" => $GLOBALS['USER']->GetID(),
        "IBLOCK_ID" => $iblock_id,
        "PROPERTY_VALUES" => $PROP,
        "NAME" => 'Заявка №'.uniqid(),
        "ACTIVE" => "Y",
        "CODE" => uniqid()
    );

    if ($el->Add($fields)) {
        header("Location: " . $_POST['URL'] . "?form_successfully");
    } 
    else {
        header("Location: " . $_POST['URL'] . "?form_error");
    }

    CEvent::Send('TURBOSITE_SERVICES', 's1', array(
        'NAME' => $PROP['NAME'], 
        'SERVICES' => $PROP['SERVICES'],
        'DATE' => $PROP['DATE'],
        'MESSAGE' => $PROP['MESSAGE'],
        'EMAIL' => $PROP['EMAIL'],
        'PHONE' => $PROP['PHONE'],
        'DATE_CREATE' => date("d.m.Y H:i:s"),
        'EMAIL_FROM' => $PROP['EMAIL_FROM'],
        'EMAIL_TO' => $PROP['EMAIL_TO'],
    ));

    CEvent::Send('TURBOSITE_SERVICES_CLIENT', 's1', array(
        'EMAIL' => $PROP['EMAIL'], 
        'NAME' => $PROP['NAME'], 
        'SERVICES' => $PROP['SERVICES'],
        'DATE' => $PROP['DATE'],
        'MESSAGE' => $PROP['MESSAGE'],
        'DATE_CREATE' => date("d.m.Y H:i:s"),
        'EMAIL_FROM' => $PROP['EMAIL_FROM'],
        'EMAIL_TO' => $PROP['EMAIL_TO'],
    ));
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>