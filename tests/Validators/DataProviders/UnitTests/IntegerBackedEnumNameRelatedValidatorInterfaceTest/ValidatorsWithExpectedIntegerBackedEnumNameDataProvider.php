<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\IntegerBackedEnumNameRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesValidator;
use Override;

/**
 * Represents a data provider providing validators with expected integer backed enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedIntegerBackedEnumNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'                     => new IsInIntegerBackedEnumValuesValidator( $integerBackedEnumName = Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'expectedIntegerBackedEnumName' => $integerBackedEnumName
			],
			1 => [
				'validator'                     => new IsInIntegerBackedEnumValuesValidator( $integerBackedEnumName = Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'expectedIntegerBackedEnumName' => $integerBackedEnumName
			],
			2 => [
				'validator'                     => new NullableIsInIntegerBackedEnumValuesValidator( $integerBackedEnumName = Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'expectedIntegerBackedEnumName' => $integerBackedEnumName
			],
			3 => [
				'validator'                     => new NullableIsInIntegerBackedEnumValuesValidator( $integerBackedEnumName = Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'expectedIntegerBackedEnumName' => $integerBackedEnumName
			]
		];
	}
}
