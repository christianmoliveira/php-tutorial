<?php

function find($needle, $haystack) 
{
  return strpos($haystack, $needle);
}

// Forma comum
echo find('awesome', 'PHP is awesome!');

// Com argumentos nomeados
echo find(needle: 'awesome', haystack: 'PHP is awesome!');

function create_anchor(
  $text,
  $href= '#',
  $title = '',
  $target = '_self'
) {}

$link = create_anchor(
  text: 'PHP Tutorial',
  href: 'https://www.phptutorial.net/',
  target: '_blank'
);