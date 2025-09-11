<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\ValidValues as OriginValidValues;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\ValidValues;
use Override;

/**
 * Represents a data provider providing valid values with expected `booleanIntegerTrue` value.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidValuesWithExpectedBooleanIntegerTrueValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validValues'                     => new OriginValidValues(),
				'expectedBooleanIntegerTrueValue' => ValidValues::BOOLEAN_INTEGER_TRUE
			]
		];
	}
}
