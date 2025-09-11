# codekandis/toolkit

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

`codekandis/toolkit` is a library providing interfaces and classes for several purposes.

## Index

* [Installation](#installation)
* [Testing](#testing)
  * [Known coverage issues](#known-coverage-issues)
* [Documentation](#documentation)

## Installation

Install the latest version with

```bash
$ composer require codekandis/toolkit
```

## Testing

Test the code with

```bash
$ composer run-script test
```

If you want to retrieve a full coverage report run

```bash
$ composer run-script test-coverage
```

### Known coverage issues

This library is 92.13% covered by tests. But it can be assumed as 100% tested.

There are several thrown exceptions of type `UnexpectedErrorException`. These exceptions are wrapping catched exceptions that could be thrown but won't because the tested code prevents it. These origin exceptions could be catched and ignored silently. But any `UnexpectedErrorException` is a fallback just in case the wrapped code changes its behaviour.

## Documentation

[See the documentation][doclink] for further information about all available interfaces, classes and exceptions and how to use them.



[xtlink-version-badge]: https://img.shields.io/badge/version-development-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%208.4-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-92.13%25-green.svg
[xtlink-php-net]: https://php.net

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE

[doclink]: ./docs/README.md
