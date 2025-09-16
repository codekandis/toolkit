<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionNotMatchingException;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionNotMatchingExceptionTest\ThrowableClassNamesWithNonMatchingRegularExpressionExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link RegularExpressionNotMatchingException}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionNotMatchingExceptionTest extends TestCase
{
	/**
	 * Tests if {@link RegularExpressionNotMatchingException::withNonMatchingRegularExpression()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonMatchingRegularExpression The nonmatching regular expression to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonMatchingRegularExpressionExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithRegularExpressionInstantiatesThrowableCorrectly( string $throwableClassName, string $nonMatchingRegularExpression, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var RegularExpressionNotMatchingException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonMatchingRegularExpression( $nonMatchingRegularExpression );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( RegularExpressionNotMatchingException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
