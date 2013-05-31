<?php

namespace Hezten\CoreBundle\ModelManager;

/**
 * Interface to be implemented by academic year managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to academic years should happen through this interface.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
interface AcademicYearManagerInterface
{
	/**
	 * Retrive the academic year requested. In case is null, current academic year is returned
	 * 
	 * @param string $academicYearId The requested academic year
	 * @return AcademicYear
	 */
	 public function getAcademicYear($academicYearId = null);
}