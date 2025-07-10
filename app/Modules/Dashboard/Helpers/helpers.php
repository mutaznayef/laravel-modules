<?php

if (!function_exists('getCurrentUrlWithLocale')) {

    /**
     * Helper function to getCurrentUrlWithLocale
     */
    function getCurrentUrlWithLocale(string $locale)
    {
        $segments = request()->segments();
        $segments[0] = $locale;

        return implode('/', $segments);
    }
}

if (!function_exists('locale_route')) {

    /**
     * Helper function to user locale with normal route()
     */
    function locale_route($name, $params = [])
    {
        return route($name, array_merge(['locale' => app()->getLocale()], $params));
    }
}
