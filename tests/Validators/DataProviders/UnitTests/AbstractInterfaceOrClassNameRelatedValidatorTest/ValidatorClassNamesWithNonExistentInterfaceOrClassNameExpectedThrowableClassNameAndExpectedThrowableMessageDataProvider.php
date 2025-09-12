<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceOrClassNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsSubClassOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsSubClassOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfValidator;
use CodeKandis\Types\InterfaceOrClassNotFoundException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing validator class names with nonexistent interface or class name, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithNonExistentInterfaceOrClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'validatorClassName'              => IsSubClassOfArrayValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			1  => [
				'validatorClassName'              => IsSubClassOfArrayValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			2  => [
				'validatorClassName'              => IsSubClassOfArrayValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			3  => [
				'validatorClassName'              => IsSubClassOfArrayValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			4  => [
				'validatorClassName'              => IsSubClassOfValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			5  => [
				'validatorClassName'              => IsSubClassOfValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			6  => [
				'validatorClassName'              => IsSubClassOfValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			7  => [
				'validatorClassName'              => IsSubClassOfValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			8  => [
				'validatorClassName'              => NullableIsSubClassOfArrayValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			9  => [
				'validatorClassName'              => NullableIsSubClassOfArrayValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			10 => [
				'validatorClassName'              => NullableIsSubClassOfArrayValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			11 => [
				'validatorClassName'              => NullableIsSubClassOfArrayValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			12 => [
				'validatorClassName'              => NullableIsSubClassOfValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			13 => [
				'validatorClassName'              => NullableIsSubClassOfValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			14 => [
				'validatorClassName'              => NullableIsSubClassOfValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			],
			15 => [
				'validatorClassName'              => NullableIsSubClassOfValidator::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName'      => InterfaceOrClassNotFoundException::class,
				'expectedThrowableMessage'        => sprintf( InterfaceOrClassNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			]
		];
	}
}
