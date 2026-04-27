<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractIntegerBackedEnumNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesValidator;
use Override;

/**
 * Represents a data provider providing validator class names with integer backed enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithIntegerBackedEnumNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'    => IsInIntegerBackedEnumValuesArrayValidator::class,
				'integerBackedEnumName' => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			1 => [
				'validatorClassName'    => IsInIntegerBackedEnumValuesArrayValidator::class,
				'integerBackedEnumName' => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			2 => [
				'validatorClassName'    => IsInIntegerBackedEnumValuesValidator::class,
				'integerBackedEnumName' => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			3 => [
				'validatorClassName'    => IsInIntegerBackedEnumValuesValidator::class,
				'integerBackedEnumName' => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			4 => [
				'validatorClassName'    => NullableIsInIntegerBackedEnumValuesArrayValidator::class,
				'integerBackedEnumName' => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			5 => [
				'validatorClassName'    => NullableIsInIntegerBackedEnumValuesArrayValidator::class,
				'integerBackedEnumName' => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			6 => [
				'validatorClassName'    => NullableIsInIntegerBackedEnumValuesValidator::class,
				'integerBackedEnumName' => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			7 => [
				'validatorClassName'    => NullableIsInIntegerBackedEnumValuesValidator::class,
				'integerBackedEnumName' => Values::INTEGER_BACKED_ENUM_NAME_2
			]
		];
	}
}
