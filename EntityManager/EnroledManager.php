<?php

namespace Hezten\CoreBundle\EntityManager;

use Doctrine\ORM\EntityManager;

use Hezten\CoreBundle\ModelManager\EnroledManagerInterface;

use Hezten\CoreBundle\Model\SubjectInterface;

/* Default ORM EnroledManager.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
class EnroledManager implements EnroledManagerInterface
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

    public function findEnroledBySubject(SubjectInterface $subject)
     {    
        $query = $this->em->createQuery(
                "SELECT e, st, su
                FROM $this->class e JOIN e.student st JOIN e.subject su
                WHERE su.id = :subjectId 
                ORDER BY st.surname ASC, st.name ASC
                "
                );
        $query->setParameter('subjectId', $subject->getId());
        
        return $query->getResult();
     }
 }