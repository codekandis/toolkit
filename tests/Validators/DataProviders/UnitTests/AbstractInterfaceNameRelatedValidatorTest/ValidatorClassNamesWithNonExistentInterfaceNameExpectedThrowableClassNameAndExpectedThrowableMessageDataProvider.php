<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsValidator;
use CodeKandis\Types\InterfaceNotFoundException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing validator class names with nonexistent interface name, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithNonExistentInterfaceNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'         => IsInInterfaceConstantsArrayValidator::class,
				'nonExistentInterfaceName'   => $nonExistentInterfaceName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName' => InterfaceNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( InterfaceNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName )
			],
			1 => [
				'validatorClassName'         => IsInInterfaceConstantsArrayValidator::class,
				'nonExistentInterfaceName'   => $nonExistentInterfaceName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName' => InterfaceNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( InterfaceNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName )
			],
			2 => [
				'validatorClassName'         => IsInInterfaceConstantsValidator::class,
				'nonExistentInterfaceName'   => $nonExistentInterfaceName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName' => InterfaceNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( InterfaceNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName )
			],
			3 => [
				'validatorClassName'         => IsInInterfaceConstantsValidator::class,
				'nonExistentInterfaceName'   => $nonExistentInterfaceName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName' => InterfaceNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( InterfaceNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName )
			],
			4 => [
				'validatorClassName'         => NullableIsInInterfaceConstantsArrayValidator::class,
				'nonExistentInterfaceName'   => $nonExistentInterfaceName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName' => InterfaceNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( InterfaceNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName )
			],
			5 => [
				'validatorClassName'         => NullableIsInInterfaceConstantsArrayValidator::class,
				'nonExistentInterfaceName'   => $nonExistentInterfaceName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName' => InterfaceNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( InterfaceNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName )
			],
			6 => [
				'validatorClassName'         => NullableIsInInterfaceConstantsValidator::class,
				'nonExistentInterfaceName'   => $nonExistentInterfaceName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName' => InterfaceNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( InterfaceNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName )
			],
			7 => [
				'validatorClassName'         => NullableIsInInterfaceConstantsValidator::class,
				'nonExistentInterfaceName'   => $nonExistentInterfaceName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName' => InterfaceNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( InterfaceNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName )
			]
		];
	}
}
