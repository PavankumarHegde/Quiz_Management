<?php
/* Smarty version 5.4.3, created on 2025-01-28 10:19:14
  from 'file:admin/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6798a11257e453_25311835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e19bc9ea098e0a0786c4ddce7fa4ee071a5f3a3' => 
    array (
      0 => 'admin/index.tpl',
      1 => 1738055950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
))) {
function content_6798a11257e453_25311835 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xamp\\htdocs\\smarty\\templates\\admin';
$_smarty_tpl->renderSubTemplate("file:layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container mt-4">
    <h2 class="text-center mb-4">All Questions</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Question</th>
                        <th>Options</th>
                        <th>Correct Option</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('questions'), 'question', false, 'index');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('index')->value => $_smarty_tpl->getVariable('question')->value) {
$foreach0DoElse = false;
?>
                    <tr>
                        <td class="text-center"><?php echo $_smarty_tpl->getValue('index')+1;?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('question')['question'];?>
</td>
                        <td>
                            <select class="form-select">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('question')['options'], 'option');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach1DoElse = false;
?>
                                <option><?php echo $_smarty_tpl->getValue('option');?>
</option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-success"><?php echo $_smarty_tpl->getValue('question')['correct_option'];?>
</span>
                        </td>
                        <td class="text-center">
                            <a href="index.php?controller=Admin&action=edit&id=<?php echo $_smarty_tpl->getValue('question')['id'];?>
" class="btn btn-warning btn-sm me-1">Edit</a>
                            <a href="index.php?controller=Admin&action=delete&id=<?php echo $_smarty_tpl->getValue('question')['id'];?>
" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this question?')">Delete</a>
                        </td>
                    </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <div class="text-end mt-3">
                <a href="index.php?controller=Admin&action=add" class="btn btn-primary">Add New Question</a>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
