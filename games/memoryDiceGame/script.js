function getRandom(array) {
    return Math.floor(Math.random() * array.length);
};

let data = document.getElementsByClassName("item");
let isPlayState = false;
let userPrevIndex = 999;
let userCurrentIndex = 999;
let userHistoryIndex = [];
let timer = document.querySelector(".timer");
let timerSec = 120;

document.querySelector(".button-wrapper .reset-button").addEventListener("click", event => {
    window.location.href = "../gameList.php";
});
document.querySelector(".start-button").addEventListener("click", event => {
    document.querySelector(".start-button").style.display = "none";
    for (let i = 0; i < data.length; i++) {
        data[i].querySelector("img").style.display = "block";
    }
    setTimeout(() => {
        // data.forEach(element => {
        //     data[element].querySelector("img").style.display = "block";
        // });
        // for (let item in data) {
        //     item.querySelector("img").style.display = "block";
        // }
        for (let i = 0; i < data.length; i++) {
            data[i].querySelector("img").style.display = "none";
        }
        isPlayState = true;
        countdown();
    }, 5000);
});


let imgIndex = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
let storageArr = [`<img src="images/apple.png">`, `<img src="images/apple.png">`,
    `<img src="images/orange.png">`, `<img src="images/orange.png">`,
    `<img src="images/banana.png">`, `<img src="images/banana.png">`,
    `<img src="images/watermelon.png">`, `<img src="images/watermelon.png">`,
    `<img src="images/pineapple.png">`, `<img src="images/pineapple.png">`,
    `<img src="images/grapes.png">`, `<img src="images/grapes.png">`,
    `<img src="images/strawberry.png">`, `<img src="images/strawberry.png">`,
    `<img src="images/durian.png">`, `<img src="images/durian.png">`

];
let count = 0;

// imgIndex.splice(getRandom(imgIndex), 1);

for (let i = 0; i < data.length; i++) {
    data[i].innerHTML = storageArr[imgIndex.splice(getRandom(imgIndex), 1)];
    data[i].addEventListener("click", show => {
        if (!isPlayState) return;
        if (userHistoryIndex.includes(i)) return;
        data[i].querySelector("img").style.display = "block";
        data[i].style.backgroundColor = "white";
        if (userPrevIndex === 999) userPrevIndex = i;
        else if (userCurrentIndex === 999) userCurrentIndex = i;

        if (userPrevIndex !== 999 && userCurrentIndex !== 999) {
            if (userCurrentIndex !== userPrevIndex && data[userPrevIndex].innerHTML === data[userCurrentIndex].innerHTML) {
                userHistoryIndex.push(userPrevIndex);
                userHistoryIndex.push(userCurrentIndex);
                userPrevIndex = 999;
                userCurrentIndex = 999;
                count++;
                console.log(count);
                isPlayerWon();
            } else { clearUserClickedItems() };
        }
    });
};

function isPlayerWon() {
    if (count === 8) {
        document.getElementsByClassName("congrat-text-wrapper")[0].style.display = "block";
        updatePoint(20);
    }
}

function isPlayerLose() {
    let congratDiv = document.getElementsByClassName("congrat-text-wrapper")[0];
    congratDiv.textContent = "Failed";
    congratDiv.style.color = "red";
    congratDiv.style.display = "block";
}

function clearUserClickedItems() {
    if (userPrevIndex !== 999 && userCurrentIndex !== 999) {
        setTimeout(() => {
            hideItem(userPrevIndex);
            hideItem(userCurrentIndex);
            userPrevIndex = 999;
            userCurrentIndex = 999;
        }, 200);
    }
}

function isUserChoiceCorrect() {
    if (userPrevIndex === 999 && userCurrentIndex === 999) return;
    if (data[userPrevIndex].innerHTML === data[userCurrentIndex].innerHTML) {
        userPrevIndex === 999;
        userCurrentIndex === 999;
        console.log("user clicked matched...");
    }
}

function hideItem(index) {
    data[index].querySelector("img").style.display = "none";
    data[index].style.backgroundColor = "#1F1C39";
}


function countdown() {
    let countdownInterval = setInterval(() => {
        timerSec--;
        timer.textContent = timerSec + " Sec remaining";
        if (timerSec === 0) {
            isPlayState = false;
            timerSec = 120;
            document.querySelector(".start-button").style.display = "none";
            isPlayerLose();
            clearInterval(countdownInterval);
        }
    }, 1000);
}

function updatePoint(point) {
    let formData = new FormData();
    formData.append("point", point);
    formData.append("status", "add");
    fetch("../returnPoint.php", {
            method: "POST",
            body: formData
        }).then(response => response.json())
        .then(data => {
            console.log(data);
        });
}