<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\InheritanceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Validators\AbstractArrayRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractBackedEnumNameRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractClassNameRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractDateTimeFormatRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractIntegerBackedEnumNameRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractInterfaceClassOrEnumNameRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractInterfaceNameRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractInterfaceOrClassNameRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractRegularExpressionRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractStringBackedEnumNameRelatedValidator;
use CodeKandis\ToolKit\Validators\AbstractValidatorsRelatedValidator;
use CodeKandis\ToolKit\Validators\ArrayRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\BackedEnumNameRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\ClassNameRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\DateTimeFormatRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\DuplicateValidatorException;
use CodeKandis\ToolKit\Validators\DuplicateValidatorExceptionInterface;
use CodeKandis\ToolKit\Validators\IntegerBackedEnumNameRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\InterfaceClassOrEnumNameRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\InterfaceNameRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\InterfaceOrClassNameRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\IsArrayValidator;
use CodeKandis\ToolKit\Validators\IsArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBinaryStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBinaryStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBinaryStringValidator;
use CodeKandis\ToolKit\Validators\IsBinaryStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBooleanArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBooleanStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBooleanStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsBooleanValidator;
use CodeKandis\ToolKit\Validators\IsBooleanValidatorInterface;
use CodeKandis\ToolKit\Validators\IsClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsClassNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsClassNameValidator;
use CodeKandis\ToolKit\Validators\IsClassNameValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateIntervalArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateIntervalValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateTimeArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayByFormatValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringByFormatValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateTimeStringValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsDateTimeValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeValidatorInterface;
use CodeKandis\ToolKit\Validators\IsEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsEnumArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\IsEnumValidator;
use CodeKandis\ToolKit\Validators\IsEnumValidatorInterface;
use CodeKandis\ToolKit\Validators\IsFloatArrayValidator;
use CodeKandis\ToolKit\Validators\IsFloatArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsFloatStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsFloatStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsFloatStringValidator;
use CodeKandis\ToolKit\Validators\IsFloatStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsFloatValidator;
use CodeKandis\ToolKit\Validators\IsFloatValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInArrayValidator;
use CodeKandis\ToolKit\Validators\IsInArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInClassConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesValidatorInterface;
use CodeKandis\ToolKit\Validators\IsIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumValidatorInterface;
use CodeKandis\ToolKit\Validators\IsIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsIntegerStringValidator;
use CodeKandis\ToolKit\Validators\IsIntegerStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsIntegerValidator;
use CodeKandis\ToolKit\Validators\IsIntegerValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInterfaceClassEnumOrTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassEnumOrTraitNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInterfaceClassEnumOrTraitNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassEnumOrTraitNameValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInterfaceClassOrEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassOrEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInterfaceClassOrEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassOrEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInterfaceNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInterfaceNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceNameValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameValidatorInterface;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidatorInterface;
use CodeKandis\ToolKit\Validators\IsNonEmptyStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsNonEmptyStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsNonEmptyStringValidator;
use CodeKandis\ToolKit\Validators\IsNonEmptyStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsNullArrayValidator;
use CodeKandis\ToolKit\Validators\IsNullArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsNullStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsNullStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsNullStringValidator;
use CodeKandis\ToolKit\Validators\IsNullStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use CodeKandis\ToolKit\Validators\IsNullValidatorInterface;
use CodeKandis\ToolKit\Validators\IsObjectArrayValidator;
use CodeKandis\ToolKit\Validators\IsObjectArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsObjectValidator;
use CodeKandis\ToolKit\Validators\IsObjectValidatorInterface;
use CodeKandis\ToolKit\Validators\IsRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\IsRegularExpressionArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsRegularExpressionValidatorInterface;
use CodeKandis\ToolKit\Validators\IsScalarArrayValidator;
use CodeKandis\ToolKit\Validators\IsScalarArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsScalarValidator;
use CodeKandis\ToolKit\Validators\IsScalarValidatorInterface;
use CodeKandis\ToolKit\Validators\IsStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumValidatorInterface;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use CodeKandis\ToolKit\Validators\IsStringValidatorInterface;
use CodeKandis\ToolKit\Validators\IsSubClassOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsSubClassOfArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsSubClassOfValidator;
use CodeKandis\ToolKit\Validators\IsSubClassOfValidatorInterface;
use CodeKandis\ToolKit\Validators\IsTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsTraitNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\IsTraitNameValidator;
use CodeKandis\ToolKit\Validators\IsTraitNameValidatorInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\AbstractValidatorMappingsRelatedValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\DuplicateValidatorMappingException;
use CodeKandis\ToolKit\Validators\MappedValidators\DuplicateValidatorMappingExceptionInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedObjectValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedObjectValidatorInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedObjectValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedObjectValidatorInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMapping;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMappingInterface;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMappingsRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumValidator;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBinaryStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBinaryStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBinaryStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsBinaryStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBooleanArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBooleanStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBooleanStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsBooleanValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsClassNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsClassNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsClassNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeImmutableArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeImmutableArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeImmutableValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeImmutableValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayByFormatValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringByFormatValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsEnumArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsEnumArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsEnumValidator;
use CodeKandis\ToolKit\Validators\NullableIsEnumValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsFloatArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsFloatArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsFloatStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsFloatStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsFloatStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsFloatStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsFloatValidator;
use CodeKandis\ToolKit\Validators\NullableIsFloatValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceOrClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceOrClassConstantsArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceOrClassConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceOrClassConstantsValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsIntegerStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsIntegerValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassEnumOrTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassEnumOrTraitNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassEnumOrTraitNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassEnumOrTraitNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassOrEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassOrEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassOrEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassOrEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceOrClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceOrClassNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceOrClassNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceOrClassNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsNonEmptyStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsNonEmptyStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsNonEmptyStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsNonEmptyStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsNullArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsNullArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsNullStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsNullStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsNullStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsNullStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsObjectArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsObjectArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsObjectValidator;
use CodeKandis\ToolKit\Validators\NullableIsObjectValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsRegularExpressionArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\NullableIsRegularExpressionValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsScalarArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsScalarArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsScalarValidator;
use CodeKandis\ToolKit\Validators\NullableIsScalarValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsTraitNameArrayValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableIsTraitNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsTraitNameValidatorInterface;
use CodeKandis\ToolKit\Validators\NullableValidatorChain;
use CodeKandis\ToolKit\Validators\NullableValidatorChainInterface;
use CodeKandis\ToolKit\Validators\RegularExpressionRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\StringBackedEnumNameRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\ValidatorChain;
use CodeKandis\ToolKit\Validators\ValidatorChainInterface;
use CodeKandis\ToolKit\Validators\ValidatorInterface;
use CodeKandis\ToolKit\Validators\ValidatorsRelatedValidatorInterface;
use CodeKandis\ToolKit\Validators\ValidValues;
use CodeKandis\ToolKit\Validators\ValidValuesInterface;
use CodeKandis\Types\BaseObject;
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
			0   => [
				'interfaceOrClassName'                 => AbstractArrayRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => ArrayRelatedValidatorInterface::class
			],
			1   => [
				'interfaceOrClassName'                 => AbstractArrayRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			2   => [
				'interfaceOrClassName'                 => AbstractBackedEnumNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNameRelatedValidatorInterface::class
			],
			3   => [
				'interfaceOrClassName'                 => AbstractBackedEnumNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			4   => [
				'interfaceOrClassName'                 => AbstractClassNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			5   => [
				'interfaceOrClassName'                 => AbstractClassNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => ClassNameRelatedValidatorInterface::class
			],
			6   => [
				'interfaceOrClassName'                 => AbstractDateTimeFormatRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			7   => [
				'interfaceOrClassName'                 => AbstractDateTimeFormatRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeFormatRelatedValidatorInterface::class
			],
			8   => [
				'interfaceOrClassName'                 => AbstractIntegerBackedEnumNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			9   => [
				'interfaceOrClassName'                 => AbstractIntegerBackedEnumNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => IntegerBackedEnumNameRelatedValidatorInterface::class
			],
			10  => [
				'interfaceOrClassName'                 => AbstractInterfaceClassOrEnumNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			11  => [
				'interfaceOrClassName'                 => AbstractInterfaceClassOrEnumNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNameRelatedValidatorInterface::class
			],
			12  => [
				'interfaceOrClassName'                 => AbstractInterfaceNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			13  => [
				'interfaceOrClassName'                 => AbstractInterfaceNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceNameRelatedValidatorInterface::class
			],
			14  => [
				'interfaceOrClassName'                 => AbstractInterfaceOrClassNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			15  => [
				'interfaceOrClassName'                 => AbstractInterfaceOrClassNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNameRelatedValidatorInterface::class
			],
			16  => [
				'interfaceOrClassName'                 => AbstractRegularExpressionRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			17  => [
				'interfaceOrClassName'                 => AbstractRegularExpressionRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => RegularExpressionRelatedValidatorInterface::class
			],
			18  => [
				'interfaceOrClassName'                 => AbstractStringBackedEnumNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			19  => [
				'interfaceOrClassName'                 => AbstractStringBackedEnumNameRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumNameRelatedValidatorInterface::class
			],
			20  => [
				'interfaceOrClassName'                 => AbstractValidatorsRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			21  => [
				'interfaceOrClassName'                 => AbstractValidatorsRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorsRelatedValidatorInterface::class
			],
			22  => [
				'interfaceOrClassName'                 => ArrayRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			23  => [
				'interfaceOrClassName'                 => BackedEnumNameRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			24  => [
				'interfaceOrClassName'                 => ClassNameRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			25  => [
				'interfaceOrClassName'                 => DateTimeFormatRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			26  => [
				'interfaceOrClassName'                 => DuplicateValidatorException::class,
				'expectedAncestorInterfaceOrClassName' => DuplicateValidatorExceptionInterface::class
			],
			27  => [
				'interfaceOrClassName'                 => DuplicateValidatorException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			28  => [
				'interfaceOrClassName'                 => DuplicateValidatorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			29  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNameRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			30  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNameRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			31  => [
				'interfaceOrClassName'                 => InterfaceNameRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			32  => [
				'interfaceOrClassName'                 => InterfaceOrClassNameRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			33  => [
				'interfaceOrClassName'                 => IsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			34  => [
				'interfaceOrClassName'                 => IsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsArrayValidatorInterface::class
			],
			35  => [
				'interfaceOrClassName'                 => IsArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			36  => [
				'interfaceOrClassName'                 => IsBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			37  => [
				'interfaceOrClassName'                 => IsBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBackedEnumArrayValidatorInterface::class
			],
			38  => [
				'interfaceOrClassName'                 => IsBackedEnumArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			39  => [
				'interfaceOrClassName'                 => IsBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			40  => [
				'interfaceOrClassName'                 => IsBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBackedEnumNameArrayValidatorInterface::class
			],
			41  => [
				'interfaceOrClassName'                 => IsBackedEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			42  => [
				'interfaceOrClassName'                 => IsBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			43  => [
				'interfaceOrClassName'                 => IsBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBackedEnumNameValidatorInterface::class
			],
			44  => [
				'interfaceOrClassName'                 => IsBackedEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			45  => [
				'interfaceOrClassName'                 => IsBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			46  => [
				'interfaceOrClassName'                 => IsBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBackedEnumValidatorInterface::class
			],
			47  => [
				'interfaceOrClassName'                 => IsBackedEnumValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			48  => [
				'interfaceOrClassName'                 => IsBinaryStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			49  => [
				'interfaceOrClassName'                 => IsBinaryStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBinaryStringArrayValidatorInterface::class
			],
			50  => [
				'interfaceOrClassName'                 => IsBinaryStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			51  => [
				'interfaceOrClassName'                 => IsBinaryStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			52  => [
				'interfaceOrClassName'                 => IsBinaryStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBinaryStringValidatorInterface::class
			],
			53  => [
				'interfaceOrClassName'                 => IsBinaryStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			54  => [
				'interfaceOrClassName'                 => IsBooleanArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			55  => [
				'interfaceOrClassName'                 => IsBooleanArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBooleanArrayValidatorInterface::class
			],
			56  => [
				'interfaceOrClassName'                 => IsBooleanArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			57  => [
				'interfaceOrClassName'                 => IsBooleanIntegerArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			58  => [
				'interfaceOrClassName'                 => IsBooleanIntegerArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBooleanIntegerArrayValidatorInterface::class
			],
			59  => [
				'interfaceOrClassName'                 => IsBooleanIntegerArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			60  => [
				'interfaceOrClassName'                 => IsBooleanIntegerStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			61  => [
				'interfaceOrClassName'                 => IsBooleanIntegerStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBooleanIntegerStringArrayValidatorInterface::class
			],
			62  => [
				'interfaceOrClassName'                 => IsBooleanIntegerStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			63  => [
				'interfaceOrClassName'                 => IsBooleanIntegerStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			64  => [
				'interfaceOrClassName'                 => IsBooleanIntegerStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBooleanIntegerStringValidatorInterface::class
			],
			65  => [
				'interfaceOrClassName'                 => IsBooleanIntegerStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			66  => [
				'interfaceOrClassName'                 => IsBooleanIntegerValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			67  => [
				'interfaceOrClassName'                 => IsBooleanIntegerValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBooleanIntegerValidatorInterface::class
			],
			68  => [
				'interfaceOrClassName'                 => IsBooleanIntegerValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			69  => [
				'interfaceOrClassName'                 => IsBooleanStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			70  => [
				'interfaceOrClassName'                 => IsBooleanStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBooleanStringArrayValidatorInterface::class
			],
			71  => [
				'interfaceOrClassName'                 => IsBooleanStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			72  => [
				'interfaceOrClassName'                 => IsBooleanStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			73  => [
				'interfaceOrClassName'                 => IsBooleanStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBooleanStringValidatorInterface::class
			],
			74  => [
				'interfaceOrClassName'                 => IsBooleanStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			75  => [
				'interfaceOrClassName'                 => IsBooleanValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			76  => [
				'interfaceOrClassName'                 => IsBooleanValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsBooleanValidatorInterface::class
			],
			77  => [
				'interfaceOrClassName'                 => IsBooleanValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			78  => [
				'interfaceOrClassName'                 => IsClassNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			79  => [
				'interfaceOrClassName'                 => IsClassNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsClassNameArrayValidatorInterface::class
			],
			80  => [
				'interfaceOrClassName'                 => IsClassNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			81  => [
				'interfaceOrClassName'                 => IsClassNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			82  => [
				'interfaceOrClassName'                 => IsClassNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsClassNameValidatorInterface::class
			],
			83  => [
				'interfaceOrClassName'                 => IsClassNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			84  => [
				'interfaceOrClassName'                 => IsDateIntervalArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			85  => [
				'interfaceOrClassName'                 => IsDateIntervalArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateIntervalArrayValidatorInterface::class
			],
			86  => [
				'interfaceOrClassName'                 => IsDateIntervalArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			87  => [
				'interfaceOrClassName'                 => IsDateIntervalStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			88  => [
				'interfaceOrClassName'                 => IsDateIntervalStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateIntervalStringArrayValidatorInterface::class
			],
			89  => [
				'interfaceOrClassName'                 => IsDateIntervalStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			90  => [
				'interfaceOrClassName'                 => IsDateIntervalStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			91  => [
				'interfaceOrClassName'                 => IsDateIntervalStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateIntervalStringValidatorInterface::class
			],
			92  => [
				'interfaceOrClassName'                 => IsDateIntervalStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			93  => [
				'interfaceOrClassName'                 => IsDateIntervalValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			94  => [
				'interfaceOrClassName'                 => IsDateIntervalValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateIntervalValidatorInterface::class
			],
			95  => [
				'interfaceOrClassName'                 => IsDateIntervalValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			96  => [
				'interfaceOrClassName'                 => IsDateTimeArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			97  => [
				'interfaceOrClassName'                 => IsDateTimeArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateTimeArrayValidatorInterface::class
			],
			98  => [
				'interfaceOrClassName'                 => IsDateTimeArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			99  => [
				'interfaceOrClassName'                 => IsDateTimeImmutableArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			100 => [
				'interfaceOrClassName'                 => IsDateTimeImmutableArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateTimeImmutableArrayValidatorInterface::class
			],
			101 => [
				'interfaceOrClassName'                 => IsDateTimeImmutableArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			102 => [
				'interfaceOrClassName'                 => IsDateTimeImmutableValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			103 => [
				'interfaceOrClassName'                 => IsDateTimeImmutableValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateTimeImmutableValidatorInterface::class
			],
			104 => [
				'interfaceOrClassName'                 => IsDateTimeImmutableValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			105 => [
				'interfaceOrClassName'                 => IsDateTimeStringArrayByFormatValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeFormatRelatedValidator::class
			],
			106 => [
				'interfaceOrClassName'                 => IsDateTimeStringArrayByFormatValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateTimeStringArrayByFormatValidatorInterface::class
			],
			107 => [
				'interfaceOrClassName'                 => IsDateTimeStringArrayByFormatValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeFormatRelatedValidatorInterface::class
			],
			108 => [
				'interfaceOrClassName'                 => IsDateTimeStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			109 => [
				'interfaceOrClassName'                 => IsDateTimeStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateTimeStringArrayValidatorInterface::class
			],
			110 => [
				'interfaceOrClassName'                 => IsDateTimeStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			111 => [
				'interfaceOrClassName'                 => IsDateTimeStringByFormatValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeFormatRelatedValidator::class
			],
			112 => [
				'interfaceOrClassName'                 => IsDateTimeStringByFormatValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateTimeStringByFormatValidatorInterface::class
			],
			113 => [
				'interfaceOrClassName'                 => IsDateTimeStringByFormatValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			114 => [
				'interfaceOrClassName'                 => IsDateTimeStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			115 => [
				'interfaceOrClassName'                 => IsDateTimeStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateTimeStringValidatorInterface::class
			],
			116 => [
				'interfaceOrClassName'                 => IsDateTimeStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			117 => [
				'interfaceOrClassName'                 => IsDateTimeValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			118 => [
				'interfaceOrClassName'                 => IsDateTimeValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsDateTimeValidatorInterface::class
			],
			119 => [
				'interfaceOrClassName'                 => IsDateTimeValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			120 => [
				'interfaceOrClassName'                 => IsEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			121 => [
				'interfaceOrClassName'                 => IsEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsEnumArrayValidatorInterface::class
			],
			122 => [
				'interfaceOrClassName'                 => IsEnumArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			123 => [
				'interfaceOrClassName'                 => IsEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			124 => [
				'interfaceOrClassName'                 => IsEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsEnumNameArrayValidatorInterface::class
			],
			125 => [
				'interfaceOrClassName'                 => IsEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			126 => [
				'interfaceOrClassName'                 => IsEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			127 => [
				'interfaceOrClassName'                 => IsEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsEnumNameValidatorInterface::class
			],
			128 => [
				'interfaceOrClassName'                 => IsEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			129 => [
				'interfaceOrClassName'                 => IsEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			130 => [
				'interfaceOrClassName'                 => IsEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsEnumValidatorInterface::class
			],
			131 => [
				'interfaceOrClassName'                 => IsEnumValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			132 => [
				'interfaceOrClassName'                 => IsFloatArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			133 => [
				'interfaceOrClassName'                 => IsFloatArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsFloatArrayValidatorInterface::class
			],
			134 => [
				'interfaceOrClassName'                 => IsFloatArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			135 => [
				'interfaceOrClassName'                 => IsFloatStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			136 => [
				'interfaceOrClassName'                 => IsFloatStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsFloatStringArrayValidatorInterface::class
			],
			137 => [
				'interfaceOrClassName'                 => IsFloatStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			138 => [
				'interfaceOrClassName'                 => IsFloatStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			139 => [
				'interfaceOrClassName'                 => IsFloatStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsFloatStringValidatorInterface::class
			],
			140 => [
				'interfaceOrClassName'                 => IsFloatStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			141 => [
				'interfaceOrClassName'                 => IsFloatValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			142 => [
				'interfaceOrClassName'                 => IsFloatValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsFloatValidatorInterface::class
			],
			143 => [
				'interfaceOrClassName'                 => IsFloatValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			144 => [
				'interfaceOrClassName'                 => IsInArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractArrayRelatedValidator::class
			],
			145 => [
				'interfaceOrClassName'                 => IsInArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInArrayValidatorInterface::class
			],
			146 => [
				'interfaceOrClassName'                 => IsInArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ArrayRelatedValidatorInterface::class
			],
			147 => [
				'interfaceOrClassName'                 => IsInBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBackedEnumNameRelatedValidator::class
			],
			148 => [
				'interfaceOrClassName'                 => IsInBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInBackedEnumValuesArrayValidatorInterface::class
			],
			149 => [
				'interfaceOrClassName'                 => IsInBackedEnumValuesArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNameRelatedValidatorInterface::class
			],
			150 => [
				'interfaceOrClassName'                 => IsInBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBackedEnumNameRelatedValidator::class
			],
			151 => [
				'interfaceOrClassName'                 => IsInBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInBackedEnumValuesValidatorInterface::class
			],
			152 => [
				'interfaceOrClassName'                 => IsInBackedEnumValuesValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNameRelatedValidatorInterface::class
			],
			153 => [
				'interfaceOrClassName'                 => IsInClassConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractClassNameRelatedValidator::class
			],
			154 => [
				'interfaceOrClassName'                 => IsInClassConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInClassConstantsArrayValidatorInterface::class
			],
			155 => [
				'interfaceOrClassName'                 => IsInClassConstantsArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ClassNameRelatedValidatorInterface::class
			],
			156 => [
				'interfaceOrClassName'                 => IsInClassConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractClassNameRelatedValidator::class
			],
			157 => [
				'interfaceOrClassName'                 => IsInClassConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInClassConstantsValidatorInterface::class
			],
			158 => [
				'interfaceOrClassName'                 => IsInClassConstantsValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ClassNameRelatedValidatorInterface::class
			],
			159 => [
				'interfaceOrClassName'                 => IsInIntegerBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractIntegerBackedEnumNameRelatedValidator::class
			],
			160 => [
				'interfaceOrClassName'                 => IsInIntegerBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInIntegerBackedEnumValuesArrayValidatorInterface::class
			],
			161 => [
				'interfaceOrClassName'                 => IsInIntegerBackedEnumValuesArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => IntegerBackedEnumNameRelatedValidatorInterface::class
			],
			162 => [
				'interfaceOrClassName'                 => IsInIntegerBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractIntegerBackedEnumNameRelatedValidator::class
			],
			163 => [
				'interfaceOrClassName'                 => IsInIntegerBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInIntegerBackedEnumValuesValidatorInterface::class
			],
			164 => [
				'interfaceOrClassName'                 => IsInIntegerBackedEnumValuesValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => IntegerBackedEnumNameRelatedValidatorInterface::class
			],
			165 => [
				'interfaceOrClassName'                 => IsInInterfaceConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceNameRelatedValidator::class
			],
			166 => [
				'interfaceOrClassName'                 => IsInInterfaceConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInInterfaceConstantsArrayValidatorInterface::class
			],
			167 => [
				'interfaceOrClassName'                 => IsInInterfaceConstantsArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceNameRelatedValidatorInterface::class
			],
			168 => [
				'interfaceOrClassName'                 => IsInInterfaceConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceNameRelatedValidator::class
			],
			169 => [
				'interfaceOrClassName'                 => IsInInterfaceConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInInterfaceConstantsValidatorInterface::class
			],
			170 => [
				'interfaceOrClassName'                 => IsInInterfaceConstantsValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceNameRelatedValidatorInterface::class
			],
			171 => [
				'interfaceOrClassName'                 => IsInInterfaceOrClassConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceOrClassNameRelatedValidator::class
			],
			172 => [
				'interfaceOrClassName'                 => IsInInterfaceOrClassConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInInterfaceOrClassConstantsArrayValidatorInterface::class
			],
			173 => [
				'interfaceOrClassName'                 => IsInInterfaceOrClassConstantsArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNameRelatedValidatorInterface::class
			],
			174 => [
				'interfaceOrClassName'                 => IsInInterfaceOrClassConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceOrClassNameRelatedValidator::class
			],
			175 => [
				'interfaceOrClassName'                 => IsInInterfaceOrClassConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInInterfaceOrClassConstantsValidatorInterface::class
			],
			176 => [
				'interfaceOrClassName'                 => IsInInterfaceOrClassConstantsValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNameRelatedValidatorInterface::class
			],
			177 => [
				'interfaceOrClassName'                 => IsInstanceOfArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceClassOrEnumNameRelatedValidator::class
			],
			178 => [
				'interfaceOrClassName'                 => IsInstanceOfArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInstanceOfArrayValidatorInterface::class
			],
			179 => [
				'interfaceOrClassName'                 => IsInstanceOfArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNameRelatedValidatorInterface::class
			],
			180 => [
				'interfaceOrClassName'                 => IsInstanceOfValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceClassOrEnumNameRelatedValidator::class
			],
			181 => [
				'interfaceOrClassName'                 => IsInstanceOfValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInstanceOfValidatorInterface::class
			],
			182 => [
				'interfaceOrClassName'                 => IsInstanceOfValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNameRelatedValidatorInterface::class
			],
			183 => [
				'interfaceOrClassName'                 => IsInStringBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractStringBackedEnumNameRelatedValidator::class
			],
			184 => [
				'interfaceOrClassName'                 => IsInStringBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInStringBackedEnumValuesArrayValidatorInterface::class
			],
			185 => [
				'interfaceOrClassName'                 => IsInStringBackedEnumValuesArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumNameRelatedValidatorInterface::class
			],
			186 => [
				'interfaceOrClassName'                 => IsInStringBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractStringBackedEnumNameRelatedValidator::class
			],
			187 => [
				'interfaceOrClassName'                 => IsInStringBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInStringBackedEnumValuesValidatorInterface::class
			],
			188 => [
				'interfaceOrClassName'                 => IsInStringBackedEnumValuesValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumNameRelatedValidatorInterface::class
			],
			189 => [
				'interfaceOrClassName'                 => IsIntegerArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			190 => [
				'interfaceOrClassName'                 => IsIntegerArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsIntegerArrayValidatorInterface::class
			],
			191 => [
				'interfaceOrClassName'                 => IsIntegerArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			192 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			193 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsIntegerBackedEnumArrayValidatorInterface::class
			],
			194 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			195 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			196 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsIntegerBackedEnumNameArrayValidatorInterface::class
			],
			197 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			198 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			199 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsIntegerBackedEnumNameValidatorInterface::class
			],
			200 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			201 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			202 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsIntegerBackedEnumValidatorInterface::class
			],
			203 => [
				'interfaceOrClassName'                 => IsIntegerBackedEnumValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			204 => [
				'interfaceOrClassName'                 => IsIntegerStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			205 => [
				'interfaceOrClassName'                 => IsIntegerStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsIntegerStringArrayValidatorInterface::class
			],
			206 => [
				'interfaceOrClassName'                 => IsIntegerStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			207 => [
				'interfaceOrClassName'                 => IsIntegerStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			208 => [
				'interfaceOrClassName'                 => IsIntegerStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsIntegerStringValidatorInterface::class
			],
			209 => [
				'interfaceOrClassName'                 => IsIntegerStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			210 => [
				'interfaceOrClassName'                 => IsIntegerValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			211 => [
				'interfaceOrClassName'                 => IsIntegerValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsIntegerValidatorInterface::class
			],
			212 => [
				'interfaceOrClassName'                 => IsIntegerValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			213 => [
				'interfaceOrClassName'                 => IsInterfaceClassEnumOrTraitNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			214 => [
				'interfaceOrClassName'                 => IsInterfaceClassEnumOrTraitNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInterfaceClassEnumOrTraitNameArrayValidatorInterface::class
			],
			215 => [
				'interfaceOrClassName'                 => IsInterfaceClassEnumOrTraitNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			216 => [
				'interfaceOrClassName'                 => IsInterfaceClassEnumOrTraitNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			217 => [
				'interfaceOrClassName'                 => IsInterfaceClassEnumOrTraitNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInterfaceClassEnumOrTraitNameValidatorInterface::class
			],
			218 => [
				'interfaceOrClassName'                 => IsInterfaceClassEnumOrTraitNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			219 => [
				'interfaceOrClassName'                 => IsInterfaceClassOrEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			220 => [
				'interfaceOrClassName'                 => IsInterfaceClassOrEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInterfaceClassOrEnumNameArrayValidatorInterface::class
			],
			221 => [
				'interfaceOrClassName'                 => IsInterfaceClassOrEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			222 => [
				'interfaceOrClassName'                 => IsInterfaceClassOrEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			223 => [
				'interfaceOrClassName'                 => IsInterfaceClassOrEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInterfaceClassOrEnumNameValidatorInterface::class
			],
			224 => [
				'interfaceOrClassName'                 => IsInterfaceClassOrEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			225 => [
				'interfaceOrClassName'                 => IsInterfaceNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			226 => [
				'interfaceOrClassName'                 => IsInterfaceNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInterfaceNameArrayValidatorInterface::class
			],
			227 => [
				'interfaceOrClassName'                 => IsInterfaceNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			228 => [
				'interfaceOrClassName'                 => IsInterfaceNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			229 => [
				'interfaceOrClassName'                 => IsInterfaceNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInterfaceNameValidatorInterface::class
			],
			230 => [
				'interfaceOrClassName'                 => IsInterfaceNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			231 => [
				'interfaceOrClassName'                 => IsInterfaceOrClassNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			232 => [
				'interfaceOrClassName'                 => IsInterfaceOrClassNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInterfaceOrClassNameArrayValidatorInterface::class
			],
			233 => [
				'interfaceOrClassName'                 => IsInterfaceOrClassNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			234 => [
				'interfaceOrClassName'                 => IsInterfaceOrClassNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			235 => [
				'interfaceOrClassName'                 => IsInterfaceOrClassNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsInterfaceOrClassNameValidatorInterface::class
			],
			236 => [
				'interfaceOrClassName'                 => IsInterfaceOrClassNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			237 => [
				'interfaceOrClassName'                 => IsMatchingRegularExpressionArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractRegularExpressionRelatedValidator::class
			],
			238 => [
				'interfaceOrClassName'                 => IsMatchingRegularExpressionArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsMatchingRegularExpressionArrayValidatorInterface::class
			],
			239 => [
				'interfaceOrClassName'                 => IsMatchingRegularExpressionArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => RegularExpressionRelatedValidatorInterface::class
			],
			240 => [
				'interfaceOrClassName'                 => IsMatchingRegularExpressionValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractRegularExpressionRelatedValidator::class
			],
			241 => [
				'interfaceOrClassName'                 => IsMatchingRegularExpressionValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsMatchingRegularExpressionValidatorInterface::class
			],
			242 => [
				'interfaceOrClassName'                 => IsMatchingRegularExpressionValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => RegularExpressionRelatedValidatorInterface::class
			],
			243 => [
				'interfaceOrClassName'                 => IsNonEmptyStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			244 => [
				'interfaceOrClassName'                 => IsNonEmptyStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsNonEmptyStringArrayValidatorInterface::class
			],
			245 => [
				'interfaceOrClassName'                 => IsNonEmptyStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			246 => [
				'interfaceOrClassName'                 => IsNonEmptyStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			247 => [
				'interfaceOrClassName'                 => IsNonEmptyStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsNonEmptyStringValidatorInterface::class
			],
			248 => [
				'interfaceOrClassName'                 => IsNonEmptyStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			249 => [
				'interfaceOrClassName'                 => IsNullArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			250 => [
				'interfaceOrClassName'                 => IsNullArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsNullArrayValidatorInterface::class
			],
			251 => [
				'interfaceOrClassName'                 => IsNullArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			252 => [
				'interfaceOrClassName'                 => IsNullStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			253 => [
				'interfaceOrClassName'                 => IsNullStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsNullStringArrayValidatorInterface::class
			],
			254 => [
				'interfaceOrClassName'                 => IsNullStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			255 => [
				'interfaceOrClassName'                 => IsNullStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			256 => [
				'interfaceOrClassName'                 => IsNullStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsNullStringValidatorInterface::class
			],
			257 => [
				'interfaceOrClassName'                 => IsNullStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			258 => [
				'interfaceOrClassName'                 => IsNullValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			259 => [
				'interfaceOrClassName'                 => IsNullValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsNullValidatorInterface::class
			],
			260 => [
				'interfaceOrClassName'                 => IsNullValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			261 => [
				'interfaceOrClassName'                 => IsObjectArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			262 => [
				'interfaceOrClassName'                 => IsObjectArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsObjectArrayValidatorInterface::class
			],
			263 => [
				'interfaceOrClassName'                 => IsObjectArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			264 => [
				'interfaceOrClassName'                 => IsObjectValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			265 => [
				'interfaceOrClassName'                 => IsObjectValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsObjectValidatorInterface::class
			],
			266 => [
				'interfaceOrClassName'                 => IsObjectValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			267 => [
				'interfaceOrClassName'                 => IsRegularExpressionArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			268 => [
				'interfaceOrClassName'                 => IsRegularExpressionArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsRegularExpressionArrayValidatorInterface::class
			],
			269 => [
				'interfaceOrClassName'                 => IsRegularExpressionArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			270 => [
				'interfaceOrClassName'                 => IsRegularExpressionValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			271 => [
				'interfaceOrClassName'                 => IsRegularExpressionValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsRegularExpressionValidatorInterface::class
			],
			272 => [
				'interfaceOrClassName'                 => IsRegularExpressionValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			273 => [
				'interfaceOrClassName'                 => IsScalarArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			274 => [
				'interfaceOrClassName'                 => IsScalarArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsScalarArrayValidatorInterface::class
			],
			275 => [
				'interfaceOrClassName'                 => IsScalarArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			276 => [
				'interfaceOrClassName'                 => IsScalarValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			277 => [
				'interfaceOrClassName'                 => IsScalarValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsScalarValidatorInterface::class
			],
			278 => [
				'interfaceOrClassName'                 => IsScalarValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			279 => [
				'interfaceOrClassName'                 => IsStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			280 => [
				'interfaceOrClassName'                 => IsStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsStringArrayValidatorInterface::class
			],
			281 => [
				'interfaceOrClassName'                 => IsStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			282 => [
				'interfaceOrClassName'                 => IsStringBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			283 => [
				'interfaceOrClassName'                 => IsStringBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsStringBackedEnumArrayValidatorInterface::class
			],
			284 => [
				'interfaceOrClassName'                 => IsStringBackedEnumArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			285 => [
				'interfaceOrClassName'                 => IsStringBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			286 => [
				'interfaceOrClassName'                 => IsStringBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsStringBackedEnumNameArrayValidatorInterface::class
			],
			287 => [
				'interfaceOrClassName'                 => IsStringBackedEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			288 => [
				'interfaceOrClassName'                 => IsStringBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			289 => [
				'interfaceOrClassName'                 => IsStringBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsStringBackedEnumNameValidatorInterface::class
			],
			290 => [
				'interfaceOrClassName'                 => IsStringBackedEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			291 => [
				'interfaceOrClassName'                 => IsStringBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			292 => [
				'interfaceOrClassName'                 => IsStringBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsStringBackedEnumValidatorInterface::class
			],
			293 => [
				'interfaceOrClassName'                 => IsStringBackedEnumValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			294 => [
				'interfaceOrClassName'                 => IsStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			295 => [
				'interfaceOrClassName'                 => IsStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsStringValidatorInterface::class
			],
			296 => [
				'interfaceOrClassName'                 => IsStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			297 => [
				'interfaceOrClassName'                 => IsSubClassOfArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceOrClassNameRelatedValidator::class
			],
			298 => [
				'interfaceOrClassName'                 => IsSubClassOfArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsSubClassOfArrayValidatorInterface::class
			],
			299 => [
				'interfaceOrClassName'                 => IsSubClassOfArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNameRelatedValidatorInterface::class
			],
			300 => [
				'interfaceOrClassName'                 => IsSubClassOfValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceOrClassNameRelatedValidator::class
			],
			301 => [
				'interfaceOrClassName'                 => IsSubClassOfValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsSubClassOfValidatorInterface::class
			],
			302 => [
				'interfaceOrClassName'                 => IsSubClassOfValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNameRelatedValidatorInterface::class
			],
			303 => [
				'interfaceOrClassName'                 => IsTraitNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			304 => [
				'interfaceOrClassName'                 => IsTraitNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsTraitNameArrayValidatorInterface::class
			],
			305 => [
				'interfaceOrClassName'                 => IsTraitNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			306 => [
				'interfaceOrClassName'                 => IsTraitNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			307 => [
				'interfaceOrClassName'                 => IsTraitNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => IsTraitNameValidatorInterface::class
			],
			308 => [
				'interfaceOrClassName'                 => IsTraitNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			309 => [
				'interfaceOrClassName'                 => NullableIsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			310 => [
				'interfaceOrClassName'                 => NullableIsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsArrayValidatorInterface::class
			],
			311 => [
				'interfaceOrClassName'                 => NullableIsArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			312 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			313 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBackedEnumArrayValidatorInterface::class
			],
			314 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			315 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			316 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBackedEnumNameArrayValidatorInterface::class
			],
			317 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			318 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			319 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBackedEnumNameValidatorInterface::class
			],
			320 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			321 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			322 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBackedEnumValidatorInterface::class
			],
			323 => [
				'interfaceOrClassName'                 => NullableIsBackedEnumValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			324 => [
				'interfaceOrClassName'                 => NullableIsBinaryStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			325 => [
				'interfaceOrClassName'                 => NullableIsBinaryStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBinaryStringArrayValidatorInterface::class
			],
			326 => [
				'interfaceOrClassName'                 => NullableIsBinaryStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			327 => [
				'interfaceOrClassName'                 => NullableIsBinaryStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			328 => [
				'interfaceOrClassName'                 => NullableIsBinaryStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBinaryStringValidatorInterface::class
			],
			329 => [
				'interfaceOrClassName'                 => NullableIsBinaryStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			330 => [
				'interfaceOrClassName'                 => NullableIsBooleanArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			331 => [
				'interfaceOrClassName'                 => NullableIsBooleanArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBooleanArrayValidatorInterface::class
			],
			332 => [
				'interfaceOrClassName'                 => NullableIsBooleanArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			333 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			334 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBooleanIntegerArrayValidatorInterface::class
			],
			335 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			336 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			337 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBooleanIntegerStringArrayValidatorInterface::class
			],
			338 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			339 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			340 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBooleanIntegerStringValidatorInterface::class
			],
			341 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			342 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			343 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBooleanIntegerValidatorInterface::class
			],
			344 => [
				'interfaceOrClassName'                 => NullableIsBooleanIntegerValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			345 => [
				'interfaceOrClassName'                 => NullableIsBooleanStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			346 => [
				'interfaceOrClassName'                 => NullableIsBooleanStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBooleanStringArrayValidatorInterface::class
			],
			347 => [
				'interfaceOrClassName'                 => NullableIsBooleanStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			348 => [
				'interfaceOrClassName'                 => NullableIsBooleanStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			349 => [
				'interfaceOrClassName'                 => NullableIsBooleanStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBooleanStringValidatorInterface::class
			],
			350 => [
				'interfaceOrClassName'                 => NullableIsBooleanStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			351 => [
				'interfaceOrClassName'                 => NullableIsBooleanValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			352 => [
				'interfaceOrClassName'                 => NullableIsBooleanValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsBooleanValidatorInterface::class
			],
			353 => [
				'interfaceOrClassName'                 => NullableIsBooleanValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			354 => [
				'interfaceOrClassName'                 => NullableIsClassNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			355 => [
				'interfaceOrClassName'                 => NullableIsClassNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsClassNameArrayValidatorInterface::class
			],
			356 => [
				'interfaceOrClassName'                 => NullableIsClassNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			357 => [
				'interfaceOrClassName'                 => NullableIsClassNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			358 => [
				'interfaceOrClassName'                 => NullableIsClassNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsClassNameValidatorInterface::class
			],
			359 => [
				'interfaceOrClassName'                 => NullableIsClassNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			360 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			361 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateIntervalArrayValidatorInterface::class
			],
			362 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			363 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			364 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateIntervalStringArrayValidatorInterface::class
			],
			365 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			366 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			367 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateIntervalStringValidatorInterface::class
			],
			368 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			369 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			370 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateIntervalValidatorInterface::class
			],
			371 => [
				'interfaceOrClassName'                 => NullableIsDateIntervalValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			372 => [
				'interfaceOrClassName'                 => NullableIsDateTimeArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			373 => [
				'interfaceOrClassName'                 => NullableIsDateTimeArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateTimeArrayValidatorInterface::class
			],
			374 => [
				'interfaceOrClassName'                 => NullableIsDateTimeArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			375 => [
				'interfaceOrClassName'                 => NullableIsDateTimeImmutableArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			376 => [
				'interfaceOrClassName'                 => NullableIsDateTimeImmutableArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateTimeImmutableArrayValidatorInterface::class
			],
			377 => [
				'interfaceOrClassName'                 => NullableIsDateTimeImmutableArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			378 => [
				'interfaceOrClassName'                 => NullableIsDateTimeImmutableValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			379 => [
				'interfaceOrClassName'                 => NullableIsDateTimeImmutableValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateTimeImmutableValidatorInterface::class
			],
			380 => [
				'interfaceOrClassName'                 => NullableIsDateTimeImmutableValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			381 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringArrayByFormatValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeFormatRelatedValidator::class
			],
			382 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringArrayByFormatValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateTimeStringArrayByFormatValidatorInterface::class
			],
			383 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringArrayByFormatValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			384 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			385 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateTimeStringArrayValidatorInterface::class
			],
			386 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			387 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringByFormatValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeFormatRelatedValidator::class
			],
			388 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringByFormatValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateTimeStringByFormatValidatorInterface::class
			],
			389 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringByFormatValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			390 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			391 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateTimeStringValidatorInterface::class
			],
			392 => [
				'interfaceOrClassName'                 => NullableIsDateTimeStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			393 => [
				'interfaceOrClassName'                 => NullableIsDateTimeValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			394 => [
				'interfaceOrClassName'                 => NullableIsDateTimeValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsDateTimeValidatorInterface::class
			],
			395 => [
				'interfaceOrClassName'                 => NullableIsDateTimeValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			396 => [
				'interfaceOrClassName'                 => NullableIsEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			397 => [
				'interfaceOrClassName'                 => NullableIsEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsEnumArrayValidatorInterface::class
			],
			398 => [
				'interfaceOrClassName'                 => NullableIsEnumArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			399 => [
				'interfaceOrClassName'                 => NullableIsEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			400 => [
				'interfaceOrClassName'                 => NullableIsEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsEnumNameArrayValidatorInterface::class
			],
			401 => [
				'interfaceOrClassName'                 => NullableIsEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			402 => [
				'interfaceOrClassName'                 => NullableIsEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			403 => [
				'interfaceOrClassName'                 => NullableIsEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsEnumNameValidatorInterface::class
			],
			404 => [
				'interfaceOrClassName'                 => NullableIsEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			405 => [
				'interfaceOrClassName'                 => NullableIsEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			406 => [
				'interfaceOrClassName'                 => NullableIsEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsEnumValidatorInterface::class
			],
			407 => [
				'interfaceOrClassName'                 => NullableIsEnumValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			408 => [
				'interfaceOrClassName'                 => NullableIsFloatArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			409 => [
				'interfaceOrClassName'                 => NullableIsFloatArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsFloatArrayValidatorInterface::class
			],
			410 => [
				'interfaceOrClassName'                 => NullableIsFloatArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			411 => [
				'interfaceOrClassName'                 => NullableIsFloatStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			412 => [
				'interfaceOrClassName'                 => NullableIsFloatStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsFloatStringArrayValidatorInterface::class
			],
			413 => [
				'interfaceOrClassName'                 => NullableIsFloatStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			414 => [
				'interfaceOrClassName'                 => NullableIsFloatStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			415 => [
				'interfaceOrClassName'                 => NullableIsFloatStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsFloatStringValidatorInterface::class
			],
			416 => [
				'interfaceOrClassName'                 => NullableIsFloatStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			417 => [
				'interfaceOrClassName'                 => NullableIsFloatValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			418 => [
				'interfaceOrClassName'                 => NullableIsFloatValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsFloatValidatorInterface::class
			],
			419 => [
				'interfaceOrClassName'                 => NullableIsFloatValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			420 => [
				'interfaceOrClassName'                 => NullableIsInArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractArrayRelatedValidator::class
			],
			421 => [
				'interfaceOrClassName'                 => NullableIsInArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInArrayValidatorInterface::class
			],
			422 => [
				'interfaceOrClassName'                 => NullableIsInArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ArrayRelatedValidatorInterface::class
			],
			423 => [
				'interfaceOrClassName'                 => NullableIsInBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBackedEnumNameRelatedValidator::class
			],
			424 => [
				'interfaceOrClassName'                 => NullableIsInBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInBackedEnumValuesArrayValidatorInterface::class
			],
			425 => [
				'interfaceOrClassName'                 => NullableIsInBackedEnumValuesArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNameRelatedValidatorInterface::class
			],
			426 => [
				'interfaceOrClassName'                 => NullableIsInBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBackedEnumNameRelatedValidator::class
			],
			427 => [
				'interfaceOrClassName'                 => NullableIsInBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInBackedEnumValuesValidatorInterface::class
			],
			428 => [
				'interfaceOrClassName'                 => NullableIsInBackedEnumValuesValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNameRelatedValidatorInterface::class
			],
			429 => [
				'interfaceOrClassName'                 => NullableIsInClassConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractClassNameRelatedValidator::class
			],
			430 => [
				'interfaceOrClassName'                 => NullableIsInClassConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInClassConstantsArrayValidatorInterface::class
			],
			431 => [
				'interfaceOrClassName'                 => NullableIsInClassConstantsArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ClassNameRelatedValidatorInterface::class
			],
			432 => [
				'interfaceOrClassName'                 => NullableIsInClassConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractClassNameRelatedValidator::class
			],
			433 => [
				'interfaceOrClassName'                 => NullableIsInClassConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInClassConstantsValidatorInterface::class
			],
			434 => [
				'interfaceOrClassName'                 => NullableIsInClassConstantsValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ClassNameRelatedValidatorInterface::class
			],
			435 => [
				'interfaceOrClassName'                 => NullableIsInIntegerBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractIntegerBackedEnumNameRelatedValidator::class
			],
			436 => [
				'interfaceOrClassName'                 => NullableIsInIntegerBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInIntegerBackedEnumValuesArrayValidatorInterface::class
			],
			437 => [
				'interfaceOrClassName'                 => NullableIsInIntegerBackedEnumValuesArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => IntegerBackedEnumNameRelatedValidatorInterface::class
			],
			438 => [
				'interfaceOrClassName'                 => NullableIsInIntegerBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractIntegerBackedEnumNameRelatedValidator::class
			],
			439 => [
				'interfaceOrClassName'                 => NullableIsInIntegerBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInIntegerBackedEnumValuesValidatorInterface::class
			],
			440 => [
				'interfaceOrClassName'                 => NullableIsInIntegerBackedEnumValuesValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => IntegerBackedEnumNameRelatedValidatorInterface::class
			],
			441 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceNameRelatedValidator::class
			],
			442 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInInterfaceConstantsArrayValidatorInterface::class
			],
			443 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceConstantsArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceNameRelatedValidatorInterface::class
			],
			444 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceNameRelatedValidator::class
			],
			445 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInInterfaceConstantsValidatorInterface::class
			],
			446 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceConstantsValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceNameRelatedValidatorInterface::class
			],
			447 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceOrClassConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceOrClassNameRelatedValidator::class
			],
			448 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceOrClassConstantsArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInInterfaceOrClassConstantsArrayValidatorInterface::class
			],
			449 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceOrClassConstantsArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNameRelatedValidatorInterface::class
			],
			450 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceOrClassConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceOrClassNameRelatedValidator::class
			],
			451 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceOrClassConstantsValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInInterfaceOrClassConstantsValidatorInterface::class
			],
			452 => [
				'interfaceOrClassName'                 => NullableIsInInterfaceOrClassConstantsValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNameRelatedValidatorInterface::class
			],
			453 => [
				'interfaceOrClassName'                 => NullableIsInstanceOfArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceClassOrEnumNameRelatedValidator::class
			],
			454 => [
				'interfaceOrClassName'                 => NullableIsInstanceOfArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInstanceOfArrayValidatorInterface::class
			],
			455 => [
				'interfaceOrClassName'                 => NullableIsInstanceOfArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNameRelatedValidatorInterface::class
			],
			456 => [
				'interfaceOrClassName'                 => NullableIsInstanceOfValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceClassOrEnumNameRelatedValidator::class
			],
			457 => [
				'interfaceOrClassName'                 => NullableIsInstanceOfValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInstanceOfValidatorInterface::class
			],
			458 => [
				'interfaceOrClassName'                 => NullableIsInstanceOfValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNameRelatedValidatorInterface::class
			],
			459 => [
				'interfaceOrClassName'                 => NullableIsInStringBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractStringBackedEnumNameRelatedValidator::class
			],
			460 => [
				'interfaceOrClassName'                 => NullableIsInStringBackedEnumValuesArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInStringBackedEnumValuesArrayValidatorInterface::class
			],
			461 => [
				'interfaceOrClassName'                 => NullableIsInStringBackedEnumValuesArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumNameRelatedValidatorInterface::class
			],
			462 => [
				'interfaceOrClassName'                 => NullableIsInStringBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractStringBackedEnumNameRelatedValidator::class
			],
			463 => [
				'interfaceOrClassName'                 => NullableIsInStringBackedEnumValuesValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInStringBackedEnumValuesValidatorInterface::class
			],
			464 => [
				'interfaceOrClassName'                 => NullableIsInStringBackedEnumValuesValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumNameRelatedValidatorInterface::class
			],
			465 => [
				'interfaceOrClassName'                 => NullableIsIntegerArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			466 => [
				'interfaceOrClassName'                 => NullableIsIntegerArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsIntegerArrayValidatorInterface::class
			],
			467 => [
				'interfaceOrClassName'                 => NullableIsIntegerArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			468 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			469 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsIntegerBackedEnumArrayValidatorInterface::class
			],
			470 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			471 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			472 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsIntegerBackedEnumNameArrayValidatorInterface::class
			],
			473 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			474 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			475 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsIntegerBackedEnumNameValidatorInterface::class
			],
			476 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			477 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			478 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsIntegerBackedEnumValidatorInterface::class
			],
			479 => [
				'interfaceOrClassName'                 => NullableIsIntegerBackedEnumValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			480 => [
				'interfaceOrClassName'                 => NullableIsIntegerStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			481 => [
				'interfaceOrClassName'                 => NullableIsIntegerStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsIntegerStringArrayValidatorInterface::class
			],
			482 => [
				'interfaceOrClassName'                 => NullableIsIntegerStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			483 => [
				'interfaceOrClassName'                 => NullableIsIntegerStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			484 => [
				'interfaceOrClassName'                 => NullableIsIntegerStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsIntegerStringValidatorInterface::class
			],
			485 => [
				'interfaceOrClassName'                 => NullableIsIntegerStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			486 => [
				'interfaceOrClassName'                 => NullableIsIntegerValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			487 => [
				'interfaceOrClassName'                 => NullableIsIntegerValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsIntegerValidatorInterface::class
			],
			488 => [
				'interfaceOrClassName'                 => NullableIsIntegerValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			489 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassEnumOrTraitNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			490 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassEnumOrTraitNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInterfaceClassEnumOrTraitNameArrayValidatorInterface::class
			],
			491 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassEnumOrTraitNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			492 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassEnumOrTraitNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			493 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassEnumOrTraitNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInterfaceClassEnumOrTraitNameValidatorInterface::class
			],
			494 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassEnumOrTraitNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			495 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassOrEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			496 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassOrEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInterfaceClassOrEnumNameArrayValidatorInterface::class
			],
			497 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassOrEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			498 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassOrEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			499 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassOrEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInterfaceClassOrEnumNameValidatorInterface::class
			],
			500 => [
				'interfaceOrClassName'                 => NullableIsInterfaceClassOrEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			501 => [
				'interfaceOrClassName'                 => NullableIsInterfaceNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			502 => [
				'interfaceOrClassName'                 => NullableIsInterfaceNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInterfaceNameArrayValidatorInterface::class
			],
			503 => [
				'interfaceOrClassName'                 => NullableIsInterfaceNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			504 => [
				'interfaceOrClassName'                 => NullableIsInterfaceNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			505 => [
				'interfaceOrClassName'                 => NullableIsInterfaceNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInterfaceNameValidatorInterface::class
			],
			506 => [
				'interfaceOrClassName'                 => NullableIsInterfaceNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			507 => [
				'interfaceOrClassName'                 => NullableIsInterfaceOrClassNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			508 => [
				'interfaceOrClassName'                 => NullableIsInterfaceOrClassNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInterfaceOrClassNameArrayValidatorInterface::class
			],
			509 => [
				'interfaceOrClassName'                 => NullableIsInterfaceOrClassNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			510 => [
				'interfaceOrClassName'                 => NullableIsInterfaceOrClassNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			511 => [
				'interfaceOrClassName'                 => NullableIsInterfaceOrClassNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsInterfaceOrClassNameValidatorInterface::class
			],
			512 => [
				'interfaceOrClassName'                 => NullableIsInterfaceOrClassNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			513 => [
				'interfaceOrClassName'                 => NullableIsMatchingRegularExpressionArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractRegularExpressionRelatedValidator::class
			],
			514 => [
				'interfaceOrClassName'                 => NullableIsMatchingRegularExpressionArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsMatchingRegularExpressionArrayValidatorInterface::class
			],
			515 => [
				'interfaceOrClassName'                 => NullableIsMatchingRegularExpressionArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => RegularExpressionRelatedValidatorInterface::class
			],
			516 => [
				'interfaceOrClassName'                 => NullableIsMatchingRegularExpressionValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractRegularExpressionRelatedValidator::class
			],
			517 => [
				'interfaceOrClassName'                 => NullableIsMatchingRegularExpressionValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsMatchingRegularExpressionValidatorInterface::class
			],
			518 => [
				'interfaceOrClassName'                 => NullableIsMatchingRegularExpressionValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => RegularExpressionRelatedValidatorInterface::class
			],
			519 => [
				'interfaceOrClassName'                 => NullableIsNonEmptyStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			520 => [
				'interfaceOrClassName'                 => NullableIsNonEmptyStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsNonEmptyStringArrayValidatorInterface::class
			],
			521 => [
				'interfaceOrClassName'                 => NullableIsNonEmptyStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			522 => [
				'interfaceOrClassName'                 => NullableIsNonEmptyStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			523 => [
				'interfaceOrClassName'                 => NullableIsNonEmptyStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsNonEmptyStringValidatorInterface::class
			],
			524 => [
				'interfaceOrClassName'                 => NullableIsNonEmptyStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			525 => [
				'interfaceOrClassName'                 => NullableIsNullArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			526 => [
				'interfaceOrClassName'                 => NullableIsNullArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsNullArrayValidatorInterface::class
			],
			527 => [
				'interfaceOrClassName'                 => NullableIsNullArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			528 => [
				'interfaceOrClassName'                 => NullableIsNullStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			529 => [
				'interfaceOrClassName'                 => NullableIsNullStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsNullStringArrayValidatorInterface::class
			],
			530 => [
				'interfaceOrClassName'                 => NullableIsNullStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			531 => [
				'interfaceOrClassName'                 => NullableIsNullStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			532 => [
				'interfaceOrClassName'                 => NullableIsNullStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsNullStringValidatorInterface::class
			],
			533 => [
				'interfaceOrClassName'                 => NullableIsNullStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			534 => [
				'interfaceOrClassName'                 => NullableIsObjectArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			535 => [
				'interfaceOrClassName'                 => NullableIsObjectArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsObjectArrayValidatorInterface::class
			],
			536 => [
				'interfaceOrClassName'                 => NullableIsObjectArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			537 => [
				'interfaceOrClassName'                 => NullableIsObjectValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			538 => [
				'interfaceOrClassName'                 => NullableIsObjectValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsObjectValidatorInterface::class
			],
			539 => [
				'interfaceOrClassName'                 => NullableIsObjectValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			540 => [
				'interfaceOrClassName'                 => NullableIsRegularExpressionArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			541 => [
				'interfaceOrClassName'                 => NullableIsRegularExpressionArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsRegularExpressionArrayValidatorInterface::class
			],
			542 => [
				'interfaceOrClassName'                 => NullableIsRegularExpressionArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			543 => [
				'interfaceOrClassName'                 => NullableIsRegularExpressionValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			544 => [
				'interfaceOrClassName'                 => NullableIsRegularExpressionValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsRegularExpressionValidatorInterface::class
			],
			545 => [
				'interfaceOrClassName'                 => NullableIsRegularExpressionValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			546 => [
				'interfaceOrClassName'                 => NullableIsScalarArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			547 => [
				'interfaceOrClassName'                 => NullableIsScalarArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsScalarArrayValidatorInterface::class
			],
			548 => [
				'interfaceOrClassName'                 => NullableIsScalarArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			549 => [
				'interfaceOrClassName'                 => NullableIsScalarValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			550 => [
				'interfaceOrClassName'                 => NullableIsScalarValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsScalarValidatorInterface::class
			],
			551 => [
				'interfaceOrClassName'                 => NullableIsScalarValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			552 => [
				'interfaceOrClassName'                 => NullableIsStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			553 => [
				'interfaceOrClassName'                 => NullableIsStringArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsStringArrayValidatorInterface::class
			],
			554 => [
				'interfaceOrClassName'                 => NullableIsStringArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			555 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			556 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsStringBackedEnumArrayValidatorInterface::class
			],
			557 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			558 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			559 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsStringBackedEnumNameArrayValidatorInterface::class
			],
			560 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			561 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			562 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsStringBackedEnumNameValidatorInterface::class
			],
			563 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			564 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			565 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsStringBackedEnumValidatorInterface::class
			],
			566 => [
				'interfaceOrClassName'                 => NullableIsStringBackedEnumValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			567 => [
				'interfaceOrClassName'                 => NullableIsStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			568 => [
				'interfaceOrClassName'                 => NullableIsStringValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsStringValidatorInterface::class
			],
			569 => [
				'interfaceOrClassName'                 => NullableIsStringValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			570 => [
				'interfaceOrClassName'                 => NullableIsSubClassOfArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceOrClassNameRelatedValidator::class
			],
			571 => [
				'interfaceOrClassName'                 => NullableIsSubClassOfArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsSubClassOfArrayValidatorInterface::class
			],
			572 => [
				'interfaceOrClassName'                 => NullableIsSubClassOfArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNameRelatedValidatorInterface::class
			],
			573 => [
				'interfaceOrClassName'                 => NullableIsSubClassOfValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractInterfaceOrClassNameRelatedValidator::class
			],
			574 => [
				'interfaceOrClassName'                 => NullableIsSubClassOfValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsSubClassOfValidatorInterface::class
			],
			575 => [
				'interfaceOrClassName'                 => NullableIsSubClassOfValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNameRelatedValidatorInterface::class
			],
			576 => [
				'interfaceOrClassName'                 => NullableIsTraitNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			577 => [
				'interfaceOrClassName'                 => NullableIsTraitNameArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsTraitNameArrayValidatorInterface::class
			],
			578 => [
				'interfaceOrClassName'                 => NullableIsTraitNameArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			579 => [
				'interfaceOrClassName'                 => NullableIsTraitNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			580 => [
				'interfaceOrClassName'                 => NullableIsTraitNameValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableIsTraitNameValidatorInterface::class
			],
			581 => [
				'interfaceOrClassName'                 => NullableIsTraitNameValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			582 => [
				'interfaceOrClassName'                 => NullableValidatorChain::class,
				'expectedAncestorInterfaceOrClassName' => AbstractValidatorsRelatedValidator::class
			],
			583 => [
				'interfaceOrClassName'                 => NullableValidatorChain::class,
				'expectedAncestorInterfaceOrClassName' => NullableValidatorChainInterface::class
			],
			584 => [
				'interfaceOrClassName'                 => NullableValidatorChainInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorsRelatedValidatorInterface::class
			],
			585 => [
				'interfaceOrClassName'                 => RegularExpressionRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			586 => [
				'interfaceOrClassName'                 => StringBackedEnumNameRelatedValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorInterface::class
			],
			587 => [
				'interfaceOrClassName'                 => ValidatorChain::class,
				'expectedAncestorInterfaceOrClassName' => AbstractValidatorsRelatedValidator::class
			],
			588 => [
				'interfaceOrClassName'                 => ValidatorChain::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorChainInterface::class
			],
			589 => [
				'interfaceOrClassName'                 => ValidatorChainInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorsRelatedValidatorInterface::class
			],
			590 => [
				'interfaceOrClassName'                 => ValidValues::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			591 => [
				'interfaceOrClassName'                 => ValidValues::class,
				'expectedAncestorInterfaceOrClassName' => ValidValuesInterface::class
			],
			592 => [
				'interfaceOrClassName'                 => AbstractValidatorMappingsRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			593 => [
				'interfaceOrClassName'                 => AbstractValidatorMappingsRelatedValidator::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorMappingsRelatedValidatorInterface::class
			],
			594 => [
				'interfaceOrClassName'                 => DuplicateValidatorMappingException::class,
				'expectedAncestorInterfaceOrClassName' => DuplicateValidatorMappingExceptionInterface::class
			],
			595 => [
				'interfaceOrClassName'                 => DuplicateValidatorMappingException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			596 => [
				'interfaceOrClassName'                 => DuplicateValidatorMappingExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			597 => [
				'interfaceOrClassName'                 => MappedArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractValidatorMappingsRelatedValidator::class
			],
			598 => [
				'interfaceOrClassName'                 => MappedArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => MappedArrayValidatorInterface::class
			],
			599 => [
				'interfaceOrClassName'                 => MappedArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorMappingsRelatedValidatorInterface::class
			],
			600 => [
				'interfaceOrClassName'                 => MappedObjectValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractValidatorMappingsRelatedValidator::class
			],
			601 => [
				'interfaceOrClassName'                 => MappedObjectValidator::class,
				'expectedAncestorInterfaceOrClassName' => MappedObjectValidatorInterface::class
			],
			602 => [
				'interfaceOrClassName'                 => MappedObjectValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorMappingsRelatedValidatorInterface::class
			],
			603 => [
				'interfaceOrClassName'                 => NullableMappedArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractValidatorMappingsRelatedValidator::class
			],
			604 => [
				'interfaceOrClassName'                 => NullableMappedArrayValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableMappedArrayValidatorInterface::class
			],
			605 => [
				'interfaceOrClassName'                 => NullableMappedArrayValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorMappingsRelatedValidatorInterface::class
			],
			606 => [
				'interfaceOrClassName'                 => NullableMappedObjectValidator::class,
				'expectedAncestorInterfaceOrClassName' => AbstractValidatorMappingsRelatedValidator::class
			],
			607 => [
				'interfaceOrClassName'                 => NullableMappedObjectValidator::class,
				'expectedAncestorInterfaceOrClassName' => NullableMappedObjectValidatorInterface::class
			],
			608 => [
				'interfaceOrClassName'                 => NullableMappedObjectValidatorInterface::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorMappingsRelatedValidatorInterface::class
			],
			609 => [
				'interfaceOrClassName'                 => ValidatorMapping::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			610 => [
				'interfaceOrClassName'                 => ValidatorMapping::class,
				'expectedAncestorInterfaceOrClassName' => ValidatorMappingInterface::class
			]
		];
	}
}
