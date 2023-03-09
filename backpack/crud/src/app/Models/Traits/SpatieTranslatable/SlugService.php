<?php

namespace Backpack\CRUD\app\Models\Traits\SpatieTranslatable;

use Illuminate\Database\Eloquent\Model;

class SlugService extends \Cviebrock\EloquentSluggable\Services\SlugService
{
    /**
     * Slug the current model.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  bool  $force
     * @return bool
     */
    public function slug(Model $model, bool $force = false): bool
    {
        $this->setModel($model);

        $attributes = [];

        foreach ($this->model->sluggable() as $attribute => $config) {
            if (is_numeric($attribute)) {
                $attribute = $config;
                $config = $this->getConfiguration();
            } else {
                $config = $this->getConfiguration($config);
            }

            $slug = $this->buildSlug($attribute, $config, $force);

            // customized for Backpack using SpatieTranslatable
            // save the attribute as a JSON
            $this->model->setAttribute($attribute.'->'.$model->getLocale(), $slug);

            $attributes[] = $attribute;
        }

        return $this->model->isDirty($attributes);
    }
}
