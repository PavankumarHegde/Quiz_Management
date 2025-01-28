<?php

require '../vendor/autoload.php';
require '../database/db.php';
use Smarty\Smarty;

$smarty = new Smarty();
$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');

$stmt = $pdo->query("SELECT q.id, q.question, o.option_text, o.is_correct FROM questions q
                     JOIN options o ON q.id = o.question_id ORDER BY q.id");

$questions = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $questions[$row['id']]['question'] = $row['question'];
    $questions[$row['id']]['options'][] = [
        'text' => $row['option_text'],
        'is_correct' => $row['is_correct']
    ];
}

$smarty->assign('questions', $questions);
$smarty->display('view_questions.tpl');
