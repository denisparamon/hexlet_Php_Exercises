<?php

namespace App;

class WeatherService
{
    public function lookup($cityName)
    {
        $url = "http://localhost:8080/api/v2/cities/{$cityName}";
        $response = @file_get_contents($url);

        if ($response === false) {
            throw new \Exception("Unable to fetch weather data for {$cityName}");
        }

        $data = json_decode($response, true);

        if (!isset($data['name']) || !isset($data['temperature'])) {
            throw new \Exception("Invalid response format for {$cityName}");
        }

        return $data;
    }
}
