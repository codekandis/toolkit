<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractBackedEnumNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesValidator;
use CodeKandis\Types\BackedEnumNotFoundException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing validator class names with nonexistent backed enum name, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithNonExistentBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'         => IsInBackedEnumValuesArrayValidator::class,
				'nonExistentBackedEnumName'  => $nonExistentBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName' => BackedEnumNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( BackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME, $nonExistentBackedEnumName )
			],
			1 => [
				'validatorClassName'         => IsInBackedEnumValuesArrayValidator::class,
				'nonExistentBackedEnumName'  => $nonExistentBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName' => BackedEnumNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( BackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME, $nonExistentBackedEnumName )
			],
			2 => [
				'validatorClassName'         => IsInBackedEnumValuesValidator::class,
				'nonExistentBackedEnumName'  => $nonExistentBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName' => BackedEnumNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( BackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME, $nonExistentBackedEnumName )
			],
			3 => [
				'validatorClassName'         => IsInBackedEnumValuesValidator::class,
				'nonExistentBackedEnumName'  => $nonExistentBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName' => BackedEnumNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( BackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME, $nonExistentBackedEnumName )
			],
			4 => [
				'validatorClassName'         => NullableIsInBackedEnumValuesArrayValidator::class,
				'nonExistentBackedEnumName'  => $nonExistentBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName' => BackedEnumNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( BackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME, $nonExistentBackedEnumName )
			],
			5 => [
				'validatorClassName'         => NullableIsInBackedEnumValuesArrayValidator::class,
				'nonExistentBackedEnumName'  => $nonExistentBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName' => BackedEnumNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( BackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME, $nonExistentBackedEnumName )
			],
			6 => [
				'validatorClassName'         => NullableIsInBackedEnumValuesValidator::class,
				'nonExistentBackedEnumName'  => $nonExistentBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName' => BackedEnumNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( BackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME, $nonExistentBackedEnumName )
			],
			7 => [
				'validatorClassName'         => NullableIsInBackedEnumValuesValidator::class,
				'nonExistentBackedEnumName'  => $nonExistentBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName' => BackedEnumNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( BackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME, $nonExistentBackedEnumName )
			]
		];
	}
}
