<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceNameRelatedValidatorTest\ValidatorClassNamesWithInterfaceNameDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceNameRelatedValidatorTest\ValidatorClassNamesWithNonExistentInterfaceNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\AbstractInterfaceNameRelatedValidator;
use CodeKandis\Types\InterfaceNotFoundExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractInterfaceNameRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractInterfaceNameRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link NullableIsInInterfaceConstantsValidator::__construct()} throws an {@link InterfaceNotFoundExceptionInterface} on an invalid value.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param mixed $nonExistentInterfaceName The name of the nonexistent interface to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithNonExistentInterfaceNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsInterfaceNotFoundExceptionInterfaceOnNonExistentInterfaceName( string $validatorClassName, string $nonExistentInterfaceName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( $nonExistentInterfaceName );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( InterfaceNotFoundExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractInterfaceNameRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param string $interfaceName The interface name to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithInterfaceNameDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, string $interfaceName ): void
	{
		$resultedValidator = new $validatorClassName( $interfaceName );

		static::assertInstanceOf( AbstractInterfaceNameRelatedValidator::class, $resultedValidator );
	}
}
