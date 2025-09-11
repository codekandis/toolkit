<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;
use function interface_exists;

/**
 * Represents a validator validating if a specific value is of type `string` representing a valid interface name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInterfaceNameValidator extends BaseObject implements IsInterfaceNameValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsStringValidator()->validate( $value )
			   && interface_exists( $value, true );
	}
}
