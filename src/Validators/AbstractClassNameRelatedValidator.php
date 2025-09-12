<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\ClassNotFoundException;
use CodeKandis\Types\ClassNotFoundExceptionInterface;

/**
 * Represents the base class of any class name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractClassNameRelatedValidator extends BaseObject implements ClassNameRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public string $className {
		get => $this->className;
	}

	/**
	 * Constructor method.
	 * @param string $className The name of the class to manage.
	 * @throws ClassNotFoundExceptionInterface The class does not exist.
	 */
	public function __construct( string $className )
	{
		$this->className = $className;

		if (
			false === new IsClassNameValidator()->validate( $this->className )
		)
		{
			throw ClassNotFoundException::withNonExistentClassName( $this->className );
		}
	}
}
