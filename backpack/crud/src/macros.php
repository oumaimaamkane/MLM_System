<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/**
 * This macro adds the ability to convert a dot.notation string into a [braket][notation] with some special
 * options that helps us in our usecases.
 *
 * - $ignore: usefull when you want to convert a laravel validator rule for nested items and you
 *   would like to ignore the `*` element from the string.
 *
 * - $keyFirst: when true, we will use the first part of the string as key and only bracket the remaining elements.
 *   eg: `address.street`
 *      - when true: `address[street]`
 *      - when false: `[address][street]`
 */
if (! Str::hasMacro('dotsToSquareBrackets')) {
    Str::macro('dotsToSquareBrackets', function ($string, $ignore = [], $keyFirst = true) {
        $stringParts = explode('.', $string);
        $result = '';

        foreach ($stringParts as $key => $part) {
            if (in_array($part, $ignore)) {
                continue;
            }
            $result .= ($key === 0 && $keyFirst) ? $part : '['.$part.']';
        }

        return $result;
    });
}

/**
 * The route macro allows developers to generate the routes for a CrudController,
 * for all operations, using a simple syntax: Route::crud().
 *
 * It will go to the given CrudController and get the setupRoutes() method on it.
 */
if (! Route::hasMacro('crud')) {
    Route::macro('crud', function ($name, $controller) {
        // put together the route name prefix,
        // as passed to the Route::group() statements
        $routeName = '';
        if ($this->hasGroupStack()) {
            foreach ($this->getGroupStack() as $key => $groupStack) {
                if (isset($groupStack['name'])) {
                    if (is_array($groupStack['name'])) {
                        $routeName = implode('', $groupStack['name']);
                    } else {
                        $routeName = $groupStack['name'];
                    }
                }
            }
        }
        // add the name of the current entity to the route name prefix
        // the result will be the current route name (not ending in dot)
        $routeName .= $name;

        // get an instance of the controller
        if ($this->hasGroupStack()) {
            $groupStack = $this->getGroupStack();
            $groupNamespace = $groupStack && isset(end($groupStack)['namespace']) ? end($groupStack)['namespace'].'\\' : '';
        } else {
            $groupNamespace = '';
        }
        $namespacedController = $groupNamespace.$controller;
        $controllerInstance = App::make($namespacedController);

        return $controllerInstance->setupRoutes($name, $routeName, $controller);
    });
}
