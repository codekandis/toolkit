<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceOrClassNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsSubClassOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsSubClassOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfValidator;
use Override;

/**
 * Represents a data provider providing validator class names with interface or class name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithInterfaceOrClassNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'validatorClassName'   => IsSubClassOfArrayValidator::class,
				'interfaceOrClassName' => Values::INTERFACE_NAME_1
			],
			1  => [
				'validatorClassName'   => IsSubClassOfArrayValidator::class,
				'interfaceOrClassName' => Values::INTERFACE_NAME_2
			],
			2  => [
				'validatorClassName'   => IsSubClassOfArrayValidator::class,
				'interfaceOrClassName' => Values::CLASS_NAME_1
			],
			3  => [
				'validatorClassName'   => IsSubClassOfArrayValidator::class,
				'interfaceOrClassName' => Values::CLASS_NAME_2
			],
			4  => [
				'validatorClassName'   => IsSubClassOfArrayValidator::class,
				'interfaceOrClassName' => Values::INTERFACE_NAME_1
			],
			5  => [
				'validatorClassName'   => IsSubClassOfValidator::class,
				'interfaceOrClassName' => Values::INTERFACE_NAME_2
			],
			6  => [
				'validatorClassName'   => IsSubClassOfValidator::class,
				'interfaceOrClassName' => Values::CLASS_NAME_1
			],
			7  => [
				'validatorClassName'   => IsSubClassOfValidator::class,
				'interfaceOrClassName' => Values::CLASS_NAME_2
			],
			8  => [
				'validatorClassName'   => NullableIsSubClassOfArrayValidator::class,
				'interfaceOrClassName' => Values::INTERFACE_NAME_1
			],
			9  => [
				'validatorClassName'   => NullableIsSubClassOfArrayValidator::class,
				'interfaceOrClassName' => Values::INTERFACE_NAME_2
			],
			10 => [
				'validatorClassName'   => NullableIsSubClassOfArrayValidator::class,
				'interfaceOrClassName' => Values::CLASS_NAME_1
			],
			11 => [
				'validatorClassName'   => NullableIsSubClassOfArrayValidator::class,
				'interfaceOrClassName' => Values::CLASS_NAME_2
			],
			12 => [
				'validatorClassName'   => NullableIsSubClassOfValidator::class,
				'interfaceOrClassName' => Values::INTERFACE_NAME_1
			],
			13 => [
				'validatorClassName'   => NullableIsSubClassOfValidator::class,
				'interfaceOrClassName' => Values::INTERFACE_NAME_2
			],
			14 => [
				'validatorClassName'   => NullableIsSubClassOfValidator::class,
				'interfaceOrClassName' => Values::CLASS_NAME_1
			],
			15 => [
				'validatorClassName'   => NullableIsSubClassOfValidator::class,
				'interfaceOrClassName' => Values::CLASS_NAME_2
			]
		];
	}
}
