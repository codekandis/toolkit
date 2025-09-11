<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\AbstractDateTimeRelatedConverterTest\DateTimeRelatedConverterClassNamesWithFormatAndTimeZoneDataProvider;
use DateTimeZone;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link AbstractDateTimeRelatedConverter}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractDateTimeRelatedConverterTest extends TestCase
{
	/**
	 * Tests if {@link AbstractDateTimeRelatedConverter::__construct()} instantiates the converter correctly.
	 * @param string $dateTimeRelatedConverterClassName The class name of the `DateTime` related converter to test.
	 * @param string $format The format of the timestamp string to pass.
	 * @param ?DateTimeZone $timeZone The time zone timestamp string to pass.
	 */
	#[DataProviderExternal( DateTimeRelatedConverterClassNamesWithFormatAndTimeZoneDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesConverterCorrectly( string $dateTimeRelatedConverterClassName, string $format, ?DateTimeZone $timeZone ): void
	{
		$resultedDateTimeRelatedConverter = new $dateTimeRelatedConverterClassName( $format, $timeZone );

		static::assertInstanceOf( AbstractDateTimeRelatedConverter::class, $resultedDateTimeRelatedConverter );
	}
}
