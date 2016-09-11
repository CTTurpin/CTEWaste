<?PHP
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

REQUIRE('templates/header.htm');
print '<p class="items_table">';
print '<center>';
print '<h1>Items Accepted</h1>';
print '<hr />';
print '<table>';
print '<td>	<td>	Computer Towers	</td>	<td>	Bicycles	</td>	</tr>';
print '<td>	<td>	Computer Monitors(CRT & LCD)	</td>	<td>	Tools	</td>	</tr>';
print '<td>	<td>	Computer Components	</td>	<td>	Tire Rims	</td>	</tr>';
print '<td>	<td>	Keyboards and mice	</td>	<td>	Car/Truck Parts	</td>	</tr>';
print '<td>	<td>	Televisions (All types and sizes.)	</td>	<td>	ATVs and their parts	</td>	</tr>';
print '<td>	<td>	Cell Phones	</td>	<td>	Medical Equipment:	</td>	</tr>';
print '<td>	<td>	Cell Phone Chargers	</td>	<td>	O2 Tanks	</td>	</tr>';
print '<td>	<td>	Game Systems	</td>	<td>	Wheel Chairs	</td>	</tr>';
print '<td>	<td>	Game Controllers	</td>	<td>	O2 Concentrator	</td>	</tr>';
print '<td>	<td>	Microwaves	</td>	<td>	Nebulizer	</td>	</tr>';
print '<td>	<td>	Stoves, Ovens, Grills, Dryers, Washers, Dishwashers	</td>	<td>	Lawn Mowers	</td>	</tr>';
print '<td>	<td>	Pots/Pans/Skillets	</td>	<td>	Weed Eaters	</td>	</tr>';
print '<td>	<td>	Silverware	</td>	<td>	Other lawn equipment	</td>	</tr>';
print '<td>	<td>	Tablets	</td>	<td>	Exercise Equipment	</td>	</tr>';
print '<td>	<td>	MP3 Players	</td>	<td>	Ink cartridges, Toner Cartridges	</td>	</tr>';
print '<td>	<td>	Wiring(Any)	</td>	<td>	Satellite Dishes	</td>	</tr>';
print '<td>	<td>	Stereos	</td>	<td>	Vacuum Cleaners	</td>	</tr>';
print '<td>	<td>	Speakers	</td>	<td>	Steam Cleaners	</td>	</tr>';
print '<td>	<td>	Printers	</td>	<td>	Carpet Cleaners	</td>	</tr>';
print '<td>	<td>	Scanners	</td>	<td>	AC & HVAC Units	</td>	</tr>';
print '<td>	<td>	Copiers	</td>	<td>	Water Heaters	</td>	</tr>';
print '<td>	<td>	Network Equipment(Routers, Modems, Hubs, Servers)	</td>	<td>	Air Compressors 	</td>	</tr>';
print '<td>	<td>	Telecommunications Equipment	</td>	<td>	ETC	</td>	</tr>';
print '</table>';
print '</ br>';
print '</ br>';
print '<center><p class="small">Im always adding new items or if you have something and arent for sure; feel free to contact me.';
print '</p></center>';

REQUIRE('templates/footer.htm');

?>
