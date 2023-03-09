<?php

namespace Backpack\CRUD\Tests\Unit\CrudPanel;

use Illuminate\Http\Request;

class HelpersTest extends BaseCrudPanelTest
{
    public function testBackpackFormInputParsesRepeatableFieldsFunction()
    {
        $input = [
            'form' => [
                [
                    'name' => 'repeatable[0][name]',
                    'value' => 'first row name',
                ],
                [
                    'name' => 'repeatable[0][age]',
                    'value' => '23',
                ],
                [
                    'name' => 'repeatable[1][name]',
                    'value' => 'second row name',
                ],
                [
                    'name' => 'repeatable[1][age]',
                    'value' => '24',
                ],
            ],
        ];

        $request = new Request($input);
        app()->handle($request);

        $expectedOutput = [
            'repeatable' => [
                [
                    'name' => 'first row name',
                    'age' => '23',
                ],
                [
                    'name' => 'second row name',
                    'age' => '24',
                ],
            ],
        ];

        $this->assertEquals($expectedOutput, backpack_form_input());
    }

    public function testBackpackFormInputParsesDotNotationFields()
    {
        $input = [
            'form' => [
                [
                    'name' => 'address[street]',
                    'value' => 'street name',
                ],
                [
                    'name' => 'address[postal_code]',
                    'value' => '234',
                ],
            ],
        ];

        $request = new Request($input);
        app()->handle($request);

        $expectedOutput = [
            'address' => [
                'street' => 'street name',
                'postal_code' => '234',
            ],
        ];

        $this->assertEquals($expectedOutput, backpack_form_input());
    }

    public function testBackpackFormInputHandleDifferentInputTypesAtSameTime()
    {
        $input = [
            'form' => [
                [
                    'name' => 'address[street]',
                    'value' => 'street name',
                ],
                [
                    'name' => 'address[postal_code]',
                    'value' => '234',
                ],
                [
                    'name' => 'repeatable[0][name]',
                    'value' => 'first row name',
                ],
                [
                    'name' => 'repeatable[0][age]',
                    'value' => '23',
                ],
                [
                    'name' => 'repeatable[1][name]',
                    'value' => 'second row name',
                ],
                [
                    'name' => 'repeatable[1][age]',
                    'value' => '24',
                ],
                [
                    'name' => 'simple_field',
                    'value' => 'simple value',
                ],
            ],
        ];

        $request = new Request($input);
        app()->handle($request);

        $expectedOutput = [
            'address' => [
                'street' => 'street name',
                'postal_code' => '234',
            ],
            'repeatable' => [
                [
                    'name' => 'first row name',
                    'age' => '23',
                ],
                [
                    'name' => 'second row name',
                    'age' => '24',
                ],
            ],
            'simple_field' => 'simple value',
        ];

        $this->assertEquals($expectedOutput, backpack_form_input());
    }
}
