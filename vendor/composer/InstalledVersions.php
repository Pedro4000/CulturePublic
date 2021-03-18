<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'composer/package-versions-deprecated' => 
    array (
      'pretty_version' => '1.11.99.1',
      'version' => '1.11.99.1',
      'aliases' => 
      array (
      ),
      'reference' => '7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.12.1',
      'version' => '1.12.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b17c5014ef81d212ac539f07a1001832df1b6d3b',
    ),
    'doctrine/cache' => 
    array (
      'pretty_version' => '1.10.2',
      'version' => '1.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '13e3381b25847283a91948d04640543941309727',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => '1.6.7',
      'version' => '1.6.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '55f8b799269a1a472457bd1a41b4f379d4cfba4a',
    ),
    'doctrine/common' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2afde5a9844126bc311cd5f548b5475e75f800d3',
    ),
    'doctrine/dbal' => 
    array (
      'pretty_version' => '2.12.1',
      'version' => '2.12.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'adce7a954a1c2f14f85e94aed90c8489af204086',
    ),
    'doctrine/doctrine-bundle' => 
    array (
      'pretty_version' => '2.2.4',
      'version' => '2.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '708ed6f99c3d0142e15a8b05022946367cfcc075',
    ),
    'doctrine/doctrine-migrations-bundle' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
    ),
    'doctrine/event-manager' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41370af6a30faa9dc0368c4a6814d596e81aba7f',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
    ),
    'doctrine/migrations' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e543224170a61ffe49fcadb8e7339c345df1baa2',
    ),
    'doctrine/orm' => 
    array (
      'pretty_version' => '2.8.2',
      'version' => '2.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ebae57eb9637acd8252b398df3121b120688ed5c',
    ),
    'doctrine/persistence' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9899c16934053880876b920a3b8b02ed2337ac1d',
    ),
    'doctrine/sql-formatter' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '56070bebac6e77230ed7d306ad13528e60732871',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.25',
      'version' => '2.1.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dbf5d78455d4d6a41d186da50adc1122ec066f4',
    ),
    'firebase/php-jwt' => 
    array (
      'pretty_version' => 'v5.2.1',
      'version' => '5.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f42c9110abe98dd6cfe9053c49bc86acc70b2d23',
    ),
    'friendsofphp/proxy-manager-lts' => 
    array (
      'pretty_version' => 'v1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '121af47c9aee9c03031bdeca3fac0540f59aa5c3',
    ),
    'google/apiclient' => 
    array (
      'pretty_version' => 'v2.9.1',
      'version' => '2.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2fb6e702aca5d68203fa737f89f6f774022494c6',
    ),
    'google/apiclient-services' => 
    array (
      'pretty_version' => 'v0.164.0',
      'version' => '0.164.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '266557af3f595681eb9199853641f334a913d1bf',
    ),
    'google/auth' => 
    array (
      'pretty_version' => 'v1.15.0',
      'version' => '1.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b346c07de6613e26443d7b4830e5e1933b830dc4',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.2.0',
      'version' => '7.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0aa74dfb41ae110835923ef10a9d803a22d50e79',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e7d04f1f6450fef59366c399cfad4b9383aa30d',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '53330f47520498c0ae1f61f7e2c90f55690c06a3',
    ),
    'laminas/laminas-code' => 
    array (
      'pretty_version' => '4.0.0',
      'version' => '4.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '28a6d70ea8b8bca687d7163300e611ae33baf82a',
    ),
    'laminas/laminas-eventmanager' => 
    array (
      'pretty_version' => '3.3.1',
      'version' => '3.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '966c859b67867b179fde1eff0cd38df51472ce4a',
    ),
    'laminas/laminas-zendframework-bridge' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6cccbddfcfc742eb02158d6137ca5687d92cee32',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.10.4',
      'version' => '4.10.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6d052fc58cb876152f89f532b95a8d7907e7f0e',
    ),
    'ocramius/package-versions' => 
    array (
      'replaced' => 
      array (
        0 => '1.11.99',
      ),
    ),
    'ocramius/proxy-manager' => 
    array (
      'replaced' => 
      array (
        0 => '^2.1',
      ),
    ),
    'paragonie/constant_time_encoding' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f34c2b11eb9d2c9318e13540a1dbc2a3afbd939c',
    ),
    'paragonie/random_compat' => 
    array (
      'replaced' => 
      array (
        0 => '2.*',
      ),
    ),
    'php-http/async-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'php-http/client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '3.0.6',
      'version' => '3.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '906a5fafabe5e6ba51ef3dc65b2722a677908837',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
        1 => '1.0',
      ),
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'sensio/framework-extra-bundle' => 
    array (
      'pretty_version' => 'v5.6.1',
      'version' => '5.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '430d14c01836b77c28092883d195a43ce413ee32',
    ),
    'symfony/asset' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '54a42aa50f9359d1184bf7e954521b45ca3d5828',
    ),
    'symfony/cache' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '6def7595e74b4b0a6b515af964792e2d092f056d',
    ),
    'symfony/cache-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
    ),
    'symfony/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '96cc8f6e3b2dccf471b0816df8e421142dc74c18',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9a267b621c5082e0a6c659d73633b6fd28a8a08',
    ),
    'symfony/debug-bundle' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc01b42c54ca5a3eed3e48f0c2327e1b3d46c16b',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '176e622d476133152a9346b0fbd8fb9b60ff6fb3',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5fa56b4074d1ae755beb55617ddafe6f5d78f665',
    ),
    'symfony/doctrine-bridge' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '290deda49060e6694f151ac4aa889467935ee3ea',
    ),
    'symfony/dotenv' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '783f12027c6b40ab0e93d6136d9f642d1d67cd6b',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c2bdf8d374de3f33c525460929f82a9902f6e1c5',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c00f3aae24577a991ae97d34c7033b2e84f1cfa0',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ba7d54483095a198fa51781bc608d17e84dffa2',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '262d033b57c73e8b59cd6e68a45c528318b15038',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '196f45723b5e618bf0e23b97e96d11652696ea9e',
    ),
    'symfony/flex' => 
    array (
      'pretty_version' => 'v1.12.2',
      'version' => '1.12.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
    ),
    'symfony/form' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b794bed839f11bcee9a9f30daa5cb88d311dd409',
    ),
    'symfony/framework-bundle' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b40931adcd8386901a65b472d8ba9f34cac80070',
    ),
    'symfony/google-mailer' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e93f9d09b1cf02ce74d65c08c2ddda33a0b284ef',
    ),
    'symfony/http-client' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '82f87fa4b738977937803ab8d52948d490047564',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41db680a15018f9c1d4b23516059633ce280ca33',
    ),
    'symfony/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c1920364e205f9aab12457e52b884ebd198b885',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '1b57aaf3215c4313fec1409afdb5046dcb201d17',
    ),
    'symfony/intl' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '930f17689729cc47d2ce18be21ed403bcbeeb6a9',
    ),
    'symfony/mailer' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c7ab7a402acdb453dcdd6e0b2982caacfcc9b9f',
    ),
    'symfony/maker-bundle' => 
    array (
      'pretty_version' => 'v1.29.1',
      'version' => '1.29.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '313b5669a5370bf36cd34fa8f5b5bbbfa5fb8aa8',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd7d899822da1fa89bcf658e8e8d836f5578e6f7a',
    ),
    'symfony/options-resolver' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c67e38bab7b561a65e34162a48ae587750f7ae0e',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-iconv' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5601e09b69f26c1828b13b6bb87cb07cddba3170',
    ),
    'symfony/polyfill-intl-icu' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'af1842919c7e7364aaaa2798b29839e3ba168588',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2d63434d922daf7da8dd863e7907e67ee3031483',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '43a0283138253ed1d48d352ab6d0bdb3f809f248',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1',
    ),
    'symfony/polyfill-php56' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php70' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php71' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php72' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ),
    'symfony/property-access' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd99f6d52333d0798a3b5bb3a81bae789e96bae93',
    ),
    'symfony/property-info' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd4981d21891987fce806fc94e41312fe9c131747',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e7f71f5da6af8b238f2257670fd6aa4ae6263826',
    ),
    'symfony/security-bundle' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '911f6b515d515c12a4aea749b6ac688050b6a85c',
    ),
    'symfony/security-core' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '33a6d376ef0502f18bc498a076590372685f6e89',
    ),
    'symfony/security-csrf' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e22ef49d5d3773014942f3dfe301b168a4a833dc',
    ),
    'symfony/security-guard' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '23e2b838d255f2695a143cf4ad138c58c4dc2918',
    ),
    'symfony/security-http' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c3a869cc01640d14ebbbfd03046f494103ffb2fa',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd15da7ba4957ffb8f1747218be9e1a121fd298a1',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'symfony/stopwatch' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '40e7945f2d0f72427eb71b54c26d93d08ef88793',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '83bbb92d34881744b8021452a76532b28283dbfb',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e2eaa60b558f26a4b0354e1bbb25636efaaad105',
    ),
    'symfony/twig-bridge' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '4421afc6e1a0ef5e7cd9b32359617b98069d1666',
    ),
    'symfony/twig-bundle' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '88e5d5232f11f6db6610d5f4c2380f26e02ce92e',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cee600a1248b423330375c869812bdd61a085cd0',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '5aed4875ab514c8cb9b6ff4772baa25fa4c10307',
    ),
    'symfony/web-profiler-bundle' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a906203efff7df59d1e0185f7aa05e631eb4ef7',
    ),
    'symfony/webpack-encore-bundle' => 
    array (
      'pretty_version' => 'v1.11.1',
      'version' => '1.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '395b60a549ded8e7f77f0d551815d7555e2d9eb0',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v5.1.11',
      'version' => '5.1.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '6bb8b36c6dea8100268512bf46e858c8eb5c545e',
    ),
    'twig/extra-bundle' => 
    array (
      'pretty_version' => 'v3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e2d27a86c3f47859eb07808fa7c8679d30fcbdde',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1f3b7e2c06cc05d42936a8ad508ff1db7975cdc5',
    ),
    'zendframework/zend-code' => 
    array (
      'replaced' => 
      array (
        0 => '4.0.0',
      ),
    ),
    'zendframework/zend-eventmanager' => 
    array (
      'replaced' => 
      array (
        0 => '^3.2.1',
      ),
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
