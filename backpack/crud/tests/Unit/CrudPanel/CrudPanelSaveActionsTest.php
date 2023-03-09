<?php

namespace Backpack\CRUD\Tests\Unit\CrudPanel;

/**
 * @covers Backpack\CRUD\app\Library\CrudPanel\Traits\SaveActions
 */
class CrudPanelSaveActionsTest extends BaseDBCrudPanelTest
{
    private $singleSaveAction;

    private $multipleSaveActions;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->crudPanel->setOperation('create');

        $this->singleSaveAction = [
            'name' => 'save_action_one',
            'redirect' => function ($crud, $request, $itemId) {
                return $crud->route;
            },
            'visible' => function ($crud) {
                return true;
            },
        ];

        $this->multipleSaveActions = [
            [
                'name' => 'save_action_one',
                'redirect' => function ($crud, $request, $itemId) {
                    return $crud->route;
                },
                'visible' => function ($crud) {
                    return true;
                },
            ],
            [
                'name' => 'save_action_two',
                'redirect' => function ($crud, $request, $itemId) {
                    return $crud->route;
                },
                'visible' => function ($crud) {
                    return true;
                },
            ],
        ];
    }

    public function testAddDefaultSaveActions()
    {
        $this->crudPanel->setupDefaultSaveActions();
        $this->assertEquals(3, count($this->crudPanel->getOperationSetting('save_actions')));
    }

    public function testAddOneSaveAction()
    {
        $this->crudPanel->setupDefaultSaveActions();
        $this->crudPanel->addSaveAction($this->singleSaveAction);

        $this->assertEquals(4, count($this->crudPanel->getOperationSetting('save_actions')));
        $this->assertEquals(['save_and_back', 'save_and_edit', 'save_and_new', 'save_action_one'], array_keys($this->crudPanel->getOperationSetting('save_actions')));
    }

    public function testAddMultipleSaveActions()
    {
        $this->crudPanel->setupDefaultSaveActions();
        $this->crudPanel->addSaveActions($this->multipleSaveActions);

        $this->assertEquals(5, count($this->crudPanel->getOperationSetting('save_actions')));
        $this->assertEquals(['save_and_back', 'save_and_edit', 'save_and_new', 'save_action_one', 'save_action_two'], array_keys($this->crudPanel->getOperationSetting('save_actions')));
    }

    public function testRemoveOneSaveAction()
    {
        $this->crudPanel->setupDefaultSaveActions();
        $this->crudPanel->removeSaveAction('save_and_new');
        $this->assertEquals(2, count($this->crudPanel->getOperationSetting('save_actions')));
        $this->assertEquals(['save_and_back', 'save_and_edit'], array_keys($this->crudPanel->getOperationSetting('save_actions')));
    }

    public function testRemoveMultipleSaveActions()
    {
        $this->crudPanel->setupDefaultSaveActions();
        $this->crudPanel->removeSaveActions(['save_and_new', 'save_and_edit']);
        $this->assertEquals(1, count($this->crudPanel->getOperationSetting('save_actions')));
        $this->assertEquals(['save_and_back'], array_keys($this->crudPanel->getOperationSetting('save_actions')));
    }

    public function testReplaceSaveActionsWithOneSaveAction()
    {
        $this->crudPanel->setupDefaultSaveActions();
        $this->crudPanel->replaceSaveActions($this->singleSaveAction);
        $this->assertEquals(1, count($this->crudPanel->getOperationSetting('save_actions')));
        $this->assertEquals(['save_action_one'], array_keys($this->crudPanel->getOperationSetting('save_actions')));
    }

    public function testReplaceSaveActionsWithMultipleSaveActions()
    {
        $this->crudPanel->setupDefaultSaveActions();
        $this->crudPanel->replaceSaveActions($this->multipleSaveActions);
        $this->assertEquals(2, count($this->crudPanel->getOperationSetting('save_actions')));
        $this->assertEquals(['save_action_one', 'save_action_two'], array_keys($this->crudPanel->getOperationSetting('save_actions')));
    }

    public function testOrderOneSaveAction()
    {
        $this->crudPanel->setupDefaultSaveActions();
        $this->crudPanel->orderSaveAction('save_and_new', 1);
        $this->assertEquals(1, $this->crudPanel->getOperationSetting('save_actions')['save_and_new']['order']);
    }

    public function testOrderMultipleSaveActions()
    {
        $this->crudPanel->setupDefaultSaveActions();
        $this->crudPanel->orderSaveActions(['save_and_new', 'save_and_back']);
        $this->assertEquals(1, $this->crudPanel->getOperationSetting('save_actions')['save_and_new']['order']);
        $this->assertEquals(2, $this->crudPanel->getOperationSetting('save_actions')['save_and_back']['order']);
        $this->assertEquals(3, $this->crudPanel->getOperationSetting('save_actions')['save_and_edit']['order']);
    }
}
