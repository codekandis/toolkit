<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerValidator;
use CodeKandis\ToolKit\Validators\IsIntegerValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `nullable boolean integer` value equal to {@link ValidValues::$booleanIntegerFalse} or {@link ValidValues::$booleanIntegerTrue} into its corresponding `nullable boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanIntegerToNullableBooleanUniDirectionalConverter extends AbstractConverter implements NullableBooleanIntegerToNullableBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): ?bool
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
