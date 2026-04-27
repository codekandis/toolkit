<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\DateTimeFormatRelatedValidatorInterfaceTest\ValidatorsWithExpectedFormatDataProvider;
use CodeKandis\ToolKit\Validators\DateTimeFormatRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link DateTimeFormatRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeFormatRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link DateTimeFormatRelatedValidatorInterface::$format} returns the expected format correctly.
	 * @param DateTimeFormatRelatedValidatorInterface $validator The validator to test.
	 * @param string $expectedFormat The expected format.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedFormatDataProvider::class, 'provideData' )]
	public function testIfPropertyFormatReturnsExpectedFormatCorrectly( DateTimeFormatRelatedValidatorInterface $validator, string $expectedFormat ): void
	{
		$resultedFormat = $validator->format;

		static::assertSame( $expectedFormat, $resultedFormat );
	}
}
