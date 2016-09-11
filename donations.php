<?PHP

REQUIRE('/templates/header.htm');

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

PRINT '<center>';
PRINT '<p class="body">';
PRINT '<h1>Donations</h1>';
PRINT 'I would like to start out that Im not begging in any shape or form. I do this as a hobby and as a <br />
service to the community by picking up E-Waste as the garbage companies usually dont pick it up.<br />
Unfortunately gas, tools and what not are expensive so a little help by the way of donations  would<br />
go a long way to help me help the community. Im not asking for a lot but every bit helps out. Thanks.';
PRINT '</p>';

PRINT '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">';
PRINT '<input type="hidden" name="cmd" value="_s-xclick">';
PRINT '<input type="hidden" name="hosted_button_id" value="YLGXTFNUHAVKN">';
PRINT '<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">';
PRINT '<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">';
PRINT '</form>';

REQUIRE('templates/footer.htm');

?>