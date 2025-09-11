<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `string` matching the regular expression {@link ValidValues::$regExIntegerString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsIntegerStringValidator extends BaseObject implements IsIntegerStringValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		/** @noinspection PhpUnhandledExceptionInspection */
		return new IsMatchingRegularExpressionValidator( new ValidValues()->regExIntegerString )->validate( $value );
	}
}
