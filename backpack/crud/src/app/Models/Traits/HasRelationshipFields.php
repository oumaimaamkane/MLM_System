<?php

namespace Backpack\CRUD\app\Models\Traits;

use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use DB;
use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| Methods for working with relationships inside select/relationship fields.
|--------------------------------------------------------------------------
*/
trait HasRelationshipFields
{
    /**
     * Register aditional types in doctrine schema manager for the current connection.
     *
     * @return DB
     */
    public function getConnectionWithExtraTypeMappings()
    {
        $conn = DB::connection($this->getConnectionName());

        // register the enum, and jsonb types
        $conn->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        $conn->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('jsonb', 'json');

        return $conn;
    }

    /**
     * Get the model's table name, with the prefix added from the configuration file.
     *
     * @return string Table name with prefix
     */
    public function getTableWithPrefix()
    {
        $prefix = $this->getConnection()->getTablePrefix();
        $tableName = $this->getTable();

        return $prefix.$tableName;
    }

    /**
     * Get the column type for a certain db column.
     *
     * @param  string  $columnName  Name of the column in the db table.
     * @return string Db column type.
     */
    public function getColumnType($columnName)
    {
        $conn = $this->getConnectionWithExtraTypeMappings();
        $table = $this->getTable();

        return $conn->getSchemaBuilder()->getColumnType($table, $columnName);
    }

    /**
     * Checks if the given column name is nullable.
     *
     * @param  string  $column_name  The name of the db column.
     * @return bool
     */
    public static function isColumnNullable($column_name)
    {
        [$conn, $table] = self::getConnectionAndTable();

        // MongoDB columns are alway nullable
        if (! in_array($conn->getConfig()['driver'], CRUD::getSqlDriverList())) {
            return true;
        }

        try {
            // check if the column exists in the database
            $column = $conn->getDoctrineColumn($table, $column_name);
            // check for NOT NULL
            $notNull = $column->getNotnull();
            // return the value of nullable (aka the inverse of NOT NULL)
            return ! $notNull;
        } catch (\Exception $e) {
            return true;
        }
    }

    /**
     * Checks if the given column name has default value set.
     *
     * @param  string  $column_name  The name of the db column.
     * @return bool
     */
    public static function dbColumnHasDefault($column_name)
    {
        [$conn, $table] = self::getConnectionAndTable();

        // MongoDB columns don't have default values
        if (! in_array($conn->getConfig()['driver'], CRUD::getSqlDriverList())) {
            return false;
        }

        try {
            // check if the column exists in the database
            $column = $conn->getDoctrineColumn($table, $column_name);
            // if the return value is a string there is some default set.
            return is_string($column->getDefault()) ? true : false;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Return the db column default value.
     *
     * @param  string  $column_name  The name of the db column.
     * @return bool
     */
    public static function getDbColumnDefault($column_name)
    {
        [$conn, $table] = self::getConnectionAndTable();

        return $conn->getDoctrineColumn($table, $column_name)->getDefault();
    }

    /**
     * Return the current model connection and table name.
     */
    private static function getConnectionAndTable()
    {
        $conn = $instance = new static();
        $conn = $instance->getConnectionWithExtraTypeMappings();
        $table = $instance->getTableWithPrefix();

        return [$conn, $table];
    }
}
