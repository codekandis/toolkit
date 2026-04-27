<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\StringBackedEnumNameRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesValidator;
use Override;

/**
 * Represents a data provider providing validators with expected string backed enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedStringBackedEnumNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'                    => new IsInStringBackedEnumValuesValidator( $stringBackedEnumName = Values::STRING_BACKED_ENUM_NAME_1 ),
				'expectedStringBackedEnumName' => $stringBackedEnumName
			],
			1 => [
				'validator'                    => new IsInStringBackedEnumValuesValidator( $stringBackedEnumName = Values::STRING_BACKED_ENUM_NAME_2 ),
				'expectedStringBackedEnumName' => $stringBackedEnumName
			],
			2 => [
				'validator'                    => new NullableIsInStringBackedEnumValuesValidator( $stringBackedEnumName = Values::STRING_BACKED_ENUM_NAME_1 ),
				'expectedStringBackedEnumName' => $stringBackedEnumName
			],
			3 => [
				'validator'                    => new NullableIsInStringBackedEnumValuesValidator( $stringBackedEnumName = Values::STRING_BACKED_ENUM_NAME_2 ),
				'expectedStringBackedEnumName' => $stringBackedEnumName
			]
		];
	}
}
