let optionIndex = 2;

function addOption() {
    const container = document.getElementById('options-container');
    const div = document.createElement('div');
    div.innerHTML = `
        <input type="text" name="options[]" placeholder="Option ${optionIndex + 1}" required>
        <input type="radio" name="correct_option" value="${optionIndex}">
    `;
    container.appendChild(div);
    optionIndex++;
}
