<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\InvalidLimitExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\InvalidLimitException;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid limit, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidLimitExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InvalidLimitException::class,
				'invalidLimit'               => $invalidLimit = Values::INVALID_LIMIT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidLimitException::EXCEPTION_MESSAGE_WITH_INVALID_LIMIT, $invalidLimit ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1 => [
				'throwableClassName'         => $throwableClassName = InvalidLimitException::class,
				'invalidLimit'               => $invalidLimit = Values::INVALID_LIMIT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidLimitException::EXCEPTION_MESSAGE_WITH_INVALID_LIMIT, $invalidLimit ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2 => [
				'throwableClassName'         => $throwableClassName = InvalidLimitException::class,
				'invalidLimit'               => $invalidLimit = Values::INVALID_LIMIT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidLimitException::EXCEPTION_MESSAGE_WITH_INVALID_LIMIT, $invalidLimit ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3 => [
				'throwableClassName'         => $throwableClassName = InvalidLimitException::class,
				'invalidLimit'               => $invalidLimit = Values::INVALID_LIMIT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidLimitException::EXCEPTION_MESSAGE_WITH_INVALID_LIMIT, $invalidLimit ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			]
		];
	}
}
