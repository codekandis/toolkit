<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsValidator;
use Override;

/**
 * Represents a data provider providing validator class names with interface name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithInterfaceNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName' => IsInInterfaceConstantsArrayValidator::class,
				'interfaceName'      => Values::INTERFACE_NAME_1
			],
			1 => [
				'validatorClassName' => IsInInterfaceConstantsArrayValidator::class,
				'interfaceName'      => Values::INTERFACE_NAME_2
			],
			2 => [
				'validatorClassName' => IsInInterfaceConstantsValidator::class,
				'interfaceName'      => Values::INTERFACE_NAME_1
			],
			3 => [
				'validatorClassName' => IsInInterfaceConstantsValidator::class,
				'interfaceName'      => Values::INTERFACE_NAME_2
			],
			4 => [
				'validatorClassName' => NullableIsInInterfaceConstantsArrayValidator::class,
				'interfaceName'      => Values::INTERFACE_NAME_1
			],
			5 => [
				'validatorClassName' => NullableIsInInterfaceConstantsArrayValidator::class,
				'interfaceName'      => Values::INTERFACE_NAME_2
			],
			6 => [
				'validatorClassName' => NullableIsInInterfaceConstantsValidator::class,
				'interfaceName'      => Values::INTERFACE_NAME_1
			],
			7 => [
				'validatorClassName' => NullableIsInInterfaceConstantsValidator::class,
				'interfaceName'      => Values::INTERFACE_NAME_2
			]
		];
	}
}
