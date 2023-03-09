<?php

namespace Backpack\CRUD\app\Library\CrudPanel\Traits;

trait HasViewNamespaces
{
    private $viewNamespaces = [];

    /**
     * Return all the view namespaces including the ones stored in the laravel config files.
     *
     * @param  string  $domain  (eg. fields, filters, buttons)
     * @return array
     */
    public function getViewNamespacesFor(string $domain)
    {
        $viewNamespacesFromConfig = $this->getViewNamespacesFromConfigFor($domain);

        return array_unique(array_merge($viewNamespacesFromConfig, $this->viewNamespaces[$domain] ?? []));
    }

    /**
     * Adds multiple namespaces to a given domain.
     *
     * @param  string  $domain  (eg. fields, filters, buttons)
     * @param  array  $viewNamespaces
     * @return void
     */
    public function addViewNamespacesFor(string $domain, array $viewNamespaces)
    {
        foreach ((array) $viewNamespaces as $viewNamespace) {
            $this->addViewNamespaceFor($domain, $viewNamespace);
        }
    }

    /**
     * Add a new view namespace for a given domain.
     *
     * @param  string  $domain  (eg. fields, filters, buttons)
     * @param  string  $viewNamespace
     * @return void
     */
    public function addViewNamespaceFor(string $domain, string $viewNamespace)
    {
        $this->viewNamespaces[$domain][] = $viewNamespace;
    }

    /**
     * Return the array of view namespaces for backpack components from the Laravel config files.
     * It uses the default `backpack.crud.view_namespaces` key or a custom provided key.
     *
     * @param  string  $domain
     * @param  mixed  $customConfigKey
     * @return array
     */
    private function getViewNamespacesFromConfigFor(string $domain, $customConfigKey = null)
    {
        return config($customConfigKey ?? 'backpack.crud.view_namespaces.'.$domain) ?? [];
    }

    /**
     * Return all the view namespaces using a developer provided config key.
     * Allow developer to use view namespaces from other config keys.
     *
     * @param  string  $domain  (eg. fields, filters, buttons)
     * @param  string  $viewNamespacesFromConfigKey
     * @return array
     */
    public function getViewNamespacesWithFallbackFor(string $domain, string $viewNamespacesFromConfigKey)
    {
        $viewNamespacesFromConfig = $this->getViewNamespacesFromConfigFor($domain, $viewNamespacesFromConfigKey);

        return array_unique(array_merge($viewNamespacesFromConfig, $this->getViewNamespacesFor($domain)));
    }
}
