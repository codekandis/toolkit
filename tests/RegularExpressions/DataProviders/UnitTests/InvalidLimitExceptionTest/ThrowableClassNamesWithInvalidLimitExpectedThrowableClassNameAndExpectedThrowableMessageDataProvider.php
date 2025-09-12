<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\InvalidLimitExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\InvalidLimitException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid limit, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
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
				'invalidLimit'               => $invalidLimit = -2,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidLimitException::EXCEPTION_MESSAGE_WITH_INVALID_LIMIT, $invalidLimit )
			]
		];
	}
}
