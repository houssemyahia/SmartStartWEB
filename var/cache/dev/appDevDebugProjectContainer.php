<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTwgikcu\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTwgikcu/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTwgikcu.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTwgikcu\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerTwgikcu\appDevDebugProjectContainer([
    'container.build_hash' => 'Twgikcu',
    'container.build_id' => 'cdc85781',
    'container.build_time' => 1575519438,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTwgikcu');
