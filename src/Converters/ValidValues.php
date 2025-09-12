<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters;

use CodeKandis\Types\BaseObject;
use Override;
use function sprintf;

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
	public bool $booleanFalse {
		get => false;
	}

	/**
	 * @inheritdoc
	 */
	public bool $booleanTrue {
		get => true;
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
	public string $regExBooleanString {
		get => '~^false|true$~';
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
	public string $regExBooleanIntegerString {
		get => '~^[01]$~';
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

	/**
	 * @inheritdoc
	 */
	public string $regExBinaryString {
		get => '~^[01]+$~';
	}

	/**
	 * @inheritdoc
	 */
	public string $enumName {
		get => 'enumName';
	}

	/**
	 * @inheritdoc
	 */
	public string $backedEnumName {
		get => 'backedEnumName';
	}

	/**
	 * @inheritdoc
	 */
	public string $integerBackedEnumName {
		get => 'backedEnumName<integer>';
	}

	/**
	 * @inheritdoc
	 */
	public string $stringBackedEnumName {
		get => 'backedEnumName<string>';
	}

	/**
	 * @inheritdoc
	 */
	public string $interfaceName {
		get => 'interfaceName';
	}

	/**
	 * @inheritdoc
	 */
	public string $className {
		get => 'className';
	}

	/**
	 * @inheritdoc
	 */
	public string $interfaceOrClassName {
		get => 'interfaceOrClassName';
	}

	/**
	 * @inheritdoc
	 */
	public string $dateTimeStringTemplate {
		get => 'dateTimeString<%s>';
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function createDateTimeString( string $format ): string
	{
		return sprintf( $this->dateTimeStringTemplate, $format );
	}
}
