<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractRegularExpressionRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionException;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionValidator;
use Override;
use function sprintf;

/**
 * Represents a data provider providing validator class names with invalid regular expression, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithInvalidRegularExpressionExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'         => IsMatchingRegularExpressionArrayValidator::class,
				'invalidRegularExpression'   => $invalidRegularExpression = Values::INVALID_REG_EX_1,
				'expectedThrowableClassName' => InvalidRegularExpressionException::class,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			],
			1 => [
				'validatorClassName'         => IsMatchingRegularExpressionArrayValidator::class,
				'invalidRegularExpression'   => $invalidRegularExpression = Values::INVALID_REG_EX_2,
				'expectedThrowableClassName' => InvalidRegularExpressionException::class,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			],
			2 => [
				'validatorClassName'         => IsMatchingRegularExpressionValidator::class,
				'invalidRegularExpression'   => $invalidRegularExpression = Values::INVALID_REG_EX_1,
				'expectedThrowableClassName' => InvalidRegularExpressionException::class,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			],
			3 => [
				'validatorClassName'         => IsMatchingRegularExpressionValidator::class,
				'invalidRegularExpression'   => $invalidRegularExpression = Values::INVALID_REG_EX_2,
				'expectedThrowableClassName' => InvalidRegularExpressionException::class,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			],
			4 => [
				'validatorClassName'         => NullableIsMatchingRegularExpressionArrayValidator::class,
				'invalidRegularExpression'   => $invalidRegularExpression = Values::INVALID_REG_EX_1,
				'expectedThrowableClassName' => InvalidRegularExpressionException::class,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			],
			5 => [
				'validatorClassName'         => NullableIsMatchingRegularExpressionArrayValidator::class,
				'invalidRegularExpression'   => $invalidRegularExpression = Values::INVALID_REG_EX_2,
				'expectedThrowableClassName' => InvalidRegularExpressionException::class,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			],
			6 => [
				'validatorClassName'         => NullableIsMatchingRegularExpressionValidator::class,
				'invalidRegularExpression'   => $invalidRegularExpression = Values::INVALID_REG_EX_1,
				'expectedThrowableClassName' => InvalidRegularExpressionException::class,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			],
			7 => [
				'validatorClassName'         => NullableIsMatchingRegularExpressionValidator::class,
				'invalidRegularExpression'   => $invalidRegularExpression = Values::INVALID_REG_EX_2,
				'expectedThrowableClassName' => InvalidRegularExpressionException::class,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			]
		];
	}
}
