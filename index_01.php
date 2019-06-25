<?php

if(isset($_GET['i'])) $i=++$_GET['i'];
else $i=1;
if ($i>7) $i=1;
echo '
	<a href="?i='.$i.'">
	<img src="./figs/f'.$i.'.jpg"></img>
	</a>
';
?>
