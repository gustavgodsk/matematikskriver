<?php

$charcount = substr_count($input, " division ");

if ($charcount > 0) {
    for ($i = 0; $i < $charcount; $i++) {

        $førover = strstr($input, " division ", true);
        $frover = strrev($førover);
        $t32 = strstr($frover, " ", true);
        $t23 = strrev($t32);
        //echo $t23;

        // 83
        $toppos = strpos($input, $t23." division ");

        $input = substr_replace($input, "<div class='frag'><span>$t23</span>", $toppos, strlen($t23));

        $efterover = strstr($input, "division ");
        //$efterover;
        $efterover = strstr($efterover, " ");
        //echo $efterover;
        $efterover = ltrim($efterover, " ");
        //echo $efterover;

        //echo substr_count($efterover, " ");
        $t81 = strstr($efterover, " ", true);
        //echo $t81;

        $botpos = strpos($input, "division ".$t81);

        $input = substr_replace($input, "<span id='bottom'>$t81 </span></div>", $botpos, strlen($t81)+9);

        //echo strpos($efterover, "1");

        //echo $t81;
    }
}

$charcount = substr_count($input, "division");

if ($charcount > 0) {
    for ($i = 0; $i < $charcount; $i++) {

        $førover = strstr($input, "division", true);
        //echo $førover;
        $frover = strrev($førover);
        //echo $frover;
        $t32 = strstr($frover, " ", true);
        //echo $t32;
        $t23 = strrev($t32);
        //echo $t23;

        // 83
        $toppos = strpos($input, $t23."division");
        //echo $toppos;

        $input = substr_replace($input, "<div class='frag'><span>$t23</span>", $toppos, strlen($t23));

        //echo strpos($input, "division");
        $efterover = strstr($input, "division");
        //echo $efterover;
        $efterover = ltrim($efterover, "divi");
        $efterover = ltrim($efterover, "sion");

        //echo substr_count($efterover, " ");
        $t81 = strstr($efterover, " ", true);
        //echo $t81;

        $botpos = strpos($input, "division".$t81);

        $input = substr_replace($input, "<span id='bottom'>$t81 </span></div>", $botpos, strlen($t81)+8);

        //echo strpos($efterover, "1");

        //echo $t81;
    }
}

?>