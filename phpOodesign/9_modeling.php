<?php

namespace App;

class Url
{
    private $scheme;
    private $host;
    private $port;
    private $queryParams;

    public function __construct(string $url)
    {
        $parsedUrl = parse_url($url);
        $this->scheme = $parsedUrl['scheme'];
        $this->host = $parsedUrl['host'];
        $this->port = $parsedUrl['port'] ?? ($this->scheme === 'https' ? 443 : 80);
        parse_str($parsedUrl['query'] ?? '', $this->queryParams);
    }

    public function getScheme(): string
    {
        return $this->scheme;
    }

    public function getHostName(): string
    {
        return $this->host;
    }

    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    public function getQueryParam(string $key, $default = null)
    {
        return $this->queryParams[$key] ?? $default;
    }

    public function equals(Url $url): bool
    {
        return $this->scheme === $url->getScheme() &&
            $this->host === $url->getHostName() &&
            $this->port === $url->port &&
            $this->queryParams === $url->getQueryParams();
    }
}
