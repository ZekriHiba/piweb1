<?php

namespace ShopBundle\Repository;

/**
 * testRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class testRepository extends \Doctrine\ORM\EntityRepository
{
    public function showCart($i)
    {
        $q=$this->getEntityManager()->createQuery("select cl from ShopBundle:CommandLine cl where cl.orderId=:i")
        ->setParameter('i',$i);

        return $q->getResult();

    }

    public function getProductsCart($i)
    {
        $q=$this->getEntityManager()->createQuery("select p from ShopBundle:Product p where p.idProduct=:i")
            ->setParameter('i',$i);
        return $q->getResult();
    }

    public function proExiste($i,$p)
    {
        $q=$this->getEntityManager()->createQuery("select cl from ShopBundle:CommandLine cl where cl.orderId=:i and cl.poductId=:p")
            ->setParameter('i',$i)->setParameter('p',$p);

        return $q->getResult();

    }
}
