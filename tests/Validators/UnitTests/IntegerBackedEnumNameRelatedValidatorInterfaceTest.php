<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\IntegerBackedEnumNameRelatedValidatorInterfaceTest\ValidatorsWithExpectedIntegerBackedEnumNameDataProvider;
use CodeKandis\ToolKit\Validators\IntegerBackedEnumNameRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link IntegerBackedEnumNameRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntegerBackedEnumNameRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link IntegerBackedEnumNameRelatedValidatorInterface::$integerBackedEnumName} returns the expected integer backed enum name correctly.
	 * @param IntegerBackedEnumNameRelatedValidatorInterface $validator The validator to test.
	 * @param string $expectedIntegerBackedEnumName The expected integer backed enum name.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedIntegerBackedEnumNameDataProvider::class, 'provideData' )]
	public function testIfPropertyIntegerBackedEnumNameReturnsExpectedIntegerBackedEnumNameCorrectly( IntegerBackedEnumNameRelatedValidatorInterface $validator, string $expectedIntegerBackedEnumName ): void
	{
		$resultedIntegerBackedEnumName = $validator->integerBackedEnumName;

		static::assertSame( $expectedIntegerBackedEnumName, $resultedIntegerBackedEnumName );
	}
}
