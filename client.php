<?php

use Luizlins\Decorator\ImageProcessor\BasicImageProcessor;

require 'vendor/autoload.php';

$imagePath = '/tmp/file.jpg';

$imageProcessor = new BasicImageProcessor();
$imageProcessor->process($imagePath);
