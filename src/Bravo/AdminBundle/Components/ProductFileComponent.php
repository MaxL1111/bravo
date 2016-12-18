<?php
namespace Bravo\AdminBundle\Components;

use Doctrine\ORM\EntityManager;

class ProductFileComponent
{
    private $em;
    private $fileName = "products.txt";
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    private function getProducts()
    {
        return $this->em->getRepository("AdminBundle:Products")->findAll();
    }

    public function showFile()
    {
        $produts = $this->getProducts();
        $str = "";
        foreach ($produts as $produt){
            $str .= $produt->getId()." | ".$produt->getTitle()." | ".$produt->getPrice()." \r\n";
        }
        $file = fopen($this->getFileName(), "w");
        fwrite($file, $str);
    }

    public function deleteFile()
    {
        unlink($this->getFileName());
    }
}