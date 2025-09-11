<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			...ValidatorsWithValueAndExpectedValidationResultDataProvider000::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider001::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider002::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider003::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider004::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider005::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider006::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider007::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider008::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider009::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider010::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider011::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider012::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider013::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider014::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider015::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider016::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider017::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider018::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider019::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider020::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider021::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider022::provideData(),
			...ValidatorsWithValueAndExpectedValidationResultDataProvider023::provideData()
		];
	}
}
