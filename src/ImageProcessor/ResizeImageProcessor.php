<?php

namespace Luizlins\Decorator\ImageProcessor;

class ResizeImageProcessor implements ImageProcessorInterface
{
    function __construct(
        private ImageProcessorInterface $imageProcessor,
        private int $height,
        private int $width,
    ) {}

    public function process(string $imagePath): string
    {

        $processedImagePath = $this->imageProcessor->process($imagePath);

        // Lǵica do tamanho da imagem

        $newImagePath = "uploads/resized_file.jpg";
        file_put_contents($newImagePath, "");

        return $newImagePath;
    }
}
