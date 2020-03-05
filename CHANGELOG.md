# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
- Add support for Laravel 7
- Drop support for Laravel 5.x

## [0.0.7]
### Added
- Add support for Laravel 6.0

## [0.0.6]
### Fixed
- The `PolicyCommand` now extends the `PolicyMakeCommand`

## [0.0.5]
### Added
- PolicyCommand with signature `domain:policy`

### Changed
- Description for the `domain|d` option

## [0.0.4]
### Added
- ObserverCommand with signature `domain:observer`
- RuleCommand with signature `domain:rule`

## [0.0.3]
### Fixed
- Incorrect stub name for `EventCommand`

## [0.0.2]
### Fixed
- Missing use statement in `DomainGeneratorCommand`

### Removed
- Redundant use statement in `DTOCommand`

## [0.0.1]
- Experimental release!

[Unreleased]: https://github.com/signifly/laravel-domain-commands/compare/v0.0.7...HEAD
[0.0.7]: https://github.com/signifly/laravel-domain-commands/compare/v0.0.6...v0.0.7
[0.0.6]: https://github.com/signifly/laravel-domain-commands/compare/v0.0.5...v0.0.6
[0.0.5]: https://github.com/signifly/laravel-domain-commands/compare/v0.0.4...v0.0.5
[0.0.4]: https://github.com/signifly/laravel-domain-commands/compare/v0.0.3...v0.0.4
[0.0.3]: https://github.com/signifly/laravel-domain-commands/compare/v0.0.2...v0.0.3
[0.0.2]: https://github.com/signifly/laravel-domain-commands/compare/v0.0.1...v0.0.2
[0.0.1]: https://github.com/signifly/laravel-domain-commands/releases/tag/v0.0.1
