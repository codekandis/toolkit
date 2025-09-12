<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\RegularExpressions\InvalidLimitExceptionInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionNotMatchingExceptionInterface;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest\RegularExpressionsWithInvalidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest\RegularExpressionsWithMatchingSubjectReplacementValidLimitExpectedReplacedCountAndExpectedReplaceMethodResultDataProvider;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest\RegularExpressionsWithMatchingSubjectValidFlagsValidOffsetAndExpectedMatchAllMethodResultDataProvider;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest\RegularExpressionsWithMatchingSubjectValidFlagsValidOffsetAndExpectedMatchMethodResultDataProvider;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest\RegularExpressionsWithNonMatchingSubjectValidFlagsAndValidOffsetDataProvider;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest\RegularExpressionsWithNonMatchingSubjectValidFlagsValidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest\RegularExpressionsWithNonMatchingSubjectValidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest\RegularExpressionsWithSubjectValidFlagsInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\OffsetOutOfRangeExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case to test the {@link RegularExpressionInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link RegularExpressionInterface::match()} throws an {@link OffsetOutOfRangeExceptionInterface} on an invalid offset.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $subject The subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $invalidOffset The invalid offset to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( RegularExpressionsWithSubjectValidFlagsInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodMatchThrowsOffsetOutOfRangeExceptionInterfaceOnInvalidOffset( RegularExpressionInterface $regularExpression, string $subject, int $validFlags, int $invalidOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$regularExpression->match( $subject, $validFlags, $invalidOffset );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( OffsetOutOfRangeExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link RegularExpressionInterface::match()} returns null if a regular expression does not match.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $nonMatchingSubject The non-matching subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $validOffset The valid offset to pass.
	 */
	#[DataProviderExternal( RegularExpressionsWithNonMatchingSubjectValidFlagsAndValidOffsetDataProvider::class, 'provideData' )]
	public function testIfMethodMatchReturnsNullOnNonMatchingSubject( RegularExpressionInterface $regularExpression, string $nonMatchingSubject, int $validFlags, int $validOffset ): void
	{
		$methodResult = $regularExpression->match( $nonMatchingSubject, $validFlags, $validOffset );

		static::assertNull( $methodResult );
	}

	/**
	 * Tests if {@link RegularExpressionInterface::match()} returns the matching result correctly.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $matchingSubject The matching subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $validOffset The valid offset to pass.
	 * @param array $expectedMatchMethodResult The expected match method result.
	 */
	#[DataProviderExternal( RegularExpressionsWithMatchingSubjectValidFlagsValidOffsetAndExpectedMatchMethodResultDataProvider::class, 'provideData' )]
	public function testIfMethodMatchReturnsMatchingResultCorrectly( RegularExpressionInterface $regularExpression, string $matchingSubject, int $validFlags, int $validOffset, array $expectedMatchMethodResult ): void
	{
		$methodResult = $regularExpression->match( $matchingSubject, $validFlags, $validOffset );

		static::assertSame( $expectedMatchMethodResult, $methodResult );
	}

	/**
	 * Tests if {@link RegularExpressionInterface::matchThrowing()} throws an {@link OffsetOutOfRangeExceptionInterface} on an invalid offset.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $subject The subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $invalidOffset The invalid offset to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( RegularExpressionsWithSubjectValidFlagsInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodMatchThrowingThrowsOffsetOutOfRangeExceptionInterfaceOnInvalidOffset( RegularExpressionInterface $regularExpression, string $subject, int $validFlags, int $invalidOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$regularExpression->matchThrowing( $subject, $validFlags, $invalidOffset );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( OffsetOutOfRangeExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link RegularExpressionInterface::matchThrowing()} throws a {@link RegularExpressionNotMatchingExceptionInterface} if a regular expression does not match.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $nonMatchingSubject The non-matching subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $validOffset The valid offset to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( RegularExpressionsWithNonMatchingSubjectValidFlagsValidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodMatchThrowingThrowsRegularExpressionNotMatchingExceptionInterfaceOnNonMatchingSubject( RegularExpressionInterface $regularExpression, string $nonMatchingSubject, int $validFlags, int $validOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$regularExpression->matchThrowing( $nonMatchingSubject, $validFlags, $validOffset );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( RegularExpressionNotMatchingExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link RegularExpressionInterface::matchThrowing()} returns the matching result correctly.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $matchingSubject The matching subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $validOffset The valid offset to pass.
	 * @param array $expectedMatchMethodResult The expected match method result.
	 */
	#[DataProviderExternal( RegularExpressionsWithMatchingSubjectValidFlagsValidOffsetAndExpectedMatchMethodResultDataProvider::class, 'provideData' )]
	public function testIfMethodMatchThrowingReturnsMatchingResultCorrectly( RegularExpressionInterface $regularExpression, string $matchingSubject, int $validFlags, int $validOffset, array $expectedMatchMethodResult ): void
	{
		$methodResult = $regularExpression->matchThrowing( $matchingSubject, $validFlags, $validOffset );

		static::assertSame( $expectedMatchMethodResult, $methodResult );
	}

	/**
	 * Tests if {@link RegularExpressionInterface::matchAll()} throws an {@link OffsetOutOfRangeExceptionInterface} on an invalid offset.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $subject The subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $invalidOffset The invalid offset to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( RegularExpressionsWithSubjectValidFlagsInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodMatchAllThrowsOffsetOutOfRangeExceptionInterfaceOnInvalidOffset( RegularExpressionInterface $regularExpression, string $subject, int $validFlags, int $invalidOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$regularExpression->matchAll( $subject, $validFlags, $invalidOffset );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( OffsetOutOfRangeExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link RegularExpressionInterface::matchAll()} returns null if a regular expression does not match.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $nonMatchingSubject The non-matching subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $validOffset The valid offset to pass.
	 */
	#[DataProviderExternal( RegularExpressionsWithNonMatchingSubjectValidFlagsAndValidOffsetDataProvider::class, 'provideData' )]
	public function testIfMethodMatchAllReturnsNullOnNonMatchingSubject( RegularExpressionInterface $regularExpression, string $nonMatchingSubject, int $validFlags, int $validOffset ): void
	{
		$methodResult = $regularExpression->matchAll( $nonMatchingSubject, $validFlags, $validOffset );

		static::assertNull( $methodResult );
	}

	/**
	 * Tests if {@link RegularExpressionInterface::matchAll()} returns the matching result correctly.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $matchingSubject The subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $validOffset The valid offset to pass.
	 * @param array $expectedMatchAllMethodResult The expected match all method result.
	 */
	#[DataProviderExternal( RegularExpressionsWithMatchingSubjectValidFlagsValidOffsetAndExpectedMatchAllMethodResultDataProvider::class, 'provideData' )]
	public function testIfMethodMatchAllReturnsMatchingResultCorrectly( RegularExpressionInterface $regularExpression, string $matchingSubject, int $validFlags, int $validOffset, array $expectedMatchAllMethodResult ): void
	{
		$methodResult = $regularExpression->matchAll( $matchingSubject, $validFlags, $validOffset );

		static::assertSame( $expectedMatchAllMethodResult, $methodResult );
	}

	/**
	 * Tests if {@link RegularExpressionInterface::matchAllThrowing()} throws an {@link OffsetOutOfRangeExceptionInterface} on an invalid offset.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $subject The subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $invalidOffset The invalid offset to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( RegularExpressionsWithSubjectValidFlagsInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodMatchAllThrowingThrowsOffsetOutOfRangeExceptionInterfaceOnInvalidOffset( RegularExpressionInterface $regularExpression, string $subject, int $validFlags, int $invalidOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$regularExpression->matchAllThrowing( $subject, $validFlags, $invalidOffset );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( OffsetOutOfRangeExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link RegularExpressionInterface::matchAllThrowing()} throws a {@link RegularExpressionNotMatchingExceptionInterface} if a regular expression does not match.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $nonMatchingSubject The non-matching subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $validOffset The valid offset to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( RegularExpressionsWithNonMatchingSubjectValidFlagsValidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodMatchAllThrowingThrowsRegularExpressionNotMatchingExceptionInterfaceOnNonMatchingSubject( RegularExpressionInterface $regularExpression, string $nonMatchingSubject, int $validFlags, int $validOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$regularExpression->matchAllThrowing( $nonMatchingSubject, $validFlags, $validOffset );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( RegularExpressionNotMatchingExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link RegularExpressionInterface::matchAllThrowing()} returns the matching result correctly.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $matchingSubject The subject to pass.
	 * @param int $validFlags The valid search options to pass.
	 * @param int $validOffset The valid offset to pass.
	 * @param array $expectedMatchAllMethodResult The expected match all method result.
	 */
	#[DataProviderExternal( RegularExpressionsWithMatchingSubjectValidFlagsValidOffsetAndExpectedMatchAllMethodResultDataProvider::class, 'provideData' )]
	public function testIfMethodMatchAllThrowingReturnsMatchingResultCorrectly( RegularExpressionInterface $regularExpression, string $matchingSubject, int $validFlags, int $validOffset, array $expectedMatchAllMethodResult ): void
	{
		$methodResult = $regularExpression->matchAllThrowing( $matchingSubject, $validFlags, $validOffset );

		static::assertSame( $expectedMatchAllMethodResult, $methodResult );
	}

	/**
	 * Tests if {@link RegularExpressionInterface::replace()} throws an {@link InvalidLimitExceptionInterface} on an invalid limit.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param int $invalidLimit The invalid limit to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( RegularExpressionsWithInvalidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodReplaceThrowsInvalidLimitExceptionInterfaceOnInvalidLimit( RegularExpressionInterface $regularExpression, int $invalidLimit, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$regularExpression->replace( '', '', $invalidLimit );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( InvalidLimitExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link RegularExpressionInterface::replace()} returns the replaced result correctly.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $matchingSubject The matching subject to pass.
	 * @param string $replacement The replacement to pass.
	 * @param int $validLimit The search options to pass.
	 * @param int $expectedReplacedCount The expected replaced count.
	 * @param string $expectedReplaceMethodResult The expected replace method result.
	 */
	#[DataProviderExternal( RegularExpressionsWithMatchingSubjectReplacementValidLimitExpectedReplacedCountAndExpectedReplaceMethodResultDataProvider::class, 'provideData' )]
	public function testIfMethodReplaceReturnsReplacedResultCorrectly( RegularExpressionInterface $regularExpression, string $matchingSubject, string $replacement, int $validLimit, int $expectedReplacedCount, string $expectedReplaceMethodResult ): void
	{
		$resultedReplacedCount = null;
		$methodResult          = $regularExpression->replace( $matchingSubject, $replacement, $validLimit, $resultedReplacedCount );

		static::assertSame( $expectedReplacedCount, $resultedReplacedCount );
		static::assertSame( $expectedReplaceMethodResult, $methodResult );
	}

	/**
	 * Tests if {@link RegularExpressionInterface::replaceThrowing()} throws a {@link InvalidLimitExceptionInterface} on an invalid limit.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param int $invalidLimit The invalid limit to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( RegularExpressionsWithInvalidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodReplaceThrowingThrowsInvalidLimitExceptionInterfaceOnInvalidLimit( RegularExpressionInterface $regularExpression, int $invalidLimit, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$regularExpression->replaceThrowing( '', '', $invalidLimit );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( InvalidLimitExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link RegularExpressionInterface::replaceThrowing()} throws a {@link RegularExpressionNotMatchingExceptionInterface} if a regular expression does not match.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $nonMatchingSubject The non-matching subject to pass.
	 * @param int $validLimit The valid limit to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( RegularExpressionsWithNonMatchingSubjectValidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodReplaceThrowingThrowsRegularExpressionNotMatchingExceptionInterfaceOnNonMatchingSubject( RegularExpressionInterface $regularExpression, string $nonMatchingSubject, int $validLimit, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$regularExpression->replaceThrowing( $nonMatchingSubject, '', $validLimit );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( RegularExpressionNotMatchingExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link RegularExpressionInterface::replaceThrowing()} returns the replaced result correctly.
	 * @param RegularExpressionInterface $regularExpression The regular expression to test.
	 * @param string $matchingSubject The matching subject to pass.
	 * @param string $replacement The replacement to pass.
	 * @param int $validLimit The search options to pass.
	 * @param int $expectedReplacedCount The expected replaced count.
	 * @param string $expectedReplaceMethodResult The expected replace method result.
	 */
	#[DataProviderExternal( RegularExpressionsWithMatchingSubjectReplacementValidLimitExpectedReplacedCountAndExpectedReplaceMethodResultDataProvider::class, 'provideData' )]
	public function testIfMethodReplaceThrowingReturnsReplacedResultCorrectly( RegularExpressionInterface $regularExpression, string $matchingSubject, string $replacement, int $validLimit, int $expectedReplacedCount, string $expectedReplaceMethodResult ): void
	{
		$resultedReplacedCount = null;
		$methodResult          = $regularExpression->replaceThrowing( $matchingSubject, $replacement, $validLimit, $resultedReplacedCount );

		static::assertSame( $expectedReplacedCount, $resultedReplacedCount );
		static::assertSame( $expectedReplaceMethodResult, $methodResult );
	}
}
