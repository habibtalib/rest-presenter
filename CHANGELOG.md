# Changelog for RESTPresenter

## [1.1.0](https://github.com/xtend-packages/rest-presenter/compare/1.0.0...1.1.0) (2024-06-15)


### Features

* Additional panel configuration & branding + enable spa ([02f4eb9](https://github.com/xtend-packages/rest-presenter/commit/02f4eb9d9e3c5dcbfa2ecec956ba18c04fce760a))
* Export and download collection direct from panel ([43e155d](https://github.com/xtend-packages/rest-presenter/commit/43e155d0a657e35796aa7d3afbae94f71ce08581))
* User menu link added to all panels + update README ([0c743a0](https://github.com/xtend-packages/rest-presenter/commit/0c743a0dbabc5ac7e2c4f642852d35e8236b341f))


### Bug Fixes

* Replace stats with real values from Endpoint model ([cfef4a4](https://github.com/xtend-packages/rest-presenter/commit/cfef4a4286d091506347e36e932461944703c847))

## [1.0.0](https://github.com/xtend-packages/rest-presenter/compare/1.0.0-rc.2...1.0.0) (2024-06-07)


### Features

* Apply auth middleware when isAuthenticated is true ([731988d](https://github.com/xtend-packages/rest-presenter/commit/731988d8e60e4d3822cd063ed67c4e7fb32dd835))
* Generate collection auto commit ([0338a79](https://github.com/xtend-packages/rest-presenter/commit/0338a791c6cd1240652234013a177d11f896eaa4))
* Improvements to endpoint resource & token generation ([d28e74c](https://github.com/xtend-packages/rest-presenter/commit/d28e74cc01a3fc7be6cc5f37250fd44c9d57776c))
* Manage users & generate tokens ([5582afa](https://github.com/xtend-packages/rest-presenter/commit/5582afa269ab5d79bfe08afda539192c6c2886da))
* New filament command + auto commits ([ed71d28](https://github.com/xtend-packages/rest-presenter/commit/ed71d288488672ff76647017724204ce33b1e641))
* No need to publish config everything now configurable from env ([0189819](https://github.com/xtend-packages/rest-presenter/commit/0189819c4dfe5cba197d95e8a3e9d11bf52625c3))
* Setup command now has the option to auto commit ([82f268d](https://github.com/xtend-packages/rest-presenter/commit/82f268d5453ef513f8da60458dc0317d950e93d3))


### Bug Fixes

* Generate separate auth stub for sanctum overrides ([8c857d8](https://github.com/xtend-packages/rest-presenter/commit/8c857d8d2feea797832cde9f1d0922faaed820aa))
* Hide duplicated logo for filament plugin ([ef891b9](https://github.com/xtend-packages/rest-presenter/commit/ef891b9c4c3c9d198f30446871d2a9df873cc7d9))
* Move type generation to rest-presenter directory ([0b57273](https://github.com/xtend-packages/rest-presenter/commit/0b572735641482bbaa493c8f0874c3347dc741e7))
* phpstan ignore multiselect options prompt ([69ded40](https://github.com/xtend-packages/rest-presenter/commit/69ded40bf70e76093aa5c228c93ce42196592840))
* Remove view action for endpoints not needed right now ([f0ec0bf](https://github.com/xtend-packages/rest-presenter/commit/f0ec0bf4c18a26618a4116c2ce57dc0a94ffe103))
* Skip failing test fix later once we enable test coverage ([030ccf2](https://github.com/xtend-packages/rest-presenter/commit/030ccf206232a5adac4e8374f4e3f5b396ef4c69))
* User resource authenticated by default ([4207592](https://github.com/xtend-packages/rest-presenter/commit/42075929a6becaddb6b5c4a2b6154d13882620e9))


### Documentation

* Condense introduction ([fdf68f9](https://github.com/xtend-packages/rest-presenter/commit/fdf68f9a92aed9508bc5cd8cb9ee513624bf47b0))
* Improve and extend README ([2ee5a27](https://github.com/xtend-packages/rest-presenter/commit/2ee5a270c4ed79450819d238b6b4634b6cfbcad2))
* Improve Filament Plugin Integration ([854dd38](https://github.com/xtend-packages/rest-presenter/commit/854dd3818c079732e4cd05a299114166776d558c))
* Improve Introduction ([ec4a947](https://github.com/xtend-packages/rest-presenter/commit/ec4a947152db8fcc60f2092f3a07b84e1a4f3d49))
* Improve RESTPresenter Package ([d9813f5](https://github.com/xtend-packages/rest-presenter/commit/d9813f508cbd1ed5851fcf84cff51dfe017a92d6))
* Update README & improve CONTRIBUTING guide ([1f86b79](https://github.com/xtend-packages/rest-presenter/commit/1f86b79bcf425482fb2043f3342fa71e1e95801e))
* Update README to include Filament Plugin ([f684ecf](https://github.com/xtend-packages/rest-presenter/commit/f684ecf5e5ca4522ecb59fbe6cf59d8e583833eb))
* Update to use correct version + test failure advice ([dd12bb6](https://github.com/xtend-packages/rest-presenter/commit/dd12bb60ca1e83f90de06871fa9a475178ce3dd1))


### Code Refactoring

* Resource generation now based from selected model ([f521265](https://github.com/xtend-packages/rest-presenter/commit/f521265043f49c24e30bb854ce7b2b3bcb645c69))


### Style Changes

* Rector fixes ([91502a4](https://github.com/xtend-packages/rest-presenter/commit/91502a4ee749b9ebea6ee7ab75fa8a4c9a9c9f4e))
* Reformat & Rector fixes ([960b893](https://github.com/xtend-packages/rest-presenter/commit/960b89305dce6a62c33c29007e34fb7469e87f75))
* Resolve phpstan issues ([55db517](https://github.com/xtend-packages/rest-presenter/commit/55db5174417daff7dc1ca73835bf5d66d5370348))

## [1.0.0-rc.2](https://github.com/xtend-packages/rest-presenter/compare/1.0.0-rc.1...1.0.0-rc.2) (2024-05-13)


### Bug Fixes

* Include API key with test generation ([79de5b1](https://github.com/xtend-packages/rest-presenter/commit/79de5b1791e4209a32cea61c992704ac390514cf))

## [1.0.0-rc.1](https://github.com/xtend-packages/rest-presenter/compare/1.0.0-rc.0...1.0.0-rc.1) (2024-05-13)


### Bug Fixes

* No need to remove the API directory via XtendRouter ([c40a819](https://github.com/xtend-packages/rest-presenter/commit/c40a819c5f6defa2afdd39c49ad53dd6881569bf))


### Documentation

* Add info about tests + warning to update phpunit.xml ([bab9042](https://github.com/xtend-packages/rest-presenter/commit/bab904222f88e64a3d025519014334ab96c75f73))

## [1.0.0-rc.0](https://github.com/xtend-packages/rest-presenter/compare/0.11.0...1.0.0-rc.0) (2024-05-13)


### Features

* Extra Security API Key (Enabled by Default) ([b7baa38](https://github.com/xtend-packages/rest-presenter/commit/b7baa380aa8f6caa600a3f04b18a3f431a2d83a5))
* Improve tests + remove service provider ([151bb8b](https://github.com/xtend-packages/rest-presenter/commit/151bb8bc06c3b2ff1867dbdbca1f6b2928558f0c))


### Bug Fixes

* Skip RESTPresenterSetupCommand test issue with expectsChoice ([1a7ee6b](https://github.com/xtend-packages/rest-presenter/commit/1a7ee6b96262bc9a01975266f0eafcc568713659))


### Documentation

* Update for pre-release ([4af1f3d](https://github.com/xtend-packages/rest-presenter/commit/4af1f3d41ae724c9f8eca68cbe08e8ca4479ed8f))

## [0.11.0](https://github.com/xtend-packages/rest-presenter/compare/0.10.1...0.11.0) (2024-05-11)


### Features

* auth middleware isAuthenticated property for all resources ([8125c0b](https://github.com/xtend-packages/rest-presenter/commit/8125c0b86d90fd08507236e407c145f35739a8ba))
* Default resource presenters + profile example for user ([03fa2e1](https://github.com/xtend-packages/rest-presenter/commit/03fa2e15f741dbec051f549578bb3c48f7658bba))

## [0.10.1](https://github.com/xtend-packages/rest-presenter/compare/0.10.0...0.10.1) (2024-05-11)


### Bug Fixes

* PEST show tests ([01998f5](https://github.com/xtend-packages/rest-presenter/commit/01998f5b1ac7de76f2d0d1c0daf0d2efe67f1ec7))

## [0.10.0](https://github.com/xtend-packages/rest-presenter/compare/0.9.3...0.10.0) (2024-05-10)


### Features

* Make resource test called directly after generating each resource ([53c95fb](https://github.com/xtend-packages/rest-presenter/commit/53c95fbfa25b0c2c56076e95d3a295fd1c940ef6))
* New test command + stubs to support both pest & phpunit ([59e598b](https://github.com/xtend-packages/rest-presenter/commit/59e598b69d2c9b98201dbffc34b6c35839454c1e))


### Bug Fixes

* phpstan ignore rules ([f2d6689](https://github.com/xtend-packages/rest-presenter/commit/f2d6689a0229814d09af6f4a2954be742357e453))
* Remove ServiceProvider no longer needed + register new test command ([8e5d039](https://github.com/xtend-packages/rest-presenter/commit/8e5d0394aeddd01bb57315d6b79e3f416bc7f0bb))
* Satisfy phpstan ([a5b3379](https://github.com/xtend-packages/rest-presenter/commit/a5b3379664fe31eabef9dd51aa67f41929284c18))
* starter-kit type string ([ea1dfad](https://github.com/xtend-packages/rest-presenter/commit/ea1dfad5b5bb0ca938a78b5f7aa834f4add1434d))
* Test helpers namespace functions ([b665de4](https://github.com/xtend-packages/rest-presenter/commit/b665de44176fc75537707d7566e4b543779d2ac7))
* test workflow composer dump-autoload ([1c424a3](https://github.com/xtend-packages/rest-presenter/commit/1c424a36d870df0f866cdf6bf90533f4b9fc7bc0))

## [0.9.3](https://github.com/xtend-packages/rest-presenter/compare/0.9.2...0.9.3) (2024-05-07)


### Bug Fixes

* DefaultResponse only check carbon date type if value is not null ([48d7d87](https://github.com/xtend-packages/rest-presenter/commit/48d7d871186e2f04394e741a6f7080163a4c8dc9))

## [0.9.2](https://github.com/xtend-packages/rest-presenter/compare/0.9.1...0.9.2) (2024-05-07)


### Bug Fixes

* Filament some projects use scope for tenant so ignore GlobalScopes ([a7e0068](https://github.com/xtend-packages/rest-presenter/commit/a7e00688bea75666641814cf598362661e326b90))

## [0.9.1](https://github.com/xtend-packages/rest-presenter/compare/0.9.0...0.9.1) (2024-05-07)


### Bug Fixes

* Install Filament kit without prompts ([b49441c](https://github.com/xtend-packages/rest-presenter/commit/b49441c04f5c3b40749f617fb972d1978e072014))


### Documentation

* Filament Quick Start ([4af72c0](https://github.com/xtend-packages/rest-presenter/commit/4af72c085ec38370110f4a438cb457469382b3c3))

## [0.9.0](https://github.com/xtend-packages/rest-presenter/compare/0.8.0...0.9.0) (2024-05-06)


### Features

* Filament is now the focus removed lunarphp until it's stable ([99d4630](https://github.com/xtend-packages/rest-presenter/commit/99d463041d134407b8291cda53fe52bd5404c71a))

## [0.8.0](https://github.com/xtend-packages/rest-presenter/compare/0.7.5...0.8.0) (2024-05-06)


### Features

* Generate API Collections ([71bf22c](https://github.com/xtend-packages/rest-presenter/commit/71bf22c2d57eb3431c79991bf6e3b730ecdfbe50))


### Bug Fixes

* Satisfy phpstan at max level + ignore certain array iterable types ([c56ed57](https://github.com/xtend-packages/rest-presenter/commit/c56ed574e3b728f9056580263867814381b5819d))

## [0.7.5](https://github.com/xtend-packages/rest-presenter/compare/0.7.4...0.7.5) (2024-05-06)


### Bug Fixes

* Check for casts if not array then property type need to be string ([15d1493](https://github.com/xtend-packages/rest-presenter/commit/15d1493b55f1305044ab5839b0f19f14479f5a0f))
* FilamentStarterKit change logic to scan for class definitions ([bfb0483](https://github.com/xtend-packages/rest-presenter/commit/bfb04837cfb2a1242f85bec629c5744881b229b1))
* Not all resources required actions or xtend controllers ([03f66bd](https://github.com/xtend-packages/rest-presenter/commit/03f66bd244b040188629a4fedf258bb8f8ff765a))
* replaceJsonColumnsSqliteWorkaround make sure value is an array ([fc98fcc](https://github.com/xtend-packages/rest-presenter/commit/fc98fcc932c70b9b5e60a437f6c719e8ca10d054))

## [0.7.4](https://github.com/xtend-packages/rest-presenter/compare/0.7.3...0.7.4) (2024-04-27)


### Bug Fixes

* Update provider stub replace breeze with sanctum kit ([899fa3a](https://github.com/xtend-packages/rest-presenter/commit/899fa3aaa4b42ba509da1e805473c62e4e6c9d32))

## [0.7.3](https://github.com/xtend-packages/rest-presenter/compare/0.7.2...0.7.3) (2024-04-27)


### Code Refactoring

* Filament scan for app class definitions + check if installed ([a3e55cd](https://github.com/xtend-packages/rest-presenter/commit/a3e55cd0a48613cd549456d0cc3b6e935e90fa8e))

## [0.7.2](https://github.com/xtend-packages/rest-presenter/compare/0.7.1...0.7.2) (2024-04-26)


### Bug Fixes

* Include TypeGuard directly remove dep until package is released ([42196d6](https://github.com/xtend-packages/rest-presenter/commit/42196d664003f6eb5908f918b60099f5706206d9))

## [0.7.1](https://github.com/xtend-packages/rest-presenter/compare/0.7.0...0.7.1) (2024-04-18)


### Bug Fixes

* Make sure lunar tests all pass ([1ce9a47](https://github.com/xtend-packages/rest-presenter/commit/1ce9a470e2026847baaa76ae730f3465559e1ef8))

## [0.7.0](https://github.com/xtend-packages/rest-presenter/compare/0.6.1...0.7.0) (2024-04-17)


### Features

* phpstan max level + type-guard ([a779bec](https://github.com/xtend-packages/rest-presenter/commit/a779becf8dc39cc61b45c9eeff7a98b2e513df5f))


### Bug Fixes

* If we have not filters return empty array ([66db589](https://github.com/xtend-packages/rest-presenter/commit/66db5899cc975706d4b1d6c49195521666548a6f))
* Install & configure rector for laravel + apply fixes ([e305e0c](https://github.com/xtend-packages/rest-presenter/commit/e305e0c589507aaf9e5a4dfa5fdfcca4b82e11e3))
* Resolve issues raised by phpstan ([9f30742](https://github.com/xtend-packages/rest-presenter/commit/9f3074204648c583b4efc0403206bf658152d58b))
* Resolve TypeError when passing optional arguments ([af19de1](https://github.com/xtend-packages/rest-presenter/commit/af19de10b1ec820cda0be6f70fd7a889f5855010))
* Setup strict pint rules + apply fixes ([a607023](https://github.com/xtend-packages/rest-presenter/commit/a6070230915f1c04450318eed2fb293b5d15222e))
* Tests now run but some fail after refactor ([1f4f75d](https://github.com/xtend-packages/rest-presenter/commit/1f4f75d91bfb78ed393318017b71bee2a85b29a7))

## [0.6.1](https://github.com/xtend-packages/rest-presenter/compare/0.6.0...0.6.1) (2024-04-14)


### Bug Fixes

* For those not using filament now checks if the resources exist ([4a64afe](https://github.com/xtend-packages/rest-presenter/commit/4a64afe669db1344a86819a1cb4770edc35414a8))

## [0.6.0](https://github.com/xtend-packages/rest-presenter/compare/0.5.3...0.6.0) (2024-04-14)


### Features

* Reset password and generate temp password to login ([5022992](https://github.com/xtend-packages/rest-presenter/commit/5022992db55c8f34cd6496d791971cdb0ee424ea))
* Update Sanctum Auth Kit + Register Route Actions ([7b1d965](https://github.com/xtend-packages/rest-presenter/commit/7b1d9653771b74be7398051611a69e2cba7d4c71))


### Bug Fixes

* Allow actions to set auth middleware + translatable message ([6352404](https://github.com/xtend-packages/rest-presenter/commit/6352404023bdec1a03c601082a6243c4bef8b985))
* AutoDiscovery with middleware ([312ef14](https://github.com/xtend-packages/rest-presenter/commit/312ef14c0a35ff85660a616f570a645c45441eb5))
* Temp remove verification email does not work with token auth flow ([489b99d](https://github.com/xtend-packages/rest-presenter/commit/489b99db6db4e7c859405d951cc6503cf81a88b5))

## [0.5.3](https://github.com/xtend-packages/rest-presenter/compare/0.5.2...0.5.3) (2024-04-07)


### Bug Fixes

* All custom resources and presenters are now generated correctly ([aea569a](https://github.com/xtend-packages/rest-presenter/commit/aea569a819289334b8a32fc7a8c455e8c3f29f2e))

## [0.5.2](https://github.com/xtend-packages/rest-presenter/compare/0.5.1...0.5.2) (2024-04-07)


### Bug Fixes

* Support multi-word resources ([898f7ea](https://github.com/xtend-packages/rest-presenter/commit/898f7eab1cdc2dd79e186b9d7fbd6f0c86781722))

## [0.5.1](https://github.com/xtend-packages/rest-presenter/compare/0.5.0...0.5.1) (2024-04-07)


### Bug Fixes

* sqlite nullable check condition ([ce12803](https://github.com/xtend-packages/rest-presenter/commit/ce1280321dd0c911f4fc1d341d360d108ae0c906))
* Temp disable TS formatting as it conflicts with .prettierrc.js ([27cb548](https://github.com/xtend-packages/rest-presenter/commit/27cb548d196a5d2977a7d096272161f0cb382ce5))


### Documentation

* Example RESTPresenter insomnia collection ([6dcd24d](https://github.com/xtend-packages/rest-presenter/commit/6dcd24dcbfb742bf3d86256ecd05103e1f5c4472))
* Inform users about minimum stability requirement ([ab327e6](https://github.com/xtend-packages/rest-presenter/commit/ab327e68078127c3159bb096c86213b890c38d7b))
* Update docs explain about presenters + update starter kits links ([a5dcc43](https://github.com/xtend-packages/rest-presenter/commit/a5dcc43c2e830f21f57dab58f12b12aa1abeaf7b))

## [0.5.0](https://github.com/xtend-packages/rest-presenter/compare/0.4.0...0.5.0) (2024-04-06)


### Features

* Add TS support to generate data ([62e84cb](https://github.com/xtend-packages/rest-presenter/commit/62e84cb53f9c00cfe3ecdefde56acb294ccbd698))
* TypeScript now generated for data with our own custom writer ([597c17b](https://github.com/xtend-packages/rest-presenter/commit/597c17b67cdd93e21e7f251d43649021cfa66864))


### Bug Fixes

* Move spatie typescript transformer can not be a dev dependency ([ed67257](https://github.com/xtend-packages/rest-presenter/commit/ed67257d2bfde273cf85113a7fa6ccd837960f3f))
* User resource needs to use package model ([927e97f](https://github.com/xtend-packages/rest-presenter/commit/927e97fcbd6c35317b8bae6e7dabe55db5abb0b1))

## [0.4.0](https://github.com/xtend-packages/rest-presenter/compare/0.3.4...0.4.0) (2024-04-05)


### Features

* Auto generates presenter & DTO from column properties ([84c06cf](https://github.com/xtend-packages/rest-presenter/commit/84c06cfb858574c2459df6ef59a2ca9afced796c))
* Fields returned now in the correct table order + prepend id ([64d774a](https://github.com/xtend-packages/rest-presenter/commit/64d774abd803dc3d78f04b8b254e911a3b3b265b))
* Filament auto-discover resources ([227807a](https://github.com/xtend-packages/rest-presenter/commit/227807a5a9892d4b5314124cb8f531f410047095))
* Register filament route resources ([35a7592](https://github.com/xtend-packages/rest-presenter/commit/35a7592f878330cab6884068b8116bb2f3952de3))


### Bug Fixes

* phpstan ignore ([205757b](https://github.com/xtend-packages/rest-presenter/commit/205757bd7273a3ac1ff3691cb69535bc214bfb44))
* ResourceController to allow middleware + sanctum UserResource ([89572ed](https://github.com/xtend-packages/rest-presenter/commit/89572edf2bc3e0fde38a528b37026d9ec53f271e))
* Routes need to registered after package config is registered ([23fb789](https://github.com/xtend-packages/rest-presenter/commit/23fb7897e7616a6ff500a4408506ec438e74e1ec))
* Sqlite workaround to set json field type ([14b01c1](https://github.com/xtend-packages/rest-presenter/commit/14b01c1593a4a0f13af95b2c8ebba2ba9f8ca3b5))
* Support for nullable types prepends question mark ([a29b881](https://github.com/xtend-packages/rest-presenter/commit/a29b88169088f441a14175f0b5a7704ad84f7b9f))

## [0.3.4](https://github.com/xtend-packages/rest-presenter/compare/0.3.3...0.3.4) (2024-04-04)


### Bug Fixes

* Allow to define middleware on controllers ([cc4cf55](https://github.com/xtend-packages/rest-presenter/commit/cc4cf558f0aa166785ea7becc5e6021e88cfc40e))
* Default response to exclude hidden fields ([8434f92](https://github.com/xtend-packages/rest-presenter/commit/8434f9217a79ddbc5a5c11c4b9e16e85e92cad6b))

## [0.3.3](https://github.com/xtend-packages/rest-presenter/compare/0.3.2...0.3.3) (2024-04-03)


### Bug Fixes

* Extending kits pass extend type to get correct stub ([60378e9](https://github.com/xtend-packages/rest-presenter/commit/60378e9df7058fe89ccf7d9d04d182eb29c9287a))
* We should not prompt for resource when extending kits ([052a675](https://github.com/xtend-packages/rest-presenter/commit/052a675874d5b5d2f493944d35ab8e5338ed3073))

## [0.3.2](https://github.com/xtend-packages/rest-presenter/compare/0.3.1...0.3.2) (2024-04-02)


### Bug Fixes

* Correct namespace for DB not Lunar 👀 ([c5857b1](https://github.com/xtend-packages/rest-presenter/commit/c5857b11c89905264c2f891d18a06d4d92f1ece0))

## [0.3.1](https://github.com/xtend-packages/rest-presenter/compare/0.3.0...0.3.1) (2024-04-02)


### Bug Fixes

* Issues with installer after modifying types of stubs ([b66e3a7](https://github.com/xtend-packages/rest-presenter/commit/b66e3a7d6febc348f22f7da2cfe78a75035d37a2))

## [0.3.0](https://github.com/xtend-packages/rest-presenter/compare/0.2.5...0.3.0) (2024-03-31)


### Features

* Generate filters based on the type of relation ([0db1e35](https://github.com/xtend-packages/rest-presenter/commit/0db1e35daa2746b52ec61eeaec05a950fc013a0b))
* Presenters with Data InteractsWithDbSchema ([181a90e](https://github.com/xtend-packages/rest-presenter/commit/181a90ede6b7173681374da9ca0bcc4da98f40fc))


### Bug Fixes

* Allow nullable dates ([09cb3cb](https://github.com/xtend-packages/rest-presenter/commit/09cb3cba4666e83a2fdea56c2f1d95eca644dd01))
* Camel case DTO not currently supported with model attributes ([3216ec3](https://github.com/xtend-packages/rest-presenter/commit/3216ec33734f59a9759724b310a767e578a00737))
* HasMany filter stub called wrong method ([ee2ca55](https://github.com/xtend-packages/rest-presenter/commit/ee2ca5552084877b2a0f29270331eac03ce700fe))
* Need the correct presenterKey to apply presenter ([4595d60](https://github.com/xtend-packages/rest-presenter/commit/4595d6027333071935c0fa945aa2d69a56ecb3ac))
* phpstan errors ([18375e3](https://github.com/xtend-packages/rest-presenter/commit/18375e319f3fa5a94a4aa60bbf73b14da94aa2bf))
* Remove Filters and Presenters namespace not needed here ([66fa2a5](https://github.com/xtend-packages/rest-presenter/commit/66fa2a5977e53f667a4e2db85ca12914f370af6e))
* Remove XtendRouter Custom path ([5383447](https://github.com/xtend-packages/rest-presenter/commit/538344737ff51ee17e1c36863772536e0a7e2cef))
* Support json to pass through as value ([801692d](https://github.com/xtend-packages/rest-presenter/commit/801692d63fb29089d431c673195b18fda39a1309))
* Tests ([6c03952](https://github.com/xtend-packages/rest-presenter/commit/6c039528d13511e4c31b8817a64261cc63bea972))


### Documentation

* Update README for release ([afa929b](https://github.com/xtend-packages/rest-presenter/commit/afa929b682201e34c271b485cc76bbdef37ce115))
* Update README.md to include Resource Generation ([03990b4](https://github.com/xtend-packages/rest-presenter/commit/03990b4f99b189ef204156e3780155e95529ffa8))

## [0.2.5](https://github.com/xtend-packages/rest-presenter/compare/0.2.4...0.2.5) (2024-03-28)


### Bug Fixes

* Load breeze routes directly from XtendRouter ([6d8b052](https://github.com/xtend-packages/rest-presenter/commit/6d8b052fe017d816860cbe4c338073c2a3a21c23))

## [0.2.4](https://github.com/xtend-packages/rest-presenter/compare/0.2.3...0.2.4) (2024-03-28)


### Bug Fixes

* Route register with correct name and prefix ([18eb1ec](https://github.com/xtend-packages/rest-presenter/commit/18eb1ec248a65034b378d9cfbae75d0c0e22a3dc))
* use getAttribute for the default model response ([47e1d3e](https://github.com/xtend-packages/rest-presenter/commit/47e1d3e2d3f6079287c3d614f4abb8a93a99b062))
* Users grouped by Auth middleware & register XtendRouter for Tests ([06cfe19](https://github.com/xtend-packages/rest-presenter/commit/06cfe19de4735169c29928cf1abe534a7388e755))

## [0.2.3](https://github.com/xtend-packages/rest-presenter/compare/0.2.2...0.2.3) (2024-03-27)


### Bug Fixes

* lunarphp/core move to dev dependency ([1c14c78](https://github.com/xtend-packages/rest-presenter/commit/1c14c78b42f232cec812cbf7240beb0b1413aecb))
* Make sure custom resources directory is created with setup ([724a347](https://github.com/xtend-packages/rest-presenter/commit/724a347148941a4675627f5b8db42c7e3fa79094))


### Code Refactoring

* Remove api routes register via XtendRouter with AutoDiscover ([19a0b40](https://github.com/xtend-packages/rest-presenter/commit/19a0b4019c82614bf9099da91a639bf4912e6ee0))

## 0.2.2 (2024-03-27)


### Code Refactoring

* XtendRoute more control over routes with better IDE support ([f0843cc](https://github.com/xtend-packages/rest-presenter/commit/f0843cc837394f460405d91822834dd2e058a8fd))

# Changelog for REST Presenter

## 0.2.1 (26-03-2024)

Alpha release:

### Fixes

* Move Lunar to suggest dependency
* file_exist instead of class_exist to prevent errors

## 0.2.0 (26-03-2024)

Alpha release:

### Features

* Lunar API Starter Kit
* RESTPresenter Setup Command 
* Extend API Kits

## 0.1.0 (22-03-2024)

Initial pre-alpha release:

### Features

* Initial Setup Command
* PEST Test Setup + Testbench env
* Resource Base Controller
* Traits + Tests for Resource Controller
* Install Sanctum
* API Route Setup
* Install Laravel Data + Default Data Layers & Tests 
* Default Presenter + Tests
* Setup Config + Middleware
* Users Resource + Tests
* Setup Test User Model + Factory
* PEST Test Helper File
* Auth Breeze Starter Kit

### Continuous Integration Setup

* Setup Code Stying Workflow (Github Action)
* Setup Package Tests Workflow (Github Action)
