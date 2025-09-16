<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\RegularExpressions\InvalidLimitException;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\InvalidLimitExceptionTest\ThrowableClassNamesWithInvalidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InvalidLimitException}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidLimitExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InvalidLimitException::withInvalidLimit()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param int $invalidLimit The invalid limit to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidOffsetAndSubjectLengthInstantiatesThrowableCorrectly( string $throwableClassName, int $invalidLimit, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InvalidLimitException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInvalidLimit( $invalidLimit );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidLimitException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
