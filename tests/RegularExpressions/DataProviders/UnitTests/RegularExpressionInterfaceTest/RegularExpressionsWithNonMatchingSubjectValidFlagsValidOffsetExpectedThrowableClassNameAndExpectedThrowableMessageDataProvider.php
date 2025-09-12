<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionMatchFlag;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionNotMatchingException;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\ValidValues;
use Override;
use function sprintf;

/**
 * Represents a data provider providing regular expressions with non-matching subject, valid flags, valid offset, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionsWithNonMatchingSubjectValidFlagsValidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => ValidValues::SIMPLE_NONMATCHING_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::None->value,
				'validOffset'                => 0,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			1 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => ValidValues::SIMPLE_NONMATCHING_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::OffsetCapture->value,
				'validOffset'                => 0,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			2 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => ValidValues::SIMPLE_NONMATCHING_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::UnmatchedAsNull->value,
				'validOffset'                => 0,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			],
			3 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'nonMatchingSubject'         => ValidValues::SIMPLE_NONMATCHING_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::OffsetCapture->value | RegularExpressionMatchFlag::UnmatchedAsNull->value,
				'validOffset'                => 0,
				'expectedThrowableClassName' => RegularExpressionNotMatchingException::class,
				'expectedThrowableMessage'   => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
			]
		];
	}
}
