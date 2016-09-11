<?PHP

REQUIRE('templates/header.htm');

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

PRINT '<p class="body">';
PRINT '<center>';
PRINT '<h1> Days and Hours</h1>';
PRINT 'I work as a DSP Monday through Wednesday on the evening shift and alternating weekends all day.
I have every Thursday and Friday off while it depends on the weekend. On my days off Im normally
available all day so just contact me and we can arrange a time and place for a pick up. Im going to try to 
implement a calendar when I have the time to show exactly when im free and when im not.';
PRINT '</center>';
PRINT '</p>';

REQUIRE('templates/footer.htm');

?>