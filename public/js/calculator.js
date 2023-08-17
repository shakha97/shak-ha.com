let currentInput = '';
let currentOperator = '';
let previousInput = '';

function appendNumber(number) {
    currentInput += number;
    updateDisplay();
}

function appendOperator(operator) {
    if (currentInput !== '') {
        currentOperator = operator;
        previousInput = currentInput;
        currentInput = '';
        updateDisplay();
    }
}

function calculate() {
    if (currentInput !== '' && currentOperator !== '' && previousInput !== '') {
        const num1 = parseFloat(previousInput);
        const num2 = parseFloat(currentInput);
        switch (currentOperator) {
            case '+':
                currentInput = (num1 + num2).toString();
                break;
            case '-':
                currentInput = (num1 - num2).toString();
                break;
            case '*':
                currentInput = (num1 * num2).toString();
                break;
            case '/':
                if (num2 !== 0) {
                    currentInput = (num1 / num2).toString();
                } else {
                    currentInput = 'Error';
                }
                break;
        }
        currentOperator = '';
        previousInput = '';
        updateDisplay();
    }
}

function clearDisplay() {
    currentInput = '';
    currentOperator = '';
    previousInput = '';
    updateDisplay();
}

function updateDisplay() {
    document.getElementById('display').value = currentInput;
}
