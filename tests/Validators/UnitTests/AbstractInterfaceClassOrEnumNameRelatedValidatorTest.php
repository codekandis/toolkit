<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceClassOrEnumNameRelatedValidatorTest\ValidatorClassNamesWithInterfaceClassOrEnumNameDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceClassOrEnumNameRelatedValidatorTest\ValidatorClassNamesWithNonExistentInterfaceClassOrEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\AbstractInterfaceClassOrEnumNameRelatedValidator;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractInterfaceClassOrEnumNameRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractInterfaceClassOrEnumNameRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link IsInstanceOfValidator::__construct()} throws an {@link InterfaceClassOrEnumNotFoundExceptionInterface} on a nonexistent interface, class or enum name.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param mixed $nonExistentInterfaceClassOrEnumName The name of the nonexistent interface, class or enum to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithNonExistentInterfaceClassOrEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsInterfaceClassOrEnumNotFoundExceptionInterfaceOnNonExistentInterfaceClassOrEnumName( string $validatorClassName, string $nonExistentInterfaceClassOrEnumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( $nonExistentInterfaceClassOrEnumName );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( InterfaceClassOrEnumNotFoundExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractInterfaceClassOrEnumNameRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param string $interfaceClassOrEnumName The interface, class or enum name to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithInterfaceClassOrEnumNameDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, string $interfaceClassOrEnumName ): void
	{
		$resultedValidator = new $validatorClassName( $interfaceClassOrEnumName );

		static::assertInstanceOf( AbstractInterfaceClassOrEnumNameRelatedValidator::class, $resultedValidator );
	}
}
