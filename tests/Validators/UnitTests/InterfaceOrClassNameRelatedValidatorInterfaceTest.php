<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\InterfaceOrClassNameRelatedValidatorInterfaceTest\ValidatorsWithExpectedInterfaceOrClassNameDataProvider;
use CodeKandis\ToolKit\Validators\InterfaceOrClassNameRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InterfaceOrClassNameRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassNameRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceOrClassNameRelatedValidatorInterface::$interfaceOrClassName} returns the expected interface or class name correctly.
	 * @param InterfaceOrClassNameRelatedValidatorInterface $validator The validator to test.
	 * @param string $expectedInterfaceOrClassName The expected interface or class name.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedInterfaceOrClassNameDataProvider::class, 'provideData' )]
	public function testIfPropertyInterfaceOrClassNameReturnsExpectedInterfaceOrClassNameCorrectly( InterfaceOrClassNameRelatedValidatorInterface $validator, string $expectedInterfaceOrClassName ): void
	{
		$resultedInterfaceOrClassName = $validator->interfaceOrClassName;

		static::assertSame( $expectedInterfaceOrClassName, $resultedInterfaceOrClassName );
	}
}
