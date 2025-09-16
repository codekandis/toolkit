<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters;

use CodeKandis\Types\BaseObject;

/**
 * Represents an enumeration of expected types.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ExpectedTypes extends BaseObject implements ExpectedTypesInterface
{
	/**
	 * @inheritdoc
	 */
	public string $null {
		get => 'null';
	}

	/**
	 * @inheritdoc
	 */
	public string $boolean {
		get => 'bool';
	}

	/**
	 * @inheritdoc
	 */
	public string $nullableBoolean {
		get => '?bool';
	}

	/**
	 * @inheritdoc
	 */
	public string $booleanArray {
		get => 'bool[]';
	}

	/**
	 * @inheritdoc
	 */
	public string $nullableBooleanArray {
		get => '?bool[]';
	}

	/**
	 * @inheritdoc
	 */
	public string $integer {
		get => 'int';
	}

	/**
	 * @inheritdoc
	 */
	public string $nullableInteger {
		get => '?int';
	}

	/**
	 * @inheritdoc
	 */
	public string $float {
		get => 'float';
	}

	/**
	 * @inheritdoc
	 */
	public string $nullableFloat {
		get => '?float';
	}

	/**
	 * @inheritdoc
	 */
	public string $string {
		get => 'string';
	}

	/**
	 * @inheritdoc
	 */
	public string $nullableString {
		get => '?string';
	}

	/**
	 * @inheritdoc
	 */
	public string $dateTimeImmutable {
		get => 'DateTimeImmutable';
	}

	/**
	 * @inheritdoc
	 */
	public string $nullableDateTimeImmutable {
		get => '?DateTimeImmutable';
	}

	/**
	 * @inheritdoc
	 */
	public string $dateTime {
		get => 'DateTime';
	}

	/**
	 * @inheritdoc
	 */
	public string $nullableDateTime {
		get => '?DateTime';
	}
}
