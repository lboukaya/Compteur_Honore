<?php

namespace App\Repository;

use App\Entity\Ingredientsrecettes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ingredientsrecettes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ingredientsrecettes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ingredientsrecettes[]    findAll()
 * @method Ingredientsrecettes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IngredientsrecettesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ingredientsrecettes::class);
    }

 /**
* @return Ingredientsrecettes[] Returns an array of Ingredientsrecettes objects
*/

    public function findByRecetteId($recetteId)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.recette_id = :rec')
            ->setParameter('rec', $recetteId)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Ingredientsrecettes
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
