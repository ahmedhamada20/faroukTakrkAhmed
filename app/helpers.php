<?php


if (!function_exists('getActiveRoutesHome')) {
    function getActiveRoutesHome($route)
    {
        $actives = request()->routeIs($route) ? ' active' : null;
        return $actives;
    }
}