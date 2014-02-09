<?php

ini_set('display_errors','on');
require 'AnsiToRgb.php';

print '<body style="font-family: monospace; color: #fff; background-color: #000">';
print '<style>';
print 'div { padding: 0.2em; font-size: 0.6em; float: left; color: #fff; }';
print '</style>';

// system colors
for ($i = 0; $i < 16; $i++) {
  $hex = AnsiToRgb::toRgbHex($i);
  printf(
    '<div style="background-color: #%s">%d<br/>%s</div>',
    $hex, $i, $hex
  );
  
  if (($i + 1) % 8 == 0) {
    print '<br style="clear:both"/>';
  }
}

print '<div style="width: 100%; height: 1em; clear:both">&nbsp;</div>';

// rgb colors
for ($i = 0; $i < 12; $i++) for ($j = 0; $j < 18; $j++) {
  $ansi = ($i * 18) + $j + 16;
  $hex = AnsiToRgb::toRgbHex($ansi);
	printf(
	  '<div style="background-color: #%s">%d<br/>%s</div>',
    $hex, $ansi, $hex
  );

	if ($i == 5 && $j == 17) {
	  print '<div style="width: 100%; height: 1em; clear:both">&nbsp;</div>';
	} else if ($j == 17) {
	  print '<br style="clear:both"/>';
	} else if (($j + 1) % 6 == 0) {
	  print '<div>&nbsp;</div>';
	}
}

print '<div style="width: 100%; height: 1em; clear:both">&nbsp;</div>';

// greyscale
for ($i = 0; $i < 24; $i++) {
  $hex = AnsiToRgb::toRgbHex(232 + $i);
  printf(
    '<div style="background-color: #%s">%d<br/>%s</div>',
    $hex, 232 + $i, $hex
  );
  
  if (($i + 1) % 8 == 0) {
    print '<br style="clear:both"/>';
  }
}

?>

