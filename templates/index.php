<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Error</title>

<?PHP

ini_set('display_errors', 1);
error_reporting(E_ALL& ~E_NOTICE);

print '<center><h1>You have reached this page in error. Please return to the home page: <FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM><br/ >
Thanks.</h1></center>';
?>