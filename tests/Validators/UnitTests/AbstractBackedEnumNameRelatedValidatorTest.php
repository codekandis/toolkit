<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractBackedEnumNameRelatedValidatorTest\ValidatorClassNamesWithBackedEnumNameDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractBackedEnumNameRelatedValidatorTest\ValidatorClassNamesWithNonExistentBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\AbstractBackedEnumNameRelatedValidator;
use CodeKandis\Types\BackedEnumNotFoundExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractBackedEnumNameRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractBackedEnumNameRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractBackedEnumNameRelatedValidator::__construct()} throws a {@link BackedEnumNotFoundExceptionInterface} on an invalid value.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param mixed $nonExistentBackedEnumName The name of the nonexistent backed enum to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithNonExistentBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsBackedEnumNotFoundExceptionInterfaceOnNonExistentBackedEnumName( string $validatorClassName, string $nonExistentBackedEnumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( $nonExistentBackedEnumName );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( BackedEnumNotFoundExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractBackedEnumNameRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param string $backedEnumName The backed enum name to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithBackedEnumNameDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, string $backedEnumName ): void
	{
		$resultedValidator = new $validatorClassName( $backedEnumName );

		static::assertInstanceOf( AbstractBackedEnumNameRelatedValidator::class, $resultedValidator );
	}
}
