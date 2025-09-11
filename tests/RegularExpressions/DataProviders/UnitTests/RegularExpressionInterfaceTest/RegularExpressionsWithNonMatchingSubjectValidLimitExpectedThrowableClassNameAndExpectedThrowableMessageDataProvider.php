<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionNotMatchingException;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing regular expressions with non-matching subject, valid limit, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionsWithNonMatchingSubjectValidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpression'          => new RegularExpression( $regularExpression = Values::SIMPLE_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => Values::SIMPLE_NONMATCHING_SUBJECT,
				'validLimit'                 => Values::LIMIT_MINUS_1,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			1 => [
				'regularExpression'          => new RegularExpression( $regularExpression = Values::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => Values::SIMPLE_NONMATCHING_SUBJECT,
				'validLimit'                 => Values::LIMIT_MINUS_1,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			2 => [
				'regularExpression'          => new RegularExpression( $regularExpression = Values::SIMPLE_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => Values::SIMPLE_NONMATCHING_SUBJECT,
				'validLimit'                 => Values::LIMIT_1,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			3 => [
				'regularExpression'          => new RegularExpression( $regularExpression = Values::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => Values::SIMPLE_NONMATCHING_SUBJECT,
				'validLimit'                 => Values::LIMIT_1,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			4 => [
				'regularExpression'          => new RegularExpression( $regularExpression = Values::SIMPLE_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => Values::SIMPLE_NONMATCHING_SUBJECT,
				'validLimit'                 => Values::LIMIT_2,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			5 => [
				'regularExpression'          => new RegularExpression( $regularExpression = Values::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => Values::SIMPLE_NONMATCHING_SUBJECT,
				'validLimit'                 => Values::LIMIT_2,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			6 => [
				'regularExpression'          => new RegularExpression( $regularExpression = Values::SIMPLE_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => Values::SIMPLE_NONMATCHING_SUBJECT,
				'validLimit'                 => Values::LIMIT_3,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			7 => [
				'regularExpression'          => new RegularExpression( $regularExpression = Values::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => Values::SIMPLE_NONMATCHING_SUBJECT,
				'validLimit'                 => Values::LIMIT_3,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			]
		];
	}
}
