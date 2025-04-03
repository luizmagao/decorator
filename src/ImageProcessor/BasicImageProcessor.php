<?php

namespace Luizlins\Decorator\ImageProcessor;

class BasicImageProcessor implements ImageProcessorInterface
{

    public function process(string $imagePath): string
    {

        // Lógica para realizar processamento básico da imagem

        $newImagePath = "uploads/file.jpg";
        file_put_contents($newImagePath, "");

        return $newImagePath;
    }
}
