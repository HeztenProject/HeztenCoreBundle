<?php

namespace Hezten\CoreBundle\EntityManager;

use Hezten\CoreBundle\ModelManager\AcademicYearManagerInterface;


/**
 * Default ORM AcademicYearManager.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
class AcademicYearManager implements AcademicYearManagerInterface
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
	 * Retrive the academic year requested or current if nothing is specified
	 * 
	 * @param string $academicYearId The requested academic year
	 * @return AcademicYear
	 */
	 public function getAcademicYear($academicYearId = null)
	 {
	 	if ($academicYearId == null) // No academic year specified, returns current
	 		return $this->repository->findOneBy(array("current" => true));
	 	else //An academic year has been requested
	 		return $this->repository->findOneBy(array("id" => $academicYearId));
	 }
}