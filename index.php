<?php

if(!isset($_GET['f']))
	$_GET['f']=4;

$round ($_GET['f'])

$f=$_GET['f'];

if ($f<7) $f=1;

echo '
	<a href="index.php?f='.($f+1).'">
	<img src="./figs/f'.$f.'.jpg"></img>
	</a>
';
?>
