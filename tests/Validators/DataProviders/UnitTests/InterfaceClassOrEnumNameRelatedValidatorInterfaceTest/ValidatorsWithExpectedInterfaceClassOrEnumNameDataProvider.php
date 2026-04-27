<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\InterfaceClassOrEnumNameRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfValidator;
use Override;

/**
 * Represents a data provider providing validators with expected interface, class or enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedInterfaceClassOrEnumNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::ENUM_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			1  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::ENUM_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			2  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			3  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			4  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::STRING_BACKED_ENUM_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			5  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::STRING_BACKED_ENUM_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			6  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::INTERFACE_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			7  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::INTERFACE_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			8  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::CLASS_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			9  => [
				'validator'                        => new IsInstanceOfValidator( $interfaceClassOrEnumName = Values::CLASS_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			10 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::ENUM_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			11 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::ENUM_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			12 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			13 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			14 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::STRING_BACKED_ENUM_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			15 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::STRING_BACKED_ENUM_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			16 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::INTERFACE_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			17 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::INTERFACE_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			18 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::CLASS_NAME_1 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			],
			19 => [
				'validator'                        => new NullableIsInstanceOfValidator( $interfaceClassOrEnumName = Values::CLASS_NAME_2 ),
				'expectedInterfaceClassOrEnumName' => $interfaceClassOrEnumName
			]
		];
	}
}
