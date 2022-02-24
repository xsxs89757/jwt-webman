# webman jwt 认证插件
## 安装

```shell
composer require qifen/jwt-webman
```

##  基本用法

### 生成令牌

```php
use Qifen\Jwt\JwtToken;

$user = [
    'id'  => 2022,
    'name'  => 'lei.wang',
    'email' => '317448423@qq.com'
];
$accessToken = JwtToken::init()->generateToken($user);
```

##### 输出（json格式）
```json
{
    "token_type": "Bearer",
    "expires_in": 36000,
    "access_token": "eyJ0eXAiOiJAUR-Gqtnk9LUPO8IDrLK7tjCwQZ7CI...",
    "refresh_token": "eyJ0eXAiOiJIEGkKprvcccccQvsTJaOyNy8yweZc..."
}
```

##### 响应参数

| 参数|类型|描述|示例值|
|:---|:---|:---|:---|
|token_type| string |Token 类型 | Bearer |
|expires_in| int |凭证有效时间，单位：秒 | 36000 |
|access_token| string |访问凭证 | XXXXXXXXXXXXXXXXXXXX|
|refresh_token| string | 刷新凭证（访问凭证过期使用 ） | XXXXXXXXXXXXXXXXXXX|

### 获取当前uid

```php
$uid = JwtToken::init()->getCurrentId();
```

### 获取其他自定义字段

```php
$email = JwtToken::init()->getExtendVal('email');
```

### 刷新令牌

```php
$accessToken = JwtToken::init()->refreshToken();
```
