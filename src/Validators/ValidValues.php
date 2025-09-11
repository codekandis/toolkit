<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;

/**
 * Represents an enumeration of valid values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidValues extends BaseObject implements ValidValuesInterface
{
	/**
	 * @inheritdoc
	 */
	public null $null {
		get => null;
	}

	/**
	 * @inheritdoc
	 */
	public string $nullString {
		get => 'null';
	}

	/**
	 * @inheritdoc
	 */
	public int $booleanIntegerFalse {
		get => 0;
	}

	/**
	 * @inheritdoc
	 */
	public int $booleanIntegerTrue {
		get => 1;
	}

	/**
	 * @inheritdoc
	 */
	public array $booleanIntegerSet {
		get => [
			$this->booleanIntegerFalse,
			$this->booleanIntegerTrue
		];
	}

	/**
	 * @inheritdoc
	 */
	public string $booleanStringFalse {
		get => 'false';
	}

	/**
	 * @inheritdoc
	 */
	public string $booleanStringTrue {
		get => 'true';
	}

	/**
	 * @inheritdoc
	 */
	public array $booleanStringSet {
		get => [
			$this->booleanStringFalse,
			$this->booleanStringTrue
		];
	}

	/**
	 * @inheritdoc
	 */
	public string $booleanIntegerStringFalse {
		get => '0';
	}

	/**
	 * @inheritdoc
	 */
	public string $booleanIntegerStringTrue {
		get => '1';
	}

	/**
	 * @inheritdoc
	 */
	public array $booleanIntegerStringSet {
		get => [
			$this->booleanIntegerStringFalse,
			$this->booleanIntegerStringTrue
		];
	}

	/**
	 * @inheritdoc
	 */
	public string $regExBinaryString {
		get => '~^[01]+$~';
	}

	/**
	 * @inheritdoc
	 */
	public string $regExIntegerString {
		get => '~^\\-?\d+$~';
	}

	/**
	 * @inheritdoc
	 */
	public string $regExFloatString {
		get => '~^\\-?\d+(?:\\.\d+)?$~';
	}
}
