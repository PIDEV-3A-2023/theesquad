<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTTRhG3X\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTTRhG3X/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTTRhG3X.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTTRhG3X\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTTRhG3X\App_KernelDevDebugContainer([
    'container.build_hash' => 'TTRhG3X',
    'container.build_id' => '6ed0f12e',
    'container.build_time' => 1678218326,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTTRhG3X');