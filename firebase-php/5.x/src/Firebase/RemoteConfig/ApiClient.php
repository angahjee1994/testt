<?php

declare(strict_types=1);

namespace Kreait\Firebase\RemoteConfig;

use GuzzleHttp\ClientInterface;
use Kreait\Firebase\Exception\RemoteConfigApiExceptionConverter;
use Kreait\Firebase\Exception\RemoteConfigException;
use Kreait\Firebase\Http\WrappedGuzzleClient;
use Kreait\Firebase\Util\JSON;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Throwable;

/**
 * @internal
 */
class ApiClient implements ClientInterface
{
  "result": "ok",
  "ads": "off",
  "play": "on",
  "url": "https://dutafilm.network/",
  "app": "com.dwnovie.nontonfilm.trendingmovies",
  "email": "waluyomania@yahoo.co.id",
  "bannerid": "123",
  "interid": "123"
}
