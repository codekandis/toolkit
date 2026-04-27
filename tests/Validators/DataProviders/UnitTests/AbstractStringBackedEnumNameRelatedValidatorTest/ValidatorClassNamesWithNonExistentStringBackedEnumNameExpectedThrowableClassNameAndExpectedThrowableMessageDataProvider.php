<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractStringBackedEnumNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesValidator;
use CodeKandis\Types\StringBackedEnumNotFoundException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing validator class names with nonexistent string backed enum name, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithNonExistentStringBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'              => IsInStringBackedEnumValuesArrayValidator::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'      => StringBackedEnumNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( StringBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName )
			],
			1 => [
				'validatorClassName'              => IsInStringBackedEnumValuesArrayValidator::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'      => StringBackedEnumNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( StringBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName )
			],
			2 => [
				'validatorClassName'              => IsInStringBackedEnumValuesValidator::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'      => StringBackedEnumNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( StringBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName )
			],
			3 => [
				'validatorClassName'              => IsInStringBackedEnumValuesValidator::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'      => StringBackedEnumNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( StringBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName )
			],
			4 => [
				'validatorClassName'              => NullableIsInStringBackedEnumValuesArrayValidator::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'      => StringBackedEnumNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( StringBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName )
			],
			5 => [
				'validatorClassName'              => NullableIsInStringBackedEnumValuesArrayValidator::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'      => StringBackedEnumNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( StringBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName )
			],
			6 => [
				'validatorClassName'              => NullableIsInStringBackedEnumValuesValidator::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'      => StringBackedEnumNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( StringBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName )
			],
			7 => [
				'validatorClassName'              => NullableIsInStringBackedEnumValuesValidator::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'      => StringBackedEnumNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( StringBackedEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName )
			]
		];
	}
}
