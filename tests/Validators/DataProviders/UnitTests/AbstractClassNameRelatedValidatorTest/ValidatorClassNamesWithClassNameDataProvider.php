<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractClassNameRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsValidator;
use Override;

/**
 * Represents a data provider providing validator class names with class name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithClassNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName' => IsInClassConstantsArrayValidator::class,
				'className'          => Values::CLASS_NAME_1
			],
			1 => [
				'validatorClassName' => IsInClassConstantsArrayValidator::class,
				'className'          => Values::CLASS_NAME_2
			],
			2 => [
				'validatorClassName' => IsInClassConstantsValidator::class,
				'className'          => Values::CLASS_NAME_1
			],
			3 => [
				'validatorClassName' => IsInClassConstantsValidator::class,
				'className'          => Values::CLASS_NAME_2
			],
			4 => [
				'validatorClassName' => NullableIsInClassConstantsArrayValidator::class,
				'className'          => Values::CLASS_NAME_1
			],
			5 => [
				'validatorClassName' => NullableIsInClassConstantsArrayValidator::class,
				'className'          => Values::CLASS_NAME_2
			],
			6 => [
				'validatorClassName' => NullableIsInClassConstantsValidator::class,
				'className'          => Values::CLASS_NAME_1
			],
			7 => [
				'validatorClassName' => NullableIsInClassConstantsValidator::class,
				'className'          => Values::CLASS_NAME_2
			]
		];
	}
}
