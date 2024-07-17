<?php
   print time();
   // The integer returned by time() represents the number of seconds elapsed since midnight GMT on January 1, 1970. This moment is known as the UNIX epoch, and the number of seconds that have elapsed since then is referred to as a time stamp.
?>

<?php
   $d = getdate(time());
   $m = getdate(time());
   echo "The day is {$d['mday']} and the month is {$m['mon']}";
?>