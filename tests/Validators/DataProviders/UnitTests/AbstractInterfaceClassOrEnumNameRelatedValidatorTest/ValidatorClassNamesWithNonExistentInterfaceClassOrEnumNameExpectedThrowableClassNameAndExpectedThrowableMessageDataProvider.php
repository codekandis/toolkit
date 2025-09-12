<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractInterfaceClassOrEnumNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfValidator;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing validator class names with nonexistent interface, class or enum name, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithNonExistentInterfaceClassOrEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'validatorClassName'                  => IsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			1  => [
				'validatorClassName'                  => IsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			2  => [
				'validatorClassName'                  => IsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			3  => [
				'validatorClassName'                  => IsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			4  => [
				'validatorClassName'                  => IsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			5  => [
				'validatorClassName'                  => IsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			6  => [
				'validatorClassName'                  => IsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			7  => [
				'validatorClassName'                  => IsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			8  => [
				'validatorClassName'                  => IsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			9  => [
				'validatorClassName'                  => IsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			10 => [
				'validatorClassName'                  => IsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			11 => [
				'validatorClassName'                  => IsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			12 => [
				'validatorClassName'                  => NullableIsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			13 => [
				'validatorClassName'                  => NullableIsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			14 => [
				'validatorClassName'                  => NullableIsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			15 => [
				'validatorClassName'                  => NullableIsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			16 => [
				'validatorClassName'                  => NullableIsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			17 => [
				'validatorClassName'                  => NullableIsInstanceOfArrayValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			18 => [
				'validatorClassName'                  => NullableIsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			19 => [
				'validatorClassName'                  => NullableIsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			20 => [
				'validatorClassName'                  => NullableIsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_CLASS_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			21 => [
				'validatorClassName'                  => NullableIsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_CLASS_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			22 => [
				'validatorClassName'                  => NullableIsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_ENUM_NAME_1,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			],
			23 => [
				'validatorClassName'                  => NullableIsInstanceOfValidator::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::NONEXISTENT_ENUM_NAME_2,
				'expectedThrowableClassName'          => InterfaceClassOrEnumNotFoundException::class,
				'expectedThrowableMessage'            => sprintf( InterfaceClassOrEnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			]
		];
	}
}
