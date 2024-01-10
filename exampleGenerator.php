<?php
$limit = 100;
function makeGen($n)
{
    for ($i = 0; $i <= $n; $i++) {
        yield $i;
    }
}

echo "generator:";
$gen = makeGen($limit);
foreach ($gen as $item) {
    echo $item . ',';
}

function makeList($n)
{
    $list = [];
    for ($i = 0; $i <= $n; $i++) {
        $list[] = $i;
    }
    return $list;
}
echo "\narray:";
$array = makeList($limit);
foreach ($array as $item) {
    echo $item . ',';
}


