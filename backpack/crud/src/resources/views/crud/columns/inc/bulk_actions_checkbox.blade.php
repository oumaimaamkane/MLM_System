@if (!isset($entry))
    <span class="crud_bulk_actions_checkbox">
        <input type="checkbox" class="crud_bulk_actions_general_checkbox">
    </span>
@else
    <span class="crud_bulk_actions_checkbox">
        <input type="checkbox" class="crud_bulk_actions_line_checkbox" data-primary-key-value="{{ $entry->getKey() }}">
    </span>

    @loadOnce('bpFieldInitCheckboxScript')
    <script>
    if (typeof addOrRemoveCrudCheckedItem !== 'function') {
        function addOrRemoveCrudCheckedItem(element) {
            crud.lastCheckedItem = false;

            document.querySelectorAll('input.crud_bulk_actions_line_checkbox').forEach(checkbox => checkbox.onclick = e => {
                e.stopPropagation();

                let checked = checkbox.checked;
                let primaryKeyValue = checkbox.dataset.primaryKeyValue;

                crud.checkedItems ??= [];

                if (checked) {
                    // add item to crud.checkedItems variable
                    crud.checkedItems.push(primaryKeyValue);

                    // if shift has been pressed, also select all elements
                    // between the last checked item and this one
                    if (crud.lastCheckedItem && e.shiftKey) {
                        let first = document.querySelector(`input.crud_bulk_actions_line_checkbox[data-primary-key-value="${crud.lastCheckedItem}"]`).closest('tr');
                        let end = document.querySelector(`input.crud_bulk_actions_line_checkbox[data-primary-key-value="${primaryKeyValue}"]`).closest('tr');

                        while(first !== end) {
                            first = first.nextElementSibling;
                            first.querySelector('input.crud_bulk_actions_line_checkbox:not(:checked)')?.click();
                        }
                    }

                    // remember that this one was the last checked item
                    crud.lastCheckedItem = primaryKeyValue;
                } else {
                    // remove item from crud.checkedItems variable
                    let index = crud.checkedItems.indexOf(primaryKeyValue);
                    if (index > -1) crud.checkedItems.splice(index, 1);
                }

                // if no items are selected, disable all bulk buttons
                enableOrDisableBulkButtons();
            });
        }
    }

    if (typeof markCheckboxAsCheckedIfPreviouslySelected !== 'function') {
        function markCheckboxAsCheckedIfPreviouslySelected() {
            document
                .querySelectorAll('input.crud_bulk_actions_line_checkbox[data-primary-key-value]')
                .forEach(elem => elem.checked = crud.checkedItems?.length && crud.checkedItems.indexOf(elem.dataset.primaryKeyValue) > -1);
        }
    }

    if (typeof addBulkActionMainCheckboxesFunctionality !== 'function') {
        function addBulkActionMainCheckboxesFunctionality() {
            let mainCheckboxes = Array.from(document.querySelectorAll('input.crud_bulk_actions_general_checkbox'));
            let rowCheckboxes = Array.from(document.querySelectorAll('input.crud_bulk_actions_line_checkbox'));

            mainCheckboxes.forEach(checkbox => {
                // set initial checked status
                checkbox.checked = document.querySelectorAll('input.crud_bulk_actions_line_checkbox:not(:checked)').length === 0;

                // when the crud_bulk_actions_general_checkbox is selected, toggle all visible checkboxes
                checkbox.onclick = event => {
                    rowCheckboxes.filter(elem => checkbox.checked !== elem.checked).forEach(elem => elem.click());
                    
                    // make sure the other checkbox has the same checked status
                    mainCheckboxes.forEach(elem => elem.checked = checkbox.checked);

                    event.stopPropagation();
                }
            });

            // Stop propagation of href on the first column
            document.querySelectorAll('table td.dtr-control a').forEach(link => link.onclick = e => e.stopPropagation());
        }
    }

    if (typeof enableOrDisableBulkButtons !== 'function') {
        function enableOrDisableBulkButtons() {
            document.querySelectorAll('.bulk-button').forEach(btn => btn.classList.toggle('disabled', !crud.checkedItems?.length));
        }
    }

    crud.addFunctionToDataTablesDrawEventQueue('addOrRemoveCrudCheckedItem');
    crud.addFunctionToDataTablesDrawEventQueue('markCheckboxAsCheckedIfPreviouslySelected');
    crud.addFunctionToDataTablesDrawEventQueue('addBulkActionMainCheckboxesFunctionality');
    crud.addFunctionToDataTablesDrawEventQueue('enableOrDisableBulkButtons');
    </script>
    @endLoadOnce
@endif
