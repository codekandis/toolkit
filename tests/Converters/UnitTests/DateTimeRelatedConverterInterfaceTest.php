<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\DateTimeRelatedConverterInterface;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\DateTimeRelatedConverterInterfaceTest\DateTimeRelatedConvertersWithExpectedFormatDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\DateTimeRelatedConverterInterfaceTest\DateTimeRelatedConvertersWithExpectedTimeZoneDataProvider;
use DateTimeZone;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link DateTimeRelatedConverterInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeRelatedConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link DateTimeRelatedConverterInterface::$format} returns the format of the timestamp string correctly.
	 * @param DateTimeRelatedConverterInterface $dateTimeRelatedConverter The `DateTime` related converter to test.
	 * @param string $expectedFormat The expected format of the timestamp string.
	 */
	#[DataProviderExternal( DateTimeRelatedConvertersWithExpectedFormatDataProvider::class, 'provideData' )]
	public function testIfPropertyFormatReturnsTimestampStringFormatCorrectly( DateTimeRelatedConverterInterface $dateTimeRelatedConverter, string $expectedFormat ): void
	{
		$resultedFormat = $dateTimeRelatedConverter->format;

		static::assertSame( $expectedFormat, $resultedFormat );
	}

	/**
	 * Tests if {@link DateTimeRelatedConverterInterface::$timeZone} returns the format of the timestamp string correctly.
	 * @param DateTimeRelatedConverterInterface $dateTimeRelatedConverter The `DateTime` related converter to test.
	 * @param ?DateTimeZone $expectedTimeZone The expected time zone timestamp string.
	 */
	#[DataProviderExternal( DateTimeRelatedConvertersWithExpectedTimeZoneDataProvider::class, 'provideData' )]
	public function testIfPropertyTimeZoneReturnsTimestampStringFormatCorrectly( DateTimeRelatedConverterInterface $dateTimeRelatedConverter, ?DateTimeZone $expectedTimeZone ): void
	{
		$resultedTimeZone = $dateTimeRelatedConverter->timeZone;

		static::assertSame( $expectedTimeZone, $resultedTimeZone );
	}
}
