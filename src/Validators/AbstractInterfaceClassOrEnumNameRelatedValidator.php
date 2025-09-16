<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundException;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundExceptionInterface;

/**
 * Represents the base class of any interface, class or enum name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractInterfaceClassOrEnumNameRelatedValidator extends BaseObject implements InterfaceClassOrEnumNameRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public string $interfaceClassOrEnumName {
		get => $this->interfaceClassOrEnumName;
	}

	/**
	 * Constructor method.
	 * @param string $interfaceClassOrEnumName The name of the interface, class or enum to manage.
	 * @throws InterfaceClassOrEnumNotFoundExceptionInterface The interface, class or enum does not exist.
	 */
	public function __construct( string $interfaceClassOrEnumName )
	{
		$this->interfaceClassOrEnumName = $interfaceClassOrEnumName;

		if (
			false === new IsInterfaceClassOrEnumNameValidator()->validate( $this->interfaceClassOrEnumName )
		)
		{
			throw InterfaceClassOrEnumNotFoundException::withNonExistentInterfaceClassOrEnumName( $this->interfaceClassOrEnumName );
		}
	}
}
