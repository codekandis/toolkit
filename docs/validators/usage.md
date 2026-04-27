# Validators - Usage

## Index

* [Implementation requirements](#implementation-requirements)
* [Concrete validators](#concrete-validators)
* [Validator chains](#validator-chains)
* [Mapped validators](#mapped-validators)
  * [`MappedArrayValidator`](#mappedarrayvalidator)
  * [`MappedObjectValidator`](#mappedobjectvalidator)
* [Nullable validators](#nullable-validators)

## Implementation requirements

* All validators must implement the interface [ValidatorInterface][srclink-ValidatorInterface].
  * All validators must return `true` if the value is valid, otherwise `false`.

```php
new WhateverValidator()
    ->validate( 'foobar' );
/**
 * true | false 
 */
```

## Concrete validators

```php
$value = 42;

new IsBooleanValidator()
    ->validate( $value );
/**
 * false
 */

$value = 'true';

new IsBooleanStringValidator()
    ->validate( $value );
/**
 * true
 */
```

## Validator chains

Validator chains introduce the possibility to validate a value by multiple validators.

```php
$validatorChain = new ValidatorChain(
    new Validator( new IsStringValidator() ),
    new Validator( new IsBinaryStringValidator() ),
    new Validator( new IsBooleanIntegerStringValidator() )
);

$value = '101010';

$validatorChain->validate( $value );
/**
 * false
 */

$value = '1';

$validatorChain->validate( $value );
/**
 * true
 */
```

## Mapped validators

Mapped validators introduce the possibility to validate arrays or objects by key-validator-mappings or property-name-validator-mappings.

### [`MappedArrayValidator`][srclink-MappedValidators-MappedArrayValidator]

```php
$validatorMappings = [
    new ValidatorMapping( 0, new IsBooleanValidator() ),
    new ValidatorMapping( 'key1', new IsBooleanStringValidator() )
];

$value = [
    0      => 42,
    'key1' => 'true'
];

new MappedArrayValidator( ...$validatorMappings )
    ->validate( $value );
/**
 * false
 */

$value = [
    0      => false,
    'key1' => 'true'
];

new MappedArrayValidator( ...$validatorMappings )
    ->validate( $value );
/**
 * true
 */

$validatorMappings = [
    new ValidatorMapping( 0, new IsBooleanValidator() ),
    new ValidatorMapping( 'key1', new IsBooleanStringValidator() )
    new ValidatorMapping( 'unknownKey', new IsStringValidator() )
];

$value = [
    0      => false,
    'key1' => 'true'
];

new MappedArrayValidator( ...$validatorMappings )
    ->validate( $value );
/**
 * false
 */

$value = 42;

new MappedArrayValidator( ...$validatorMappings )
    ->validate( $value );
/**
 * false
 */
```

### [`MappedObjectValidator`][srclink-MappedValidators-MappedObjectValidator]

```php
$validatorMappings = [
    new ValidatorMapping( 'property0', new IsBooleanValidator() ),
    new ValidatorMapping( 'property1', new IsBooleanStringValidator() )
];

$value = new class()
{
    public $property0 = 42;
    public $property1 = 'true';
];

new MappedObjectValidator( ...$validatorMappings )
    ->validate( $value );
/**
 * false
 */

$value = new class()
{
    public $property0 = false;
    public $property1 = 'true';
];

new MappedObjectValidator( ...$validatorMappings )
    ->validate( $value );
/**
 * true
 */

$validatorMappings = [
    new ValidatorMapping( 'property0', new IsBooleanValidator() ),
    new ValidatorMapping( 'property1', new IsBooleanStringValidator() )
    new ValidatorMapping( 'unknownProperty', new IsStringValidator() )
];

$value = new class()
{
    public $property0 = false;
    public $property1 = 'true';
];

new MappedObjectValidator( ...$validatorMappings )
    ->validate( $value );
/**
 * false
 */

$value = 42;

new MappedObjectValidator( ...$validatorMappings )
    ->validate( $value );
/**
 * false
 */
```

### Nullable validators

All validators have a nullable equivalent. If the value to validate is `null` they must return `true`.

```php
new IsNullableBooleanValidator()
    ->validate( null );
/**
 * true
 */

new NullableValidatorChain(
    new Validator( new IsStringValidator() ),
    new Validator( new IsBinaryStringValidator() ),
    new Validator( new IsBooleanIntegerStringValidator() )
)
    ->validate( null );
/**
 * true
 */

$validatorMappings = [
    new ValidatorMapping( 'property0', new IsBooleanValidator() ),
    new ValidatorMapping( 'property1', new IsBooleanStringValidator() )
];

new NullableMappedArrayValidator( ...$validatorMappings )
    ->validate( null );
/**
 * true
 */

new NullableMappedObjectValidator( ...$validatorMappings )
    ->validate( null );
/**
 * true
 */
```



[srclink-ValidatorInterface]: /src/Validators/ValidatorInterface.php

[srclink-MappedValidators-MappedArrayValidator]: /src/Validators/MappedValidators/MappedArrayValidator.php
[srclink-MappedValidators-MappedObjectValidator]: /src/Validators/MappedValidators/MappedObjectValidator.php
