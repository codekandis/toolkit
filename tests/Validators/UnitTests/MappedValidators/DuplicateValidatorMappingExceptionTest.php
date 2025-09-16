<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests\MappedValidators;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\DuplicateValidatorMappingExceptionTest\ThrowableClassNamesWithDuplicateKeyExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Validators\MappedValidators\DuplicateValidatorMappingException;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link DuplicateValidatorMappingException}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DuplicateValidatorMappingExceptionTest extends TestCase
{
	/**
	 * Tests if {@link DuplicateValidatorMappingException::withDuplicateKey()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param int|string $duplicateKey The duplicate key to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithDuplicateKeyExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithDuplicateKeyInstantiatesThrowableCorrectly( string $throwableClassName, int | string $duplicateKey, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var DuplicateValidatorMappingException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withDuplicateKey( $duplicateKey );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( DuplicateValidatorMappingException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
