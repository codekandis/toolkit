<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters;

/**
 * Represents the interface of any enumeration of valid values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ValidValuesInterface
{
	/**
	 * Gets the `null` value.
	 * @var null
	 */
	public null $null {
		get;
	}

	/**
	 * Gets the `string` representing the value `null`.
	 * @var string
	 */
	public string $nullString {
		get;
	}

	/**
	 * Gets the `boolean` representing the boolean value `false`.
	 * @var bool
	 */
	public bool $booleanFalse {
		get;
	}

	/**
	 * Gets the `boolean` representing the boolean value `true`.
	 * @var bool
	 */
	public bool $booleanTrue {
		get;
	}

	/**
	 * Gets the `boolean integer` representing the boolean value `false`.
	 * @var int
	 */
	public int $booleanIntegerFalse {
		get;
	}

	/**
	 * Gets the `boolean integer` representing the boolean value `true`.
	 * @var int
	 */
	public int $booleanIntegerTrue {
		get;
	}

	/**
	 * Gets the set of `boolean integers`.
	 * @var int[]
	 */
	public array $booleanIntegerSet {
		get;
	}

	/**
	 * Gets the `boolean string` representing the boolean value `false`.
	 * @var string
	 */
	public string $booleanStringFalse {
		get;
	}

	/**
	 * Gets the `boolean string` representing the boolean value `true`.
	 * @var string
	 */
	public string $booleanStringTrue {
		get;
	}

	/**
	 * Gets the regular expression of a `boolean string` value.
	 * @var string
	 */
	public string $regExBooleanString {
		get;
	}

	/**
	 * Gets the `boolean integer string` representing the boolean value `false`.
	 * @var string
	 */
	public string $booleanIntegerStringFalse {
		get;
	}

	/**
	 * Gets the `boolean integer string` representing the boolean value `true`.
	 * @var string
	 */
	public string $booleanIntegerStringTrue {
		get;
	}

	/**
	 * Gets the regular expression of a `boolean integer string` value.
	 * @var string
	 */
	public string $regExBooleanIntegerString {
		get;
	}

	/**
	 * Gets the regular expression of an `integer string` value.
	 * @var string
	 */
	public string $regExIntegerString {
		get;
	}

	/**
	 * Gets the regular expression of a `float string` value.
	 * @var string
	 */
	public string $regExFloatString {
		get;
	}

	/**
	 * Gets the regular expression of a `binary string` value.
	 * @var string
	 */
	public string $regExBinaryString {
		get;
	}

	/**
	 * Gets the name of an `enum`.
	 * @var string
	 */
	public string $enumName {
		get;
	}

	/**
	 * Gets the name of a `backed enum`.
	 * @var string
	 */
	public string $backedEnumName {
		get;
	}

	/**
	 * Gets the name of an `integer backed enum`.
	 * @var string
	 */
	public string $integerBackedEnumName {
		get;
	}

	/**
	 * Gets the name of a `string backed enum`.
	 * @var string
	 */
	public string $stringBackedEnumName {
		get;
	}

	/**
	 * Gets the name of a `interface`.
	 * @var string
	 */
	public string $interfaceName {
		get;
	}

	/**
	 * Gets the name of a `class`.
	 * @var string
	 */
	public string $className {
		get;
	}

	/**
	 * Gets the name of an `interface` or `class`.
	 * @var string
	 */
	public string $interfaceOrClassName {
		get;
	}

	/**
	 * Gets the template of a `DateTime string`.
	 * @var string
	 */
	public string $dateTimeStringTemplate {
		get;
	}

	/**
	 * Creates a `DateTime string` by a specific format.
	 * @param string $format The format to create the `DateTime string` from.
	 * @return string The created `DateTime string` from.
	 */
	public function createDateTimeString( string $format ): string;
}
