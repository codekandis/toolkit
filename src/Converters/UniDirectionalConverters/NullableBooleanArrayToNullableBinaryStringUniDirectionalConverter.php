<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsBooleanArrayValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `nullable boolean array` containing only values equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `nullable binary string` value matching the regular expression {@link ValidValues::$regExBinaryString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter extends AbstractConverter implements NullableBooleanArrayToNullableBinaryStringUniDirectionalConverterInterface
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
			false === new IsBooleanArrayValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->nullableBooleanArray );
		}

		$binaryString = '';
		foreach ( $value as $valueFetched )
		{
			$binaryString .= $this->validValues->booleanFalse === $valueFetched
				? $this->validValues->booleanIntegerStringFalse
				: $this->validValues->booleanIntegerStringTrue;
		}

		return $binaryString;
	}
}
