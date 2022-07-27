<?php
require_once '../vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

$img = $_FILES['imagem'];

$imgString = strval($img['tmp_name']);

if(isset($img) && $img != null) {

        $ocr = new TesseractOCR($imgString);

        $ocr->executable('C:\Users\cales.junes\AppData\Local\Tesseract-OCR\tesseract.exe');
        echo $ocr->run();
    } else{
    echo "Nenhuma imagem encontrada!";
}
