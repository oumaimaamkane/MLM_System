<?php

namespace Backpack\CRUD\app\Models\Traits\SpatieTranslatable;

use Cviebrock\EloquentSluggable\Sluggable as OriginalSluggable;
use Illuminate\Database\Eloquent\Builder;

trait Sluggable
{
    use OriginalSluggable;

    /**
     * Query scope for finding "similar" slugs, used to determine uniqueness.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $attribute
     * @param  array  $config
     * @param  string  $slug
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFindSimilarSlugs(Builder $query, string $attribute, array $config, string $slug): Builder
    {
        $separator = $config['separator'];
        $attribute = $attribute.'->'.$this->getLocale();

        return $query->where(function (Builder $q) use ($attribute, $slug, $separator) {
            $q->where($attribute, '=', $slug)
                ->orWhere($attribute, 'LIKE', $slug.$separator.'%')
                // Fixes issues with Json data types in MySQL where data is sourrounded by "
                ->orWhere($attribute, 'LIKE', '"'.$slug.$separator.'%');
        });
    }
}
