<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;
use function implode;
use function sprintf;
use CodeKandis\ToolKit\Validators\IsArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsBinaryStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBinaryStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanValidator;
use CodeKandis\ToolKit\Validators\IsClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsClassNameValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeValidator;
use CodeKandis\ToolKit\Validators\IsEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsEnumValidator;
use CodeKandis\ToolKit\Validators\IsFloatArrayValidator;
use CodeKandis\ToolKit\Validators\IsFloatStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsFloatStringValidator;
use CodeKandis\ToolKit\Validators\IsFloatValidator;
use CodeKandis\ToolKit\Validators\IsInArrayValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerStringValidator;
use CodeKandis\ToolKit\Validators\IsIntegerValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassEnumOrTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassEnumOrTraitNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassOrEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassOrEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsNonEmptyStringArrayValidator;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0051 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			51000 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51001 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51002 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51003 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51004 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51005 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51006 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51007 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51008 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51009 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51010 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51011 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51012 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51013 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51014 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51015 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51016 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51017 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51018 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51019 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51020 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51021 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51022 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51023 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51024 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51025 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51026 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51027 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51028 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51029 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51030 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51031 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51032 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51033 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51034 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51035 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51036 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51037 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51038 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51039 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51040 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51041 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51042 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51043 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51044 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51045 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51046 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51047 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51048 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51049 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51050 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51051 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51052 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51053 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51054 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51055 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51056 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51057 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51058 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51059 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51060 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51061 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51062 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51063 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51064 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51065 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51066 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51067 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51068 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51069 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51070 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51071 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51072 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51073 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51074 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51075 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51076 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51077 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51078 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51079 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51080 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51081 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51082 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51083 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51084 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51085 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51086 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51087 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51088 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51089 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51090 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51091 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51092 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51093 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51094 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51095 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51096 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51097 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51098 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51099 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51100 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51101 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51102 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51103 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51104 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51105 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51106 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51107 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51108 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51109 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51110 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51111 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51112 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51113 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51114 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51115 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51116 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51117 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51118 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51119 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51120 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51121 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51122 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51123 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51124 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51125 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51126 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51127 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51128 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51129 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51130 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51131 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51132 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51133 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51134 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51135 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51136 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51137 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51138 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51139 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51140 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51141 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51142 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51143 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51144 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51145 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51146 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51147 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51148 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51149 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51150 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51151 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51152 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51153 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51154 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51155 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51156 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51157 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51158 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51159 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51160 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51161 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51162 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51163 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51164 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51165 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51166 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51167 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51168 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51169 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51170 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51171 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51172 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51173 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51174 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51175 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51176 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51177 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51178 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51179 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51180 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51181 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51182 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51183 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51184 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51185 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51186 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51187 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51188 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51189 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51190 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51191 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51192 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51193 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51194 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51195 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51196 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51197 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51198 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51199 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51200 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51201 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51202 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51203 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51204 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51205 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51206 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51207 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51208 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51209 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51210 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51211 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51212 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51213 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51214 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51215 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51216 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51217 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51218 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51219 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51220 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51221 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51222 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51223 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51224 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51225 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51226 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51227 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51228 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51229 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51230 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51231 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51232 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51233 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51234 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51235 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51236 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51237 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51238 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51239 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51240 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51241 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51242 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51243 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51244 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51245 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51246 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51247 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51248 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51249 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51250 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51251 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51252 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51253 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51254 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51255 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51256 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51257 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51258 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51259 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51260 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51261 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51262 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51263 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51264 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51265 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51266 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51267 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51268 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51269 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51270 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51271 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51272 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51273 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51274 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51275 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51276 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51277 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51278 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51279 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51280 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51281 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51282 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51283 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51284 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51285 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51286 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51287 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51288 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51289 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51290 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51291 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51292 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51293 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51294 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51295 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51296 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51297 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51298 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51299 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51300 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51301 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51302 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51303 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51304 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51305 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51306 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51307 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51308 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51309 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51310 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51311 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51312 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51313 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51314 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51315 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51316 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51317 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51318 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51319 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51320 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51321 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51322 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51323 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51324 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51325 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51326 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51327 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51328 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51329 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51330 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51331 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51332 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51333 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51334 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51335 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51336 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51337 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51338 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51339 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51340 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51341 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51342 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51343 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51344 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51345 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51346 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51347 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51348 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51349 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51350 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51351 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51352 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51353 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51354 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51355 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51356 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51357 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51358 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51359 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51360 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51361 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51362 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51363 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51364 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51365 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51366 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51367 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51368 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51369 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51370 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51371 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51372 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51373 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51374 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51375 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51376 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51377 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51378 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51379 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51380 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51381 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51382 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51383 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51384 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51385 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51386 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51387 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51388 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51389 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51390 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51391 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51392 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51393 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51394 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51395 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51396 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51397 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51398 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51399 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51400 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51401 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51402 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51403 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51404 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51405 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51406 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51407 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51408 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51409 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51410 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51411 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51412 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51413 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51414 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51415 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51416 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51417 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51418 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51419 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51420 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51421 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51422 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51423 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51424 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51425 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51426 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51427 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51428 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51429 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51430 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51431 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51432 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51433 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51434 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51435 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51436 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51437 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51438 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51439 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51440 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51441 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51442 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51443 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51444 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51445 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51446 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51447 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51448 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51449 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51450 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51451 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51452 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51453 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51454 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51455 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51456 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51457 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51458 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51459 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51460 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51461 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51462 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51463 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51464 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51465 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51466 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51467 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51468 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51469 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51470 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51471 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51472 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51473 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51474 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51475 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51476 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51477 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51478 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51479 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51480 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51481 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51482 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51483 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51484 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51485 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51486 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51487 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51488 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51489 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51490 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51491 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51492 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51493 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51494 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51495 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51496 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51497 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51498 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51499 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51500 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51501 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51502 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51503 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51504 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51505 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51506 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51507 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51508 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51509 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51510 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51511 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51512 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51513 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51514 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51515 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51516 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51517 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51518 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51519 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51520 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51521 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51522 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51523 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51524 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51525 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51526 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51527 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51528 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51529 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51530 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51531 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51532 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51533 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51534 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51535 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51536 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51537 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51538 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51539 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51540 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51541 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51542 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51543 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51544 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51545 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51546 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51547 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51548 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51549 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51550 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51551 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51552 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51553 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51554 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51555 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51556 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51557 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51558 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51559 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51560 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51561 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51562 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51563 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51564 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51565 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51566 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51567 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51568 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51569 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51570 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51571 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51572 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51573 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51574 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51575 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51576 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51577 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51578 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51579 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51580 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51581 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51582 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51583 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51584 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51585 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51586 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51587 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51588 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51589 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51590 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51591 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51592 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51593 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51594 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51595 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51596 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51597 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51598 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51599 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51600 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51601 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51602 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51603 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51604 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51605 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51606 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51607 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51608 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51609 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51610 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51611 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51612 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51613 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51614 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51615 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51616 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51617 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51618 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51619 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51620 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51621 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51622 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51623 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51624 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51625 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51626 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51627 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51628 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51629 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51630 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51631 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51632 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51633 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51634 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51635 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51636 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51637 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51638 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51639 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51640 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51641 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51642 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51643 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51644 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51645 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51646 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51647 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51648 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51649 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51650 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51651 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51652 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51653 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51654 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51655 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51656 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51657 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51658 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51659 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51660 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51661 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51662 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51663 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51664 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51665 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51666 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51667 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51668 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51669 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51670 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51671 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51672 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51673 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51674 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51675 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51676 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51677 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51678 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51679 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51680 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51681 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51682 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51683 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51684 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51685 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51686 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51687 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51688 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51689 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51690 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51691 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51692 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51693 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51694 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51695 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51696 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51697 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51698 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51699 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51700 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51701 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51702 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51703 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51704 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51705 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51706 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51707 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51708 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51709 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51710 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51711 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51712 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51713 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51714 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51715 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51716 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51717 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51718 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51719 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51720 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51721 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51722 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51723 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51724 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51725 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51726 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51727 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51728 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51729 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51730 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51731 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51732 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51733 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51734 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51735 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51736 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51737 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51738 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51739 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51740 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51741 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51742 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51743 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51744 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51745 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51746 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51747 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51748 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51749 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51750 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51751 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51752 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51753 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51754 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51755 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51756 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51757 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51758 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51759 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51760 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51761 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51762 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51763 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51764 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51765 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51766 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51767 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51768 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51769 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51770 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51771 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51772 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51773 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51774 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51775 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51776 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51777 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51778 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51779 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51780 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51781 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51782 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51783 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51784 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51785 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51786 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51787 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51788 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51789 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51790 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51791 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51792 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51793 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51794 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51795 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51796 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51797 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51798 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51799 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51800 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51801 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51802 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51803 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51804 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51805 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51806 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51807 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51808 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51809 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51810 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51811 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51812 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51813 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51814 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51815 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51816 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51817 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51818 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51819 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51820 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51821 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51822 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51823 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51824 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51825 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51826 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51827 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51828 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51829 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51830 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51831 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51832 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51833 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51834 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51835 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51836 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51837 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51838 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51839 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51840 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51841 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51842 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51843 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51844 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51845 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51846 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51847 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51848 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51849 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51850 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51851 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51852 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51853 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51854 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51855 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51856 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51857 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51858 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51859 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51860 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51861 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51862 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51863 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51864 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51865 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51866 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51867 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51868 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51869 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51870 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51871 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51872 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51873 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51874 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51875 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51876 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51877 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51878 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51879 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51880 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51881 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51882 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51883 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51884 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51885 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51886 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51887 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51888 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51889 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51890 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51891 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51892 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51893 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51894 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51895 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51896 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51897 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51898 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51899 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51900 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51901 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51902 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51903 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51904 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51905 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51906 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51907 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51908 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51909 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51910 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51911 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51912 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51913 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51914 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51915 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51916 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51917 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51918 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51919 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51920 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51921 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51922 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51923 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51924 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51925 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51926 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51927 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51928 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51929 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51930 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51931 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51932 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51933 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51934 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51935 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51936 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51937 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51938 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51939 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51940 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51941 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51942 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51943 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51944 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51945 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51946 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51947 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51948 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51949 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51950 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51951 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51952 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51953 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51954 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51955 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51956 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51957 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51958 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51959 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51960 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51961 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51962 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51963 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51964 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51965 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51966 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51967 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51968 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51969 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51970 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51971 => [
				'validator'                => new IsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51972 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51973 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51974 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51975 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51976 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51977 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51978 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51979 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51980 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51981 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51982 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51983 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51984 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51985 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51986 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51987 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51988 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51989 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51990 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51991 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51992 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51993 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51994 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51995 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51996 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			51997 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51998 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			51999 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			]
		];
	}
}
