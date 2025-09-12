<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\BackedEnumNameRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesValidator;
use Override;

/**
 * Represents a data provider providing validators with expected backed enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedBackedEnumNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'              => new IsInBackedEnumValuesValidator( $backedEnumName = Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'expectedBackedEnumName' => $backedEnumName
			],
			1 => [
				'validator'              => new IsInBackedEnumValuesValidator( $backedEnumName = Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'expectedBackedEnumName' => $backedEnumName
			],
			2 => [
				'validator'              => new IsInBackedEnumValuesValidator( $backedEnumName = Values::STRING_BACKED_ENUM_NAME_1 ),
				'expectedBackedEnumName' => $backedEnumName
			],
			3 => [
				'validator'              => new IsInBackedEnumValuesValidator( $backedEnumName = Values::STRING_BACKED_ENUM_NAME_2 ),
				'expectedBackedEnumName' => $backedEnumName
			],
			4 => [
				'validator'              => new NullableIsInBackedEnumValuesValidator( $backedEnumName = Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'expectedBackedEnumName' => $backedEnumName
			],
			5 => [
				'validator'              => new NullableIsInBackedEnumValuesValidator( $backedEnumName = Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'expectedBackedEnumName' => $backedEnumName
			],
			6 => [
				'validator'              => new NullableIsInBackedEnumValuesValidator( $backedEnumName = Values::STRING_BACKED_ENUM_NAME_1 ),
				'expectedBackedEnumName' => $backedEnumName
			],
			7 => [
				'validator'              => new NullableIsInBackedEnumValuesValidator( $backedEnumName = Values::STRING_BACKED_ENUM_NAME_2 ),
				'expectedBackedEnumName' => $backedEnumName
			]
		];
	}
}
