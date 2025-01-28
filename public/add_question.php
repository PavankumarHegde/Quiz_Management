<?php

require '../vendor/autoload.php';
require '../database/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question = $_POST['question'];
    $options = $_POST['options'];
    $correctOption = $_POST['correct_option'];

    try {
        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO questions (question) VALUES (:question)");
        $stmt->execute(['question' => $question]);
        $questionId = $pdo->lastInsertId();

        foreach ($options as $index => $optionText) {
            $isCorrect = ($index == $correctOption) ? 1 : 0;
            $stmt = $pdo->prepare("INSERT INTO options (question_id, option_text, is_correct) VALUES (:question_id, :option_text, :is_correct)");
            $stmt->execute([
                'question_id' => $questionId,
                'option_text' => $optionText,
                'is_correct' => $isCorrect,
            ]);
        }

        $pdo->commit();
        header('Location: view_questions.php');
        exit;
    } catch (Exception $e) {
        $pdo->rollBack();
        die("Error: " . $e->getMessage());
    }
}
