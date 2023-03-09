<?php

namespace Backpack\CRUD\app\Library\CrudPanel\Traits;

trait FieldsPrivateMethods
{
    /**
     * Move the most recently added field before or after the given target field. Default is before.
     *
     * @param  array  $fields  The form fields.
     * @param  string  $targetFieldName  The target field name.
     * @param  bool  $before  If true, the field will be moved before the target field, otherwise it will be moved after it.
     * @return array
     */
    private function moveField($fields, $targetFieldName, $before = true)
    {
        if (array_key_exists($targetFieldName, $fields)) {
            $targetFieldPosition = $before ? array_search($targetFieldName, array_keys($fields))
                : array_search($targetFieldName, array_keys($fields)) + 1;

            if ($targetFieldPosition >= (count($fields) - 1)) {
                // target field name is same as element
                return $fields;
            }

            $element = array_pop($fields);
            $beginningArrayPart = array_slice($fields, 0, $targetFieldPosition, true);
            $endingArrayPart = array_slice($fields, $targetFieldPosition, null, true);

            $fields = array_merge($beginningArrayPart, [$element['name'] => $element], $endingArrayPart);
        }

        return $fields;
    }

    /**
     * Apply the given order to the fields and return the new array.
     *
     * @param  array  $fields  The fields array.
     * @param  array  $order  The desired field order array.
     * @return array The ordered fields array.
     */
    private function applyOrderToFields($fields, $order)
    {
        $orderedFields = [];
        foreach ($order as $fieldName) {
            if (array_key_exists($fieldName, $fields)) {
                $orderedFields[$fieldName] = $fields[$fieldName];
            }
        }

        if (empty($orderedFields)) {
            return $fields;
        }

        $remaining = array_diff_key($fields, $orderedFields);

        return array_merge($orderedFields, $remaining);
    }

    /**
     * Apply the given callback to the form fields.
     *
     * @param  callable  $callback  The callback function to run for the given form fields.
     */
    private function transformFields(callable $callback)
    {
        $this->setOperationSetting('fields', $callback($this->getCleanStateFields()));
    }
}
