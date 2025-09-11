<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\DuplicateValidatorExceptionTest\ThrowableClassNamesWithDuplicateValidatorExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\DuplicateValidatorException;
use CodeKandis\ToolKit\Validators\ValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link DuplicateValidatorException}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DuplicateValidatorExceptionTest extends TestCase
{
	/**
	 * Tests if {@link DuplicateValidatorException::withDuplicateValidator()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param ValidatorInterface $duplicateValidator The duplicate validator to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithDuplicateValidatorExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithDuplicateKeyInstantiatesThrowableCorrectly( string $throwableClassName, ValidatorInterface $duplicateValidator, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var DuplicateValidatorException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withDuplicateValidator( $duplicateValidator );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( DuplicateValidatorException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
