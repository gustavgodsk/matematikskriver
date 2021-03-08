<?php

$charcount = substr_count($input, " over ");

if ($charcount > 0) {
    for ($i = 0; $i < $charcount; $i++) {

        $førover = strstr($input, " over ", true);
        $frover = strrev($førover);
        $t32 = strstr($frover, " ", true);
        $t23 = strrev($t32);
        //echo $t23;

        // 83
        $toppos = strpos($input, $t23." over ");

        $input = substr_replace($input, "<span class='v1'>(</span><div class='frag'><span>$t23</span>", $toppos, strlen($t23));

        $efterover = strstr($input, "over ");
        //$efterover;
        $efterover = strstr($efterover, " ");
        //echo $efterover;
        $efterover = ltrim($efterover, " ");
        //echo $efterover;

        //echo substr_count($efterover, " ");
        $t81 = strstr($efterover, " ", true);
        //echo $t81;

        $botpos = strpos($input, "over ".$t81);

        $input = substr_replace($input, "<span id='bot2om'>$t81 </span></div><span class='v2'>)</span>", $botpos, strlen($t81)+5);

        //echo strpos($efterover, "1");

        //echo $t81;





    }


}

?>