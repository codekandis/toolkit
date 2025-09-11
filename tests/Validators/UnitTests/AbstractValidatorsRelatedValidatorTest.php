<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractValidatorsRelatedValidatorTest\ValidatorClassNamesWithValidatorsDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractValidatorsRelatedValidatorTest\ValidatorClassNamesWithValidatorsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\AbstractValidatorsRelatedValidator;
use CodeKandis\ToolKit\Validators\DuplicateValidatorExceptionInterface;
use CodeKandis\ToolKit\Validators\ValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractValidatorsRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractValidatorsRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractValidatorsRelatedValidator::__construct()} throws a {@link DuplicateValidatorExceptionInterface}.
	 * @param string $validatorClassName The validator to test.
	 * @param ValidatorInterface[] $validators The validators to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithValidatorsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsDuplicateValidatorExceptionInterface( string $validatorClassName, array $validators, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( ...$validators );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( DuplicateValidatorExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractValidatorsRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param ValidatorInterface[] $validators The validators to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithValidatorsDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, array $validators ): void
	{
		$resultedValidator = new $validatorClassName( ...$validators );

		static::assertInstanceOf( AbstractValidatorsRelatedValidator::class, $resultedValidator );
	}
}
