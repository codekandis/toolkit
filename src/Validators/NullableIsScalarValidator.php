<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of types `nullable boolean`, `nullable integer`, `nullable float` or `nullable string`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsScalarValidator extends BaseObject implements NullableIsScalarValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsScalarValidator()->validate( $value );
	}
}
