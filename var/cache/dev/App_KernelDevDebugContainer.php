<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0cMU8r9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0cMU8r9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0cMU8r9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0cMU8r9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0cMU8r9\App_KernelDevDebugContainer([
    'container.build_hash' => '0cMU8r9',
    'container.build_id' => 'f6c7c40b',
    'container.build_time' => 1680642326,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0cMU8r9');