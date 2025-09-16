<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceClassOrEnumNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfValidator;
use Override;

/**
 * Represents a data provider providing validator class names with interface, class or enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithInterfaceClassOrEnumNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::ENUM_NAME_1
			],
			1  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::ENUM_NAME_2
			],
			2  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			3  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			4  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::STRING_BACKED_ENUM_NAME_1
			],
			5  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::STRING_BACKED_ENUM_NAME_2
			],
			6  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::INTERFACE_NAME_1
			],
			7  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::INTERFACE_NAME_2
			],
			8  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::CLASS_NAME_1
			],
			9  => [
				'validatorClassName'       => IsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::CLASS_NAME_2
			],
			10 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::ENUM_NAME_1
			],
			11 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::ENUM_NAME_2
			],
			12 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			13 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			14 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::STRING_BACKED_ENUM_NAME_1
			],
			15 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::STRING_BACKED_ENUM_NAME_2
			],
			16 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::INTERFACE_NAME_1
			],
			17 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::INTERFACE_NAME_2
			],
			18 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::CLASS_NAME_1
			],
			19 => [
				'validatorClassName'       => IsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::CLASS_NAME_2
			],
			20 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::ENUM_NAME_1
			],
			21 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::ENUM_NAME_2
			],
			22 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			23 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			24 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::STRING_BACKED_ENUM_NAME_1
			],
			25 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::STRING_BACKED_ENUM_NAME_2
			],
			26 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::INTERFACE_NAME_1
			],
			27 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::INTERFACE_NAME_2
			],
			28 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::CLASS_NAME_1
			],
			29 => [
				'validatorClassName'       => NullableIsInstanceOfArrayValidator::class,
				'interfaceClassOrEnumName' => Values::CLASS_NAME_2
			],
			30 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::ENUM_NAME_1
			],
			31 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::ENUM_NAME_2
			],
			32 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::INTEGER_BACKED_ENUM_NAME_1
			],
			33 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::INTEGER_BACKED_ENUM_NAME_2
			],
			34 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::STRING_BACKED_ENUM_NAME_1
			],
			35 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::STRING_BACKED_ENUM_NAME_2
			],
			36 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::INTERFACE_NAME_1
			],
			37 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::INTERFACE_NAME_2
			],
			38 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::CLASS_NAME_1
			],
			39 => [
				'validatorClassName'       => NullableIsInstanceOfValidator::class,
				'interfaceClassOrEnumName' => Values::CLASS_NAME_2
			]
		];
	}
}
