<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests\MappedValidators;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingsRelatedValidatorInterfaceTest\ValidatorsWithExpectedCountDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingsRelatedValidatorInterfaceTest\ValidatorsWithExpectedValidatorMappingsDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingsRelatedValidatorInterfaceTest\ValidatorsWithValidatorMappingsArrayDataProvider;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMappingInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMappingsRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use function current;
use function key;
use function next;
use function reset;

/**
 * Represents the test case of {@link ValidatorMappingsRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorMappingsRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ValidatorMappingsRelatedValidatorInterface::$validatorMappings} returns the expected validator mappings correctly.
	 * @param ValidatorMappingsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorMappingInterface[] $expectedValidatorMappings The expected validator mappings.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedValidatorMappingsDataProvider::class, 'provideData' )]
	public function testIfPropertyValidatorMappingsReturnsExpectedValidatorMappingsCorrectly( ValidatorMappingsRelatedValidatorInterface $validator, array $expectedValidatorMappings ): void
	{
		$resultedValidatorMappings = $validator->validatorMappings;

		static::assertSame( $expectedValidatorMappings, $resultedValidatorMappings );
	}

	/**
	 * Tests if {@link ValidatorMappingsRelatedValidatorInterface::count()} returns the expected count correctly.
	 * @param ValidatorMappingsRelatedValidatorInterface $validator The validator to test.
	 * @param int $expectedCount The expected count.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedCountDataProvider::class, 'provideData' )]
	public function testIfMethodCountReturnsExpectedCountCorrectly( ValidatorMappingsRelatedValidatorInterface $validator, int $expectedCount ): void
	{
		$resultedCount = $validator->count();

		static::assertSame( $expectedCount, $resultedCount );
	}

	/**
	 * Tests if {@link ValidatorMappingsRelatedValidatorInterface::current()} returns the proper element.
	 * @param ValidatorMappingsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorMappingInterface[] $validatorMappings The array of validator mappings.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorMappingsArrayDataProvider::class, 'provideData' )]
	public function testIfMethodCurrentReturnsProperElement( ValidatorMappingsRelatedValidatorInterface $validator, array $validatorMappings ): void
	{
		next( $validatorMappings );
		next( $validatorMappings );
		$expectedValidatorMapping = current( $validatorMappings );

		$validator->next();
		$validator->next();
		$resultedValidatorMapping = $validator->current();

		static::assertSame( $expectedValidatorMapping, $resultedValidatorMapping );
	}

	/**
	 * Tests if {@link ValidatorMappingsRelatedValidatorInterface::key()} returns the proper key.
	 * @param ValidatorMappingsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorMappingInterface[] $validatorMappings The array of validator mappings.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorMappingsArrayDataProvider::class, 'provideData' )]
	public function testIfMethodCurrentReturnsProperKey( ValidatorMappingsRelatedValidatorInterface $validator, array $validatorMappings ): void
	{
		next( $validatorMappings );
		next( $validatorMappings );
		$expectedKey = key( $validatorMappings );

		$validator->rewind();
		$validator->next();
		$validator->next();
		$resultedKey = $validator->key();

		static::assertSame( $expectedKey, $resultedKey );
	}

	/**
	 * Tests if {@link ValidatorMappingsRelatedValidatorInterface::next()} moves to proper element.
	 * @param ValidatorMappingsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorMappingInterface[] $validatorMappings The array of validator mappings.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorMappingsArrayDataProvider::class, 'provideData' )]
	public function testIfMethodNextMovesToProperElement( ValidatorMappingsRelatedValidatorInterface $validator, array $validatorMappings ): void
	{
		next( $validatorMappings );
		next( $validatorMappings );
		$expectedValidatorMapping = current( $validatorMappings );

		$validator->next();
		$validator->next();
		$resultedValidatorMapping = $validator->current();

		static::assertSame( $expectedValidatorMapping, $resultedValidatorMapping );
	}

	/**
	 * Tests if {@link ValidatorMappingsRelatedValidatorInterface::rewind()} resets internal array correctly.
	 * @param ValidatorMappingsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorMappingInterface[] $validatorMappings The array of validator mappings.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorMappingsArrayDataProvider::class, 'provideData' )]
	public function testIfMethodRewindResetsInternalArrayCorrectly( ValidatorMappingsRelatedValidatorInterface $validator, array $validatorMappings ): void
	{
		next( $validatorMappings );
		next( $validatorMappings );
		reset( $validatorMappings );
		$expectedValidatorMapping = current( $validatorMappings );

		$validator->next();
		$validator->next();
		$validator->rewind();
		$resultedValidatorMapping = $validator->current();

		static::assertSame( $expectedValidatorMapping, $resultedValidatorMapping );
	}

	/**
	 * Tests if {@link ValidatorMappingsRelatedValidatorInterface::valid()} returns proper state.
	 * @param ValidatorMappingsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorMappingInterface[] $validatorMappings The array of validator mappings.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorMappingsArrayDataProvider::class, 'provideData' )]
	public function testIfMethodValidReturnsProperState( ValidatorMappingsRelatedValidatorInterface $validator, array $validatorMappings ): void
	{
		next( $validatorMappings );
		next( $validatorMappings );
		next( $validatorMappings );
		$expectedState = null !== key( $validatorMappings );

		$validator->next();
		$validator->next();
		$validator->next();
		$resultedState = $validator->valid();

		static::assertSame( $expectedState, $resultedState );
	}
}
