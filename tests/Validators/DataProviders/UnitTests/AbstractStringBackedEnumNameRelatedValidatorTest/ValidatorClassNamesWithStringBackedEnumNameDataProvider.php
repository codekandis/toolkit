<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractStringBackedEnumNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesValidator;
use Override;

/**
 * Represents a data provider providing validator class names with string backed enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithStringBackedEnumNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'   => IsInStringBackedEnumValuesArrayValidator::class,
				'stringBackedEnumName' => Values::STRING_BACKED_ENUM_NAME_1
			],
			1 => [
				'validatorClassName'   => IsInStringBackedEnumValuesArrayValidator::class,
				'stringBackedEnumName' => Values::STRING_BACKED_ENUM_NAME_2
			],
			2 => [
				'validatorClassName'   => IsInStringBackedEnumValuesValidator::class,
				'stringBackedEnumName' => Values::STRING_BACKED_ENUM_NAME_1
			],
			3 => [
				'validatorClassName'   => IsInStringBackedEnumValuesValidator::class,
				'stringBackedEnumName' => Values::STRING_BACKED_ENUM_NAME_2
			],
			4 => [
				'validatorClassName'   => NullableIsInStringBackedEnumValuesArrayValidator::class,
				'stringBackedEnumName' => Values::STRING_BACKED_ENUM_NAME_1
			],
			5 => [
				'validatorClassName'   => NullableIsInStringBackedEnumValuesArrayValidator::class,
				'stringBackedEnumName' => Values::STRING_BACKED_ENUM_NAME_2
			],
			6 => [
				'validatorClassName'   => NullableIsInStringBackedEnumValuesValidator::class,
				'stringBackedEnumName' => Values::STRING_BACKED_ENUM_NAME_1
			],
			7 => [
				'validatorClassName'   => NullableIsInStringBackedEnumValuesValidator::class,
				'stringBackedEnumName' => Values::STRING_BACKED_ENUM_NAME_2
			]
		];
	}
}
