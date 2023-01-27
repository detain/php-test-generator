# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.3.0] - 2018-08-25
### Added
- Add `--src-base` (`-s`) and `--test-base` (`-t`) which can be used for saving the test file instead of printing to stdout

## [1.2.0] - 2017-08-28
### Added
 - Add formatting options via `--base-class`, `--subject-format` and `--field-format`

### Fixed
 - Fix style issue with classes without dependencies

## [1.1.0] - 2017-08-27
### Added
 - Support for namespaces, PHP5, PHPUnit5 and Mockery

## [1.0.0] - 2017-08-27
### Added
 - Generate PHPUnit 6 tests using PHPUnit for mocking
 - Backport to PHP5 via bin/remove-php7-features

[Unreleased]: https://github.com/detain/php-test-generator/compare/1.3.0...HEAD
[1.3.0]: https://github.com/detain/php-test-generator/compare/1.2.0...1.3.0
[1.2.0]: https://github.com/detain/php-test-generator/compare/1.1.0...1.2.0
[1.1.0]: https://github.com/detain/php-test-generator/compare/1.0.0...1.1.0
[1.0.0]: https://github.com/detain/php-test-generator/compare/0e8be99...1.0.0

