<?php
echo '<h2> Զանգ-ի էլեմենտների փոխակերպումը տողի: </h2>';

$a[0] = 31;
$b[0][0] = 31;
$g['age']= 31;

echo "I $a[0] years old.". '-- ինդեքսավորված զանգ-ի էլեմենտ: $a[0]<br>';
echo "I {$b[0][0]} years old.". '-- բազմաչափ զանգ-ի էլեմենտ: {$b[0][0]}<br><br>';
echo "I $g[age] years old.". '-- ասսոց. զանգ.-ի էլեմենտ 1-ին լավարկում: $g[age]<br>';
echo "I {$g['age']} years old.". '-- ասսոց. զանգ.-ի էլեմենտ 2-րդ լավարկում: {$g[\'age\']}<br>';

?>