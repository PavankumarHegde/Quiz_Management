{include file="layouts/header.tpl"}
<main>
    <h2>Add a New Question</h2>
    <form action="add_question.php" method="POST">
        <label for="question">Question:</label>
        <input type="text" name="question" id="question" required>

        <div id="options-container">
            <div class="option">
                <input type="text" name="options[]" placeholder="Option 1" required>
                <input type="radio" name="correct_option" value="0">
            </div>
        </div>
        <button type="button" onclick="addOption()">Add Option</button>
        <button type="submit">Submit</button>
    </form>
</main>
<script src="js/scripts.js"></script>
{include file="layouts/footer.tpl"}
