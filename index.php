<?php
$ext = strrchr($_SERVER['HTTP_HOST'], '.');
if ($ext === '.fr')
  require 'french.html';
else
  require 'english.html';
