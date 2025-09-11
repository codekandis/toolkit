<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsIntegerValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use Override;
use function decbin;

/**
 * Represents a unidirectional converter converting a `nullable integer` value into its corresponding `nullable binary string` value matching the regular expression {@link ValidValues::$regExBinaryString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntegerToNullableBinaryStringUniDirectionalConverter extends AbstractConverter implements NullableIntegerToNullableBinaryStringUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): ?string
	{
		if (
			true === new IsNullValidator()
				->validate( $value )
		)
		{
			return $this->validValues->null;
		}

		if (
			false === new IsIntegerValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->nullableInteger );
		}

		return decbin( $value );
	}
}
