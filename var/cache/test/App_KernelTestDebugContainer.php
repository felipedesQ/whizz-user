<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGS7rTxx\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGS7rTxx/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerGS7rTxx.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerGS7rTxx\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerGS7rTxx\App_KernelTestDebugContainer([
    'container.build_hash' => 'GS7rTxx',
    'container.build_id' => '41a3ad8d',
    'container.build_time' => 1625555888,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGS7rTxx');
