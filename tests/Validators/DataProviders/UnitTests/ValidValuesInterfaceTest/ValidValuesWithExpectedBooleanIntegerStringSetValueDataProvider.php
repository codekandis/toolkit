<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\ValidValues;
use CodeKandis\ToolKit\Validators\ValidValues as OriginValidValues;
use Override;

/**
 * Represents a data provider providing valid values with expected `booleanIntegerStringSet` value.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidValuesWithExpectedBooleanIntegerStringSetValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validValues'                          => new OriginValidValues(),
				'expectedBooleanIntegerStringSetValue' => ValidValues::BOOLEAN_INTEGER_STRING_SET
			]
		];
	}
}
