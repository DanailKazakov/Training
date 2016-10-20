<?php

fscanf(STDIN, "%s", $fruit);

switch ($fruit){
    case "banana":
    case "apple":
    case "kiwi":
    case "cherry":
    case "lemon":
    case "grapes":
        fprintf(STDOUT, "fruit");
        break;
    case "tomato":
    case "cucumber":
    case "pepper":
    case "carrot":
        fprintf(STDOUT, "vegetable");
        break;
    default:
        fprintf(STDOUT, "unknown");

}