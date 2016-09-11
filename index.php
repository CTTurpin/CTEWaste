<?PHP

ini_set('display_errors', 1);
error_reporting(E_ALL& ~E_NOTICE);

REQUIRE('templates/header.htm');

PRINT '<center>';
PRINT '<br />';
PRINT '<div style="text-align:center;"><script type="text/javascript" src="http://services.webestools.com/cpt_visitors/40484-8-4.js"></script></div>';
print '<hr />';
PRINT '<p class="body">';
PRINT '<h1>Hello and Welcome!</h1>';
print '<hr />';
print '<br />';
print '<b><u>August 05 2016</u></b><br />';
print 'Move my website over to my private server as I was saving issues getting certain things to work.<br />
	   Still working on various sections and hopefully will get the color scheme worked out soon.<br />
	   <br />
	   <hr />';
print '<br />';
PRINT 'This website is currently a Work in progress. I hope to have it almost fully functional in the next coming weeks.<br />
It will probably be a little slow going as i relearn my coding but I hope to have something at least presentable<br />
for my business.';
PRINT '</p>';
PRINT '</center>';

REQUIRE('templates/footer.htm');

?>