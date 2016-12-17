<?php
namespace Bravo\ShopBundle\Component;
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 16.12.2016
 * Time: 20:17
 */
use Doctrine\ORM\EntityManager;

class DefaultComponent
{
    private $em;

    function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getEm()
    {
        return $this->em;
    }
}