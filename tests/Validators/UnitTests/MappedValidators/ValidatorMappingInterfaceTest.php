<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests\MappedValidators;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingInterfaceTest\ValidatorMappingsWithExpectedKeyDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingInterfaceTest\ValidatorMappingsWithExpectedValidatorDataProvider;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMappingInterface;
use CodeKandis\ToolKit\Validators\ValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ValidatorMappingInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorMappingInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ValidatorMappingInterface::$key} returns the expected key correctly.
	 * @param ValidatorMappingInterface $validatorMapping The validator mapping to test.
	 * @param int|string $expectedKey The expected key.
	 */
	#[DataProviderExternal( ValidatorMappingsWithExpectedKeyDataProvider::class, 'provideData' )]
	public function testIfPropertyKeyReturnsExpectedKeyCorrectly( ValidatorMappingInterface $validatorMapping, int | string $expectedKey ): void
	{
		$resultedKey = $validatorMapping->key;

		static::assertSame( $expectedKey, $resultedKey );
	}

	/**
	 * Tests if {@link ValidatorMappingInterface::$validator} returns the expected validator correctly.
	 * @param ValidatorMappingInterface $validatorMapping The validator mapping to test.
	 * @param ValidatorInterface $expectedValidator The expected validator.
	 */
	#[DataProviderExternal( ValidatorMappingsWithExpectedValidatorDataProvider::class, 'provideData' )]
	public function testIfPropertyValidatorReturnsExpectedValidatorCorrectly( ValidatorMappingInterface $validatorMapping, ValidatorInterface $expectedValidator ): void
	{
		$resultedValidator = $validatorMapping->validator;

		static::assertSame( $expectedValidator, $resultedValidator );
	}
}
