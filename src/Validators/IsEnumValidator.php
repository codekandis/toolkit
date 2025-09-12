<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;
use UnitEnum;

/**
 * Represents a validator validating if a specific value is of type `enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsEnumValidator extends BaseObject implements IsEnumValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsObjectValidator()->validate( $value )
			   && $value instanceof UnitEnum;
	}
}
