<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOb1VGx1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOb1VGx1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOb1VGx1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOb1VGx1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOb1VGx1\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ob1VGx1',
    'container.build_id' => 'e9244656',
    'container.build_time' => 1680643037,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOb1VGx1');
