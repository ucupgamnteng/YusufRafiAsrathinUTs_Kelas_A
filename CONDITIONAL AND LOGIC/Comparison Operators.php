<?php
namespace Codecademy;

function chooseCheckoutLane($items)
{
  if ($items <= 12){
    return "jalur ekspres";
  } else {
    return "jalur reguler";
  }
}

function canIVote ($age) 
{
    if($age >= 18){
        return "iya";
       } else {
       return "tidak";
    }
 }

echo chooseCheckoutLane(1);
echo "\n\n";
echo chooseCheckoutLane(13);
echo "\n\n";
echo canIVote(19);
echo "\n\n";
echo canIVote(13);