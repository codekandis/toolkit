<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerValidator;
use CodeKandis\ToolKit\Validators\IsIntegerValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `boolean integer` value equal to {@link ValidValues::$booleanIntegerFalse} or {@link ValidValues::$booleanIntegerTrue} into its corresponding `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanIntegerToBooleanUniDirectionalConverter extends AbstractConverter implements BooleanIntegerToBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): bool
	{
		if (
			false === new IsIntegerValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->integer );
		}

		if (
			false === new IsBooleanIntegerValidator()
				->validate( $value )
		)
		{
			$expectedValues = [];
			foreach ( $this->validValues->booleanIntegerSet as $booleanInteger )
			{
				$expectedValues[] = (string) $booleanInteger;
			}

			throw $this->getInvalidValueException( $value, ...$expectedValues );
		}

		return $this->validValues->booleanIntegerTrue === $value;
	}
}
