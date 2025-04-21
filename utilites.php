<?php

class utilites
{
//    houses some simple functions
public function rankNumToWord($num)
{
    $rankName = "";
    switch ($num) {
        case 1:
            $rankName = "ACE";
            break;
        case 11:
            $rankName = "JACK";
            break;
        case 12:
            $rankName = "QUEEN";
            break;
        case 13:
            $rankName = "KING";
            break;
        default:
            $rankName = $num;
            break;
    }
    return $rankName;
}
public function rankWordToNum($word)
{
    $rankNum = 0;
    switch ($word) {
        case "ACE":
            $rankNum = 1;
            break;
        case "JACK":
            $rankNum = 11;
            break;
        case "QUEEN":
            $rankNum = 12;
            break;
        case "KING":
            $rankNum = 13;
            break;
        default:
            $rankNum = $word;
            break;
    }
    return $rankNum;
}
}