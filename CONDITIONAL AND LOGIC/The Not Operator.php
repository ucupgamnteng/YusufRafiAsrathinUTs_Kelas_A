<?php
namespace Codecademy;

function duckDuckGoose($is_goose){
  if (!$is_goose){
    return "bebek";
  } else {
    return "angsa!";
  }
}

echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(TRUE);