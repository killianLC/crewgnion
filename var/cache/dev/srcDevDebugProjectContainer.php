<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTh7PNlb\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTh7PNlb/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTh7PNlb.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTh7PNlb\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerTh7PNlb\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Th7PNlb',
    'container.build_id' => '0c0ca88a',
    'container.build_time' => 1538492945,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerTh7PNlb');
