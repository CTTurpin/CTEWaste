<?PHP

require_once('scripts/phpfunctions.php');
REQUIRE('templates/header.htm');

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

print '<p class="body">
<center>
<h1>Contact Information</h1>
<table>
<tr><td>Phone:</td><td>1-870-897-5228(Cell)</td></tr>
<tr><td>Email:</td><td>CTScrapping@hotmail.com</td></tr>
<tr><td>Facebook Page:</td><td>facebook.com/CTEWaste</td></tr>
<tr><td>Facebook Resale Page:</td><td>facebook.com/CTRecycle/</td></tr>
<tr><td>Ebay Account:</td><td>ebay.com/usr/ctur4134</td></tr>
</table>
</center>
</p>
<center>
<p class="body">
<br />
<br />
<center>
Please use this form to submit a request for a pick up or just general information<br />
if you want or cant reach me any other way. There will be a pop up asking to use<br />
an email client; that is normal. Also for the time being this form wont work in chrome<br />
Im working on fixing it. The form may not work at all durring some points, it is a work in<br />
progress. I hope to have all the kinks worked out asap.
</center>
<br />
<br />
<br />';

require('templates/footer.htm');
?>