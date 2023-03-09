<?php

namespace Backpack\CRUD\app\Library\CrudPanel\Traits;

trait Query
{
    public $query;

    // ----------------
    // ADVANCED QUERIES
    // ----------------

    /**
     * Add another clause to the query (for ex, a WHERE clause).
     *
     * Examples:
     * $this->crud->addClause('active');
     * $this->crud->addClause('type', 'car');
     * $this->crud->addClause('where', 'name', '==', 'car');
     * $this->crud->addClause('whereName', 'car');
     * $this->crud->addClause('whereHas', 'posts', function($query) {
     *     $query->activePosts();
     * });
     *
     * @param  callable|string  $function
     * @return mixed
     */
    public function addClause($function)
    {
        return call_user_func_array([$this->query, $function], array_slice(func_get_args(), 1));
    }

    /**
     * Use eager loading to reduce the number of queries on the table view.
     *
     * @param  array|string  $entities
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function with($entities)
    {
        return $this->query->with($entities);
    }

    /**
     * Order the results of the query in a certain way.
     *
     * @param  string  $field
     * @param  string  $order
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function orderBy($field, $order = 'asc')
    {
        if ($this->getRequest()->has('order')) {
            return $this->query;
        }

        return $this->query->orderBy($field, $order);
    }

    /**
     * Order results of the query in a custom way.
     *
     * @param  array  $column  Column array with all attributes
     * @param  string  $column_direction  ASC or DESC
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function customOrderBy($column, $columnDirection = 'asc')
    {
        if (! isset($column['orderLogic'])) {
            return $this->query;
        }

        $orderLogic = $column['orderLogic'];

        if (is_callable($orderLogic)) {
            return $orderLogic($this->query, $column, $columnDirection);
        }

        return $this->query;
    }

    /**
     * Group the results of the query in a certain way.
     *
     * @param  string  $field
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function groupBy($field)
    {
        return $this->query->groupBy($field);
    }

    /**
     * Limit the number of results in the query.
     *
     * @param  int  $number
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function limit($number)
    {
        return $this->query->limit($number);
    }

    /**
     * Take a certain number of results from the query.
     *
     * @param  int  $number
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function take($number)
    {
        return $this->query->take($number);
    }

    /**
     * Start the result set from a certain number.
     *
     * @param  int  $number
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function skip($number)
    {
        return $this->query->skip($number);
    }

    /**
     * Count the number of results.
     *
     * @return int
     */
    public function count()
    {
        return $this->query->count();
    }

    /**
     * Apply table prefix in the order clause if the query contains JOINS clauses.
     *
     * @param  string  $column_name
     * @param  string  $column_direction
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function orderByWithPrefix($column_name, $column_direction = 'ASC')
    {
        if ($this->query->getQuery()->joins !== null) {
            return $this->query->orderByRaw($this->model->getTableWithPrefix().'.'.$column_name.' '.$column_direction);
        }

        return $this->query->orderBy($column_name, $column_direction);
    }
}
