<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorsRelatedValidatorInterfaceTest\ValidatorsWithExpectedCountDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorsRelatedValidatorInterfaceTest\ValidatorsWithExpectedValidatorsDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorsRelatedValidatorInterfaceTest\ValidatorsWithValidatorsDataProvider;
use CodeKandis\ToolKit\Validators\ValidatorInterface;
use CodeKandis\ToolKit\Validators\ValidatorsRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use function current;
use function key;
use function next;
use function reset;

/**
 * Represents the test case of {@link ValidatorsRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ValidatorsRelatedValidatorInterface::$validators} returns the expected validators correctly.
	 * @param ValidatorsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorInterface[] $expectedValidators The expected validators.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedValidatorsDataProvider::class, 'provideData' )]
	public function testIfPropertyValidatorsReturnsExpectedValidatorsCorrectly( ValidatorsRelatedValidatorInterface $validator, array $expectedValidators ): void
	{
		$resultedValidators = $validator->validators;

		static::assertSame( $expectedValidators, $resultedValidators );
	}

	/**
	 * Tests if {@link ValidatorsRelatedValidatorInterface::count()} returns the expected count correctly.
	 * @param ValidatorsRelatedValidatorInterface $validator The validator to test.
	 * @param int $expectedCount The expected count.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedCountDataProvider::class, 'provideData' )]
	public function testIfMethodCountReturnsExpectedCountCorrectly( ValidatorsRelatedValidatorInterface $validator, int $expectedCount ): void
	{
		$resultedCount = $validator->count();

		static::assertSame( $expectedCount, $resultedCount );
	}

	/**
	 * Tests if {@link ValidatorsRelatedValidatorInterface::current()} returns the proper element.
	 * @param ValidatorsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorInterface[] $validators The array of validators.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorsDataProvider::class, 'provideData' )]
	public function testIfMethodCurrentReturnsProperElement( ValidatorsRelatedValidatorInterface $validator, array $validators ): void
	{
		next( $validators );
		next( $validators );
		$expectedValidator = current( $validators );

		$validator->next();
		$validator->next();
		$resultedValidator = $validator->current();

		static::assertSame( $expectedValidator, $resultedValidator );
	}

	/**
	 * Tests if {@link ValidatorsRelatedValidatorInterface::key()} returns the proper key.
	 * @param ValidatorsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorInterface[] $validators The array of validators.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorsDataProvider::class, 'provideData' )]
	public function testIfMethodCurrentReturnsProperKey( ValidatorsRelatedValidatorInterface $validator, array $validators ): void
	{
		next( $validators );
		next( $validators );
		$expectedKey = key( $validators );

		$validator->rewind();
		$validator->next();
		$validator->next();
		$resultedKey = $validator->key();

		static::assertSame( $expectedKey, $resultedKey );
	}

	/**
	 * Tests if {@link ValidatorsRelatedValidatorInterface::next()} moves to proper element.
	 * @param ValidatorsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorInterface[] $validators The array of validators.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorsDataProvider::class, 'provideData' )]
	public function testIfMethodNextMovesToProperElement( ValidatorsRelatedValidatorInterface $validator, array $validators ): void
	{
		next( $validators );
		next( $validators );
		$expectedValidator = current( $validators );

		$validator->next();
		$validator->next();
		$resultedValidator = $validator->current();

		static::assertSame( $expectedValidator, $resultedValidator );
	}

	/**
	 * Tests if {@link ValidatorsRelatedValidatorInterface::rewind()} resets internal array correctly.
	 * @param ValidatorsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorInterface[] $validators The array of validators.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorsDataProvider::class, 'provideData' )]
	public function testIfMethodRewindResetsInternalArrayCorrectly( ValidatorsRelatedValidatorInterface $validator, array $validators ): void
	{
		next( $validators );
		next( $validators );
		reset( $validators );
		$expectedValidator = current( $validators );

		$validator->next();
		$validator->next();
		$validator->rewind();
		$resultedValidator = $validator->current();

		static::assertSame( $expectedValidator, $resultedValidator );
	}

	/**
	 * Tests if {@link ValidatorsRelatedValidatorInterface::valid()} returns proper state.
	 * @param ValidatorsRelatedValidatorInterface $validator The validator to test.
	 * @param ValidatorInterface[] $validators The array of validators.
	 */
	#[DataProviderExternal( ValidatorsWithValidatorsDataProvider::class, 'provideData' )]
	public function testIfMethodValidReturnsProperState( ValidatorsRelatedValidatorInterface $validator, array $validators ): void
	{
		next( $validators );
		next( $validators );
		next( $validators );
		$expectedState = null !== key( $validators );

		$validator->next();
		$validator->next();
		$validator->next();
		$resultedState = $validator->valid();

		static::assertSame( $expectedState, $resultedState );
	}
}
