<?php

class QuestionModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllQuestions() {
        $stmt = $this->pdo->query("
            SELECT q.id, q.question, 
                   GROUP_CONCAT(o.option_text SEPARATOR ', ') AS options,
                   (SELECT o.option_text FROM options o WHERE o.is_correct = 1 AND o.question_id = q.id) AS correct_option
            FROM questions q
            LEFT JOIN options o ON q.id = o.question_id
            GROUP BY q.id
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getQuestion($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM questions WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $question = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = $this->pdo->prepare("SELECT * FROM options WHERE question_id = :id");
        $stmt->execute(['id' => $id]);
        $question['options'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $question;
    }

    public function addQuestion($data) {
        $stmt = $this->pdo->prepare("INSERT INTO questions (question) VALUES (:question)");
        $stmt->execute(['question' => $data['question']]);
        $questionId = $this->pdo->lastInsertId();

        foreach ($data['options'] as $index => $optionText) {
            $isCorrect = ($index == $data['correct_option']) ? 1 : 0;
            $stmt = $this->pdo->prepare("INSERT INTO options (question_id, option_text, is_correct) VALUES (:question_id, :option_text, :is_correct)");
            $stmt->execute([
                'question_id' => $questionId,
                'option_text' => $optionText,
                'is_correct' => $isCorrect,
            ]);
        }
    }

    public function updateQuestion($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE questions SET question = :question WHERE id = :id");
        $stmt->execute(['question' => $data['question'], 'id' => $id]);

        $stmt = $this->pdo->prepare("DELETE FROM options WHERE question_id = :id");
        $stmt->execute(['id' => $id]);

        foreach ($data['options'] as $index => $optionText) {
            $isCorrect = ($index == $data['correct_option']) ? 1 : 0;
            $stmt = $this->pdo->prepare("INSERT INTO options (question_id, option_text, is_correct) VALUES (:question_id, :option_text, :is_correct)");
            $stmt->execute([
                'question_id' => $id,
                'option_text' => $optionText,
                'is_correct' => $isCorrect,
            ]);
        }
    }

    public function deleteQuestion($id) {
        $stmt = $this->pdo->prepare("DELETE FROM questions WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
