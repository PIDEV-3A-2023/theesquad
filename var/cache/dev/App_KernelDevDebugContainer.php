<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLsRmFBD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLsRmFBD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLsRmFBD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLsRmFBD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLsRmFBD\App_KernelDevDebugContainer([
    'container.build_hash' => 'LsRmFBD',
    'container.build_id' => 'ed77ff9c',
    'container.build_time' => 1677948059,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLsRmFBD');
