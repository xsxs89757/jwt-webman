<?php
return [
    'enable' => true,
    'jwt' => [
        // 算法类型 ES256、HS256、HS384、HS512、RS256、RS384、RS512
        'algorithms' => 'HS256',
        // access令牌秘钥
        'access_secret_key' => 'xxxxxxxxxxxxxx',
        // access令牌过期时间，单位秒。默认 2 小时
        'access_exp' => 36000,
        // refresh令牌秘钥
        'refresh_secret_key' => 'xxxxx1111123123',
        // refresh令牌过期时间，单位秒。默认 7 天
        'refresh_exp' => 72000,
        // 令牌签发者
        'iss' => 'webman.qifen.com',
        // 令牌签发时间
        'iat' => time(),

        /**
         * access令牌 RS256 私钥
         * 生成RSA私钥(Linux系统)：openssl genrsa -out access_private_key.key 1024 (2048)
         */
        'access_private_key' => '',

        /**
         * access令牌 RS256 公钥
         * 生成RSA公钥(Linux系统)：openssl rsa -in access_private_key.key -pubout -out access_public_key.key
         */
        'access_public_key' => '',

        /**
         * refresh令牌 RS256 私钥
         * 生成RSA私钥(Linux系统)：openssl genrsa -out refresh_private_key.key 1024 (2048)
         */
        'refresh_private_key' => '',

        /**
         * refresh令牌 RS256 公钥
         * 生成RSA公钥(Linux系统)：openssl rsa -in refresh_private_key.key -pubout -out refresh_public_key.key
         */
        'refresh_public_key' => '',
    ],
];