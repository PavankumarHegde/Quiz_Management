<?php
/* Smarty version 5.4.3, created on 2025-01-28 10:08:16
  from 'file:admin/edit_question.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67989e80b46264_24095935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac8ea015643bf80ee13c6cf99893d419233888f' => 
    array (
      0 => 'admin/edit_question.tpl',
      1 => 1738055290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
))) {
function content_67989e80b46264_24095935 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xamp\\htdocs\\smarty\\templates\\admin';
$_smarty_tpl->renderSubTemplate("file:layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Question</h2>

    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Edit Question Details</h5>
        </div>
        <div class="card-body">
            <form id="edit-question-form" method="POST" action="index.php?controller=Admin&action=update&id=<?php echo $_smarty_tpl->getValue('question')['id'];?>
">
                <div class="mb-3">
                    <label for="question" class="form-label">Question</label>
                    <input type="text" id="question" name="question" class="form-control" value="<?php echo $_smarty_tpl->getValue('question')['question'];?>
" required>
                </div>

                <div id="options-container">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('question')['options'], 'option', false, 'index');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('index')->value => $_smarty_tpl->getVariable('option')->value) {
$foreach0DoElse = false;
?>
                    <div class="row mb-3 option-row">
                        <div class="col-md-8">
                            <input type="text" name="options[<?php echo $_smarty_tpl->getValue('index');?>
][text]" class="form-control" value="<?php echo $_smarty_tpl->getValue('option')['option_text'];?>
" required>
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <input type="radio" name="correct_option" value="<?php echo $_smarty_tpl->getValue('index');?>
" class="form-check-input me-2" <?php if ($_smarty_tpl->getValue('option')['is_correct']) {?>checked<?php }?>>
                            <label class="form-check-label">Correct</label>
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <button type="button" class="btn btn-danger remove-option">Remove</button>
                        </div>
                    </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <button type="button" id="add-option-btn" class="btn btn-secondary">Add Another Option</button>
                    <button type="submit" class="btn btn-primary">Update Question</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    let optionIndex = <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('question')['options']);?>
;

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
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->renderSubTemplate("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
