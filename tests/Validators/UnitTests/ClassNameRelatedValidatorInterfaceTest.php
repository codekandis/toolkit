<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ClassNameRelatedValidatorInterfaceTest\ValidatorsWithExpectedClassNameDataProvider;
use CodeKandis\ToolKit\Validators\ClassNameRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ClassNameRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassNameRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ClassNameRelatedValidatorInterface::$className} returns the expected class name correctly.
	 * @param ClassNameRelatedValidatorInterface $validator The validator to test.
	 * @param string $expectedClassName The expected class name.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedClassNameDataProvider::class, 'provideData' )]
	public function testIfPropertyClassNameReturnsExpectedClassNameCorrectly( ClassNameRelatedValidatorInterface $validator, string $expectedClassName ): void
	{
		$resultedClassName = $validator->className;

		static::assertSame( $expectedClassName, $resultedClassName );
	}
}
