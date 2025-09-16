<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Validators\IsInterfaceNameValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;
use ReflectionClass;
use ReflectionException;

/**
 * Represents a unidirectional converter converting the constants of an `interface` into an `array` of corresponding key value pairs.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceConstantsToArrayUniDirectionalConverter extends AbstractConverter implements InterfaceConstantsToArrayUniDirectionalConverterInterface
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
			false === new IsInterfaceNameValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, $this->validValues->interfaceName );
		}

		try
		{
			$reflectedInterface = new ReflectionClass( $value );
		}
		catch ( ReflectionException $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}

		$convertedValue = [];
		foreach ( $reflectedInterface->getConstants() as $constantName => $constantValue )
		{
			$convertedValue[ $constantName ] = $constantValue;
		}

		return $convertedValue;
	}
}
