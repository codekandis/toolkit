<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractClassNameRelatedValidatorTest\ValidatorClassNamesWithClassNameDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractClassNameRelatedValidatorTest\ValidatorClassNamesWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\AbstractClassNameRelatedValidator;
use CodeKandis\Types\ClassNotFoundExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractClassNameRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractClassNameRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractClassNameRelatedValidator::__construct()} throws an {@link ClassNotFoundExceptionInterface} on an invalid value.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param mixed $nonExistentClassName The name of the nonexistent class to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsClassNotFoundExceptionInterfaceOnNonExistentClassName( string $validatorClassName, string $nonExistentClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( $nonExistentClassName );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( ClassNotFoundExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractClassNameRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param string $className The name of the class to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithClassNameDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, string $className ): void
	{
		$resultedValidator = new $validatorClassName( $className );

		static::assertInstanceOf( AbstractClassNameRelatedValidator::class, $resultedValidator );
	}
}
