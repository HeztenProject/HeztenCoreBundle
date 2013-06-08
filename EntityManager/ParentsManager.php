<?php

namespace Hezten\CoreBundle\EntityManager;

use Doctrine\ORM\EntityManager;

use Hezten\CoreBundle\Model\StudentInterface;
use Hezten\CoreBundle\ModelManager\ParentsManagerInterface;

/**
 * Default ORM ParentsManager.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
class ParentsManager implements ParentsManagerInterface
{
        /**
        * @var EntityManager
        */
        protected $em;

        /**
        * @var DocumentRepository
        */
        protected $repository;

        /**
        * @var string
        */
        protected $class;

        /**
        * Constructor.
        *
        * @param EntityManager     $em
        * @param string            $class
        */
        public function __construct(EntityManager $em, $class)
        {
        $this->em         = $em;
        $this->repository = $em->getRepository($class);
        $this->class      = $em->getClassMetadata($class)->name;
        }
        
        /**
         * 
         * @param integer $studentId The id of the student
         * @return Array of Tutors
         */
        public function findStudentsTutors(StudentInterface $student)
        {                
                $query = $this->em->createQuery(
                                "SELECT p, sp , pp
                                FROM $this->class p JOIN p.students sp LEFT JOIN p.phones pp
                                WHERE sp.student = :studentId"
                );
                
                $query->setParameter('studentId',$student->getId());
                
                return $query->getResult();                     
        }
}