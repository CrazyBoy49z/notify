<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf140379aa215f253419363865d05ce90
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'ddc0a4d7e61c0286f0f8593b1903e894' => __DIR__ . '/..' . '/clue/stream-filter/src/functions.php',
        '8cff32064859f4559445b89279f3199c' => __DIR__ . '/..' . '/php-http/message/src/filters.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'H' => 
        array (
            'Http\\Promise\\' => 13,
            'Http\\Message\\MultipartStream\\' => 29,
            'Http\\Message\\' => 13,
            'Http\\Discovery\\' => 15,
            'Http\\Client\\Curl\\' => 17,
            'Http\\Client\\Common\\' => 19,
            'Http\\Client\\' => 12,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
        'C' => 
        array (
            'Clue\\StreamFilter\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Http\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/promise/src',
        ),
        'Http\\Message\\MultipartStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/multipart-stream-builder/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message/src',
            1 => __DIR__ . '/..' . '/php-http/message-factory/src',
        ),
        'Http\\Discovery\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/discovery/src',
        ),
        'Http\\Client\\Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/curl-client/src',
        ),
        'Http\\Client\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/client-common/src',
        ),
        'Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/httplug/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'Clue\\StreamFilter\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/stream-filter/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mandrill' => 
            array (
                0 => __DIR__ . '/..' . '/mandrill/mandrill/src',
            ),
            'Mailgun' => 
            array (
                0 => __DIR__ . '/..' . '/mailgun/mailgun-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Html2Text\\Html2Text' => __DIR__ . '/../..' . '/model/notify/html2text.php',
        'MailService' => __DIR__ . '/../..' . '/model/notify/mailservice.php',
        'MailgunX' => __DIR__ . '/../..' . '/model/notify/mailgunx.class.php',
        'MandrillX' => __DIR__ . '/../..' . '/model/notify/mandrillx.class.php',
        'NfSendEmailProcessor' => __DIR__ . '/../..' . '/processors/mgr/nfsendemail.class.php',
        'NfSendTweetProcessor' => __DIR__ . '/../..' . '/processors/mgr/nfsendtweet.class.php',
        'Notify' => __DIR__ . '/../..' . '/model/notify/notify.class.php',
        'OAuthConsumer' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthDataStore' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthException' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthRequest' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthServer' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthSignatureMethod' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthSignatureMethod_HMAC_SHA1' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthSignatureMethod_PLAINTEXT' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthSignatureMethod_RSA_SHA1' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthToken' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'OAuthUtil' => __DIR__ . '/../..' . '/model/notify/oauth.php',
        'TwitterOAuth' => __DIR__ . '/../..' . '/model/notify/twitteroauth.php',
        'UrlShortener' => __DIR__ . '/../..' . '/model/notify/urlshortener.class.php',
        'modMailX' => __DIR__ . '/../..' . '/model/notify/modmailx.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf140379aa215f253419363865d05ce90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf140379aa215f253419363865d05ce90::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf140379aa215f253419363865d05ce90::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf140379aa215f253419363865d05ce90::$classMap;

        }, null, ClassLoader::class);
    }
}