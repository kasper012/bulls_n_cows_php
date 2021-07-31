<?php
$number = 1234;
$range = str_split($number);
$range2 = range(0,9);
shuffle($range2);

print_r($range);
echo "<br/>";
print_r($range2);




    $cows=0;
    $bulls=0;
    for ($i=0;$i<4;$i++) {
        for ($j=0;$j<4;$j++) {
            if ($range[$i] == $range2[$j]){
                $cows++;
                if($i == $j) {
                    $cows--;
                    $bulls++;
                }
            }
        }
    }


echo "<br/>";
echo "Result:";
echo '<br/>';
echo $cows. 'cows';
echo '<br/>';
echo $bulls. 'bulls';
  
?>