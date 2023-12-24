<?php

/*Function convert a percent into a number*/
function convertPercentToNumber (float $percent1, float $num1) : float {
    $res1 = ($percent1*$num1)/100 ;
    return $res1 ;
}

/*Function convert a number into a percent*/
function convertNumberToPercent (float $num2, float $int2) : float {
    $res2 = ($num2*100)/$int2 ;
    return $res2 ;
}

/*Function adding a percentage*/
function addPercent (float $percent3, float $var3) : float {
    $res3 = $var3 + ($percent3 / 100 * $var3) ;
    return $res3 ;
}

/*Function substracte a percentage*/
function subPercent (float $percent4, float $var4) : float {
    $res4 = $var4 - ($percent4 / 100 * $var4) ;
    return $res4 ;
}
/*Function percentage variation*/
function variationPercent (float $percent5, float $var5) : float {
    $res5 = (($percent5 - $var5) / $var5) * 100 ;
    return $res5 ;
}

?>

