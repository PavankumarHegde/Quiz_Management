{include file="layouts/header.tpl"}

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
                    {foreach $questions as $index => $question}
                    <tr>
                        <td class="text-center">{$index + 1}</td>
                        <td>{$question.question}</td>
                        <td>
                            <select class="form-select">
                                {foreach $question.options as $option}
                                <option>{$option}</option>
                                {/foreach}
                            </select>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-success">{$question.correct_option}</span>
                        </td>
                        <td class="text-center">
                            <a href="index.php?controller=Admin&action=edit&id={$question.id}" class="btn btn-warning btn-sm me-1">Edit</a>
                            <a href="index.php?controller=Admin&action=delete&id={$question.id}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this question?')">Delete</a>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
            <div class="text-end mt-3">
                <a href="index.php?controller=Admin&action=add" class="btn btn-primary">Add New Question</a>
            </div>
        </div>
    </div>
</div>

{include file="layouts/footer.tpl"}
