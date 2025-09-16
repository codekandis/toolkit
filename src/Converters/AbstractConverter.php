<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;

/**
 * Represents the base class of any converter.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractConverter extends BaseObject implements ConverterInterface
{
	/**
	 * Gets the enumeration of expected types.
	 * @var ExpectedTypesInterface
	 */
	protected ExpectedTypesInterface $expectedTypes {
		get => $this->expectedTypes ??= new ExpectedTypes();
	}

	/**
	 * Gets the enumeration of valid values.
	 * @var ValidValuesInterface
	 */
	protected ValidValuesInterface $validValues {
		get => $this->validValues ??= new ValidValues();
	}

	/**
	 * Gets the `InvalidTypeException`.
	 * @param mixed $invalidValue The given invalid value.
	 * @param string[] $expectedTypes The expected types.
	 * @return InvalidTypeExceptionInterface The `InvalidTypeException`.
	 */
	protected function getInvalidTypeException( mixed $invalidValue, string ...$expectedTypes ): InvalidTypeExceptionInterface
	{
		$invalidType = new TypeDeterminer()
			->determine( $invalidValue, TypeDeterminationKind::TypeHintDetailed );

		return InvalidTypeException::withInvalidTypeAndExpectedTypes( $invalidType, ...$expectedTypes );
	}

	/**
	 * Gets the `InvalidValueException`.
	 * @param mixed $invalidValue The given invalid value.
	 * @param string[] $expectedValues The expected values.
	 * @return InvalidValueExceptionInterface The `InvalidValueException`.
	 */
	protected function getInvalidValueException( mixed $invalidValue, string ...$expectedValues ): InvalidValueExceptionInterface
	{
		return InvalidValueException::withInvalidValueAndExpectedValues( $invalidValue, ...$expectedValues );
	}
}
