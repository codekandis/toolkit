<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractStringBackedEnumNameRelatedValidatorTest\ValidatorClassNamesWithNonExistentStringBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractStringBackedEnumNameRelatedValidatorTest\ValidatorClassNamesWithStringBackedEnumNameDataProvider;
use CodeKandis\ToolKit\Validators\AbstractStringBackedEnumNameRelatedValidator;
use CodeKandis\Types\StringBackedEnumNotFoundExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractStringBackedEnumNameRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractStringBackedEnumNameRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractStringBackedEnumNameRelatedValidator::__construct()} throws an {@link StringBackedEnumNotFoundExceptionInterface} on an invalid value.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param mixed $nonExistentStringBackedEnumName The name of the nonexistent string backed enum to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithNonExistentStringBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsStringBackedEnumNotFoundExceptionInterfaceOnNonExistentStringBackedEnumName( string $validatorClassName, string $nonExistentStringBackedEnumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( $nonExistentStringBackedEnumName );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( StringBackedEnumNotFoundExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractStringBackedEnumNameRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param string $stringBackedEnumName The string backed enum name to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithStringBackedEnumNameDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, string $stringBackedEnumName ): void
	{
		$resultedValidator = new $validatorClassName( $stringBackedEnumName );

		static::assertInstanceOf( AbstractStringBackedEnumNameRelatedValidator::class, $resultedValidator );
	}
}
