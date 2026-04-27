<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests\MappedValidators;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\AbstractValidatorMappingsRelatedValidatorTest\ValidatorClassNamesWithValidatorMappingsDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\AbstractValidatorMappingsRelatedValidatorTest\ValidatorClassNamesWithValidatorMappingsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\DuplicateValidatorExceptionInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\AbstractValidatorMappingsRelatedValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\DuplicateValidatorMappingExceptionInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMappingInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractValidatorMappingsRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractValidatorMappingsRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractValidatorMappingsRelatedValidator::__construct()} throws a {@link DuplicateValidatorExceptionInterface}.
	 * @param string $validatorClassName The validator to test.
	 * @param ValidatorMappingInterface[] $validatorMappings The validator mappings to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithValidatorMappingsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsDuplicateValidatorMappingExceptionInterface( string $validatorClassName, array $validatorMappings, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( ...$validatorMappings );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( DuplicateValidatorMappingExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractValidatorMappingsRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param ValidatorMappingInterface[] $validatorMappings The validator mappings to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithValidatorMappingsDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, array $validatorMappings ): void
	{
		$resultedValidator = new $validatorClassName( ...$validatorMappings );

		static::assertInstanceOf( AbstractValidatorMappingsRelatedValidator::class, $resultedValidator );
	}
}
