<?php

namespace Luizlins\Decorator\ImageProcessor;

interface ImageProcessorInterface
{
    public function process(string $imagePath) : string;
}
