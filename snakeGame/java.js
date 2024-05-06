const playBoard = document.querySelector(".play-board");
const scoreElement = document.querySelector(".score");
const highScoreElement = document.querySelector(".high-score");
const controls = document.querySelectorAll(".controls i");

let gameOver = false;
let foodX, foodY;
let snakeX = 5,
  snakeY = 5;
let velocityX = 0,
  velocityY = 0;
let snakeBody = [];
let setIntervalId;
let score = 0;

// Cookie functions
const setCookie = (name, value, days) => {
  const date = new Date();
  date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
  const expires = "expires=" + date.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
};

const getCookie = (name) => {
  const cookieName = name + "=";
  const cookies = document.cookie.split(";");
  for (let i = 0; i < cookies.length; i++) {
    let cookie = cookies[i].trim();
    if (cookie.indexOf(cookieName) === 0) {
      return cookie.substring(cookieName.length, cookie.length);
    }
  }
  return "";
};
// highscore laten zien
let highScore = parseInt(getCookie("highScore")) || 0;
highScoreElement.innerText = `High Score: ${highScore}`;

const updateFoodPosition = () => {
  foodX = Math.floor(Math.random() * 30) + 1;
  foodY = Math.floor(Math.random() * 30) + 1;
};

const handleGameOver = () => {
  clearInterval(setIntervalId);
  alert("Game Over! Press OK to replay...");
  location.reload();
};
// deirection
const changeDirection = (e) => {
  if (e.key === "ArrowUp" && velocityY !== 1) {
    velocityX = 0;
    velocityY = -1;
  } else if (e.key === "ArrowDown" && velocityY !== -1) {
    velocityX = 0;
    velocityY = 1;
  } else if (e.key === "ArrowLeft" && velocityX !== 1) {
    velocityX = -1;
    velocityY = 0;
  } else if (e.key === "ArrowRight" && velocityX !== -1) {
    velocityX = 1;
    velocityY = 0;
  }
};

controls.forEach((button) =>
  button.addEventListener("click", () =>
    changeDirection({ key: button.dataset.key })
  )
);

const initGame = () => {
  if (gameOver) return handleGameOver();
  let html = "";

  snakeX = (snakeX + 30) % 30 || 30;
  snakeY = (snakeY + 30) % 30 || 30;

  if (snakeX === foodX && snakeY === foodY) {
    updateFoodPosition();
    snakeBody.push([foodY, foodX]);
    clearInterval(setIntervalId);
    setIntervalId = setInterval(initGame, 150 - (score * 3)); // de snake wordt sneller
    score++;
    highScore = score >= highScore ? score : highScore;
    setCookie("highScore", highScore, 365);
    scoreElement.innerText = `Score: ${score}`;
    highScoreElement.innerText = `High Score: ${highScore}`;
  }

  if (snakeBody.length >= 11) {
    let ele = document.querySelector(".play-board");
    ele.style.border = "4px solid red";
  }

  snakeX += velocityX;
  snakeY += velocityY;

  snakeBody.unshift([snakeY, snakeX]);
  if (snakeBody.length > score + 1) {
    snakeBody.pop();
  }

  for (let i = 1; i < snakeBody.length; i++) {
    if (snakeX === snakeBody[i][1] && snakeY === snakeBody[i][0]) {
      gameOver = true;
      break;
    }
  }
  for( let i = 11; i <= snakeBody.length; i++){

    if (snakeX === 0 || snakeX === 31 || snakeY === 0 || snakeY === 31) {
      gameOver = true;
      handleGameOver();
      return;
    }
  }
  html += `<div class="food" style="grid-column: ${foodX}; grid-row: ${foodY};"></div>`;

  for (let i = 0; i < snakeBody.length; i++) {
    html += `<div class="head" style="grid-column: ${snakeBody[i][1]}; grid-row: ${snakeBody[i][0]};"></div>`;
  }

  playBoard.innerHTML = html;
};

updateFoodPosition();
setIntervalId = setInterval(initGame, 150);
document.addEventListener("keyup", changeDirection);
