let operationHistory = [];
const form = document.getElementById('calculator-form');
const numberAInput = document.getElementById('numberA');
const numberBInput = document.getElementById('numberB');
const operationSelect = document.getElementById('operation');
const errorMessageDiv = document.getElementById('error-message');
const historyList = document.getElementById('history-list');


form.addEventListener('submit', function(event) {
    event.preventDefault(); 
    const a = parseFloat(numberAInput.value.trim());
    const b = parseFloat(numberBInput.value.trim());
    const operation = operationSelect.value;
    const error = validateInput(numberAInput.value.trim(), numberBInput.value.trim(), a, b, operation);

    if (error) {
        displayError(error);
        return;
    }
    displayError(''); 
    let result = 0;
    let operatorSymbol = '';

    switch (operation) {
        case 'plus':
            result = a + b;
            operatorSymbol = '+';
            break;
        case 'minus':
            result = a - b;
            operatorSymbol = '−';
            break;
        case 'times':
            result = a * b;
            operatorSymbol = '×';
            break;
        case 'divide':
            result = a / b;
            operatorSymbol = '÷';
            break;
        default:
            displayError("Opération invalide.");
            return;
    }
    const historyEntry = `${a} ${operatorSymbol} ${b} = ${result}`;
    operationHistory.push(historyEntry);
    updateHistoryDOM();
    numberAInput.value = '';
    numberBInput.value = '';
});
function validateInput(valA, valB, numA, numB, op) {
    if (valA === '' || valB === '') {
        return "Veuillez remplir les deux champs numériques.";
    }
    if (isNaN(numA) || isNaN(numB)) {
        return "Veuillez entrer des nombres valides.";
    }
    if (op === 'divide' && numB === 0) {
        return "Erreur : Division par zéro est interdite.";
    }

    return null; 
}
function displayError(message) {
    errorMessageDiv.textContent = message;
    if (message) {
        errorMessageDiv.style.display = 'block';
    } else {
        errorMessageDiv.style.display = 'none';
    }
}
function updateHistoryDOM() {
    historyList.innerHTML = ''; 
    operationHistory.forEach(entry => {
        const listItem = document.createElement('li');
        const parts = entry.split('=');
        if(parts.length === 2) {
             listItem.innerHTML = `${parts[0]} = <strong>${parts[1]}</strong>`;
        } else {
            listItem.textContent = entry;
        }

        historyList.prepend(listItem); 
    });
    if (operationHistory.length === 0) {
        historyList.innerHTML = '<li>Aucune opération dans l\'historique.</li>';
    }
}
updateHistoryDOM();