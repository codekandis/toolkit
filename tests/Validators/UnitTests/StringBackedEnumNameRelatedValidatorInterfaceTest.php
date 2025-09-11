<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\StringBackedEnumNameRelatedValidatorInterfaceTest\ValidatorsWithExpectedStringBackedEnumNameDataProvider;
use CodeKandis\ToolKit\Validators\StringBackedEnumNameRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link StringBackedEnumNameRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringBackedEnumNameRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link StringBackedEnumNameRelatedValidatorInterface::$stringBackedEnumName} returns the expected string backed enum name correctly.
	 * @param StringBackedEnumNameRelatedValidatorInterface $validator The validator to test.
	 * @param string $expectedStringBackedEnumName The expected string backed enum name.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedStringBackedEnumNameDataProvider::class, 'provideData' )]
	public function testIfPropertyStringBackedEnumNameReturnsExpectedStringBackedEnumNameCorrectly( StringBackedEnumNameRelatedValidatorInterface $validator, string $expectedStringBackedEnumName ): void
	{
		$resultedStringBackedEnumName = $validator->stringBackedEnumName;

		static::assertSame( $expectedStringBackedEnumName, $resultedStringBackedEnumName );
	}
}
