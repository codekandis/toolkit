<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use BackedEnum;
use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsBackedEnumValidator extends BaseObject implements IsBackedEnumValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsObjectValidator()->validate( $value )
			   && $value instanceof BackedEnum;
	}
}
