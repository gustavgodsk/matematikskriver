<?php

$inputs = $input;
//echo $inputs;

$charcount2 = substr_count($inputs, "/");
$t = 0;
$g = 1;
$poss = 0;
$fristrun = true;
$FIRSTRUN1 = true;

$udendiv = 0;

$f = 1;
$førbrøker = 0;
$l = 0;

$frstme = true;

$førinputs = 0;

if ($charcount2 > 0) {
    for ($i = 0; $i < $charcount2; $i++) {

            //ANDET RUN
        if ($FIRSTRUN1 !== true) {
            //echo "<br>";
            //echo "<br>";
            //echo "andet run";
            //echo "<br>";
            $f1sttime = true;

            for ($t; $t < $g; $t++) {

                if ($f1sttime == true) {
                    $udendiv = $inputs;
                    $f1sttime = false;
                }

                    $efterdiv = strstr($udendiv, "/"); // "/span>b2 xd 4/5232 232"
                    //echo $efterdiv;
                    $udendiv = ltrim($efterdiv, "/span>"); // "b2 xd 4/5232 232"
                    //echo $udendiv;
    
                    $efterdiv = strstr($udendiv, "/"); // "/span>b2 xd 4/5232 232"
                    //echo $efterdiv;
                    $udendiv = ltrim($efterdiv, "/span>"); // "b2 xd 4/5232 232"
                    //echo $udendiv;
    
                    $efterdiv = strstr($udendiv, "/"); // "/div>b2 xd 4/5232 232"
                    //echo $efterdiv;
                    $udendiv = ltrim($efterdiv, "/div>"); // "xd 4/5232 23b2 3d/daw d"
                    //echo $udendiv;
                    //echo "1 gang";
                }
            

            if ($t == $g && $frstme == false) {
                $efterdiv = strstr($udendiv, "/"); // "/span>b2 xd 4/5232 232"
                //echo $efterdiv;
                $udendiv = ltrim($efterdiv, "/span>"); // "b2 xd 4/5232 232"
                //echo $udendiv;

                $efterdiv = strstr($udendiv, "/"); // "/span>b2 xd 4/5232 232"
                //echo $efterdiv;
                $udendiv = ltrim($efterdiv, "/span>"); // "b2 xd 4/5232 232"
                //echo $udendiv;

                $efterdiv = strstr($udendiv, "/"); // "/div>b2 xd 4/5232 232"
                //echo $efterdiv;
                $udendiv = ltrim($efterdiv, "/div>"); // "xd 4/5232 23b2 3d/daw d"
                //echo $udendiv;

                //echo "lol";
            }

            $l++;
            $g = $g + $l;


            $xd23 = strstr($udendiv, "/", true); // xd 4
            //echo $xd23;
            $text23 = strrchr($xd23, " "); // 4
            //echo $text23; //- RIGTIG!!

            $efterinputs = strlen($inputs);
            //echo $efterinputs - $førinputs;

            //længde
            $længde = strlen(substr($inputs, 0, strpos($inputs, $text23."/"))) + 1;

            $udendivpos = strpos($udendiv, "/");
            $efterstreg = strstr($udendiv, "/"); // bd pp
            $efterstreg2 = strstr($efterstreg, " ", true);
            //echo $efterstreg2; // 5232
            
            $replacement2 = substr($efterstreg2, 1);
            //echo $replacement2; RIGTIG!!

            $positionbottom = $længde + strlen($text23) + 31;

            $førinputs = strlen($inputs);

            $inputs = substr_replace($inputs, "<div class='frag'><span>$text23</span>", $længde, strlen($text23)-1);
            //echo $inputs;

            $inputs = substr_replace($inputs, "<span id='bottom'>$replacement2</span></div>", $positionbottom, strlen($replacement2)+1);
            //echo $inputs;
            $input = $inputs;

            $frstme = false;



        } else {

            //echo "<br>";
            //echo "første run";
            //FØRSTE GANG
        //"2x = b3a"
        $linje33 = strstr($inputs, "/", true);
        //echo $linje33;

        //4
        $pos11 = strrpos($linje33, " ");
        //echo $pos11;

        //"b3a"
        $linjexx = substr($linje33, $pos11+1);
        //echo $linjexx;

        //$linje44 = strstr($linje33, $linjexx);
        //echo $linje44;

        $inputs = substr_replace($inputs, "<div class='frag'><span>$linjexx</span>", $pos11+1, strlen($linjexx));
        //echo "<br>".$inputs;

        //echo "<br>";
        //echo "<br>";
        
        //Bottom

        $pos21 = strpos($inputs, "/", strpos($inputs, "/")+1);
        //echo $pos21;
        $pos211 = strpos($inputs, "/", $pos21+0);
        $linje50 = substr($inputs, $pos211);
        //echo $linje50;

        $linje3 = strstr($linje50, " ", true);
        //echo $linje3;

        $bottom = substr($linje3, 1);

        $inputs = substr_replace($inputs, "<span id='bottom'>$bottom</span></div>", $pos211, strlen($linje3));
        //echo $inputs;
        $input = $inputs;

        $FIRSTRUN1 = false;

        }

        
        //$fristrun = false;
        //$g = $g+2;
    }
}

?>