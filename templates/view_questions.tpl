{include file="layouts/header.tpl"}
<main>
    <h2>All Questions</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Question</th>
                <th>Options</th>
                <th>Correct Option</th>
            </tr>
        </thead>
        <tbody>
            {foreach $questions as $id => $question}
                <tr>
                    <td>{$id}</td>
                    <td>{$question.question}</td>
                    <td>
                        <ul>
                            {foreach $question.options as $option}
                                <li>{$option.text}</li>
                            {/foreach}
                        </ul>
                    </td>
                    <td>
                        {foreach $question.options as $option}
                            {if $option.is_correct}
                                {$option.text}
                            {/if}
                        {/foreach}
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</main>
{include file="layouts/footer.tpl"}
