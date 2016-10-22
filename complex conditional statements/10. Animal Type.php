<?php

fscanf(STDIN, "%s", $animal);

switch($animal){
    case "dog":
        printf("mammal");
        break;
    case "crocodile":
    case "tortoise":
    case "snake":
        printf("reptile");
        break;
    default:
        printf("unknown");
}