<?php
$s= date('H');
if ($s>=8 and $s<12)
echo "BONNE JOURNEE";
elseif($s>=12 and $s<18)
echo "BONNE APRES MIDI";
elseif ($s>=18 and $s<21)
echo "BONNE SOIREE";
else
echo "BONSOIR";
?>