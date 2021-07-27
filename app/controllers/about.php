<?php

use app\classes\Layout;

$layout = new Layout;

$layout->add('about');

$layout->setData([
    'title' => 'About'
  ]);