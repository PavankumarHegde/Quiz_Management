<?php

require_once __DIR__ . '/../models/QuestionModel.php';
use Smarty\Smarty;

class AdminController {
    private $pdo;
    private $smarty;

    public function __construct($pdo, Smarty $smarty) {
        $this->pdo = $pdo;
        $this->smarty = $smarty;
    }

    public function index() {
        $model = new QuestionModel($this->pdo);
        $questions = $model->getAllQuestions();
        $this->smarty->assign('questions', $questions);
        $this->smarty->display('admin/index.tpl');
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            $model = new QuestionModel($this->pdo);
            $model->addQuestion($data);
            header('Location: index.php?controller=Admin&action=index');
            exit;
        }
        $this->smarty->display('admin/add_question.tpl');
    }

    public function edit() {
        $id = $_GET['id'];
        $model = new QuestionModel($this->pdo);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model->updateQuestion($id, $_POST);
            header('Location: index.php?controller=Admin&action=index');
            exit;
        }

        $question = $model->getQuestion($id);
        $this->smarty->assign('question', $question);
        $this->smarty->display('admin/edit_question.tpl');
    }

    public function delete() {
        $id = $_GET['id'];
        $model = new QuestionModel($this->pdo);
        $model->deleteQuestion($id);
        header('Location: index.php?controller=Admin&action=index');
    }
}
