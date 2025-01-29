<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    // 'config/mypackage.php' => 'config/:lc:package.php',
    'src/registration.php' => 'src/registration.php',
    'src/Facades/MyPackage.php' => 'src/Facades/:uc:package.php',
    'src/Providers/MyPackageServiceProvider.php' => 'src/Providers/:uc:packageServiceProvider.php',
    'src/Http/Controllers/Index/Index.example.php' => 'src/Http/Controllers/Index/Index.example.php',
];
