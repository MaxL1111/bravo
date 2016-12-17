<?php

namespace Bravo\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/index", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        //$servis = $this->get("bravo_shop.example");
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('BravoShopBundle:Products')->findAll();
        return $this->render('BravoShopBundle:shopping:index.html.twig',
            [
                "products" => $products,
            ]
        );
    }
}
