<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractIntegerBackedEnumNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesValidator;
use CodeKandis\Types\IntegerBackedEnumNotFoundException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing validator class names with nonexistent integer backed enum name, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithNonExistentIntegerBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'               => IsInIntegerBackedEnumValuesArrayValidator::class,
				'nonExistentIntegerBackedEnumName' => $nonExistentIntegerBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'       => IntegerBackedEnumNotFoundException::class,
				'expectedThrowableMessage'         => sprintf( IntegerBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME, $nonExistentIntegerBackedEnumName )
			],
			1 => [
				'validatorClassName'               => IsInIntegerBackedEnumValuesArrayValidator::class,
				'nonExistentIntegerBackedEnumName' => $nonExistentIntegerBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'       => IntegerBackedEnumNotFoundException::class,
				'expectedThrowableMessage'         => sprintf( IntegerBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME, $nonExistentIntegerBackedEnumName )
			],
			2 => [
				'validatorClassName'               => IsInIntegerBackedEnumValuesValidator::class,
				'nonExistentIntegerBackedEnumName' => $nonExistentIntegerBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'       => IntegerBackedEnumNotFoundException::class,
				'expectedThrowableMessage'         => sprintf( IntegerBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME, $nonExistentIntegerBackedEnumName )
			],
			3 => [
				'validatorClassName'               => IsInIntegerBackedEnumValuesValidator::class,
				'nonExistentIntegerBackedEnumName' => $nonExistentIntegerBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'       => IntegerBackedEnumNotFoundException::class,
				'expectedThrowableMessage'         => sprintf( IntegerBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME, $nonExistentIntegerBackedEnumName )
			],
			4 => [
				'validatorClassName'               => NullableIsInIntegerBackedEnumValuesArrayValidator::class,
				'nonExistentIntegerBackedEnumName' => $nonExistentIntegerBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'       => IntegerBackedEnumNotFoundException::class,
				'expectedThrowableMessage'         => sprintf( IntegerBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME, $nonExistentIntegerBackedEnumName )
			],
			5 => [
				'validatorClassName'               => NullableIsInIntegerBackedEnumValuesArrayValidator::class,
				'nonExistentIntegerBackedEnumName' => $nonExistentIntegerBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'       => IntegerBackedEnumNotFoundException::class,
				'expectedThrowableMessage'         => sprintf( IntegerBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME, $nonExistentIntegerBackedEnumName )
			],
			6 => [
				'validatorClassName'               => NullableIsInIntegerBackedEnumValuesValidator::class,
				'nonExistentIntegerBackedEnumName' => $nonExistentIntegerBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'       => IntegerBackedEnumNotFoundException::class,
				'expectedThrowableMessage'         => sprintf( IntegerBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME, $nonExistentIntegerBackedEnumName )
			],
			7 => [
				'validatorClassName'               => NullableIsInIntegerBackedEnumValuesValidator::class,
				'nonExistentIntegerBackedEnumName' => $nonExistentIntegerBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'       => IntegerBackedEnumNotFoundException::class,
				'expectedThrowableMessage'         => sprintf( IntegerBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME, $nonExistentIntegerBackedEnumName )
			]
		];
	}
}
