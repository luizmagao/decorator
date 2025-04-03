<?php

use Luizlins\Decorator\ImageProcessor\BasicImageProcessor;
use Luizlins\Decorator\ImageProcessor\WatermakImageProcessor;

require 'vendor/autoload.php';

$imagePath = '/tmp/file.jpg';

$imageProcessor = new BasicImageProcessor();

$imageProcessor = new WatermakImageProcessor($imageProcessor, 'Marca d\'agua');

$imageProcessor->process($imagePath);
