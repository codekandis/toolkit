<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\ExpectedTypes as OriginExpectedTypes;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\ExpectedTypes;
use Override;

/**
 * Represents a data provider providing expected types with expected `booleanArray` value.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ExpectedTypesWithExpectedBooleanArrayValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'expectedTypes'             => new OriginExpectedTypes(),
				'expectedBooleanArrayValue' => ExpectedTypes::BOOLEAN_ARRAY
			]
		];
	}
}
