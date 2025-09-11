<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests\BiDirectionalConverters;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\AbstractDateTimeRelatedBiDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\AbstractDateTimeRelatedBiDirectionalConverterTest\BiDirectionalConverterClassNamesWithFormatAndTimeZoneDataProvider;
use DateTimeZone;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link AbstractDateTimeRelatedBiDirectionalConverter}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractDateTimeRelatedBiDirectionalConverterTest extends TestCase
{
	/**
	 * Tests if {@link AbstractDateTimeRelatedBiDirectionalConverter::__construct()} instantiates the converter correctly.
	 * @param string $biDirectionalConverterClassName The class name of the bidirectional converter to test.
	 * @param string $format The format of the timestamp string to pass.
	 * @param ?DateTimeZone $timeZone The time zone timestamp string to pass.
	 */
	#[DataProviderExternal( BiDirectionalConverterClassNamesWithFormatAndTimeZoneDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesConverterCorrectly( string $biDirectionalConverterClassName, string $format, ?DateTimeZone $timeZone ): void
	{
		$resultedDateTimeRelatedBiDirectionalConverter = new $biDirectionalConverterClassName( $format, $timeZone );

		static::assertInstanceOf( AbstractDateTimeRelatedBiDirectionalConverter::class, $resultedDateTimeRelatedBiDirectionalConverter );
	}
}
