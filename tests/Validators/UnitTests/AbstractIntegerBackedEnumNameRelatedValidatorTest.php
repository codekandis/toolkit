<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractIntegerBackedEnumNameRelatedValidatorTest\ValidatorClassNamesWithIntegerBackedEnumNameDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractIntegerBackedEnumNameRelatedValidatorTest\ValidatorClassNamesWithNonExistentIntegerBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\AbstractIntegerBackedEnumNameRelatedValidator;
use CodeKandis\Types\IntegerBackedEnumNotFoundExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractIntegerBackedEnumNameRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractIntegerBackedEnumNameRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractIntegerBackedEnumNameRelatedValidator::__construct()} throws an {@link IntegerBackedEnumNotFoundExceptionInterface} on an invalid value.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param mixed $nonExistentIntegerBackedEnumName The name of the nonexistent integer backed enum to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithNonExistentIntegerBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsIntegerBackedEnumNotFoundExceptionInterfaceOnNonExistentIntegerBackedEnumName( string $validatorClassName, string $nonExistentIntegerBackedEnumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( $nonExistentIntegerBackedEnumName );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( IntegerBackedEnumNotFoundExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractIntegerBackedEnumNameRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param string $integerBackedEnumName The integer backed enum name to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithIntegerBackedEnumNameDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, string $integerBackedEnumName ): void
	{
		$resultedValidator = new $validatorClassName( $integerBackedEnumName );

		static::assertInstanceOf( AbstractIntegerBackedEnumNameRelatedValidator::class, $resultedValidator );
	}
}
