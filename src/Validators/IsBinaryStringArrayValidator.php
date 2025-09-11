<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `array` containing only elements of type `string` matching the regular expression {@link ValidValues::$regExBinaryString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsBinaryStringArrayValidator extends BaseObject implements IsBinaryStringArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsArrayValidator()->validate( $value )
		)
		{
			return false;
		}

		/** @noinspection PhpUnhandledExceptionInspection */
		$elementValidator = new IsMatchingRegularExpressionValidator( new ValidValues()->regExBinaryString );

		foreach ( $value as $element )
		{
			if (
				false === $elementValidator->validate( $element )
			)
			{
				return false;
			}
		}

		return true;
	}
}
