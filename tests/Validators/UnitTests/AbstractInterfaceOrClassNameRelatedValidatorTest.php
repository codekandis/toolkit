<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceOrClassNameRelatedValidatorTest\ValidatorClassNamesWithInterfaceOrClassNameDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceOrClassNameRelatedValidatorTest\ValidatorClassNamesWithNonExistentInterfaceOrClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\AbstractInterfaceOrClassNameRelatedValidator;
use CodeKandis\Types\InterfaceOrClassNotFoundExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractInterfaceOrClassNameRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractInterfaceOrClassNameRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractInterfaceOrClassNameRelatedValidator::__construct()} throws an {@link InterfaceOrClassNotFoundExceptionInterface} on a nonexistent interface or class name.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param mixed $nonExistentInterfaceOrClassName The name of the nonexistent interface or class to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithNonExistentInterfaceOrClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsInvalidValueExceptionInterfaceOnNonExistentInterfaceOrClassName( string $validatorClassName, string $nonExistentInterfaceOrClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( $nonExistentInterfaceOrClassName );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( InterfaceOrClassNotFoundExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractInterfaceOrClassNameRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param string $interfaceOrClassName The interface or class name to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithInterfaceOrClassNameDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, string $interfaceOrClassName ): void
	{
		$resultedValidator = new $validatorClassName( $interfaceOrClassName );

		static::assertInstanceOf( AbstractInterfaceOrClassNameRelatedValidator::class, $resultedValidator );
	}
}
