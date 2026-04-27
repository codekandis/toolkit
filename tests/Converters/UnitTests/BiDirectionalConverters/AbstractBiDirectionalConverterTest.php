<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests\BiDirectionalConverters;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\AbstractBiDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\AbstractBiDirectionalConverterTest\BiDirectionalConverterClassNamesDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link AbstractBiDirectionalConverter}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractBiDirectionalConverterTest extends TestCase
{
	/**
	 * Tests if {@link AbstractBiDirectionalConverter::__construct()} instantiates the converter correctly.
	 * @param string $biDirectionalConverterClassName The class name of the bidirectional converter to test.
	 */
	#[DataProviderExternal( BiDirectionalConverterClassNamesDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesConverterCorrectly( string $biDirectionalConverterClassName ): void
	{
		$resultedBiDirectionalConverter = new $biDirectionalConverterClassName();

		static::assertInstanceOf( AbstractBiDirectionalConverter::class, $resultedBiDirectionalConverter );
	}
}
