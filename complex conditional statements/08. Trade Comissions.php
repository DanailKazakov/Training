<?php

fscanf(STDIN, "%s", $city);
fscanf(STDIN, "%f", $sales);

if ($sales < 0 || ($city != "Sofia" && $city != "Varna" && $city != "Plovdiv")){
    printf("error");
}
else {
    if (0 <= $sales && $sales <= 500){
        if ($city == "Sofia"){
            printf("%.2f", round(0.05 * $sales, 2));
        }
        elseif ($city == "Varna"){
            printf("%.2f", round(0.045 * $sales, 2));
        }
        elseif ($city == "Plovdiv"){
            printf("%.2f", round(0.055 * $sales, 2));
        }
    }
    elseif (500 < $sales && $sales <= 1000){
        if ($city == "Sofia"){
            printf("%.2f", round(7 / 100 * $sales, 2));
        }
        elseif ($city == "Varna"){
            printf("%.2f", round(7.5 / 100 * $sales, 2));
        }
        elseif ($city == "Plovdiv"){
            printf("%.2f", round(8 / 100 * $sales, 2));
        }
    }
    elseif (1000 < $sales && $sales <= 10000){
        if ($city == "Sofia"){
            $result = round(8 / 100 * $sales, 2);
            printf("%.2f", $result);
        }
        elseif ($city == "Varna"){
            $result = round(10 / 100 * $sales, 2);
            printf("%.2f", $result);
        }
        elseif ($city == "Plovdiv"){
            $result = round(12 / 100 * $sales, 2);
            printf("%.2f", $result);
        }
    }
    elseif (10000 < $sales){
        if ($city == "Sofia"){
            $result = round((12 / 100 * $sales), 2);
            printf("%.2f", $result);
        }
        elseif ($city == "Varna"){
            $result = round((13 / 100 * $sales), 2);
            printf("%.2f", $result);
        }
        elseif ($city == "Plovdiv"){
            $result = round((14.5 / 100 * $sales), 2);
            printf("%.2f", $result);
        }
    }
}
