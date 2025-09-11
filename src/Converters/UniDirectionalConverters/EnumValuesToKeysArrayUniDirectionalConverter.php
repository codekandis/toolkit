<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Validators\IsEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use Override;
use ReflectionEnum;

/**
 * Represents a unidirectional converter converting an `enum` into an `array` of corresponding keys.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumValuesToKeysArrayUniDirectionalConverter extends AbstractConverter implements EnumValuesToKeysArrayUniDirectionalConverterInterface
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
			false === new IsEnumNameValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, $this->validValues->enumName );
		}

		/** @noinspection PhpUnhandledExceptionInspection */
		$reflectedEnum = new ReflectionEnum( $value );

		$convertedValue = [];
		foreach ( $reflectedEnum->getCases() as $case )
		{
			$convertedValue[] = $case->getName();
		}

		return $convertedValue;
	}
}
