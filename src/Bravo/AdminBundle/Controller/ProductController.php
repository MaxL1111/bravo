<?php

namespace Bravo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AdminBundle:Products')->findAll();
        return $this->render('AdminBundle:Products:index.html.twig',[
            "products" => $products,
        ]);
    }
}