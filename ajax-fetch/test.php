<?php
$range = range(0,9);
function numberGenerate($range){
    shuffle($range);
    return $range;
}
$range = numberGenerate($range);
$range2 = range(0,3);
shuffle($range2);

print_r($range2);
echo "<br/>";
print_r($range);



function numberCheck($range,$digit2) {
    $cows=0;
    $bulls=0;
    for ($i=0;$i<4;$i++) {
        for ($j=0;$j<4;$j++) {
            if ($range[$i] == $digit2[$j]){
                $cows++;
                if($i == $j) {
                    $cows--;
                    $bulls++;
                }
            }
        }
    }
    echo '<br/>';
    echo $cows. 'cows';
    echo '<br/>';
    echo $bulls. 'bulls';
}
echo "<br/>";
echo "Result:";
numberCheck($range,$range2);

  
?>