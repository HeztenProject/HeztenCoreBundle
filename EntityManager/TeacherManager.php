<?php

namespace Hezten\CoreBundle\EntityManager;

use Doctrine\ORM\EntityManager;

use Hezten\CoreBundle\ModelManager\TeacherManagerInterface;
use Hezten\CoreBundle\Model\CourseInterface;
use Hezten\CoreBundle\Model\TeacherInterface;
use Hezten\CoreBundle\Model\AcademicYearInterface;


/**
 * Default ORM TeacherManager.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
class TeacherManager implements TeacherManagerInterface
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
	
	public function findFilteredTeachers($name, $amount = 10)
	{
		$config = $this->em->getConfiguration();
		$config->addCustomNumericFunction('CONCAT_WS', 'DoctrineExtensions\Query\Mysql\ConcatWs');

		$query = $this->em->createQuery(
				"SELECT t
				FROM $this->class t
				WHERE CONCAT_WS(' ',t.name, t.surname) LIKE :name
				ORDER BY t.surname ASC,  t.name ASC"
		);

		$query->setParameter('name','%' . $name . '%');
		$query->setMaxResults($amount);

		return $query->getResult();
	}	
}