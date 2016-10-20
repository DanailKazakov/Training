<?php

fscanf(STDIN,"%s",$n);
fscanf(STDIN,"%s",$m);
fscanf(STDIN,"%f",$l);

$prices = array
(
    array(0.50,0.80,1.20,1.45,1.60),
    array(0.40,0.70,1.15,1.30,1.50),
    array(0.45,0.70,1.10,1.35,1.55),
);

if ($n == "coffee"){
    if ($m == "Sofia"){
        fprintf(STDOUT,"%s",$l * $prices[0][0]);
    }
    elseif ($m == "Plovdiv"){
        fprintf(STDOUT,"%s",$l * $prices[1][0]);
    }
    elseif ($m == "Varna"){
        fprintf(STDOUT,"%s",$l * $prices[2][0]);
    }
}
elseif ($n == "water"){
    if ($m == "Sofia"){
        fprintf(STDOUT,"%s",$l * $prices[0][1]);
    }
    elseif ($m == "Plovdiv"){
        fprintf(STDOUT,"%s",$l * $prices[1][1]);
    }
    elseif ($m == "Varna"){
        fprintf(STDOUT,"%s",$l * $prices[2][1]);
    }
}
elseif ($n == "beer"){
    if ($m == "Sofia"){
        fprintf(STDOUT,"%s",$l * $prices[0][2]);
    }
    elseif ($m == "Plovdiv"){
        fprintf(STDOUT,"%s",$l * $prices[1][2]);
    }
    elseif ($m == "Varna"){
        fprintf(STDOUT,"%s",$l * $prices[2][2]);
    }
}
elseif ($n == "sweets"){
    if ($m == "Sofia"){
        fprintf(STDOUT,"%s",$l * $prices[0][3]);
    }
    elseif ($m == "Plovdiv"){
        fprintf(STDOUT,"%s",$l * $prices[1][3]);
    }
    elseif ($m == "Varna"){
        fprintf(STDOUT,"%s",$l * $prices[2][3]);
    }
}
elseif ($n == "peanuts"){
    if ($m == "Sofia"){
        fprintf(STDOUT,"%s",$l * $prices[0][4]);
    }
    elseif ($m == "Plovdiv"){
        fprintf(STDOUT,"%s",$l * $prices[1][4]);
    }
    elseif ($m == "Varna"){
        fprintf(STDOUT,"%s",$l * $prices[2][4]);
    }
}