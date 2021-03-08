<?php

    include "includes/ordliste.php";

    if (isset($_POST['textarea'])) {
        $input = " ".$_POST['textarea']." ";
    } else {
        $input = "";
    }

    $input = str_replace("\n", " \n", $input);

    $input = str_replace("f(", $funktion."(", $input);
    $input = str_replace(" / ", " division ", $input);
    $input = str_replace("/", "division", $input);


    //include "includes/broeker.php";
    //echo $input;
    include "includes/vektor.php";
    //echo $input;

    $charcount = substr_count($input, "^");
    //hvis input indeholder "^"
    if ($charcount > 0) {
        for ($i = 0; $i < $charcount; $i++) {

            //"^bc a^bcd"
            $linje1 = strstr($input, "^");
            //echo $linje1."<br>";
            //"^bc"
            $linje2 = strstr($linje1, " ", true);
            //echo $linje2."<br>";
            //"bc"
            $linje10 = substr($linje2, 1);
            //echo $linje10."<br>";
            //"2"
            $pos = strpos($input, "^");
            //echo $pos."<br>";

            //                       input      replacement      start = 2    length = 3
            $input = substr_replace($input, "<sup>$linje10</sup> ", $pos, strlen($linje2));
            //echo $input;
            //echo "<sup>$linje10</sup>";
            //echo $pos;
        }
    }

    $input = str_replace("vektor ", "&#x1d497;;", $input);

    $charcount2 = substr_count($input, ";");

    if ($charcount2 > 0) {
        for ($i = 0; $i < $charcount2; $i++) {

            $linje1 = strstr($input, ";");
            $linje2 = strstr($linje1, " ", true);
            $linje10 = substr($linje2, 1);
            $pos = strpos($input, ";");

            $input = substr_replace($input, "<sub>$linje10</sub> ", $pos, strlen($linje2));


        }
    }

    
    $charcount3 = substr_count($input, "__");

    if ($charcount3 > 0) {
        for ($i = 0; $i < $charcount3; $i++) {

            $linje3 = strstr($input, "__");
            $linje4 = strstr($linje3, " ", true);
            $linje10 = substr($linje4, 2);
            $pos1 = strpos($input, "__");

            $input = substr_replace($input, "\u{221B}<span class='overline'>$linje10</span>", $pos1, strlen($linje4));

        }
    }

    $charcount3 = substr_count($input, "_");

    if ($charcount3 > 0) {
        for ($i = 0; $i < $charcount3; $i++) {

            $linje3 = strstr($input, "_");
            $linje4 = strstr($linje3, " ", true);
            $linje10 = substr($linje4, 1);
            $pos1 = strpos($input, "_");

            $input = substr_replace($input, "\u{0221A}<span class='overline'>$linje10</span>", $pos1, strlen($linje4));

        }
    }
    include "includes/division.php";

    $slash = " /";

    $pattern = array(
        
        "*", 
        //"kvadratrod",
        //"sqrt",
        //"rod2",
        "gange",
        "er vinkelret på",
        "er vinkelret med", 
        "er ca",
        "er ca.",
        "er cirka", 
        "ca",
        "+-",
        "-+",
        "vinkel ",
        "vinkel", 
        "  ", 
        "<->",
        "pil til begge sider",
        "->",
        "<-",
        "pil til højre",
        "pil til venstre",
        "højrepil",
        "venstrepil",
        "vinkelret",


        "er mindre end eller lig med",
        "er større end eller lig med",
        "mindre end eller lig med",
        "større end eller lig med",

        "er mindre end",
        "er større end",
        "mindre end",
        "større end",
        "er ikke lig med",
        "ikke lig med",
        "<=",
        "=<",
        "er mindre eller lig med",
        "mindre eller lig med",
        ">=",
        "=>",
        "er større eller lig med",
        "større eller lig med",

        " grader",

        "-",
        "minus",
        "+",
        "plus",

        "pi", 
        "er lig med",

        //"^",
        //" / ",
        //$slash,
        //"divider",
        //"f",
        " er "

    );

    $replacement = array(

        $gange,
        //$kvadratrod,
        //$kvadratrod,
        //$kvadratrod,
        $gange,
        $vinkelret,
        $vinkelret,
        $cirka,
        $cirka,
        $cirka,
        $cirka,
        $plusmimus,
        $minusplus,
        $vinkel,
        $vinkel,
        $dobbeltmellemrum,
        $pilbegge,
        $pilbegge,
        $pilhøjre,
        $pilvenstre,
        $pilhøjre,
        $pilvenstre,
        $pilhøjre,
        $pilvenstre,
        $vinkelret,

        $mindreendellerligmed,
        $størreendellerligmed,
        $mindreendellerligmed,
        $størreendellerligmed,

        $mindreend,
        $størreend,
        $mindreend,
        $størreend,
        $ikkeligmed,
        $ikkeligmed,
        $mindreendellerligmed,
        $mindreendellerligmed,
        $mindreendellerligmed,
        $mindreendellerligmed,
        $størreendellerligmed,
        $størreendellerligmed,
        $størreendellerligmed,
        $størreendellerligmed,

        $grader,

        $minus,
        $minus,
        $plus,
        $plus,

        $pi,
        $ligmed,
        //$potens,
        //$divider,
        //$divider,
        //$divider,
        //$funktion,
        " = "
    );

    

    $output = str_ireplace ($pattern, $replacement, $input, $count);
    //echo $input;
    //$output = $input;
    //echo $count;


?>