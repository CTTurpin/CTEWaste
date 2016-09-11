<?PHP

REQUIRE('templates/header.htm');

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

print '<p class="body">';
print '<center>';
print '<h1>Items For Sale</h1>';
print 'This page is going to take a good amount of work and will be one of the last ones compelte.</ br>
You can find some of my items for sale on my ebay and facebook page that is posted in the </ br>
Contacts section. All prices are OBO.';
print '</center>';
print '</p>';
print '<hr />';
print '<table id="forsale">
		<tr>
		<td><a href="/forsale/car.php"><img src="imgs/forsale/car/car1.jpg" width="250px" height="200px" title="Click for more images."></a></td>
		<td><img src="imgs/forsale/speakers1.jpg" width="250px" height="200px"></td>
		<td><img src="imgs/forsale/speakers2.jpg" width="250px" height="200px"></td>
		</tr>
	    <tr>
		<td width="250px"><center>2008 Pontiac Solstice - 4500$</center></td>
		<td width="250px"><center>Computer Speakers - 5$</center></td>
		<td width="250px"><center>Computer Speakers - 5$</center></td>
		</tr>
		<tr>
		<td><img src="imgs/forsale/speakers3.jpg" wdith="250px" height="200px"></td>
		<td><img src="imgs/forsale/sword.jpg" wdith="250px" height="200px"></td>
		<td><img src="imgs/forsale/ammocan.jpg" wdith="250px" height="200px"></td>
		</tr>
		<tr>
		<td width="250px"><center>Computer Speakers - 7$</center></td>
		<td width="250px"><center>Display Sword - 15$</center></td>
		<td width="250px"><center>Large Ammocan - 25$</center></td>
		</tr>
		<tr>
		<td><img src="imgs/forsale/compmonitor.jpg" width="250px" height="200px"></td>
		</tr>
		<tr>
		<td>Computer Monitor - 15$</td>
		</tr>
	   </table>';
	   
require ('C:/xampp/htdocs/templates/footer.htm');

?>