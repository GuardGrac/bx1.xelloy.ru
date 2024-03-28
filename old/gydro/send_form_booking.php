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
    $PROP['OBJECT'] = $_POST['OBJECT']; 
    $PROP['PHONE'] = $_POST['PHONE']; 
    $PROP['EMAIL'] = $_POST['EMAIL'];  
    $PROP['DATE_START'] = $_POST['DATE_START'];  
    $PROP['DATE_END'] = $_POST['DATE_END'];  
    $PROP['COUNT_ADULTS'] = $_POST['COUNT_ADULTS'];  
    $PROP['COUNT_KIDS'] = $_POST['COUNT_KIDS'];  
    $PROP['DURATION'] = $_POST['DURATION'];  
    $PROP['PRICE'] = $_POST['PRICE'];  
    $PROP['COST'] = $_POST['COST'];  
    $PROP['MESSAGE'] = $_POST['MESSAGE'];  
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

    CEvent::Send('TURBOSITE_BOOKING', 's1', array(
        'NAME' => $PROP['NAME'], 
        'OBJECT' => $PROP['OBJECT'],
        'PHONE' => $PROP['PHONE'],
        'EMAIL' => $PROP['EMAIL'],
        'DATE_START' => $PROP['DATE_START'],
        'DATE_END' => $PROP['DATE_END'],
        'COUNT_ADULTS' => $PROP['COUNT_ADULTS'],
        'COUNT_KIDS' => $PROP['COUNT_KIDS'],
        'DURATION' => $PROP['DURATION'],
        'PRICE' => $PROP['PRICE'],
        'COST' => $PROP['COST'],
        'EMAIL_FROM' => $PROP['EMAIL_FROM'],
        'EMAIL_TO' => $PROP['EMAIL_TO'],
        'DATE_CREATE' => date("d.m.Y H:i:s"),
    ));
    
    if ($el->Add($fields)) {
        header("Location: " . $_POST['URL'] . "?form_successfully");
    } 
    else {
        header("Location: " . $_POST['URL'] . "?form_error");
    }
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>