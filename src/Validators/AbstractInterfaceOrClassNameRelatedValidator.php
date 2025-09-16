<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\InterfaceOrClassNotFoundException;
use CodeKandis\Types\InterfaceOrClassNotFoundExceptionInterface;

/**
 * Represents the base class of any interface or class name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractInterfaceOrClassNameRelatedValidator extends BaseObject implements InterfaceOrClassNameRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public string $interfaceOrClassName {
		get => $this->interfaceOrClassName;
	}

	/**
	 * Constructor method.
	 * @param string $interfaceOrClassName The name of the interface or class to manage.
	 * @throws InterfaceOrClassNotFoundExceptionInterface The interface or class does not exist.
	 */
	public function __construct( string $interfaceOrClassName )
	{
		$this->interfaceOrClassName = $interfaceOrClassName;

		if (
			false === new IsInterfaceOrClassNameValidator()->validate( $this->interfaceOrClassName )
		)
		{
			throw InterfaceOrClassNotFoundException::withNonExistentInterfaceOrClassName( $this->interfaceOrClassName );
		}
	}
}
