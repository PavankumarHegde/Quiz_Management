{include file="layouts/header.tpl"}

<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Question</h2>

    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Edit Question Details</h5>
        </div>
        <div class="card-body">
            <form id="edit-question-form" method="POST" action="index.php?controller=Admin&action=update&id={$question.id}">
                <div class="mb-3">
                    <label for="question" class="form-label">Question</label>
                    <input type="text" id="question" name="question" class="form-control" value="{$question.question}" required>
                </div>

                <div id="options-container">
                    {foreach $question.options as $index => $option}
                    <div class="row mb-3 option-row">
                        <div class="col-md-8">
                            <input type="text" name="options[{$index}][text]" class="form-control" value="{$option.option_text}" required>
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <input type="radio" name="correct_option" value="{$index}" class="form-check-input me-2" {if $option.is_correct}checked{/if}>
                            <label class="form-check-label">Correct</label>
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <button type="button" class="btn btn-danger remove-option">Remove</button>
                        </div>
                    </div>
                    {/foreach}
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <button type="button" id="add-option-btn" class="btn btn-secondary">Add Another Option</button>
                    <button type="submit" class="btn btn-primary">Update Question</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let optionIndex = {$question.options|@count};

    // Add a new option row dynamically
    document.getElementById('add-option-btn').addEventListener('click', function () {
        const container = document.getElementById('options-container');
        const div = document.createElement('div');
        div.className = 'row mb-3 option-row';

        div.innerHTML =
            '<div class="col-md-8">' +
                '<input type="text" name="options[' + optionIndex + '][text]" class="form-control" placeholder="Option ' + (optionIndex + 1) + '" required>' +
            '</div>' +
            '<div class="col-md-2 d-flex align-items-center">' +
                '<input type="radio" name="correct_option" value="' + optionIndex + '" class="form-check-input me-2">' +
                '<label class="form-check-label">Correct</label>' +
            '</div>' +
            '<div class="col-md-2 d-flex align-items-center">' +
                '<button type="button" class="btn btn-danger remove-option">Remove</button>' +
            '</div>';

        container.appendChild(div);
        optionIndex++;
    });

    // Remove an option row dynamically
    document.getElementById('options-container').addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-option')) {
            const row = e.target.closest('.option-row');
            row.remove();
            updateOptionNumbers();
        }
    });

    // Update option placeholders and radio button values dynamically
    function updateOptionNumbers() {
        const optionRows = document.querySelectorAll('#options-container .option-row');
        optionRows.forEach((row, index) => {
            const textInput = row.querySelector('input[type="text"]');
            const radioInput = row.querySelector('input[type="radio"]');

            textInput.setAttribute('name', 'options[' + index + '][text]');
            textInput.placeholder = 'Option ' + (index + 1);
            radioInput.value = index;
        });
        optionIndex = optionRows.length;
    }
</script>

{include file="layouts/footer.tpl"}
