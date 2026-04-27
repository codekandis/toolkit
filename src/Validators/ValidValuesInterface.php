<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any enumeration of valid values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ValidValuesInterface
{
	/**
	 * Gets the value `null`.
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
	 * Gets the `boolean integer` representing the `boolean` value `false`.
	 * @var int
	 */
	public int $booleanIntegerFalse {
		get;
	}

	/**
	 * Gets the `boolean integer` representing the `boolean` value `true`.
	 * @var int
	 */
	public int $booleanIntegerTrue {
		get;
	}

	/**
	 * Gets the set of `boolean integer` values.
	 * @var int[]
	 */
	public array $booleanIntegerSet {
		get;
	}

	/**
	 * Gets the `boolean string` representing the `boolean` value `false`.
	 * @var string
	 */
	public string $booleanStringFalse {
		get;
	}

	/**
	 * Gets the `boolean string` representing the `boolean` value `true`.
	 * @var string
	 */
	public string $booleanStringTrue {
		get;
	}

	/**
	 * Gets the set of `boolean string`.
	 * @var string[]
	 */
	public array $booleanStringSet {
		get;
	}

	/**
	 * Gets the `boolean integer string` representing the `boolean` value `false`.
	 * @var string
	 */
	public string $booleanIntegerStringFalse {
		get;
	}

	/**
	 * Gets the `boolean integer string` representing the `boolean` value `true`.
	 * @var string
	 */
	public string $booleanIntegerStringTrue {
		get;
	}

	/**
	 * Gets the set of `boolean integer string`.
	 * @var string[]
	 */
	public array $booleanIntegerStringSet {
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
}
