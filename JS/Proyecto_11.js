// Ejercicio 1
const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
document.getElementById('showMonthBtn').addEventListener('click', function () {
    document.getElementById('monthDisplay').innerText = `El mes en la posición seis es: ${meses[5]}`;
});

// Ejercicio 2
document.getElementById('welcomeBtn').addEventListener('click', function () {
    const name = document.getElementById('visitorName').value;
    document.getElementById('welcomeMessage').innerText = `Bienvenido ${name}, al sistema de consulta.`;
});

// Ejercicio 3
document.getElementById('checkAgeBtn').addEventListener('click', function () {
    const age = document.getElementById('visitorAge').value;
    const message = age >= 18 ? 'Usted tiene acceso a todos nuestros servicios.' : 'Usted tiene acceso a servicios limitados.';
    document.getElementById('ageMessage').innerText = message;
});

// Ejercicio 4
document.getElementById('generateBtn').addEventListener('click', function () {
    const multiplier = parseInt(document.getElementById('multiplier').value);
    const multiplicationTable = document.getElementById('multiplicationTable');
    multiplicationTable.innerHTML = '';

    for (let i = 1; i <= 12; i++) {
        const listItem = document.createElement('li');
        listItem.classList.add('list-group-item');
        listItem.innerText = `${i} x ${multiplier} = ${i * multiplier}`;
        multiplicationTable.appendChild(listItem);
    }

    $('#resultModal').modal('show');
});

// Ejercicio 5
document.getElementById('generateSelectBtn').addEventListener('click', function () {
    const multiplier = parseInt(document.getElementById('multiplierSelect').value);
    const multiplicationTableSelect = document.getElementById('multiplicationTableSelect');
    multiplicationTableSelect.innerHTML = '';

    for (let i = 1; i <= 12; i++) {
        const listItem = document.createElement('li');
        listItem.classList.add('list-group-item');
        listItem.innerText = `${i} x ${multiplier} = ${i * multiplier}`;
        multiplicationTableSelect.appendChild(listItem);
    }
});