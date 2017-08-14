Composer Library Template
=========================

If you are trying to create a new PHP Composer library, whether it will be going to submitted to packagist.org
or just in your Github account, this template of files will surely help you make the process a lot easier and faster.

Create the project folder structure
---
Execute the following in your console (you need to have Composer installed first of course).
The mylibrary in the command is the name of your library, so replace it with the actual name.

    composer create-project tetrode/composer-library-template mylibrary

what is happening?

Not much, it just creates a new library under mylibrary folder. Let us take a look at the generated files.

Features
--------

* PSR-4 autoloading compliant structure
* Unit-Testing with PHPUnit
* Comprehensive Guides and tutorial
* Easy to use to any framework or even a plain php file


I encourage that you put more information on this readme file instead of leaving it as is.
See [How to make a README file](http://www.darwinbiler.com/designing-and-making-the-readme-file-for-your-github-repository/)
for more info.

Potential libraries to use - how to specify versions: https://getcomposer.org/doc/articles/versions.md

        "silex/silex": "^2.0",                              The PHP micro-framework based on the Symfony Components
        "twig/twig": "^1.34",                               Twig, the flexible, fast, and secure template language for PHP - v2 is only PHP 7
        "jasny/twig-extensions": "^1.0",                    A set of useful Twig filters
        "symfony/twig-bridge": "^3.3",                      Symfony Twig Bridge
        "components/jquery": "^3.2",                        jQuery JavaScript Library
        "apache/log4php": "^2.3",                           A versatile logging framework for PHP
        "monolog/monolog": "1.23.0"                         Sends your logs to files, sockets, inboxes, databases and various web services
        "giggsey/libphonenumber-for-php": "8.7.1",          PHP Port of Google's libphonenumber
        "guzzlehttp/guzzle": "^6.3",                        Guzzle is a PHP HTTP client library
        "beberlei/assert": "^2.7.6",                        Thin assertion library for input validation in business models.
        "matthiasmullie/minify": "^1.3",                    CSS & JS minifier
        "twilio/sdk": "^5.4",                               A PHP wrapper for Twilio's API
        "wsdl2phpgenerator/wsdl2phpgenerator": "^3.4",      Simple class library for generating php classes from a wsdl file.
        "vlucas/valitron": "^1.4",                          Simple, elegant, stand-alone validation library with NO dependencies
        "pusher/pusher-php-server": "^3.0",                 Library for interacting with the Pusher REST API
        "arcturial/clickatell": "^3.0",
        "gabordemooij/redbean":"^4.3"                       RedBeanPHP ORM - soon 5.0


        "ajaxray/short-code": "^1.1"
        "arcturial/clickatell": "^3.0"

        "behat/behat": "3.3.1",                              Scenario-oriented BDD framework for PHP 5.3

        ???
        "bower-asset/bootstrap": "3.3.* | 3.2.* | 3.1.*"
        "bower-asset/jquery": "2.1.*@stable | 1.11.*@stable",
        "bower-asset/jquery.inputmask": "3.1.*",
        "bower-asset/punycode": "1.3.*",
        "bower-asset/typeahead.js": "0.10.*"
        "bower-asset/yii2-pjax": ">=2.0.1"

        "bshaffer/oauth2-server-php": "^1.9",               OAuth2 Server for PHP

        "cboden/ratchet": "v0.3.6",                         PHP Websocket server

        "cebe/markdown": "~1.1.2",                          A super fast, highly extensible markdown parser for PHP
        "erusev/parsedown": "^1.6"                          Markdown parsing.

        "christian-riesen/base32": "^1.1",

        "cilex/cilex": "2.0",                               The PHP micro-framework for Command line tools based on the Symfony2 Components

        "twbs/bootstrap": "^3.3",                           The most popular front-end framework for developing responsive, mobile first projects on the web.
        "components/bootstrap": "*"                         same
        "components/bootstrap-default": "3.3.5",            Shim repository for the default theme for Bootstrap.
        "components/font-awesome": "4.5.0"                  The iconic font designed for use with Twitter Bootstrap
        "components/jquery-cookie": "1.4.1.2",              A simple, lightweight jQuery plugin for reading, writing and deleting cookies

        "composer-plugin-api": "^1.0"                       See: https://getcomposer.org/doc/articles/plugins.md

        "container-interop/container-interop": "^1.1"       Became PSR-11

        "crisu83/yiistrap": "dev-bs3"

        "doctrine/annotations": "1.*"                       Doctrine ORM
        "doctrine/cache": "1.*",
        "doctrine/collections": "1.*",
        "doctrine/common": ">=2.5-dev,<2.8-dev",
        "doctrine/data-fixtures": "~1.0"
        "doctrine/dbal": ">=2.5-dev,<2.6-dev",
        "doctrine/doctrine-bundle": "^1.6",
        "doctrine/doctrine-cache-bundle": "^1.2",
        "doctrine/doctrine-fixtures-bundle": "^2.2",
        "doctrine/inflector":"~1.0",
        "doctrine/instantiator": "^1.0.3"
        "doctrine/lexer": "1.*",
        "doctrine/orm": "^2.5",

        "dulyanov/log4php-graylog2": "~1.0"
        "dulyanov/log4php-graylog2": "~1.0",

        "eric-chau/bijective": "dev-master"                 Simple bijective function (base(n) encode/decode) for PHP.

        "evenement/evenement": "~2.0",                      Événement is a very simple event dispatching library for PHP 7

        "ext-bcmath": "*",                                  PHP extensions
        "ext-curl": "*",
        "ext-dom": "*",
        "ext-hash": "*",
        "ext-json": "*",
        "ext-ldap": "*"
        "ext-libxml": "*",
        "ext-mbstring": "*"
        "ext-openssl": "*",
        "ext-pcre": "*",
        "ext-pdo": "*",
        "ext-pdo_sqlite": "*",
        "ext-reflection": "*",
        "ext-simplexml": "*"
        "ext-soap": "*",
        "ext-sockets": "*"
        "ext-spl": "*"
        "ext-tokenizer": "*",
        "ext-xmlwriter": "*",
        "ext-zmq": "*",

        "fabiang/xmpp": "*",                                    Library for XMPP protocol (Jabber) connections

        "friendsofphp/php-cs-fixer": "^1.11",
        "friendsofsymfony/rest-bundle": "^2.1",
        "fxp/composer-asset-plugin": "~1.0.0"

        "fzaninotto/faker": "*"

        "generate-structure": true,

        "Gidkom\\OpenFireRestApi": "src/"
        "gidkom/php-openfire-restapi": "dev-master"

        "giggsey/libphonenumber-for-php": "7.2.5",

        "goaop/framework": "~1.0|~2.0@dev",
        "goaop/parser-reflection": "^1.0"

        "guzzle/common": "self.version",
        "guzzlehttp/guzzle": "6.2.0",
        "guzzlehttp/promises": "~1.0"
        "guzzlehttp/psr7": "^1.4",
        "guzzlehttp/ringphp": "^1.1"
        "guzzlehttp/streams": "~3.0",
        "guzzle/parser": "self.version",
        "guzzle/stream": "self.version"

        "herrera-io/json": "1.*",
        "herrera-io/phar-update": "~1.0",
        "herrera-io/phar-update": "1.0.3",

        "incenteev/composer-parameter-handler": "^2.0"
        "ircmaxell/random-lib": "~1.1",
        "ircmaxell/security-lib": "^1.1",

        "j4mie/idiorm": "1.5.*"
        "j4mie/paris": "*",
        "jakubledl/dissect": "~1.0",
        "Jarvis\\Math\\": "src/"
        "jasny/twig-extensions": "^1.0",
        "jaxl/jaxl": "^3.1.0",
        "jdorn/sql-formatter": "~1.1",
        "jms/metadata": "~1.1",
        "jms/metadata": "1.5.1",
        "jms/parser-lib": "1.*",
        "jms/serializer": "~0.12",
        "jms/serializer": "0.16.0",
        "jms/serializer": "^1.5",
        "jms/serializer-bundle": "^1.2",
        "jquery"
        "jquery-ui.js"
        "jquery-ui.min.js"
        "justinrainbow/json-schema": ">=1.0,<2.0-dev",
        "kherge/version": "1.*"
        "kriswallsmith/assetic": "~1.3"
        "leafo/scssphp": "^0.5",
        "league/oauth2-client": "~1.0"
        "league/oauth2-google": "^1.0"
        "lib-libxml": "*"
        "lib-pcre": "*"
        "linkorb/jsmin-php": "1.0.0",
        "mailgun/mailgun-php": "v1.8",
        "matthiasmullie/minify": "^1.3",
        "matthiasmullie/path-converter": "~1.1"
        "meenie/javascript-packer": "1.1",
        "michelf/php-markdown" : "^1.5",
        "minimum-stability": "beta",
        "minimum-stability": "dev"
        "minimum-stability": "stable"
        "minishlink/web-push": "^1.4"
        "mnapoli/invoker": "0.2.* >=0.2.1"
        "mnapoli/phpdocreader": "~1.3",
        "mnapoli/silly": "^1.1"
        "moment/moment": "2.11.2",
        "monolog/monolog": ">=1.6.0",
        "mustache/mustache": "2.10.0",
        "myclabs/deep-copy": "~1.3",
        "myclabs/php-enum": "~1.1",
        "natxet/CssMin": "^3.0",
        "nelmio/api-doc-bundle": "^2.13"
        "nelmio/cors-bundle": "^1.5",
        "nikic/fast-route": "^1.0",
        "nikic/php-parser": "^1.2|^2.0"
        "nochso/html-compress-twig": "^1.0"
        "ocramius/proxy-manager": "~0.4|~1.0|~2.0"
        "pagerfanta/pagerfanta": "1.0.*"
        "paragonie/constant_time_encoding": "^1|^2",
        "paragonie/random_compat": "^2.0.2"
        "patchwork/jsqueeze": "^2.0",
        "pdepend/pdepend": "^2.0.4"
        "phing/phing": "^2.14",
        "php2wsdl/php2wsdl": "^0.5.0"

        "php-amqplib/php-amqplib": "2.5.*"
        "phpcollection/phpcollection": "~0.1",

        "php-di/invoker": "~1.2",
        "php-di/php-di": "^5.3"
        "php-di/phpdoc-reader": "^2.0.1"
        "phpdocumentor/fileset": "~1.0",
        "phpdocumentor/graphviz":"~1.0",
        "phpdocumentor/reflection":"~1.0",
        "phpdocumentor/reflection-common": "^1.0"
        "phpdocumentor/reflection-docblock": "^2.0|^3.0.2",
        "phpdocumentor/type-resolver": "^0.3.0",
        "phploc/phploc": "^3.0"
        "phpmailer/phpmailer": "^5.2",
        "phpmd/phpmd": "^2.4",
        "phpoption/phpoption": "^1.1.0",
        "phpseclib/phpseclib": "^2.0"
        "phpspec/php-diff": ">=1.0.2",
        "phpspec/prophecy": "^1.3.1",
        "phpunit/php-code-coverage": "^4.0",
        "phpunit/php-file-iterator": "~1.4",
        "phpunit/php-text-template": "^1.2",
        "phpunit/php-timer": ">=1.0.6",
        "phpunit/php-token-stream": "^1.4.2",
        "phpunit/phpunit": "^5.4",
        "phpunit/phpunit-mock-objects": "^3.2",
        "pimple/pimple": "^3.0",
        "piwik/ini": "^1.0",
        "propel/propel": "~2.0@dev"
        "psr/cache": "~1.0",
        "psr/http-message": "~1.0"
        "psr/log": "~1.0"
        "psr/log": "dev-master",
        "Psr\\Log\\": "Psr/Log/"
        "pusher/pusher-php-server": "^2.6",
        "react/cache": "~0.4.0|~0.3.0",
        "react/dns": "0.4.*",
        "react/event-loop": "0.4.2",
        "react/http": "0.2.*",
        "reactivex/rxphp": "1.2.*",
        "react/promise": "2.4.1"
        "react/socket": "~0.4.0",
        "react/socket": "~0.4.0|~0.3.0",
        "react/socket-client": "~0.4.0"
        "react/stream": "0.4.*",
        "react/zmq": "v0.3.0"
        "rmccue/requests": "1.6.1"
        "robloach/component-installer": "*",
        "sebastian/code-unit-reverse-lookup": "~1.0",
        "sebastian/comparator":"^1.1|^2.0",
        "sebastian/diff": "~1.2",
        "sebastian/environment": "^1.3 || ^2.0",
        "sebastian/exporter": "~1.2 || ~2.0"
        "sebastian/finder-facade": "~1.1",
        "sebastian/git": "~2.1",
        "sebastian/global-state": "~1.0",
        "sebastian/object-enumerator": "~1.0",
        "sebastian/phpcpd": "^2.0",
        "sebastian/recursion-context": "^1.0|^2.0|^3.0"
        "sebastian/resource-operations": "~1.0",
        "sebastian/version": "~1.0|~2.0",
        "seld/jsonlint": ">=1.0,<2.0-dev"
        "sensio/distribution-bundle": "^5.0",
        "sensio/framework-extra-bundle": "^3.0.2",
        "sensiolabs/security-checker": "~3.0"
        "sensiolabs/security-checker": "~3.0|~4.0"
        "silex/api": "~2.1"
        "silex/silex": "^2.0",
        "slim/extras": "*",
        "slim/middleware": "*",
        "slim/php-view": "2.*",
        "slim/slim": "*",
        "slim/twig-view": "2.*"
        "spomky-labs/otphp": "^8.2"
        "squizlabs/php_codesniffer": "2.*",
        "swiftmailer/swiftmailer": "*"
        "symfony/asset": "~2.8|~3.0",
        "symfony/assetic-bundle": "^2.8",
        "symfony/cache": "~3.2.2|~3.3",
        "symfony/class-loader": "~2.8|~3.0",
        "symfony/config": "~3.2",
        "symfony/console": "~2.7|~3.0",
        "symfony/debug": "~2.8|~3.0",
        "symfony/dependency-injection": "~3.2.1|~3.3",
        "symfony/doctrine-bridge": "~2.7|~3.0",
        "symfony/dom-crawler": "~2.8|~3.0"
        "symfony/event-dispatcher": "~2.8|~3.0",
        "symfony/expression-language": "~2.7.0",
        "symfony/filesystem": "~2.8|~3.0",
        "symfony/finder": "^3.2",
        "symfony/framework-bundle": "~2.7|~3.0",
        "symfony/http-foundation": "~3.3",
        "symfony/http-kernel": "^3.2.5",
        "symfony/inflector": "~3.1"
        "symfony/intl": "~2.8|~3.0",
        "symfony/monolog-bridge": "~2.7|~3.0",
        "symfony/monolog-bundle": "^3.0.2",
        "symfony/options-resolver": "~2.8|~3.0",
        "symfony/polyfill-apcu": "^1.0",
        "symfony/polyfill-iconv": "^1.2"
        "symfony/polyfill-intl-icu": "~1.0",
        "symfony/polyfill-mbstring": "~1.1"
        "symfony/polyfill-php56": "^1.1",
        "symfony/polyfill-php70": "~1.0",
        "symfony/polyfill-util": "~1.0",
        "symfony/process": "~2.7|~3.0",
        "symfony/property-access": "~2.8|~3.0"
        "symfony/routing": "~3.1.10|^3.2.3",
        "symfony/security": "~3.2",
        "symfony/security-acl": "~2.7.0",
        "symfony/security-core": "~3.2",
        "symfony/security-csrf": "~2.8|~3.0",
        "symfony/security-http": "~3.1"
        "symfony/serializer": "~2.7.0",
        "symfony/stopwatch": "~2.8|~3.0",
        "symfony/swiftmailer-bundle": "^2.3.10",
        "symfony/symfony": "3.2.*",
        "symfony/templating": "~2.8|~3.0",
        "symfony/translation": "~2.8|~3.0",
        "symfony/twig-bundle": "~2.3|~3.0",
        "symfony/validator": "~2.7.0",
        "symfony/var-dumper": "~3.2"
        "symfony/yaml": "~2.7|~3.0",
        "theseer/fdomdocument": "~1.4"
        "twbs/bootstrap": "v3.3.6",
        "twig/extensions": "^1.3",
        "twig/twig": "^1.28.2|^2.0"
        "twilio/sdk": "^5.4",
        "twitter/bootstrap": "v3.3.6",
        "tyrola/xmpphp": "2.0"
        "ui/**",
        "vlucas/valitron": "^1.4",
        "webmozart/assert": "~1.0"
        "websharks/css-minifier": "150820"
        "white-october/pagerfanta-bundle": "^1.0"
        "willdurand/jsonp-callback-validator": "1.1.0",
        "willdurand/negotiation": "^2.0",
        "wingu/reflection": "~1.0"
        "wsdl2phpgenerator/wsdl2phpgenerator": "^3.4",
        "wyrihaximus/html-compress": "^1.1",
        "zendframework/zend-authentication": "^2.5.3",
        "zendframework/zend-cache":"~2.1",
        "zendframework/zend-code": "^2.6.3 || ^3.0.4",
        "zendframework/zend-component-installer": "^1.0 || ^0.5 || ^1.0.0-dev@dev",
        "zendframework/zend-config": "~2.1",
        "zendframework/zend-config": "^2.6",
        "zendframework/zend-console": "^2.6"
        "zendframework/zend-crypt": "^2.6 || ^3.0",
        "zendframework/zend-db": "^2.8.1",
        "zendframework/zend-debug": "^2.5 || ^3.0",
        "zendframework/zend-escaper": "^2.5",
        "zendframework/zend-eventmanager": "^3.0",
        "zendframework/zend-filter": "^2.7.1",
        "zendframework/zend-http": "^2.5.4",
        "zendframework/zend-hydrator": "^1.1 || ^2.2.1",
        "zendframework/zend-i18n": "~2.1",
        "zendframework/zend-inputfilter": "^2.7.3",
        "zendframework/zend-json": "^2.6.1 || ^3.0",
        "zendframework/zend-loader": "^2.5.1",
        "zendframework/zend-math": "^3.0",
        "zendframework/zend-modulemanager": "^2.7.2",
        "zendframework/zend-mvc": "^2.7.10 || ^3.0.2",
        "zendframework/zend-paginator": "^2.7",
        "zendframework/zend-permissions-acl": "^2.6",
        "zendframework/zend-permissions-rbac": "^2.5.1",
        "zendframework/zend-router": "^3.0.1",
        "zendframework/zend-serializer": "~2.1",
        "zendframework/zend-servicemanager": "^2.7.6 || ^3.1.1",
        "zendframework/zend-stdlib": "^3.0",
        "zendframework/zend-uri": "^2.5.2",
        "zendframework/zend-validator": "^2.8.1",
        "zendframework/zend-view": "^2.8.1",
        "zetacomponents/base": "*"
        "zetacomponents/document": ">=1.3.1",
        "zfcampus/zf-apigility": "^1.3",
        "zfcampus/zf-apigility-admin-ui": "^1.3.7",
        "zfcampus/zf-apigility-documentation": "^1.2.3",
        "zfcampus/zf-apigility-provider": "^1.2",
        "zfcampus/zf-api-problem": "^1.2.2",
        "zfcampus/zf-configuration": "^1.2.1",
        "zfcampus/zf-console": "^1.3"
        "zfcampus/zf-content-negotiation": "^1.2.2",
        "zfcampus/zf-content-validation": "^1.3.4",
        "zfcampus/zf-development-mode": "^3.0"
        "zfcampus/zf-hal": "^1.4.2",
        "zfcampus/zf-mvc-auth": "^1.4.2",
        "zfcampus/zf-oauth2": "^1.4",
        "zfcampus/zf-rest": "^1.3.1",
        "zfcampus/zf-rpc": "^1.3",
        "zfcampus/zf-versioning": "^1.2"
