<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;
use function class_exists;

/**
 * Represents a validator validating if a specific value is of type `string` representing a valid class name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsClassNameValidator extends BaseObject implements IsClassNameValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsStringValidator()->validate( $value )
			   && false === new IsEnumNameValidator()->validate( $value )
			   && class_exists( $value, true );
	}
}
