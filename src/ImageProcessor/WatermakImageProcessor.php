<?php

namespace Luizlins\Decorator\ImageProcessor;

class WatermakImageProcessor implements ImageProcessorInterface
{
    function __construct(
        private ImageProcessorInterface $imageProcessor,
        private string $waltermark
    ) {}

    public function process(string $imagePath): string
    {
        $processedImagePath = $this->imageProcessor->process($imagePath);

        // Lógica para abrir a imagem e adicionar a marca d'agua

        $newImagePath = "uploads/waltermarked_file.jpg";
        file_put_contents($newImagePath, "");

        return $newImagePath;
    }
}
