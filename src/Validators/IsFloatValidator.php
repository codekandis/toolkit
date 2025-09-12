<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;
use function is_float;
use function is_int;

/**
 * Represents a validator validating if a specific value is of type `float`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsFloatValidator extends BaseObject implements IsFloatValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return is_int( $value )
			   || is_float( $value );
	}
}
