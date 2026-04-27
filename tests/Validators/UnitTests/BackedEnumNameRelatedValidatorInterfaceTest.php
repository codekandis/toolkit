<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\BackedEnumNameRelatedValidatorInterfaceTest\ValidatorsWithExpectedBackedEnumNameDataProvider;
use CodeKandis\ToolKit\Validators\BackedEnumNameRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link BackedEnumNameRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BackedEnumNameRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link BackedEnumNameRelatedValidatorInterface::$backedEnumName} returns the expected backed enum name correctly.
	 * @param BackedEnumNameRelatedValidatorInterface $validator The validator to test.
	 * @param string $expectedBackedEnumName The expected backed enum name.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedBackedEnumNameDataProvider::class, 'provideData' )]
	public function testIfPropertyBackedEnumNameReturnsExpectedBackedEnumNameCorrectly( BackedEnumNameRelatedValidatorInterface $validator, string $expectedBackedEnumName ): void
	{
		$resultedBackedEnumName = $validator->backedEnumName;

		static::assertSame( $expectedBackedEnumName, $resultedBackedEnumName );
	}
}
