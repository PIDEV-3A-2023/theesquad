<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHexxosj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHexxosj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHexxosj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHexxosj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHexxosj\App_KernelDevDebugContainer([
    'container.build_hash' => 'Hexxosj',
    'container.build_id' => '67fa6378',
    'container.build_time' => 1678118992,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHexxosj');
