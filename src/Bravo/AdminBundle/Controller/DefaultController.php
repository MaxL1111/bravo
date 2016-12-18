<?php

namespace Bravo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $file = $this->get("admin.product-file");
        if($request->get("getProducts") == "get"){
            $file->showFile();
            echo('
                <script type="text/javascript">
                window.onload=function(e)
                {
                  window.open("http://symfony.local/web/products.txt");
                }
                </script>');
        }
        return $this->render('AdminBundle:Default:index.html.twig');
    }
}
