<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters;

/**
 * Represents the interface of any enumeration of expected types.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ExpectedTypesInterface
{
	/**
	 * Gets the `NULL` type.
	 * @var string
	 */
	public string $null {
		get;
	}

	/**
	 * Gets the `boolean` type.
	 * @var string
	 */
	public string $boolean {
		get;
	}

	/**
	 * Gets the `nullable boolean` type.
	 * @var string
	 */
	public string $nullableBoolean {
		get;
	}

	/**
	 * Gets the `boolean array` type.
	 * @var string
	 */
	public string $booleanArray {
		get;
	}

	/**
	 * Gets the `nullable boolean array` type.
	 * @var string
	 */
	public string $nullableBooleanArray {
		get;
	}

	/**
	 * Gets the `boolean` type.
	 * @var string
	 */
	public string $integer {
		get;
	}

	/**
	 * Gets the `nullable boolean` type.
	 * @var string
	 */
	public string $nullableInteger {
		get;
	}

	/**
	 * Gets the `float` type.
	 * @var string
	 */
	public string $float {
		get;
	}

	/**
	 * Gets the `nullable float` type.
	 * @var string
	 */
	public string $nullableFloat {
		get;
	}

	/**
	 * Gets the `string` type.
	 * @var string
	 */
	public string $string {
		get;
	}

	/**
	 * Gets the `nullable string` type.
	 * @var string
	 */
	public string $nullableString {
		get;
	}

	/**
	 * Gets the `DateTimeImmutable` type.
	 * @var string
	 */
	public string $dateTimeImmutable {
		get;
	}

	/**
	 * Gets the `nullable DateTimeImmutable` type.
	 * @var string
	 */
	public string $nullableDateTimeImmutable {
		get;
	}

	/**
	 * Gets the `DateTime` type.
	 * @var string
	 */
	public string $dateTime {
		get;
	}

	/**
	 * Gets the `nullable DateTime` type.
	 * @var string
	 */
	public string $nullableDateTime {
		get;
	}
}
