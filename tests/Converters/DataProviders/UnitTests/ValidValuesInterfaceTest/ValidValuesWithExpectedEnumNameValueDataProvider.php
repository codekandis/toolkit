<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\ValidValues as OriginValidValues;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\ValidValues;
use Override;

/**
 * Represents a data provider providing valid values with expected `enumName` value.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidValuesWithExpectedEnumNameValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validValues'           => new OriginValidValues(),
				'expectedEnumNameValue' => ValidValues::ENUM_NAME
			]
		];
	}
}
