<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYtAtg8R\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYtAtg8R/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYtAtg8R.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYtAtg8R\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYtAtg8R\App_KernelDevDebugContainer([
    'container.build_hash' => 'YtAtg8R',
    'container.build_id' => '65447f1a',
    'container.build_time' => 1633704444,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYtAtg8R');