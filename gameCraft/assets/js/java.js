const rows = 6;
const columns = 7;
const board = Array.from({ length: rows }, () => Array(columns).fill(null));
let currentPlayer = 'red';
let winner = false;
let timer;
let gameInProgress = false;
let movesCount = 0;
let startTime = null;

document.addEventListener('DOMContentLoaded', () => {
    resetGame(); // Start the game with Red
    createBoard();
    displayScoreboard();
});

function createBoard() {
    const connectFour = document.getElementById('connect-four');
    for (let row = 0; row < rows; row++) {
        for (let col = 0; col < columns; col++) {
            const cell = document.createElement('div');
            cell.classList.add('cell');
            cell.dataset.column = col;
            cell.dataset.row = row;
            cell.addEventListener('click', () => handleMove(col)); // Add event listener
            connectFour.appendChild(cell);
        }
    }
}

let isAnimationInProgress = false;

function handleMove(column) {
    if (winner) {
        // Reset the game
        return;
    }

    movesCount++;

    if (!gameInProgress) {
        startTimer();
        gameInProgress = true;
    }

    // If an animation is in progress or the game has been won, do nothing
    if (isAnimationInProgress || winner) {
        return;
    }

    const row = findEmptyRow(column);
    if (row !== -1) {
        board[row][column] = currentPlayer;
        updateBoard();
        const cellIndex = row * columns + column;
        const cell = document.querySelectorAll('.cell')[cellIndex];

        // Set the variable to true before the animation starts
        isAnimationInProgress = true;

        // Play the 'falling' animation
        cell.classList.add('falling');

        cell.addEventListener('animationend', function transitionEndHandler() {
            cell.classList.remove('falling');

            // Remove the event listener once it's triggered
            cell.removeEventListener('animationend', transitionEndHandler);

            if (checkForWin(row, column)) {
                const elapsedTime = getElapsedTime(startTime);
                const playerName = prompt("Enter your name:");
                updateScoreboard(playerName, elapsedTime);
                alert(`${playerName} wins in ${elapsedTime} seconds!`);
                winner = true;
                stopTimer();
            } else {
                currentPlayer = currentPlayer === 'red' ? 'yellow' : 'red';
                updateBoard(); // Update the board immediately after changing player
            }
            isAnimationInProgress = false;
            displayScoreboard(); // Update the scoreboard immediately after the move
        });
    }
}

function startTimer() {
    if (!startTime) {
        startTime = Date.now();
        timer = setInterval(() => {
            const elapsedTime = getElapsedTime(startTime);
            updateScoreboard('', elapsedTime);
        }, 1000);
    }
}

function stopTimer() {
    clearInterval(timer);
}

function getElapsedTime(startTime) {
    return Math.floor((Date.now() - startTime) / 1000);
}

function findEmptyRow(column) {
    for (let row = rows - 1; row >= 0; row--) {
        if (!board[row][column]) {
            return row;
        }
    }
    return -1;
}

function updateBoard() {
    const cells = document.querySelectorAll('.cell');
    cells.forEach((cell, index) => {
        const { row, col } = getRowAndColumn(index);
        const player = board[row][col];
        cell.classList.add(player ? player : 'MarkZijnGame');
    });
}

function getRowAndColumn(index) {
    const row = Math.floor(index / columns);
    const col = index % columns;
    return { row, col };
}

function checkForWin(row, col) {
    return (
        checkDirection(row, col, 0, 1) ||
        checkDirection(row, col, 1, 0) ||
        checkDirection(row, col, 1, 1) ||
        checkDirection(row, col, 1, -1)
    );
}

function checkDirection(row, col, rowChange, colChange) {
    const player = board[row][col];
    let count = 1;

    for (let i = 1; i <= 3; i++) {
        const newRow = row + i * rowChange;
        const newCol = col + i * colChange;

        if (newRow < 0 || newRow >= rows || newCol < 0 || newCol >= columns) {
            break;
        }

        if (board[newRow][newCol] === player) {
            count++;
        } else {
            break;
        }
    }

    for (let i = 1; i <= 3; i++) {
        const newRow = row - i * rowChange;
        const newCol = col - i * colChange;

        if (newRow < 0 || newRow >= rows || newCol < 0 || newCol >= columns) {
            break;
        }

        if (board[newRow][newCol] === player) {
            count++;
        } else {
            break;
        }
    }

    return count >= 4;
}

function resetGame() {
    winner = false;
    gameInProgress = false;
    stopTimer();
    board.forEach(row => row.fill(null));
    currentPlayer = 'red';
    updateBoard();
    isAnimationInProgress = false; // Reset the animation flag
    movesCount = 0; // Reset het aantal zetten
    startTime = null; // Reset de startTime
    const cells = document.querySelectorAll('.cell');
    cells.forEach((cell, index) => {
        cell.className = "";
        cell.classList.add("cell")
    });
}

function updateScoreboard(playerName, elapsedTime) {
    const scores = getScoresFromCookie();
    
    if (playerName) {
        const playerScore = {
            name: playerName,
            moves: movesCount,
            time: elapsedTime
        };
        scores.push(playerScore);
        
        scores.sort((a, b) => a.moves - b.moves);
        setScoresToCookie(scores);
    }
    
}


function getScoresFromCookie() {
    const scoresString = getCookie('scores');
    return scoresString ? JSON.parse(scoresString) : [];
}

function setScoresToCookie(scores) {
    setCookie('scores', JSON.stringify(scores), 365);
}

function displayScoreboard() {
    const scores = getScoresFromCookie();
    const scoresList = document.getElementById('scores-list');

    scoresList.innerHTML = '';

    scores.forEach((score, index) => {
        const listItem = document.createElement('li');
        listItem.textContent = `${index + 1}. ${score.name} - Moves: ${score.moves}, Time: ${score.time} seconds`;
        scoresList.appendChild(listItem);
    });
}

function setCookie(name, value, days) {
    const expires = new Date();
    expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
    document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
}

function getCookie(name) {
    const cookieName = `${name}=`;
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i].trim();
        if (cookie.startsWith(cookieName)) {
            return cookie.substring(cookieName.length, cookie.length);
        }
    }
    return '';
}