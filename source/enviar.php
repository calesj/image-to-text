<?php
require_once '../vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

//Trazendo a imagem do index
$img = $_FILES['imagem'];

//pegando o caminho do arquivo temporario que foi alocado na memoria do PHP e o transformando em string
$imgString = strval($img['tmp_name']);

//Se existir uma imagem da andamento no processo
if(isset($img) && $img != null) {

        //instanciando o tesseract, e o colocando o caminho da imagem temporaria na instância
        $ocr = new TesseractOCR($imgString);

        //Colocando o caminho de onde foi instalado o tesseract,
        // (Se o tesseract estiver no path do seu sistema operacional, acredito que não seja necessario
        $ocr->executable('C:\Users\cales.junes\AppData\Local\Tesseract-OCR\tesseract.exe');
        echo $ocr->run();
    } else{
    echo "Nenhuma imagem encontrada!";
}
