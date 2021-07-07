<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerGS7rTxx/App_KernelTestDebugContainer.php';
require __DIR__.'/ContainerGS7rTxx/getTest_ServiceContainerService.php';
require __DIR__.'/ContainerGS7rTxx/getTest_PrivateServicesLocatorService.php';
require __DIR__.'/ContainerGS7rTxx/getSession_Storage_Factory_MockFileService.php';
require __DIR__.'/ContainerGS7rTxx/getSession_FactoryService.php';
require __DIR__.'/ContainerGS7rTxx/getSessionService.php';
require __DIR__.'/ContainerGS7rTxx/getServicesResetterService.php';
require __DIR__.'/ContainerGS7rTxx/getSecrets_VaultService.php';
require __DIR__.'/ContainerGS7rTxx/getSecrets_DecryptionKeyService.php';
require __DIR__.'/ContainerGS7rTxx/getRouting_ResolverService.php';
require __DIR__.'/ContainerGS7rTxx/getRouting_Loader_YmlService.php';
require __DIR__.'/ContainerGS7rTxx/getRouting_Loader_XmlService.php';
require __DIR__.'/ContainerGS7rTxx/getRouting_Loader_PhpService.php';
require __DIR__.'/ContainerGS7rTxx/getRouting_Loader_GlobService.php';
require __DIR__.'/ContainerGS7rTxx/getRouting_Loader_DirectoryService.php';
require __DIR__.'/ContainerGS7rTxx/getRouting_Loader_ContainerService.php';
require __DIR__.'/ContainerGS7rTxx/getRouting_LoaderService.php';
require __DIR__.'/ContainerGS7rTxx/getFileLocatorService.php';
require __DIR__.'/ContainerGS7rTxx/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerGS7rTxx/getErrorControllerService.php';
require __DIR__.'/ContainerGS7rTxx/getDependencyInjection_Config_ContainerParametersResourceCheckerService.php';
require __DIR__.'/ContainerGS7rTxx/getContainer_GetenvService.php';
require __DIR__.'/ContainerGS7rTxx/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerGS7rTxx/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerGS7rTxx/getConfig_Resource_SelfCheckingResourceCheckerService.php';
require __DIR__.'/ContainerGS7rTxx/getCache_SystemClearerService.php';
require __DIR__.'/ContainerGS7rTxx/getCache_SystemService.php';
require __DIR__.'/ContainerGS7rTxx/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerGS7rTxx/getCache_DefaultMarshallerService.php';
require __DIR__.'/ContainerGS7rTxx/getCache_AppClearerService.php';
require __DIR__.'/ContainerGS7rTxx/getCache_AppService.php';
require __DIR__.'/ContainerGS7rTxx/getArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerGS7rTxx/getArgumentResolver_SessionService.php';
require __DIR__.'/ContainerGS7rTxx/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerGS7rTxx/getArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerGS7rTxx/getArgumentResolver_RequestService.php';
require __DIR__.'/ContainerGS7rTxx/getArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerGS7rTxx/getTemplateControllerService.php';
require __DIR__.'/ContainerGS7rTxx/getRedirectControllerService.php';
require __DIR__.'/ContainerGS7rTxx/get_ServiceLocator_YxNo8ZPService.php';
require __DIR__.'/ContainerGS7rTxx/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerGS7rTxx/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerGS7rTxx/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerGS7rTxx/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Test\TestContainer';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\TestSessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
Preloader::preload($classes);
