<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;
use function preg_match;

/**
 * Represents a validator validating if a specific value is of type `string` representing a `regular expression`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsRegularExpressionValidator extends BaseObject implements IsRegularExpressionValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsStringValidator()->validate( $value )
			   && false !== @preg_match( $value, '' );
	}
}
