<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\InterfaceNameRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsValidator;
use Override;

/**
 * Represents a data provider providing validators with expected interface name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedInterfaceNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'             => new IsInInterfaceConstantsValidator( $interfaceName = Values::INTERFACE_NAME_1 ),
				'expectedInterfaceName' => $interfaceName
			],
			1 => [
				'validator'             => new IsInInterfaceConstantsValidator( $interfaceName = Values::INTERFACE_NAME_2 ),
				'expectedInterfaceName' => $interfaceName
			],
			2 => [
				'validator'             => new NullableIsInInterfaceConstantsValidator( $interfaceName = Values::INTERFACE_NAME_1 ),
				'expectedInterfaceName' => $interfaceName
			],
			3 => [
				'validator'             => new NullableIsInInterfaceConstantsValidator( $interfaceName = Values::INTERFACE_NAME_2 ),
				'expectedInterfaceName' => $interfaceName
			]
		];
	}
}
