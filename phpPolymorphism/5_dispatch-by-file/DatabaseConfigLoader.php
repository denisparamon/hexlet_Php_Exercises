<?php

namespace App;

class DatabaseConfigLoader
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = rtrim($path, DIRECTORY_SEPARATOR);
    }

    public function load(string $env): array
    {
        $config = $this->loadConfig($env);

        // Если конфигурация расширяет другую
        while (isset($config['extend'])) {
            $baseEnv = $config['extend'];
            unset($config['extend']);

            $baseConfig = $this->loadConfig($baseEnv);

            // Слияние базовой конфигурации и текущей конфигурации
            $config = array_merge($baseConfig, $config);
        }

        return $config;
    }

    private function loadConfig(string $env): array
    {
        $filePath = $this->path . DIRECTORY_SEPARATOR . "database.{$env}.json";

        if (!file_exists($filePath)) {
            throw new \RuntimeException("Configuration file not found: {$filePath}");
        }

        $content = file_get_contents($filePath);
        $config = json_decode($content, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException("Error parsing JSON in file: {$filePath}");
        }

        return $config;
    }
}
