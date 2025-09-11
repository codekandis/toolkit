<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionNotMatchingExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionNotMatchingException;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonmatching regular expression, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonMatchingRegularExpressionExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'           => $throwableClassName = RegularExpressionNotMatchingException::class,
				'nonMatchingRegularExpression' => $nonMatchingRegularExpression = Values::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'code'                         => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                     => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $nonMatchingRegularExpression ),
				'expectedThrowableCode'        => $code,
				'expectedThrowablePrevious'    => $previous
			],
			1 => [
				'throwableClassName'           => $throwableClassName = RegularExpressionNotMatchingException::class,
				'nonMatchingRegularExpression' => $nonMatchingRegularExpression = Values::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'code'                         => $code = Values::THROWABLE_CODE,
				'previous'                     => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $nonMatchingRegularExpression ),
				'expectedThrowableCode'        => $code,
				'expectedThrowablePrevious'    => $previous
			],
			2 => [
				'throwableClassName'           => $throwableClassName = RegularExpressionNotMatchingException::class,
				'nonMatchingRegularExpression' => $nonMatchingRegularExpression = Values::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'code'                         => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                     => $previous = Values::createThrowable(),
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $nonMatchingRegularExpression ),
				'expectedThrowableCode'        => $code,
				'expectedThrowablePrevious'    => $previous
			],
			3 => [
				'throwableClassName'           => $throwableClassName = RegularExpressionNotMatchingException::class,
				'nonMatchingRegularExpression' => $nonMatchingRegularExpression = Values::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'code'                         => $code = Values::THROWABLE_CODE,
				'previous'                     => $previous = Values::createThrowable(),
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $nonMatchingRegularExpression ),
				'expectedThrowableCode'        => $code,
				'expectedThrowablePrevious'    => $previous
			]
		];
	}
}
