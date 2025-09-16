<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;
use ReflectionEnum;
use ReflectionException;

/**
 * Represents a unidirectional converter converting a `backed enum` into an `array` of corresponding key value pairs.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter extends AbstractConverter implements BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
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
			false === new IsBackedEnumNameValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, $this->validValues->backedEnumName );
		}

		try
		{
			$reflectedEnum = new ReflectionEnum( $value );
		}
		catch ( ReflectionException $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}

		$convertedValue = [];
		foreach ( $reflectedEnum->getCases() as $case )
		{
			$convertedValue[ $case->getName() ] = $case->getBackingValue();
		}

		return $convertedValue;
	}
}
