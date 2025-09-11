<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractClassNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsValidator;
use CodeKandis\Types\ClassNotFoundException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing validator class names with nonexistent class name, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'         => IsInClassConstantsArrayValidator::class,
				'nonExistentClassName'       => $nonExistentClassName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName' => ClassNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( ClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName )
			],
			1 => [
				'validatorClassName'         => IsInClassConstantsArrayValidator::class,
				'nonExistentClassName'       => $nonExistentClassName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName' => ClassNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( ClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName )
			],
			2 => [
				'validatorClassName'         => IsInClassConstantsValidator::class,
				'nonExistentClassName'       => $nonExistentClassName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName' => ClassNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( ClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName )
			],
			3 => [
				'validatorClassName'         => IsInClassConstantsValidator::class,
				'nonExistentClassName'       => $nonExistentClassName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName' => ClassNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( ClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName )
			],
			4 => [
				'validatorClassName'         => NullableIsInClassConstantsArrayValidator::class,
				'nonExistentClassName'       => $nonExistentClassName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName' => ClassNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( ClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName )
			],
			5 => [
				'validatorClassName'         => NullableIsInClassConstantsArrayValidator::class,
				'nonExistentClassName'       => $nonExistentClassName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName' => ClassNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( ClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName )
			],
			6 => [
				'validatorClassName'         => NullableIsInClassConstantsValidator::class,
				'nonExistentClassName'       => $nonExistentClassName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName' => ClassNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( ClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName )
			],
			7 => [
				'validatorClassName'         => NullableIsInClassConstantsValidator::class,
				'nonExistentClassName'       => $nonExistentClassName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName' => ClassNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( ClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName )
			]
		];
	}
}
