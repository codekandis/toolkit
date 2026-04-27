<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\InterfaceNameRelatedValidatorInterfaceTest\ValidatorsWithExpectedInterfaceNameDataProvider;
use CodeKandis\ToolKit\Validators\InterfaceNameRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InterfaceNameRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceNameRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceNameRelatedValidatorInterface::$interfaceName} returns the expected interface name correctly.
	 * @param InterfaceNameRelatedValidatorInterface $validator The validator to test.
	 * @param string $expectedInterfaceName The expected interface name.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedInterfaceNameDataProvider::class, 'provideData' )]
	public function testIfPropertyInterfaceNameReturnsExpectedInterfaceNameCorrectly( InterfaceNameRelatedValidatorInterface $validator, string $expectedInterfaceName ): void
	{
		$resultedInterfaceName = $validator->interfaceName;

		static::assertSame( $expectedInterfaceName, $resultedInterfaceName );
	}
}
