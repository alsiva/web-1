<?php
function doesItHit($x, $y, $r): bool {
    if ($x >=0 and $y >= 0 and $x^2 + $y^2 <= ($r/2)^2) {   //round check
        return true;
    } elseif ($x <= 0 and $y >= 0 and $y <= 2*$x+$r) {  //triangle check
        return true;
    } elseif (0 <= $x and $x <= $r/2 and -$r <= $y and $y <=0) {     //rectangle check
        return true;
    }

    return false;
}