<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'beberlei/doctrineextensions' => 'v1.3.0@008f162f191584a6c37c03a803f718802ba9dd9a',
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '1.11.3@3bb5588cec00a0268829cc4a518490df6741af9d',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.13.2@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '1.11.2@28101e20776d8fa20a00b54947fbae2db0d09103',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-migrations-bundle' => '2.2.2@85f0b847174daf243362c7da80efe1539be64f47',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'felipedesq/shared-object' => 'dev-master@dc6ead226c205c275b612252a635bc9ee5fd1d94',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'jms/metadata' => '2.5.0@b5c52549807b2d855b3d7e36ec164c00eb547338',
  'jms/serializer' => '3.13.0@06909ae3766b0f0ff93f585c3fc407ab7c7942aa',
  'jms/serializer-bundle' => '3.9.1@2fbf2385668dd715d030567fd41e181bbf41fb42',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.3.0@13af2502d9bb6f7d33be2de4b51fb68c6cdb476e',
  'monolog/monolog' => '2.3.0@df991fd88693ab703aa403413d83e15f688dae33',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpstan/phpdoc-parser' => '0.5.5@ea0b17460ec38e20d7eb64e7ec49b5d44af5d28c',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.3@7e1633a6964b48589b142d60542f9ed31bd37a92',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony/asset' => 'v5.3.2@29a4d5e6e39ffe16cea394fd5041d7a638bd580d',
  'symfony/cache' => 'v5.3.3@82962a497f090e95e3b357c21bf6f54991c9b1a5',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v4.4.26@1cb26cdb8a9834d8494cadd284602fa0647b73e5',
  'symfony/console' => 'v4.4.26@9aa1eb46c1b12fada74dc0c529e93d1ccef22576',
  'symfony/debug' => 'v4.4.25@a8d2d5c94438548bff9f998ca874e202bb29d07f',
  'symfony/dependency-injection' => 'v4.4.26@a944d2f8e903dc99f5f1baf3eb74081352f0067f',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v4.4.25@6b88860981116fcddb2ff91043dfc8ad458e5e14',
  'symfony/error-handler' => 'v4.4.26@4001f01153d0eb5496fe11d8c76d1e56b47fdb88',
  'symfony/event-dispatcher' => 'v4.4.25@047773e7016e4fd45102cedf4bd2558ae0d0c32f',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v5.3.0@e3c136ac5333b0d2ca9de9e7e3efe419362aa046',
  'symfony/filesystem' => 'v5.3.3@19b71c8f313b411172dd5f470fd61f24466d79a9',
  'symfony/finder' => 'v4.4.25@ed33314396d968a8936c95f5bd1b88bd3b3e94a3',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => 'v5.3.3@bc075f4e2faa8c3f4d85c3ec6ef1e7d584a2e3cb',
  'symfony/framework-bundle' => 'v4.4.26@fb29db31d6a1bb69271009c47ce19d59c6fef25a',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.3@0e45ab1574caa0460d9190871a8ce47539e40ccf',
  'symfony/http-kernel' => 'v4.4.26@e08b2fb8a6eedd81c70522e514bad9b2c1fff881',
  'symfony/monolog-bridge' => 'v5.2.11@d3c2c26edf34dc9ec1fa082b115f744715a02f7f',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/options-resolver' => 'v5.3.0@162e886ca035869866d233a2bfef70cc28f9bbe5',
  'symfony/orm-pack' => 'v2.1.0@357f6362067b1ebb94af321b79f8939fc9118751',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v4.4.26@7e812c84c3f2dba173d311de6e510edf701685a8',
  'symfony/property-access' => 'v5.3.0@8988399a556cffb0fba9bb3603f8d1ba4543eceb',
  'symfony/property-info' => 'v5.3.1@6f8bff281f215dbf41929c7ec6f8309cdc0912cf',
  'symfony/proxy-manager-bridge' => 'v4.4.25@1b3ca99d59d210cf159d165b301a9a9492d93bd4',
  'symfony/routing' => 'v4.4.25@3a3c2f197ad0846ac6413225fc78868ba1c61434',
  'symfony/security-bundle' => 'v4.4.26@48329a558dcfdc9ccb27dc08fc53ac72c4bdfd35',
  'symfony/security-core' => 'v4.4.26@3d17ab62cf4a227afea09bac7cf5d359658c1908',
  'symfony/security-csrf' => 'v5.3.3@20259eb80a981e0db134e51c18f558a9510c1c84',
  'symfony/security-guard' => 'v4.4.26@a517da0efcfde6f89bae6e8b7a3cb88f488485c5',
  'symfony/security-http' => 'v4.4.26@07adcd5550ea79ee0baca406040eac272ac8e3fd',
  'symfony/serializer' => 'v5.3.2@96f6ff6582d1bf1bf08281b563a6c7c917efe6c1',
  'symfony/serializer-pack' => 'v1.0.4@61173947057d5e1bf1c79e2a6ab6a8430be0602e',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v5.3.0@313d02f59d6543311865007e5ff4ace05b35ee65',
  'symfony/string' => 'v5.3.3@bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
  'symfony/swiftmailer-bundle' => 'v3.5.2@6b72355549f02823a2209180f9c035e46ca3f178',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/validator' => 'v5.3.3@82d4a64927d6ec5d37277ae1d9f5d24b31dd390c',
  'symfony/var-dumper' => 'v5.3.3@46aa709affb9ad3355bd7a810f9662d71025c384',
  'symfony/var-exporter' => 'v5.3.3@903c2c0babd6267de5bcb2995e8fc1efb5f01f1f',
  'symfony/web-link' => 'v5.2.11@810a0a0542108a73d5f70558ec71d14146b40fab',
  'symfony/yaml' => 'v4.4.26@e096ef4b4c4c9a2f72c2ac660f54352cd31c60f8',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v2.14.6@27e5cf2b05e3744accf39d4c68a3235d9966d260',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'behat/behat' => 'dev-master@689f1e43efd6efa5f1dbde56a1cb967f1a512cad',
  'behat/gherkin' => 'v4.8.0@2391482cd003dfdc36b679b27e9f5326bd656acd',
  'behat/mink' => 'dev-master@bfc2816260e86e31f606fabe9b549366571e92d6',
  'behat/mink-browserkit-driver' => 'v1.3.4@e3b90840022ebcd544c7b394a3c9597ae242cbee',
  'behat/mink-extension' => '2.3.1@80f7849ba53867181b7e412df9210e12fba50177',
  'behat/mink-goutte-driver' => 'v1.2.1@8b9ad6d2d95bc70b840d15323365f52fcdaea6ca',
  'behat/symfony2-extension' => '2.1.5@d7c834487426a784665f9c1e61132274dbf2ea26',
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'behatch/contexts' => '3.3.0@e45284b1dddb9dce78e186a56683527802bccd47',
  'fabpot/goutte' => 'v3.3.1@80a23b64f44d54dd571d114c473d9d7e9ed84ca5',
  'friends-of-behat/mink-extension' => '2.3.1@80f7849ba53867181b7e412df9210e12fba50177',
  'friends-of-behat/symfony-extension' => 'v1.4.0@3ef0d0dcf32c48edc928e7a188a94c3afe1c1a31',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.11.0@fe14cf3672a149364fb66dfe11bf6549af899f94',
  'phpspec/php-diff' => 'v1.1.3@fc1156187f9f6c8395886fe85ed88a0a245d72e9',
  'phpspec/phpspec' => '4.3.3@9812b081a11c309128efa092ae5f128733170776',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpunit/php-code-coverage' => '4.0.8@ef7b2f56815df854e66ceaee8ebe9393ae36a40d',
  'phpunit/php-file-iterator' => '1.4.5@730b01bc3e867237eaac355e06a36b85dd93a8b4',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '1.0.9@3dcf38ca72b158baf0bc245e9184d3fdffa9c46f',
  'phpunit/php-token-stream' => '2.0.2@791198a2c6254db10131eecfe8c06670700904db',
  'phpunit/phpunit' => '5.7.27@b7803aeca3ccb99ad0a506fa80b64cd6a56bbc0c',
  'phpunit/phpunit-mock-objects' => '3.4.4@a23b761686d50a560cc56233b9ecf49597cc9118',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '1.2.4@2b7424b55f5047b47ac6e5ccb20b2aea4011d9be',
  'sebastian/diff' => '1.4.3@7f066a26a962dbe58ddea9f72a4e82874a3975a4',
  'sebastian/environment' => '2.0.0@5795ffe5dc5b02460c3e34222fee8cbe245d8fac',
  'sebastian/exporter' => '2.0.0@ce474bdd1a34744d7ac5d6aad3a46d48d9bac4c4',
  'sebastian/global-state' => '1.1.1@bc37d50fea7d017d3d340f230811c9f1d7280af4',
  'sebastian/object-enumerator' => '2.0.1@1311872ac850040a79c3c058bea3e22d0f09cbb7',
  'sebastian/recursion-context' => '2.0.0@2c3ba150cbec723aa057506e73a8d33bdb286c9a',
  'sebastian/resource-operations' => '1.0.0@ce990bb21759f94aeafd30209e8cfcdfa8bc3f52',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'symfony/browser-kit' => 'v4.4.25@729b1f0eca3ef18ea4e1a29b166145aff75d8fa1',
  'symfony/css-selector' => 'v5.3.0@fcd0b29a7a0b1bb5bfbedc6231583d77fea04814',
  'symfony/debug-bundle' => 'v5.1.11@cc01b42c54ca5a3eed3e48f0c2327e1b3d46c16b',
  'symfony/debug-pack' => 'v1.0.9@cfd5093378e9cafe500f05c777a22fe8a64a9342',
  'symfony/dom-crawler' => 'v4.4.25@41d15bb6d6b95d2be763c514bb2494215d9c5eef',
  'symfony/dotenv' => 'v4.4.25@744c09920fbf1850860f399112e82ced4d19aed0',
  'symfony/maker-bundle' => 'v1.33.0@f093d906c667cba7e3f74487d9e5e55aaf25a031',
  'symfony/phpunit-bridge' => 'v4.4.26@279ffbf294759a57839afc884ccabef9a1155b23',
  'symfony/profiler-pack' => 'v1.0.5@29ec66471082b4eb068db11eb4f0a48c277653f7',
  'symfony/test-pack' => 'v1.0.8@d6da9926f785b0c4ebf3b0c6965398aac80e95ce',
  'symfony/translation' => 'v4.4.26@2f7fa60b8d10ca71c30dc46b0870143183a8f131',
  'symfony/twig-bridge' => 'v4.4.26@9d02487374439164ef508824977ecdd146b9509f',
  'symfony/twig-bundle' => 'v4.4.26@1aab630e70f0ab1b77529e7f061c9e5f1f11dca7',
  'symfony/web-profiler-bundle' => 'v5.0.11@3b6dbd2cc76275e117d5c55923c7f511ead22bae',
  'symfony/web-server-bundle' => 'v4.1.12@95ca07ea9caed4e94f584cd2324599b922f648eb',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
