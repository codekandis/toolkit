<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\ExpectedTypes as OriginExpectedTypes;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\ExpectedTypes;
use Override;

/**
 * Represents a data provider providing expected types with expected `integer` value.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ExpectedTypesWithExpectedIntegerValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'expectedTypes'        => new OriginExpectedTypes(),
				'expectedIntegerValue' => ExpectedTypes::INTEGER
			]
		];
	}
}
