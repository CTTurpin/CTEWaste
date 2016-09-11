<?PHP

REQUIRE('templates/header.htm');

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

print '<p class="body">';

print '<center>';

print '<h1>Services Provided</h1>';



print 'Free Scrap and E-Waste removal for the Anna, Cobden, Dongola, Jonesboro Area.<br />
Out of area pick ups will result in a charge for gas.<br />
I will also haul junk items such as scrap wood, old furniture, beds, limbs, yard clippings, etc for a cost.';



print '<table>';


print '<tr>';

print '<td>Anna</td><td>15$/Load</td>';

print '</tr>';


print '<tr>';

print '<td>Jonesboro</td><td>15$/Load</td>';

print '</tr>';


print '<tr>';

print '<td>Cobden</td><td>20$/Load</td>';

print '</tr>';


print '<tr>';

print '<td>Dongola</td><td>25$/Load<td>';

print '</tr>';

print '</table>';


print '</ br>';

print '</ br>';

print '<p class="norm">';

print 'If you live out of area or have multiple loads we can work out a price.';

print '</p></center>';

Print '
<hr>
<center>
<h1>Drop Offs</h1>
<p class="norm">
I do accept items being dropped off. If you wish to drop off an item just let me know that you are doing</ br>
so. The items can be left on the side of the road next to the power pole in front of my house. My address</ br>
can be found on my facebook page.</p>
</center>';

require('templates/footer.htm');

?>