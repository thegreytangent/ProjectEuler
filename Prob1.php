<?php
$limit = 1000;
$result = 0;
for ($i = 1; $i < $limit; $i++) {
	if ($i % 3 == 0 || $i % 5 == 0 ) {
		$result += $i;
	}
}
echo $result;

echo "\n\n";
 ?>
