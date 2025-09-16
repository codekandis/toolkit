<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractBackedEnumNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesValidator;
use Override;

/**
 * Represents a data provider providing validator class names with backed enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithBackedEnumNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'validatorClassName' => IsInBackedEnumValuesArrayValidator::class,
				'backedEnumName'     => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			1  => [
				'validatorClassName' => IsInBackedEnumValuesArrayValidator::class,
				'backedEnumName'     => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			2  => [
				'validatorClassName' => IsInBackedEnumValuesArrayValidator::class,
				'backedEnumName'     => Values::STRING_BACKED_ENUM_NAME_1
			],
			3  => [
				'validatorClassName' => IsInBackedEnumValuesArrayValidator::class,
				'backedEnumName'     => Values::STRING_BACKED_ENUM_NAME_2
			],
			4  => [
				'validatorClassName' => IsInBackedEnumValuesValidator::class,
				'backedEnumName'     => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			5  => [
				'validatorClassName' => IsInBackedEnumValuesValidator::class,
				'backedEnumName'     => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			6  => [
				'validatorClassName' => IsInBackedEnumValuesValidator::class,
				'backedEnumName'     => Values::STRING_BACKED_ENUM_NAME_1
			],
			7  => [
				'validatorClassName' => IsInBackedEnumValuesValidator::class,
				'backedEnumName'     => Values::STRING_BACKED_ENUM_NAME_2
			],
			8  => [
				'validatorClassName' => NullableIsInBackedEnumValuesArrayValidator::class,
				'backedEnumName'     => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			9  => [
				'validatorClassName' => NullableIsInBackedEnumValuesArrayValidator::class,
				'backedEnumName'     => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			10 => [
				'validatorClassName' => NullableIsInBackedEnumValuesArrayValidator::class,
				'backedEnumName'     => Values::STRING_BACKED_ENUM_NAME_1
			],
			11 => [
				'validatorClassName' => NullableIsInBackedEnumValuesArrayValidator::class,
				'backedEnumName'     => Values::STRING_BACKED_ENUM_NAME_2
			],
			12 => [
				'validatorClassName' => NullableIsInBackedEnumValuesValidator::class,
				'backedEnumName'     => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			13 => [
				'validatorClassName' => NullableIsInBackedEnumValuesValidator::class,
				'backedEnumName'     => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			14 => [
				'validatorClassName' => NullableIsInBackedEnumValuesValidator::class,
				'backedEnumName'     => Values::STRING_BACKED_ENUM_NAME_1
			],
			15 => [
				'validatorClassName' => NullableIsInBackedEnumValuesValidator::class,
				'backedEnumName'     => Values::STRING_BACKED_ENUM_NAME_2
			]
		];
	}
}
