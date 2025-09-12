<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\InterfaceNotFoundException;
use CodeKandis\Types\InterfaceNotFoundExceptionInterface;

/**
 * Represents the base class of any interface name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractInterfaceNameRelatedValidator extends BaseObject implements InterfaceNameRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public string $interfaceName {
		get => $this->interfaceName;
	}

	/**
	 * Constructor method.
	 * @param string $interfaceName The name of the interface to manage.
	 * @throws InterfaceNotFoundExceptionInterface The interface does not exist.
	 */
	public function __construct( string $interfaceName )
	{
		$this->interfaceName = $interfaceName;

		if (
			false === new IsInterfaceNameValidator()->validate( $this->interfaceName )
		)
		{
			throw InterfaceNotFoundException::withNonExistentInterfaceName( $this->interfaceName );
		}
	}
}
