<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;
use function is_scalar;

/**
 * Represents a validator validating if a specific value is of types `boolean`, `integer`, `float` or `string`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsScalarValidator extends BaseObject implements IsScalarValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return is_scalar( $value );
	}
}
