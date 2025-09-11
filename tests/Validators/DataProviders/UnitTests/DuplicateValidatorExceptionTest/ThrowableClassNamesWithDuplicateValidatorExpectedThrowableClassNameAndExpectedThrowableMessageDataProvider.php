<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\DuplicateValidatorExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\DuplicateValidatorException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with duplicate validator, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithDuplicateValidatorExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorException::class,
				'duplicateValidator'         => $duplicateValidator = Values::createValidators()[ 0 ],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $duplicateValidator )
			],
			1 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorException::class,
				'duplicateValidator'         => $duplicateValidator = Values::createValidators()[ 1 ],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $duplicateValidator )
			],
			2 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorException::class,
				'duplicateValidator'         => $duplicateValidator = Values::createValidators()[ 2 ],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $duplicateValidator )
			],
			3 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorException::class,
				'duplicateValidator'         => $duplicateValidator = Values::createValidatorsWithDuplicateValidator()[ 0 ],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $duplicateValidator )
			],
			4 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorException::class,
				'duplicateValidator'         => $duplicateValidator = Values::createValidatorsWithDuplicateValidator()[ 1 ],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $duplicateValidator )
			],
			5 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorException::class,
				'duplicateValidator'         => $duplicateValidator = Values::createValidatorsWithDuplicateValidator()[ 2 ],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $duplicateValidator )
			],
			6 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorException::class,
				'duplicateValidator'         => $duplicateValidator = Values::createValidatorsWithDuplicateValidator()[ 3 ],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $duplicateValidator )
			]
		];
	}
}
