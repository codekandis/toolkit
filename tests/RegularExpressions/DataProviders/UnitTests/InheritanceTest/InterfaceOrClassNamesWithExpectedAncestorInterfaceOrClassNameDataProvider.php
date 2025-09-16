<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\InheritanceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\InvalidLimitException;
use CodeKandis\ToolKit\RegularExpressions\InvalidLimitExceptionInterface;
use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionException;
use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionExceptionInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionNotMatchingException;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionNotMatchingExceptionInterface;
use CodeKandis\Types\BaseObject;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\LogicException;
use CodeKandis\Types\LogicExceptionInterface;
use Override;

/**
 * Represents a data provider providing interface or class names with expected ancestor interface or class name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassNamesWithExpectedAncestorInterfaceOrClassNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'interfaceOrClassName'                 => InvalidLimitException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidLimitExceptionInterface::class
			],
			1  => [
				'interfaceOrClassName'                 => InvalidLimitException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			2  => [
				'interfaceOrClassName'                 => InvalidLimitExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			3  => [
				'interfaceOrClassName'                 => InvalidRegularExpressionException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidRegularExpressionExceptionInterface::class
			],
			4  => [
				'interfaceOrClassName'                 => InvalidRegularExpressionException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			5  => [
				'interfaceOrClassName'                 => InvalidRegularExpressionExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			6  => [
				'interfaceOrClassName'                 => RegularExpression::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			7  => [
				'interfaceOrClassName'                 => RegularExpression::class,
				'expectedAncestorInterfaceOrClassName' => RegularExpressionInterface::class
			],
			8  => [
				'interfaceOrClassName'                 => RegularExpressionNotMatchingException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			9  => [
				'interfaceOrClassName'                 => RegularExpressionNotMatchingException::class,
				'expectedAncestorInterfaceOrClassName' => RegularExpressionNotMatchingExceptionInterface::class
			],
			10 => [
				'interfaceOrClassName'                 => RegularExpressionNotMatchingExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			]
		];
	}
}
