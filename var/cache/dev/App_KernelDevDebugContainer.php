<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMxg6Wrj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMxg6Wrj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMxg6Wrj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMxg6Wrj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMxg6Wrj\App_KernelDevDebugContainer([
    'container.build_hash' => 'Mxg6Wrj',
    'container.build_id' => 'a7adf30e',
    'container.build_time' => 1633554260,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMxg6Wrj');
