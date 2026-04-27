<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\InterfaceClassOrEnumNameRelatedValidatorInterfaceTest\ValidatorsWithExpectedInterfaceClassOrEnumNameDataProvider;
use CodeKandis\ToolKit\Validators\InterfaceClassOrEnumNameRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InterfaceClassOrEnumNameRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceClassOrEnumNameRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceClassOrEnumNameRelatedValidatorInterface::$interfaceClassOrEnumName} returns the expected interface, class or enum name correctly.
	 * @param InterfaceClassOrEnumNameRelatedValidatorInterface $validator The validator to test.
	 * @param string $expectedInterfaceClassOrEnumName The expected interface, class or enum name.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedInterfaceClassOrEnumNameDataProvider::class, 'provideData' )]
	public function testIfPropertyClassOrEnumNameReturnsExpectedInterfaceClassOrEnumNameCorrectly( InterfaceClassOrEnumNameRelatedValidatorInterface $validator, string $expectedInterfaceClassOrEnumName ): void
	{
		$resultedInterfaceClassOrEnumName = $validator->interfaceClassOrEnumName;

		static::assertSame( $expectedInterfaceClassOrEnumName, $resultedInterfaceClassOrEnumName );
	}
}
