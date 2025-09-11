<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ArrayRelatedValidatorInterfaceTest\ValidatorsWithExpectedArrayDataProvider;
use CodeKandis\ToolKit\Validators\ArrayRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ArrayRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ArrayRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ArrayRelatedValidatorInterface::$array} returns the expected array correctly.
	 * @param ArrayRelatedValidatorInterface $validator The validator to test.
	 * @param array $expectedArray The expected array.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedArrayDataProvider::class, 'provideData' )]
	public function testIfPropertyArrayReturnsExpectedArrayCorrectly( ArrayRelatedValidatorInterface $validator, array $expectedArray ): void
	{
		$resultedArray = $validator->array;

		static::assertSame( $expectedArray, $resultedArray );
	}
}
