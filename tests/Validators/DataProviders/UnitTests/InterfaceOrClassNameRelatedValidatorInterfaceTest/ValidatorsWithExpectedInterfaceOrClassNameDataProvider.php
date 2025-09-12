<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\InterfaceOrClassNameRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsSubClassOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfValidator;
use Override;

/**
 * Represents a data provider providing validators with expected interface or class name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedInterfaceOrClassNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'                    => new IsSubClassOfValidator( $interfaceOrClassName = Values::INTERFACE_NAME_1 ),
				'expectedInterfaceOrClassName' => $interfaceOrClassName
			],
			1 => [
				'validator'                    => new IsSubClassOfValidator( $interfaceOrClassName = Values::INTERFACE_NAME_2 ),
				'expectedInterfaceOrClassName' => $interfaceOrClassName
			],
			2 => [
				'validator'                    => new IsSubClassOfValidator( $interfaceOrClassName = Values::CLASS_NAME_1 ),
				'expectedInterfaceOrClassName' => $interfaceOrClassName
			],
			3 => [
				'validator'                    => new IsSubClassOfValidator( $interfaceOrClassName = Values::CLASS_NAME_2 ),
				'expectedInterfaceOrClassName' => $interfaceOrClassName
			],
			4 => [
				'validator'                    => new NullableIsSubClassOfValidator( $interfaceOrClassName = Values::INTERFACE_NAME_1 ),
				'expectedInterfaceOrClassName' => $interfaceOrClassName
			],
			5 => [
				'validator'                    => new NullableIsSubClassOfValidator( $interfaceOrClassName = Values::INTERFACE_NAME_2 ),
				'expectedInterfaceOrClassName' => $interfaceOrClassName
			],
			6 => [
				'validator'                    => new NullableIsSubClassOfValidator( $interfaceOrClassName = Values::CLASS_NAME_1 ),
				'expectedInterfaceOrClassName' => $interfaceOrClassName
			],
			7 => [
				'validator'                    => new NullableIsSubClassOfValidator( $interfaceOrClassName = Values::CLASS_NAME_2 ),
				'expectedInterfaceOrClassName' => $interfaceOrClassName
			]
		];
	}
}
