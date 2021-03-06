<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7b49d05da7f8a81d0ce7feecbd01f02
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Pagination\\' => 22,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Pagination\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/pagination',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $classMap = array (
        'AccesoModel' => __DIR__ . '/../..' . '/api/model/AccesoModel.php',
        'BodegaModel' => __DIR__ . '/../..' . '/api/model/BodegaModel.php',
        'CierreCajaModel' => __DIR__ . '/../..' . '/api/model/CierreCajaModel.php',
        'CreditoCajaModel' => __DIR__ . '/../..' . '/api/model/CreditoCajaModel.php',
        'DebitoCajaModel' => __DIR__ . '/../..' . '/api/model/DebitoCajaModel.php',
        'MarcaModel' => __DIR__ . '/../..' . '/api/model/MarcaModel.php',
        'OpcionModel' => __DIR__ . '/../..' . '/api/model/OpcionModel.php',
        'PerfilModel' => __DIR__ . '/../..' . '/api/model/PerfilModel.php',
        'ProductoModel' => __DIR__ . '/../..' . '/api/model/ProductoModel.php',
        'ProveedorModel' => __DIR__ . '/../..' . '/api/model/ProveedorModel.php',
        'TipoDocumentoModel' => __DIR__ . '/../..' . '/api/model/TipoDocumentoModel.php',
        'UsuarioModel' => __DIR__ . '/../..' . '/api/model/UsuarioModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7b49d05da7f8a81d0ce7feecbd01f02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7b49d05da7f8a81d0ce7feecbd01f02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb7b49d05da7f8a81d0ce7feecbd01f02::$classMap;

        }, null, ClassLoader::class);
    }
}
