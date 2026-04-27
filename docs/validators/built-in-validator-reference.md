# Validators - Built-in validator reference

## Index

* [Base validators](#base-validators)
* [Concrete validators](#concrete-validators)
* [Validator chains](#validator-chains)
* [Mapped validators](#mapped-validators)

## Base validators

* [`AbstractArrayRelatedValidator`][srclink-AbstractArrayRelatedValidator]

  Represents the base class of any array related validator.

* [`AbstractBackedEnumNameRelatedValidator`][srclink-AbstractBackedEnumNameRelatedValidator]

  Represents the base class of any backed enum name related validator.

* [`AbstractIntegerBackedEnumNameRelatedValidator`][srclink-AbstractIntegerBackedEnumNameRelatedValidator]

  Represents the base class of any integer backed enum name related validator.

* [`AbstractStringBackedEnumNameRelatedValidator`][srclink-AbstractStringBackedEnumNameRelatedValidator]

  Represents the base class of any string backed enum name related validator.

* [`AbstractInterfaceNameRelatedValidator`][srclink-AbstractInterfaceNameRelatedValidator]

  Represents the base class of any interface name related validator.

* [`AbstractClassNameRelatedValidator`][srclink-AbstractClassNameRelatedValidator]

  Represents the base class of any class name related validator.

* [`AbstractInterfaceOrClassNameRelatedValidator`][srclink-AbstractInterfaceOrClassNameRelatedValidator]

  Represents the base class of any interface or class name related validator.

* [`AbstractInterfaceClassOrEnumNameRelatedValidator`][srclink-AbstractInterfaceClassOrEnumNameRelatedValidator]

  Represents the base class of any interface, class or enum name related validator.

* [`AbstractDateTimeFormatRelatedValidator`][srclink-AbstractDateTimeFormatRelatedValidator]

  Represents the base class of any `DateTime` format related validator.

* [`AbstractRegularExpressionRelatedValidator`][srclink-AbstractRegularExpressionRelatedValidator]

  Represents the base class of any regular expression related validator.

* [`AbstractValidatorsRelatedValidator`][srclink-AbstractValidatorsRelatedValidator]

  Represents the base class of any validators related validator.

* [`AbstractValidatorMappingsRelatedValidator`][srclink-MappedValidators-AbstractValidatorMappingsRelatedValidator]

  Represents the base class of any validator mappings related validator.

## Concrete validators

* [`IsArrayValidator`][srclink-IsArrayValidator]

  Represents a validator validating if a specific value is of type `array`.

* [`IsBackedEnumArrayValidator`][srclink-IsBackedEnumArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `backed enum`.

* [`IsBackedEnumNameArrayValidator`][srclink-IsBackedEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid `backed enum` name.

* [`IsBackedEnumNameValidator`][srclink-IsBackedEnumNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid `backed enum` name.

* [`IsBackedEnumValidator`][srclink-IsBackedEnumValidator]

  Represents a validator validating if a specific value is of type `backed enum`.

* [`IsBinaryStringArrayValidator`][srclink-IsBinaryStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString].

* [`IsBinaryStringValidator`][srclink-IsBinaryStringValidator]

  Represents a validator validating if a specific value is of type `string` matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString].

* [`IsBooleanArrayValidator`][srclink-IsBooleanArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `boolean`.

* [`IsBooleanIntegerArrayValidator`][srclink-IsBooleanIntegerArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `integer` equalling exactly one element of [`ValidValues::$booleanIntegerSet`][srclink-ValidValues-booleanIntegerSet].

* [`IsBooleanIntegerStringArrayValidator`][srclink-IsBooleanIntegerStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` equalling exactly one element of [`ValidValues::$booleanIntegerStringSet`][srclink-ValidValues-booleanIntegerStringSet].

* [`IsBooleanIntegerStringValidator`][srclink-IsBooleanIntegerStringValidator]

  Represents a validator validating if a specific value is of type `string` and equals exactly one element of [`ValidValues::$booleanIntegerStringSet`][srclink-ValidValues-booleanIntegerStringSet].

* [`IsBooleanIntegerValidator`][srclink-IsBooleanIntegerValidator]

  Represents a validator validating if a specific value is of type `integer` and equals exactly one element of [`ValidValues::$booleanIntegerSet`][srclink-ValidValues-booleanIntegerSet].

* [`IsBooleanStringArrayValidator`][srclink-IsBooleanStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` equalling exactly one element of [`ValidValues::$booleanStringSet`][srclink-ValidValues-booleanStringSet].

* [`IsBooleanStringValidator`][srclink-IsBooleanStringValidator]

  Represents a validator validating if a specific value is of type `string` and equals exactly one element of [`ValidValues::$booleanStringSet`][srclink-ValidValues-booleanStringSet].

* [`IsBooleanValidator`][srclink-IsBooleanValidator]

  Represents a validator validating if a specific value is of type `boolean`.

* [`IsClassNameArrayValidator`][srclink-IsClassNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid class name.

* [`IsClassNameValidator`][srclink-IsClassNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid class name.

* [`IsDateIntervalArrayValidator`][srclink-IsDateIntervalArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `DateInterval`.

* [`IsDateIntervalStringArrayValidator`][srclink-IsDateIntervalStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a `DateInterval`.

* [`IsDateIntervalStringValidator`][srclink-IsDateIntervalStringValidator]

  Represents a validator validating if a specific value is of type `string` representing a `DateInterval`.

* [`IsDateIntervalValidator`][srclink-IsDateIntervalValidator]

  Represents a validator validating if a specific value is of type `DateInterval`.

* [`IsDateTimeArrayValidator`][srclink-IsDateTimeArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `DateTime`.

* [`IsDateTimeImmutableArrayValidator`][srclink-IsDateTimeImmutableArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `DateTimeImmutable`.

* [`IsDateTimeImmutableValidator`][srclink-IsDateTimeImmutableValidator]

  Represents a validator validating if a specific value is of type `DateTimeImmutable`.

* [`IsDateTimeStringArrayByFormatValidator`][srclink-IsDateTimeStringArrayByFormatValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a `DateTime` matching a specific format.

* [`IsDateTimeStringArrayValidator`][srclink-IsDateTimeStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a `DateTime`.

* [`IsDateTimeStringByFormatValidator`][srclink-IsDateTimeStringByFormatValidator]

  Represents a validator validating if a specific value is of type `string` representing a `DateTime` matching a specific format.

* [`IsDateTimeStringValidator`][srclink-IsDateTimeStringValidator]

  Represents a validator validating if a specific value is of type `string` representing a `DateTime`.

* [`IsDateTimeValidator`][srclink-IsDateTimeValidator]

  Represents a validator validating if a specific value is of type `DateTime`.

* [`IsEnumArrayValidator`][srclink-IsEnumArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `enum`.

* [`IsEnumNameArrayValidator`][srclink-IsEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid enum name.

* [`IsEnumNameValidator`][srclink-IsEnumNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid enum name.

* [`IsEnumValidator`][srclink-IsEnumValidator]

  Represents a validator validating if a specific value is of type `enum`.

* [`IsFloatArrayValidator`][srclink-IsFloatArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `float`.

* [`IsFloatStringArrayValidator`][srclink-IsFloatStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString].

* [`IsFloatStringValidator`][srclink-IsFloatStringValidator]

  Represents a validator validating if a specific value is of type `string` matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString].

* [`IsFloatValidator`][srclink-IsFloatValidator]

  Represents a validator validating if a specific value is of type `float`.

* [`IsInArrayValidator`][srclink-IsInArrayValidator]

  Represents a validator validating if a specific value is a specific value is an element of a specific array.

* [`IsInBackedEnumValuesArrayValidator`][srclink-IsInBackedEnumValuesArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `integer` or `string` representing a value of a specific `backed enum`.

* [`IsInBackedEnumValuesValidator`][srclink-IsInBackedEnumValuesValidator]

  Represents a validator validating if a specific value is of type `integer` or `string` representing a value of a specific `backed enum`.

* [`IsInClassConstantsArrayValidator`][srclink-IsInClassConstantsArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements representing any constant of a specific class.

* [`IsInClassConstantsValidator`][srclink-IsInClassConstantsValidator]

  Represents a validator validating if a specific value is representing any constant of a specific class.

* [`IsInIntegerBackedEnumValuesArrayValidator`][srclink-IsInIntegerBackedEnumValuesArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `integer` representing a value of a specific `integer backed enum`.

* [`IsInIntegerBackedEnumValuesValidator`][srclink-IsInIntegerBackedEnumValuesValidator]

  Represents a validator validating if a specific value is of type `integer` representing a value of a specific `integer backed enum`.

* [`IsInInterfaceConstantsArrayValidator`][srclink-IsInInterfaceConstantsArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements representing any constant of a specific interface.

* [`IsInInterfaceConstantsValidator`][srclink-IsInInterfaceConstantsValidator]

  Represents a validator validating if a specific value is representing any constant of a specific interface.

* [`IsInInterfaceOrClassConstantsArrayValidator`][srclink-IsInInterfaceOrClassConstantsArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements representing any constant of a specific interface or class.

* [`IsInInterfaceOrClassConstantsValidator`][srclink-IsInInterfaceOrClassConstantsValidator]

  Represents a validator validating if a specific value is representing any constant of a specific interface or class.

* [`IsInstanceOfArrayValidator`][srclink-IsInstanceOfArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `object` or `enum` representing an instance of a specific interface, class or enum.

* [`IsInstanceOfValidator`][srclink-IsInstanceOfValidator]

  Represents a validator validating if a specific value is of type `object` or `enum` representing an instance of a specific interface, class or enum.

* [`IsInStringBackedEnumValuesArrayValidator`][srclink-IsInStringBackedEnumValuesArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a value of a specific `string backed enum`.

* [`IsInStringBackedEnumValuesValidator`][srclink-IsInStringBackedEnumValuesValidator]

  Represents a validator validating if a specific value is of type `string` representing a value of a specific `string backed enum`.

* [`IsIntegerArrayValidator`][srclink-IsIntegerArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `integer`.

* [`IsIntegerBackedEnumArrayValidator`][srclink-IsIntegerBackedEnumArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `integer backed enum`.

* [`IsIntegerBackedEnumNameArrayValidator`][srclink-IsIntegerBackedEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid `integer backed enum` name.

* [`IsIntegerBackedEnumNameValidator`][srclink-IsIntegerBackedEnumNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid `integer backed enum` name.

* [`IsIntegerBackedEnumValidator`][srclink-IsIntegerBackedEnumValidator]

  Represents a validator validating if a specific value is of type `integer backed enum`.

* [`IsIntegerStringArrayValidator`][srclink-IsIntegerStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString].

* [`IsIntegerStringValidator`][srclink-IsIntegerStringValidator]

  Represents a validator validating if a specific value is of type `string` matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString].

* [`IsIntegerValidator`][srclink-IsIntegerValidator]

  Represents a validator validating if a specific value is of type `integer`.

* [`IsInterfaceClassEnumOrTraitNameArrayValidator`][srclink-IsInterfaceClassEnumOrTraitNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid interface, class, enum or trait name.

* [`IsInterfaceClassEnumOrTraitNameValidator`][srclink-IsInterfaceClassEnumOrTraitNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid interface, class, enum or trait name.

* [`IsInterfaceClassOrEnumNameArrayValidator`][srclink-IsInterfaceClassOrEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid interface, class or enum name.

* [`IsInterfaceClassOrEnumNameValidator`][srclink-IsInterfaceClassOrEnumNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid interface, class or enum name.

* [`IsInterfaceNameArrayValidator`][srclink-IsInterfaceNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid interface name.

* [`IsInterfaceNameValidator`][srclink-IsInterfaceNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid interface name.

* [`IsInterfaceOrClassNameArrayValidator`][srclink-IsInterfaceOrClassNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid interface or class name.

* [`IsInterfaceOrClassNameValidator`][srclink-IsInterfaceOrClassNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid interface ord class name.

* [`IsMatchingRegularExpressionArrayValidator`][srclink-IsMatchingRegularExpressionArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` matching a specific regular expression.

* [`IsMatchingRegularExpressionValidator`][srclink-IsMatchingRegularExpressionValidator]

  Represents a validator validating if a specific value is of type `string` matching a specific regular expression.

* [`IsNonEmptyStringArrayValidator`][srclink-IsNonEmptyStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` which are `nonempty`.

* [`IsNonEmptyStringValidator`][srclink-IsNonEmptyStringValidator]

  Represents a validator validating if a specific value is of type `string` which are `nonempty`.

* [`IsNullArrayValidator`][srclink-IsNullArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `null`.

* [`IsNullStringArrayValidator`][srclink-IsNullStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` containing the literal string `null`.

* [`IsNullStringValidator`][srclink-IsNullStringValidator]

  Represents a validator validating if a specific value is of type `string` containing the literal string `null`.

* [`IsNullValidator`][srclink-IsNullValidator]

  Represents a validator validating if a specific value is of type `null`.

* [`IsObjectArrayValidator`][srclink-IsObjectArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `object`.

* [`IsObjectValidator`][srclink-IsObjectValidator]

  Represents a validator validating if a specific value is of type `object`.

* [`IsRegularExpressionArrayValidator`][srclink-IsRegularExpressionArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a `regular expression`.

* [`IsRegularExpressionValidator`][srclink-IsRegularExpressionValidator]

  Represents a validator validating if a specific value is of type `string` representing a `regular expression`.

* [`IsScalarArrayValidator`][srclink-IsScalarArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of types `boolean`, `integer`, `float` or `string`.

* [`IsScalarValidator`][srclink-IsScalarValidator]

  Represents a validator validating if a specific value is of types `boolean`, `integer`, `float` or `string`.

* [`IsStringArrayValidator`][srclink-IsStringArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string`.

* [`IsStringBackedEnumArrayValidator`][srclink-IsStringBackedEnumArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string backed enum`.

* [`IsStringBackedEnumNameArrayValidator`][srclink-IsStringBackedEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid `string backed enum` name.

* [`IsStringBackedEnumNameValidator`][srclink-IsStringBackedEnumNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid `string backed enum` name.

* [`IsStringBackedEnumValidator`][srclink-IsStringBackedEnumValidator]

  Represents a validator validating if a specific value is of type `string backed enum`.

* [`IsStringValidator`][srclink-IsStringValidator]

  Represents a validator validating if a specific value is of type `string`.

* [`IsSubClassOfArrayValidator`][srclink-IsSubClassOfArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` or `object` representing a subclass of a specific interface or class.

* [`IsSubClassOfValidator`][srclink-IsSubClassOfValidator]

  Represents a validator validating if a specific value is of type `string` or `object` representing a subclass of a specific interface or class.

* [`IsTraitNameArrayValidator`][srclink-IsTraitNameArrayValidator]

  Represents a validator validating if a specific value is of type `array` containing only elements of type `string` representing a valid trait name.

* [`IsTraitNameValidator`][srclink-IsTraitNameValidator]

  Represents a validator validating if a specific value is of type `string` representing a valid trait name.

* [`NullableIsArrayValidator`][srclink-NullableIsArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array`.

* [`NullableIsBackedEnumArrayValidator`][srclink-NullableIsBackedEnumArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `backed enum`.

* [`NullableIsBackedEnumNameArrayValidator`][srclink-NullableIsBackedEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid `backed enum` name.

* [`NullableIsBackedEnumNameValidator`][srclink-NullableIsBackedEnumNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid `backed enum` name.

* [`NullableIsBackedEnumValidator`][srclink-NullableIsBackedEnumValidator]

  Represents a validator validating if a specific value is of type `nullable backed enum`.

* [`NullableIsBinaryStringArrayValidator`][srclink-NullableIsBinaryStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString].

* [`NullableIsBinaryStringValidator`][srclink-NullableIsBinaryStringValidator]

  Represents a validator validating if a specific value is of type `nullable string` matching the regular expression [`ValidValues::$regExBinaryString`][srclink-ValidValues-regExBinaryString].

* [`NullableIsBooleanArrayValidator`][srclink-NullableIsBooleanArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `boolean`.

* [`NullableIsBooleanIntegerArrayValidator`][srclink-NullableIsBooleanIntegerArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `integer` equalling exactly one element of [`ValidValues::$booleanIntegerSet`][srclink-ValidValues-booleanIntegerSet].

* [`NullableIsBooleanIntegerStringArrayValidator`][srclink-NullableIsBooleanIntegerStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` equalling exactly one element of [`ValidValues::$booleanIntegerStringSet`][srclink-ValidValues-booleanIntegerStringSet].

* [`NullableIsBooleanIntegerStringValidator`][srclink-NullableIsBooleanIntegerStringValidator]

  Represents a validator validating if a specific value is of type `nullable string` and equals exactly one element of [`ValidValues::$booleanIntegerStringSet`][srclink-ValidValues-booleanIntegerStringSet].

* [`NullableIsBooleanIntegerValidator`][srclink-NullableIsBooleanIntegerValidator]

  Represents a validator validating if a specific value is of type `nullable integer` and equals exactly one element of [`ValidValues::$booleanIntegerSet`][srclink-ValidValues-booleanIntegerSet].

* [`NullableIsBooleanStringArrayValidator`][srclink-NullableIsBooleanStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` equalling exactly one element of [`ValidValues::$booleanStringSet`][srclink-ValidValues-booleanStringSet].

* [`NullableIsBooleanStringValidator`][srclink-NullableIsBooleanStringValidator]

  Represents a validator validating if a specific value is of type `nullable string` and equals exactly one element of [`ValidValues::$booleanStringSet`][srclink-ValidValues-booleanStringSet].

* [`NullableIsBooleanValidator`][srclink-NullableIsBooleanValidator]

  Represents a validator validating if a specific value is of type `nullable boolean`.

* [`NullableIsClassNameArrayValidator`][srclink-NullableIsClassNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid class name.

* [`NullableIsClassNameValidator`][srclink-NullableIsClassNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid class name.

* [`NullableIsDateIntervalArrayValidator`][srclink-NullableIsDateIntervalArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `DateInterval`.

* [`NullableIsDateIntervalStringArrayValidator`][srclink-NullableIsDateIntervalStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a `DateInterval`.

* [`NullableIsDateIntervalStringValidator`][srclink-NullableIsDateIntervalStringValidator]

  Represents a validator validating if a specific value is a `nullable string` representing a `DateInterval`.

* [`NullableIsDateIntervalValidator`][srclink-NullableIsDateIntervalValidator]

  Represents a validator validating if a specific value is of type `nullable DateInterval`.

* [`NullableIsDateTimeArrayValidator`][srclink-NullableIsDateTimeArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `DateTime`.

* [`NullableIsDateTimeImmutableArrayValidator`][srclink-NullableIsDateTimeImmutableArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `DateTimeImmutable`.

* [`NullableIsDateTimeImmutableValidator`][srclink-NullableIsDateTimeImmutableValidator]

  Represents a validator validating if a specific value is of type `nullable DateTimeImmutable`.

* [`NullableIsDateTimeStringArrayByFormatValidator`][srclink-NullableIsDateTimeStringArrayByFormatValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a `DateTime` matching a specific format.

* [`NullableIsDateTimeStringArrayValidator`][srclink-NullableIsDateTimeStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a `DateTime`.

* [`NullableIsDateTimeStringByFormatValidator`][srclink-NullableIsDateTimeStringByFormatValidator]

  Represents a validator validating if a specific value is a `nullable string` representing a `DateTime` matching a specific format.

* [`NullableIsDateTimeStringValidator`][srclink-NullableIsDateTimeStringValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a `DateTime`.

* [`NullableIsDateTimeValidator`][srclink-NullableIsDateTimeValidator]

  Represents a validator validating if a specific value is of type `nullable DateTime`.

* [`NullableIsEnumArrayValidator`][srclink-NullableIsEnumArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `enum`.

* [`NullableIsEnumNameArrayValidator`][srclink-NullableIsEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid enum name.

* [`NullableIsEnumNameValidator`][srclink-NullableIsEnumNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid enum name.

* [`NullableIsEnumValidator`][srclink-NullableIsEnumValidator]

  Represents a validator validating if a specific value is of type `nullable enum`.

* [`NullableIsFloatArrayValidator`][srclink-NullableIsFloatArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `float`.

* [`NullableIsFloatStringArrayValidator`][srclink-NullableIsFloatStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString].

* [`NullableIsFloatStringValidator`][srclink-NullableIsFloatStringValidator]

  Represents a validator validating if a specific value is of type `nullable string` matching the regular expression [`ValidValues::$regExFloatString`][srclink-ValidValues-regExFloatString].

* [`NullableIsFloatValidator`][srclink-NullableIsFloatValidator]

  Represents a validator validating if a specific value is of type `nullable float`.

* [`NullableIsInArrayValidator`][srclink-NullableIsInArrayValidator]

  Represents a validator validating if a specific value is of type `nullable` representing an element of a specific `array`.

* [`NullableIsInBackedEnumValuesArrayValidator`][srclink-NullableIsInBackedEnumValuesArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `integer` or `string` representing a value of a specific `backed enum`.

* [`NullableIsInBackedEnumValuesValidator`][srclink-NullableIsInBackedEnumValuesValidator]

  Represents a validator validating if a specific value is of type `nullable integer` or `nullable string` representing a value of a specific `backed enum`.

* [`NullableIsInClassConstantsArrayValidator`][srclink-NullableIsInClassConstantsArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements representing any constant of a specific class.

* [`NullableIsInClassConstantsValidator`][srclink-NullableIsInClassConstantsValidator]

  Represents a validator validating if a specific value is of type `nullable` and representing any constant of a specific class.

* [`NullableIsInIntegerBackedEnumValuesArrayValidator`][srclink-NullableIsInIntegerBackedEnumValuesArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `integer` representing a value of a specific `integer backed enum`.

* [`NullableIsInIntegerBackedEnumValuesValidator`][srclink-NullableIsInIntegerBackedEnumValuesValidator]

  Represents a validator validating if a specific value is of type `nullable integer` representing a value of a specific `integer backed enum`.

* [`NullableIsInInterfaceConstantsArrayValidator`][srclink-NullableIsInInterfaceConstantsArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements representing any constant of a specific interface.

* [`NullableIsInInterfaceConstantsValidator`][srclink-NullableIsInInterfaceConstantsValidator]

  Represents a validator validating if a specific value is of type `nullable` and representing any constant of a specific interface.

* [`NullableIsInInterfaceOrClassConstantsArrayValidator`][srclink-NullableIsInInterfaceOrClassConstantsArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements representing any constant of a specific interface or class.

* [`NullableIsInInterfaceOrClassConstantsValidator`][srclink-NullableIsInInterfaceOrClassConstantsValidator]

  Represents a validator validating if a specific value is `nullable` and representing any constant of a specific interface or class.

* [`NullableIsInstanceOfArrayValidator`][srclink-NullableIsInstanceOfArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements representing an instance of a specific interface, class or enum.

* [`NullableIsInstanceOfValidator`][srclink-NullableIsInstanceOfValidator]

  Represents a validator validating if a specific value is of type `nullable object` representing an instance of a specific interface, class or enum.

* [`NullableIsInStringBackedEnumValuesArrayValidator`][srclink-NullableIsInStringBackedEnumValuesArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a value of a specific `string backed enum`.

* [`NullableIsInStringBackedEnumValuesValidator`][srclink-NullableIsInStringBackedEnumValuesValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a value of a specific `string backed enum`.

* [`NullableIsIntegerArrayValidator`][srclink-NullableIsIntegerArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `integer`.

* [`NullableIsIntegerBackedEnumArrayValidator`][srclink-NullableIsIntegerBackedEnumArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `integer backed enum`.

* [`NullableIsIntegerBackedEnumNameArrayValidator`][srclink-NullableIsIntegerBackedEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid `integer backed enum` name.

* [`NullableIsIntegerBackedEnumNameValidator`][srclink-NullableIsIntegerBackedEnumNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid `integer backed enum` name.

* [`NullableIsIntegerBackedEnumValidator`][srclink-NullableIsIntegerBackedEnumValidator]

  Represents a validator validating if a specific value is of type `nullable integer backed enum`.

* [`NullableIsIntegerStringArrayValidator`][srclink-NullableIsIntegerStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString].

* [`NullableIsIntegerStringValidator`][srclink-NullableIsIntegerStringValidator]

  Represents a validator validating if a specific value is of type `nullable string` matching the regular expression [`ValidValues::$regExIntegerString`][srclink-ValidValues-regExIntegerString].

* [`NullableIsIntegerValidator`][srclink-NullableIsIntegerValidator]

  Represents a validator validating if a specific value is of type `nullable integer`.

* [`NullableIsInterfaceClassEnumOrTraitNameArrayValidator`][srclink-NullableIsInterfaceClassEnumOrTraitNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid interface, class, enum or trait name.

* [`NullableIsInterfaceClassEnumOrTraitNameValidator`][srclink-NullableIsInterfaceClassEnumOrTraitNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid interface, class, enum or trait name.

* [`NullableIsInterfaceClassOrEnumNameArrayValidator`][srclink-NullableIsInterfaceClassOrEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid interface, class or enum name.

* [`NullableIsInterfaceClassOrEnumNameValidator`][srclink-NullableIsInterfaceClassOrEnumNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid interface, class or enum name.

* [`NullableIsInterfaceNameArrayValidator`][srclink-NullableIsInterfaceNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid interface name.

* [`NullableIsInterfaceNameValidator`][srclink-NullableIsInterfaceNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid interface name.

* [`NullableIsInterfaceOrClassNameArrayValidator`][srclink-NullableIsInterfaceOrClassNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid interface or class name.

* [`NullableIsInterfaceOrClassNameValidator`][srclink-NullableIsInterfaceOrClassNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid interface or class name.

* [`NullableIsMatchingRegularExpressionArrayValidator`][srclink-NullableIsMatchingRegularExpressionArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` matching a specific regular expression.

* [`NullableIsMatchingRegularExpressionValidator`][srclink-NullableIsMatchingRegularExpressionValidator]

  Represents a validator validating if a specific value is of type `nullable string` matching a specific `regular expression`.

* [`NullableIsNonEmptyStringArrayValidator`][srclink-NullableIsNonEmptyStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` which are `nonempty`.

* [`NullableIsNonEmptyStringValidator`][srclink-NullableIsNonEmptyStringValidator]

  Represents a validator validating if a specific value is of type `nullable string` which are `nonempty`.

* [`NullableIsNullArrayValidator`][srclink-NullableIsNullArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `null`.

* [`NullableIsNullStringArrayValidator`][srclink-NullableIsNullStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` containing the literal string `null`.

* [`NullableIsNullStringValidator`][srclink-NullableIsNullStringValidator]

  Represents a validator validating if a specific value is of type `nullable string` containing the literal string `null`.

* [`NullableIsObjectArrayValidator`][srclink-NullableIsObjectArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `object`.

* [`NullableIsObjectValidator`][srclink-NullableIsObjectValidator]

  Represents a validator validating if a specific value is of type `nullable object`.

* [`NullableIsRegularExpressionArrayValidator`][srclink-NullableIsRegularExpressionArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a `regular expression`.

* [`NullableIsRegularExpressionValidator`][srclink-NullableIsRegularExpressionValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a `regular expression`.

* [`NullableIsScalarArrayValidator`][srclink-NullableIsScalarArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of types `boolean`, `integer`, `float` or `string`.

* [`NullableIsScalarValidator`][srclink-NullableIsScalarValidator]

  Represents a validator validating if a specific value is of types `nullable boolean`, `nullable integer`, `nullable float` or `nullable string`.

* [`NullableIsStringArrayValidator`][srclink-NullableIsStringArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string`.

* [`NullableIsStringBackedEnumArrayValidator`][srclink-NullableIsStringBackedEnumArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string backed enum`.

* [`NullableIsStringBackedEnumNameArrayValidator`][srclink-NullableIsStringBackedEnumNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid `string backed enum` name.

* [`NullableIsStringBackedEnumNameValidator`][srclink-NullableIsStringBackedEnumNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid `string backed enum` name.

* [`NullableIsStringBackedEnumValidator`][srclink-NullableIsStringBackedEnumValidator]

  Represents a validator validating if a specific value is of type `nullable string backed enum`.

* [`NullableIsStringValidator`][srclink-NullableIsStringValidator]

  Represents a validator validating if a specific value is of type `nullable string`.

* [`NullableIsSubClassOfArrayValidator`][srclink-NullableIsSubClassOfArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` or `object` representing a subclass of a specific interface or class.

* [`NullableIsSubClassOfValidator`][srclink-NullableIsSubClassOfValidator]

  Represents a validator validating if a specific value is of type `nullable string` or `nullable object` representing an instance of a specific interface or class.

* [`NullableIsTraitNameArrayValidator`][srclink-NullableIsTraitNameArrayValidator]

  Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid trait name.

* [`NullableIsTraitNameValidator`][srclink-NullableIsTraitNameValidator]

  Represents a validator validating if a specific value is of type `nullable string` representing a valid trait name.

## Validator chains

* [`ValidatorChain`][srclink-ValidatorChain]

  Represents a validator chain validating a specific value with a list of validators.

* [`NullableValidatorChain`][srclink-NullableValidatorChain]

  Represents a validator chain validating a specific `nullable` value with a list of validators.

## Mapped validators

* [`MappedArrayValidator`][srclink-MappedValidators-MappedArrayValidator]

  Represents a mapped array validator validating if a specific value is of type `array` and validates its elements based on a set of specific validator mappings.

* [`MappedObjectValidator`][srclink-MappedValidators-MappedObjectValidator]

  Represents a mapped array validator validating if a specific value is of type `object` and validates its public properties based on a set of specific validator mappings.

* [`NullableMappedArrayValidator`][srclink-MappedValidators-NullableMappedArrayValidator]

  Represents a mapped array validator validating if a specific value is of type `nullable array` and validates its elements based on a set of specific validator mappings.

* [`NullableMappedObjectValidator`][srclink-MappedValidators-NullableMappedObjectValidator]

  Represents a mapped array validator validating if a specific value is of type `nullable object` and validates its public properties based on a set of specific validator mappings.



[srclink-ValidValues-booleanIntegerSet]: /src/Validators/ValidValues.php#L44
[srclink-ValidValues-booleanStringSet]: /src/Validators/ValidValues.php#L68
[srclink-ValidValues-booleanIntegerStringSet]: /src/Validators/ValidValues.php#L92
[srclink-ValidValues-regExBinaryString]: /src/Validators/ValidValues.php#L102
[srclink-ValidValues-regExIntegerString]: /src/Validators/ValidValues.php#L109
[srclink-ValidValues-regExFloatString]: /src/Validators/ValidValues.php#L116

[srclink-AbstractArrayRelatedValidator]: /src/Validators/AbstractArrayRelatedValidator.php
[srclink-AbstractBackedEnumNameRelatedValidator]: /src/Validators/AbstractBackedEnumNameRelatedValidator.php
[srclink-AbstractIntegerBackedEnumNameRelatedValidator]: /src/Validators/AbstractIntegerBackedEnumNameRelatedValidator.php
[srclink-AbstractStringBackedEnumNameRelatedValidator]: /src/Validators/AbstractStringBackedEnumNameRelatedValidator.php
[srclink-AbstractInterfaceNameRelatedValidator]: /src/Validators/AbstractInterfaceNameRelatedValidator.php
[srclink-AbstractClassNameRelatedValidator]: /src/Validators/AbstractClassNameRelatedValidator.php
[srclink-AbstractInterfaceOrClassNameRelatedValidator]: /src/Validators/AbstractInterfaceOrClassNameRelatedValidator.php
[srclink-AbstractInterfaceClassOrEnumNameRelatedValidator]: /src/Validators/AbstractInterfaceClassOrEnumNameRelatedValidator.php
[srclink-AbstractDateTimeFormatRelatedValidator]: /src/Validators/AbstractDateTimeFormatRelatedValidator.php
[srclink-AbstractRegularExpressionRelatedValidator]: /src/Validators/AbstractRegularExpressionRelatedValidator.php
[srclink-AbstractValidatorsRelatedValidator]: /src/Validators/AbstractValidatorsRelatedValidator.php
[srclink-MappedValidators-AbstractValidatorMappingsRelatedValidator]: /src/Validators/MappedValidators/AbstractValidatorMappingsRelatedValidator.php

[srclink-IsArrayValidator]: /src/Validators/IsArrayValidator.php
[srclink-IsBackedEnumArrayValidator]: /src/Validators/IsBackedEnumArrayValidator.php
[srclink-IsBackedEnumNameArrayValidator]: /src/Validators/IsBackedEnumNameArrayValidator.php
[srclink-IsBackedEnumNameValidator]: /src/Validators/IsBackedEnumNameValidator.php
[srclink-IsBackedEnumValidator]: /src/Validators/IsBackedEnumValidator.php
[srclink-IsBinaryStringArrayValidator]: /src/Validators/IsBinaryStringArrayValidator.php
[srclink-IsBinaryStringValidator]: /src/Validators/IsBinaryStringValidator.php
[srclink-IsBooleanArrayValidator]: /src/Validators/IsBooleanArrayValidator.php
[srclink-IsBooleanIntegerArrayValidator]: /src/Validators/IsBooleanIntegerArrayValidator.php
[srclink-IsBooleanIntegerStringArrayValidator]: /src/Validators/IsBooleanIntegerStringArrayValidator.php
[srclink-IsBooleanIntegerStringValidator]: /src/Validators/IsBooleanIntegerStringValidator.php
[srclink-IsBooleanIntegerValidator]: /src/Validators/IsBooleanIntegerValidator.php
[srclink-IsBooleanStringArrayValidator]: /src/Validators/IsBooleanStringArrayValidator.php
[srclink-IsBooleanStringValidator]: /src/Validators/IsBooleanStringValidator.php
[srclink-IsBooleanValidator]: /src/Validators/IsBooleanValidator.php
[srclink-IsClassNameArrayValidator]: /src/Validators/IsClassNameArrayValidator.php
[srclink-IsClassNameValidator]: /src/Validators/IsClassNameValidator.php
[srclink-IsDateIntervalArrayValidator]: /src/Validators/IsDateIntervalArrayValidator.php
[srclink-IsDateIntervalStringArrayValidator]: /src/Validators/IsDateIntervalStringArrayValidator.php
[srclink-IsDateIntervalStringValidator]: /src/Validators/IsDateIntervalStringValidator.php
[srclink-IsDateIntervalValidator]: /src/Validators/IsDateIntervalValidator.php
[srclink-IsDateTimeArrayValidator]: /src/Validators/IsDateTimeArrayValidator.php
[srclink-IsDateTimeImmutableArrayValidator]: /src/Validators/IsDateTimeImmutableArrayValidator.php
[srclink-IsDateTimeImmutableValidator]: /src/Validators/IsDateTimeImmutableValidator.php
[srclink-IsDateTimeStringArrayByFormatValidator]: /src/Validators/IsDateTimeStringArrayByFormatValidator.php
[srclink-IsDateTimeStringArrayValidator]: /src/Validators/IsDateTimeStringArrayValidator.php
[srclink-IsDateTimeStringByFormatValidator]: /src/Validators/IsDateTimeStringByFormatValidator.php
[srclink-IsDateTimeStringValidator]: /src/Validators/IsDateTimeStringValidator.php
[srclink-IsDateTimeValidator]: /src/Validators/IsDateTimeValidator.php
[srclink-IsEnumArrayValidator]: /src/Validators/IsEnumArrayValidator.php
[srclink-IsEnumNameArrayValidator]: /src/Validators/IsEnumNameArrayValidator.php
[srclink-IsEnumNameValidator]: /src/Validators/IsEnumNameValidator.php
[srclink-IsEnumValidator]: /src/Validators/IsEnumValidator.php
[srclink-IsFloatArrayValidator]: /src/Validators/IsFloatArrayValidator.php
[srclink-IsFloatStringArrayValidator]: /src/Validators/IsFloatStringArrayValidator.php
[srclink-IsFloatStringValidator]: /src/Validators/IsFloatStringValidator.php
[srclink-IsFloatValidator]: /src/Validators/IsFloatValidator.php
[srclink-IsInArrayValidator]: /src/Validators/IsInArrayValidator.php
[srclink-IsInBackedEnumValuesArrayValidator]: /src/Validators/IsInBackedEnumValuesArrayValidator.php
[srclink-IsInBackedEnumValuesValidator]: /src/Validators/IsInBackedEnumValuesValidator.php
[srclink-IsInClassConstantsArrayValidator]: /src/Validators/IsInClassConstantsArrayValidator.php
[srclink-IsInClassConstantsValidator]: /src/Validators/IsInClassConstantsValidator.php
[srclink-IsInIntegerBackedEnumValuesArrayValidator]: /src/Validators/IsInIntegerBackedEnumValuesArrayValidator.php
[srclink-IsInIntegerBackedEnumValuesValidator]: /src/Validators/IsInIntegerBackedEnumValuesValidator.php
[srclink-IsInInterfaceConstantsArrayValidator]: /src/Validators/IsInInterfaceConstantsArrayValidator.php
[srclink-IsInInterfaceConstantsValidator]: /src/Validators/IsInInterfaceConstantsValidator.php
[srclink-IsInInterfaceOrClassConstantsArrayValidator]: /src/Validators/IsInInterfaceOrClassConstantsArrayValidator.php
[srclink-IsInInterfaceOrClassConstantsValidator]: /src/Validators/IsInInterfaceOrClassConstantsValidator.php
[srclink-IsInstanceOfArrayValidator]: /src/Validators/IsInstanceOfArrayValidator.php
[srclink-IsInstanceOfValidator]: /src/Validators/IsInstanceOfValidator.php
[srclink-IsInStringBackedEnumValuesArrayValidator]: /src/Validators/IsInStringBackedEnumValuesArrayValidator.php
[srclink-IsInStringBackedEnumValuesValidator]: /src/Validators/IsInStringBackedEnumValuesValidator.php
[srclink-IsIntegerArrayValidator]: /src/Validators/IsIntegerArrayValidator.php
[srclink-IsIntegerBackedEnumArrayValidator]: /src/Validators/IsIntegerBackedEnumArrayValidator.php
[srclink-IsIntegerBackedEnumNameArrayValidator]: /src/Validators/IsIntegerBackedEnumNameArrayValidator.php
[srclink-IsIntegerBackedEnumNameValidator]: /src/Validators/IsIntegerBackedEnumNameValidator.php
[srclink-IsIntegerBackedEnumValidator]: /src/Validators/IsIntegerBackedEnumValidator.php
[srclink-IsIntegerStringArrayValidator]: /src/Validators/IsIntegerStringArrayValidator.php
[srclink-IsIntegerStringValidator]: /src/Validators/IsIntegerStringValidator.php
[srclink-IsIntegerValidator]: /src/Validators/IsIntegerValidator.php
[srclink-IsInterfaceClassEnumOrTraitNameArrayValidator]: /src/Validators/IsInterfaceClassEnumOrTraitNameArrayValidator.php
[srclink-IsInterfaceClassEnumOrTraitNameValidator]: /src/Validators/IsInterfaceClassEnumOrTraitNameValidator.php
[srclink-IsInterfaceClassOrEnumNameArrayValidator]: /src/Validators/IsInterfaceClassOrEnumNameArrayValidator.php
[srclink-IsInterfaceClassOrEnumNameValidator]: /src/Validators/IsInterfaceClassOrEnumNameValidator.php
[srclink-IsInterfaceNameArrayValidator]: /src/Validators/IsInterfaceNameArrayValidator.php
[srclink-IsInterfaceNameValidator]: /src/Validators/IsInterfaceNameValidator.php
[srclink-IsInterfaceOrClassNameArrayValidator]: /src/Validators/IsInterfaceOrClassNameArrayValidator.php
[srclink-IsInterfaceOrClassNameValidator]: /src/Validators/IsInterfaceOrClassNameValidator.php
[srclink-IsMatchingRegularExpressionArrayValidator]: /src/Validators/IsMatchingRegularExpressionArrayValidator.php
[srclink-IsMatchingRegularExpressionValidator]: /src/Validators/IsMatchingRegularExpressionValidator.php
[srclink-IsNonEmptyStringArrayValidator]: /src/Validators/IsNonEmptyStringArrayValidator.php
[srclink-IsNonEmptyStringValidator]: /src/Validators/IsNonEmptyStringValidator.php
[srclink-IsNullArrayValidator]: /src/Validators/IsNullArrayValidator.php
[srclink-IsNullStringArrayValidator]: /src/Validators/IsNullStringArrayValidator.php
[srclink-IsNullStringValidator]: /src/Validators/IsNullStringValidator.php
[srclink-IsNullValidator]: /src/Validators/IsNullValidator.php
[srclink-IsObjectArrayValidator]: /src/Validators/IsObjectArrayValidator.php
[srclink-IsObjectValidator]: /src/Validators/IsObjectValidator.php
[srclink-IsRegularExpressionArrayValidator]: /src/Validators/IsRegularExpressionArrayValidator.php
[srclink-IsRegularExpressionValidator]: /src/Validators/IsRegularExpressionValidator.php
[srclink-IsScalarArrayValidator]: /src/Validators/IsScalarArrayValidator.php
[srclink-IsScalarValidator]: /src/Validators/IsScalarValidator.php
[srclink-IsStringArrayValidator]: /src/Validators/IsStringArrayValidator.php
[srclink-IsStringBackedEnumArrayValidator]: /src/Validators/IsStringBackedEnumArrayValidator.php
[srclink-IsStringBackedEnumNameArrayValidator]: /src/Validators/IsStringBackedEnumNameArrayValidator.php
[srclink-IsStringBackedEnumNameValidator]: /src/Validators/IsStringBackedEnumNameValidator.php
[srclink-IsStringBackedEnumValidator]: /src/Validators/IsStringBackedEnumValidator.php
[srclink-IsStringValidator]: /src/Validators/IsStringValidator.php
[srclink-IsSubClassOfArrayValidator]: /src/Validators/IsSubClassOfArrayValidator.php
[srclink-IsSubClassOfValidator]: /src/Validators/IsSubClassOfValidator.php
[srclink-IsTraitNameArrayValidator]: /src/Validators/IsTraitNameArrayValidator.php
[srclink-IsTraitNameValidator]: /src/Validators/IsTraitNameValidator.php
[srclink-NullableIsArrayValidator]: /src/Validators/NullableIsArrayValidator.php
[srclink-NullableIsBackedEnumArrayValidator]: /src/Validators/NullableIsBackedEnumArrayValidator.php
[srclink-NullableIsBackedEnumNameArrayValidator]: /src/Validators/NullableIsBackedEnumNameArrayValidator.php
[srclink-NullableIsBackedEnumNameValidator]: /src/Validators/NullableIsBackedEnumNameValidator.php
[srclink-NullableIsBackedEnumValidator]: /src/Validators/NullableIsBackedEnumValidator.php
[srclink-NullableIsBinaryStringArrayValidator]: /src/Validators/NullableIsBinaryStringArrayValidator.php
[srclink-NullableIsBinaryStringValidator]: /src/Validators/NullableIsBinaryStringValidator.php
[srclink-NullableIsBooleanArrayValidator]: /src/Validators/NullableIsBooleanArrayValidator.php
[srclink-NullableIsBooleanIntegerArrayValidator]: /src/Validators/NullableIsBooleanIntegerArrayValidator.php
[srclink-NullableIsBooleanIntegerStringArrayValidator]: /src/Validators/NullableIsBooleanIntegerStringArrayValidator.php
[srclink-NullableIsBooleanIntegerStringValidator]: /src/Validators/NullableIsBooleanIntegerStringValidator.php
[srclink-NullableIsBooleanIntegerValidator]: /src/Validators/NullableIsBooleanIntegerValidator.php
[srclink-NullableIsBooleanStringArrayValidator]: /src/Validators/NullableIsBooleanStringArrayValidator.php
[srclink-NullableIsBooleanStringValidator]: /src/Validators/NullableIsBooleanStringValidator.php
[srclink-NullableIsBooleanValidator]: /src/Validators/NullableIsBooleanValidator.php
[srclink-NullableIsClassNameArrayValidator]: /src/Validators/NullableIsClassNameArrayValidator.php
[srclink-NullableIsClassNameValidator]: /src/Validators/NullableIsClassNameValidator.php
[srclink-NullableIsDateIntervalArrayValidator]: /src/Validators/NullableIsDateIntervalArrayValidator.php
[srclink-NullableIsDateIntervalStringArrayValidator]: /src/Validators/NullableIsDateIntervalStringArrayValidator.php
[srclink-NullableIsDateIntervalStringValidator]: /src/Validators/NullableIsDateIntervalStringValidator.php
[srclink-NullableIsDateIntervalValidator]: /src/Validators/NullableIsDateIntervalValidator.php
[srclink-NullableIsDateTimeArrayValidator]: /src/Validators/NullableIsDateTimeArrayValidator.php
[srclink-NullableIsDateTimeImmutableArrayValidator]: /src/Validators/NullableIsDateTimeImmutableArrayValidator.php
[srclink-NullableIsDateTimeImmutableValidator]: /src/Validators/NullableIsDateTimeImmutableValidator.php
[srclink-NullableIsDateTimeStringArrayByFormatValidator]: /src/Validators/NullableIsDateTimeStringArrayByFormatValidator.php
[srclink-NullableIsDateTimeStringArrayValidator]: /src/Validators/NullableIsDateTimeStringArrayValidator.php
[srclink-NullableIsDateTimeStringByFormatValidator]: /src/Validators/NullableIsDateTimeStringByFormatValidator.php
[srclink-NullableIsDateTimeStringValidator]: /src/Validators/NullableIsDateTimeStringValidator.php
[srclink-NullableIsDateTimeValidator]: /src/Validators/NullableIsDateTimeValidator.php
[srclink-NullableIsEnumArrayValidator]: /src/Validators/NullableIsEnumArrayValidator.php
[srclink-NullableIsEnumNameArrayValidator]: /src/Validators/NullableIsEnumNameArrayValidator.php
[srclink-NullableIsEnumNameValidator]: /src/Validators/NullableIsEnumNameValidator.php
[srclink-NullableIsEnumValidator]: /src/Validators/NullableIsEnumValidator.php
[srclink-NullableIsFloatArrayValidator]: /src/Validators/NullableIsFloatArrayValidator.php
[srclink-NullableIsFloatStringArrayValidator]: /src/Validators/NullableIsFloatStringArrayValidator.php
[srclink-NullableIsFloatStringValidator]: /src/Validators/NullableIsFloatStringValidator.php
[srclink-NullableIsFloatValidator]: /src/Validators/NullableIsFloatValidator.php
[srclink-NullableIsInArrayValidator]: /src/Validators/NullableIsInArrayValidator.php
[srclink-NullableIsInBackedEnumValuesArrayValidator]: /src/Validators/NullableIsInBackedEnumValuesArrayValidator.php
[srclink-NullableIsInBackedEnumValuesValidator]: /src/Validators/NullableIsInBackedEnumValuesValidator.php
[srclink-NullableIsInClassConstantsArrayValidator]: /src/Validators/NullableIsInClassConstantsArrayValidator.php
[srclink-NullableIsInClassConstantsValidator]: /src/Validators/NullableIsInClassConstantsValidator.php
[srclink-NullableIsInIntegerBackedEnumValuesArrayValidator]: /src/Validators/NullableIsInIntegerBackedEnumValuesArrayValidator.php
[srclink-NullableIsInIntegerBackedEnumValuesValidator]: /src/Validators/NullableIsInIntegerBackedEnumValuesValidator.php
[srclink-NullableIsInInterfaceConstantsArrayValidator]: /src/Validators/NullableIsInInterfaceConstantsArrayValidator.php
[srclink-NullableIsInInterfaceConstantsValidator]: /src/Validators/NullableIsInInterfaceConstantsValidator.php
[srclink-NullableIsInInterfaceOrClassConstantsArrayValidator]: /src/Validators/NullableIsInInterfaceOrClassConstantsArrayValidator.php
[srclink-NullableIsInInterfaceOrClassConstantsValidator]: /src/Validators/NullableIsInInterfaceOrClassConstantsValidator.php
[srclink-NullableIsInstanceOfArrayValidator]: /src/Validators/NullableIsInstanceOfArrayValidator.php
[srclink-NullableIsInstanceOfValidator]: /src/Validators/NullableIsInstanceOfValidator.php
[srclink-NullableIsInStringBackedEnumValuesArrayValidator]: /src/Validators/NullableIsInStringBackedEnumValuesArrayValidator.php
[srclink-NullableIsInStringBackedEnumValuesValidator]: /src/Validators/NullableIsInStringBackedEnumValuesValidator.php
[srclink-NullableIsIntegerArrayValidator]: /src/Validators/NullableIsIntegerArrayValidator.php
[srclink-NullableIsIntegerBackedEnumArrayValidator]: /src/Validators/NullableIsIntegerBackedEnumArrayValidator.php
[srclink-NullableIsIntegerBackedEnumNameArrayValidator]: /src/Validators/NullableIsIntegerBackedEnumNameArrayValidator.php
[srclink-NullableIsIntegerBackedEnumNameValidator]: /src/Validators/NullableIsIntegerBackedEnumNameValidator.php
[srclink-NullableIsIntegerBackedEnumValidator]: /src/Validators/NullableIsIntegerBackedEnumValidator.php
[srclink-NullableIsIntegerStringArrayValidator]: /src/Validators/NullableIsIntegerStringArrayValidator.php
[srclink-NullableIsIntegerStringValidator]: /src/Validators/NullableIsIntegerStringValidator.php
[srclink-NullableIsIntegerValidator]: /src/Validators/NullableIsIntegerValidator.php
[srclink-NullableIsInterfaceClassEnumOrTraitNameArrayValidator]: /src/Validators/NullableIsInterfaceClassEnumOrTraitNameArrayValidator.php
[srclink-NullableIsInterfaceClassEnumOrTraitNameValidator]: /src/Validators/NullableIsInterfaceClassEnumOrTraitNameValidator.php
[srclink-NullableIsInterfaceClassOrEnumNameArrayValidator]: /src/Validators/NullableIsInterfaceClassOrEnumNameArrayValidator.php
[srclink-NullableIsInterfaceClassOrEnumNameValidator]: /src/Validators/NullableIsInterfaceClassOrEnumNameValidator.php
[srclink-NullableIsInterfaceNameArrayValidator]: /src/Validators/NullableIsInterfaceNameArrayValidator.php
[srclink-NullableIsInterfaceNameValidator]: /src/Validators/NullableIsInterfaceNameValidator.php
[srclink-NullableIsInterfaceOrClassNameArrayValidator]: /src/Validators/NullableIsInterfaceOrClassNameArrayValidator.php
[srclink-NullableIsInterfaceOrClassNameValidator]: /src/Validators/NullableIsInterfaceOrClassNameValidator.php
[srclink-NullableIsMatchingRegularExpressionArrayValidator]: /src/Validators/NullableIsMatchingRegularExpressionArrayValidator.php
[srclink-NullableIsMatchingRegularExpressionValidator]: /src/Validators/NullableIsMatchingRegularExpressionValidator.php
[srclink-NullableIsNonEmptyStringArrayValidator]: /src/Validators/NullableIsNonEmptyStringArrayValidator.php
[srclink-NullableIsNonEmptyStringValidator]: /src/Validators/NullableIsNonEmptyStringValidator.php
[srclink-NullableIsNullArrayValidator]: /src/Validators/NullableIsNullArrayValidator.php
[srclink-NullableIsNullStringArrayValidator]: /src/Validators/NullableIsNullStringArrayValidator.php
[srclink-NullableIsNullStringValidator]: /src/Validators/NullableIsNullStringValidator.php
[srclink-NullableIsObjectArrayValidator]: /src/Validators/NullableIsObjectArrayValidator.php
[srclink-NullableIsObjectValidator]: /src/Validators/NullableIsObjectValidator.php
[srclink-NullableIsRegularExpressionArrayValidator]: /src/Validators/NullableIsRegularExpressionArrayValidator.php
[srclink-NullableIsRegularExpressionValidator]: /src/Validators/NullableIsRegularExpressionValidator.php
[srclink-NullableIsScalarArrayValidator]: /src/Validators/NullableIsScalarArrayValidator.php
[srclink-NullableIsScalarValidator]: /src/Validators/NullableIsScalarValidator.php
[srclink-NullableIsStringArrayValidator]: /src/Validators/NullableIsStringArrayValidator.php
[srclink-NullableIsStringBackedEnumArrayValidator]: /src/Validators/NullableIsStringBackedEnumArrayValidator.php
[srclink-NullableIsStringBackedEnumNameArrayValidator]: /src/Validators/NullableIsStringBackedEnumNameArrayValidator.php
[srclink-NullableIsStringBackedEnumNameValidator]: /src/Validators/NullableIsStringBackedEnumNameValidator.php
[srclink-NullableIsStringBackedEnumValidator]: /src/Validators/NullableIsStringBackedEnumValidator.php
[srclink-NullableIsStringValidator]: /src/Validators/NullableIsStringValidator.php
[srclink-NullableIsSubClassOfArrayValidator]: /src/Validators/NullableIsSubClassOfArrayValidator.php
[srclink-NullableIsSubClassOfValidator]: /src/Validators/NullableIsSubClassOfValidator.php
[srclink-NullableIsTraitNameArrayValidator]: /src/Validators/NullableIsTraitNameArrayValidator.php
[srclink-NullableIsTraitNameValidator]: /src/Validators/NullableIsTraitNameValidator.php

[srclink-ValidatorChain]: /src/Validators/ValidatorChain.php
[srclink-NullableValidatorChain]: /src/Validators/NullableValidatorChain.php

[srclink-MappedValidators-MappedArrayValidator]: /src/Validators/MappedValidators/MappedArrayValidator.php
[srclink-MappedValidators-NullableMappedArrayValidator]: /src/Validators/MappedValidators/NullableMappedArrayValidator.php
[srclink-MappedValidators-MappedObjectValidator]: /src/Validators/MappedValidators/MappedObjectValidator.php
[srclink-MappedValidators-NullableMappedObjectValidator]: /src/Validators/MappedValidators/NullableMappedObjectValidator.php
