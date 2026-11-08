# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/), and this project
adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.1] - 2026-11-08

### Fixed

- `InvalidStatusCodeException` can be autoloaded. Its file was named `Exception.php`, so calling an
  unknown status code as a method (`Code::NOPE()`) ended in a fatal "Class not found" error instead
  of throwing the exception.
- `isServerError()` and `getStatusRange()` treat every code from 500 to 599 as a server error
  (RFC 9110, section 15.6). Codes 512 to 599 were reported as unknown.
- No deprecation notice on PHP 8.4 and later: the exception constructor declares
  `?\Throwable $previous` explicitly.
- The README examples use the real method names (`getStatusText`, `getStatusDescription`,
  `getHeader`) and show their real output. A test now runs them.

### Changed

- `composer.json` no longer has a `version` field: Packagist takes the version from the git tag.

## [1.0.0] - 2024-06-21

### Added

- `Code` with the HTTP status code constants, their texts and descriptions, header formatting,
  class checks and lists by category.
- `InvalidStatusCodeException`.
