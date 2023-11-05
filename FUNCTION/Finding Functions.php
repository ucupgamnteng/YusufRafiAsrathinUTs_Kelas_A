<?php
namespace Codecademy;

// Write your code below:
function convertToShout($str)
{
  return strtoupper($str) . "!";
}

function tipGenerously($cost)
{
  return ceil($cost * 1.2);
}

function calculateCircleArea($diameter)
{
  return pi() * ($diameter/2)**2;
}

echo convertToShout("haiii"); 
echo "\n";
echo convertToShout("yesss");

echo "\n";
echo tipGenerously(100.00); 
echo "\n";
echo tipGenerously(982.27);
echo "\n";
echo calculateCircleArea(6); 
echo "\n";
echo calculateCircleArea(29); 
