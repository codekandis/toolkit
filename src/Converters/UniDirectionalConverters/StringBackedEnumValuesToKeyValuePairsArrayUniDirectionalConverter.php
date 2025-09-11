<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use Override;
use ReflectionEnum;

/**
 * Represents a unidirectional converter converting a `string backed enum` into an `array` of corresponding key value pairs.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter extends AbstractConverter implements StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): array
	{
		if (
			false === new IsStringValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->string );
		}

		if (
			false === new IsStringBackedEnumNameValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, $this->validValues->stringBackedEnumName );
		}

		/** @noinspection PhpUnhandledExceptionInspection */
		$reflectedEnum = new ReflectionEnum( $value );

		$convertedValue = [];
		foreach ( $reflectedEnum->getCases() as $case )
		{
			$convertedValue[ $case->getName() ] = $case->getBackingValue();
		}

		return $convertedValue;
	}
}
