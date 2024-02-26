<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCLOBYBZgarAUZD'."\n".'hIt5iDkzNcT/zeN6NiGFrjh80FOX+xat/p/2zYsp5i0GrQ+4VcB5ujcuuhVdrqQX'."\n".'ewWFl8uOaOsgj/SpO0j6s5nkebUukHmlo2JD4qaQRk0jkZKZyf1iWFZcE8nqrzIg'."\n".'48UAaPtRXiUDfJhrQY1V8/LdduuLb+GuY+xNnzlCr94IMjqK0R3+EMEvdzbesY2i'."\n".'6ghafiR8SIEe3ENDjH7mQJhhcVBsQyV9TIbyWlSX//G1gzsRuslFNznLeIIOS8PX'."\n".'TEBTh32RgvzOCB/df26cgds76XjMjnO1552F2eP4OStdwcUIT1dM71ObGeV6h6/h'."\n".'21oe9d1VAgMBAAECggEALuxbdmM18iM+1HjzLaY9aUZBPNrfRgzCpbT/8wmgc0Q8'."\n".'864zqlLDCf87w9lGyCGW+zBJcyVjGC1Jv2RGiy2LfVddkJ8UnomN4nnwb7KZ37Tw'."\n".'W2TDNRBKhaw8SbXCDLWpAqG1kdlVoBUmtzEt8CJyOo2ZuiAfm17/zS2o+P4hC+DN'."\n".'g8GDWcTzW5LvQFkPo1LR3tz4r0h9YTIREhH8a5tsUzPRucK4XayRv/Go7RyvCl7j'."\n".'v1csIdGK3YY9Z+npYE3ycohM6MbInqkDXw2I4gCeu/6VztFuWxEFsducl3MEd9IT'."\n".'lWesw+DUrlYDMYu2xL8NWhLExkV+0lN465S2vHLfbQKBgQDC5n0U/WsUqUoxK+Un'."\n".'5JAPBByJ3AJJZDeAjGczyGCCJY8o1uwwSI4shNxFBKRh9zsOgRtMDNkKyB2xs8YS'."\n".'xUJVA7GmmZ3+5gH8mMmvbFF7gspmPclHwxwUh8OtxilKH96THBVLaCZJN8TgjLbO'."\n".'3NKxTt3yGEd1y0JXkJCw7i2l5wKBgQC23PWgxRpvn5gaY7KEBlxBuvqDsp2uH1T5'."\n".'Kf4ITKCGyIfwklZKuKT5PWPl+NiE6UBvvBSKZoLkLuGr3khysGchd3w9hkBv7N+J'."\n".'hJHLm/dbvcm7NGheA4SGE3ngJVX6MAwl6XYi1gxrdvsDiOk1mvfa4qhKDa8cRvlH'."\n".'x1ufzRsDYwKBgFZmkVrFwTumlMJZoDvgIlDV1MT0qHral5RAKdwV31qyxdUn+gqp'."\n".'j4WC3JcoKKtZS2/xoiVDqNATyL4nYQ6fLfm8Knwdq6H9WzIclYRT84dagtlyWJGc'."\n".'mA0t5nxZ1aILoML8dyA3qolY1Mlq9/uafzilKtURGFTK570j1FDrNYdPAoGAYDW3'."\n".'IkQx2YLdcxz7Qo1aItcukPX8Ei239nRKjLFMUD3XkBJeRmgJnHzZP5kCykMyvNb2'."\n".'865ltYqY/2UvNvBrAmesPW6SHpFBN0hBsR+5MFKVfeJf+v7czfIXUIA0UTLQYW4I'."\n".'0uFNnYj3Hm/9S0/ikg5ovrWeaUFKTKKuKVCvosMCgYBccX41GqC3Ndm6bL5b1Uyx'."\n".'HiAiFghEkvGQQ6eP0SXKijmgFguiz70uXlt6LrNWdetWzBKw4uLhDFXemCjKXUhs'."\n".'8+Ypbv0sDHRs0/YeGD06Yt+d993E8W6rThN4hdAS0XHOa5+si/RA/Q4GMjP/wbVL'."\n".'ZOsNzGQeSmrlHCySkYwyCQ=='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def000006b3ddf03a14c4a293ded31be96a5530a58cc76fe5a37003b794c5cbfd9ac629cfa433609a4d14323b9cf00019ed8699230c75b9e25170ace5801a0d259a26409');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] ?? ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] = new \Nyholm\Psr7\Factory\Psr17Factory())));
