<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsBooleanArrayValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `boolean array` containing only values equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `binary string` value matching the regular expression {@link ValidValues::$regExBinaryString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanArrayToBinaryStringUniDirectionalConverter extends AbstractConverter implements BooleanArrayToBinaryStringUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === new IsBooleanArrayValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->booleanArray );
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
