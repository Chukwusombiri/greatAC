const mypage = document.querySelector('body');
const names = [
    'John', 'Emma', 'Michael', 'Sophia', 'Mohammed', 'Olivia', 'Ahmed', 'Isabella',
    'William', 'Ava', 'Muhammad', 'Mia', 'James', 'Liam', 'Maria', 'Sofia',
    'Alex', 'Ethan', 'Amelia', 'Lucas', 'Oliver', 'Noah', 'Emily', 'Chloe',
    'Aiden', 'Harper', 'Ella', 'Lily', 'Yusuf', 'Lina'
];
const cities = [
    'New York', 'Los Angeles', 'Chicago', 'Houston', 'Toronto', 'London', 'Paris', 'Tokyo', 'Sydney', 'Berlin',
    'Mumbai', 'Beijing', 'Rome', 'Istanbul', 'Cairo', 'São Paulo', 'Moscow', 'Bangkok', 'Dubai', 'Mexico City',
    'Miami', 'Vancouver', 'Barcelona', 'Amsterdam', 'Seoul', 'San Francisco', 'Rio de Janeiro', 'Singapore',
    'Cape Town', 'Stockholm',
    'Buenos Aires', 'Shanghai', 'Dublin', 'Vienna', 'Lisbon', 'Prague', 'Athens', 'Budapest', 'Zurich',
    'Hong Kong', 'Montreal',
    'Kuala Lumpur', 'Oslo', 'Warsaw', 'Copenhagen', 'Johannesburg', 'Helsinki', 'Auckland', 'Edinburgh',
    'Melbourne', 'Bangalore'
];
const actions = ['withdrew', 'invested'];
const amountSign = '$';
let counter = 0;

function getRandomElement(array) {
    const randomIndex = Math.floor(Math.random() * array.length);
    return array[randomIndex];
}

function generateRandomAmount() {
    const randomAmount = getRandomNumber(1000, 200000, 1000);
    return `${amountSign}${randomAmount.toLocaleString()}`;
}

function getRandomNumber(min, max, step) {
    const range = (max - min) / step;
    const randomStep = Math.floor(Math.random() * range);
    return min + randomStep * step;
}

function generateRandomTransaction() {
    const name = getRandomElement(names);
    const city = getRandomElement(cities);
    const action = getRandomElement(actions);
    const amount = generateRandomAmount();

    return {
        name: name,
        city: city,
        action: action,
        amount: amount
    };
}

window.addEventListener("load", async (event) => {
    const myIntervalId = setInterval(async () => {
        if (counter < names.length) {
            await insertDiv();
            counter++;
        } else {
            clearInterval(myIntervalId);
        }
    }, 12000)
});

const delay = async (ms, child) => {
    setTimeout(() => {
        mypage.removeChild(child);
    }, ms);
}

const insertDiv = async () => {
    const div = document.createElement('div');
    div.classList.add('show');
    div.id = "infoDiv";
    const para = document.createElement('p');
    const transaction = generateRandomTransaction();
    para.textContent =
        `${transaction.name} from ${transaction.city} just ${transaction.action} ${transaction.amount}`;
    div.append(para);
    mypage.append(div);
    await delay(3500, div);
}

/* initial state of scrollY */
let lastScrollY = 0;

/* window scroll event handler */
const onScroll = (menuNode) => {
    if (!menuNode) return;

    if (window.scrollY > 0 && lastScrollY == 0) {
        console.log('Adding fixed-menu class');
        menuNode.classList.add('fixed-menu');
    } else if (window.scrollY === 0 && lastScrollY > 0) {
        menuNode.classList.remove('fixed-menu');
    }

    lastScrollY = window.scrollY;
};

/* hamburger click event handler */
const hamburgerClickHandler = (menuNode) => {
    if (!menuNode) return;
    if (window.scrollY === 0) {
        menuNode.classList.toggle('fixed-menu');
    }
};

/* DOMContentLoaded event handler */
const domLoadedFunc = function (scrollFunc, hamburgerClickFunc) {
    const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('#menu');

    if (!hamburger || !menu) return;

    window.addEventListener('scroll', () => scrollFunc(menu));
    hamburger.addEventListener('click', () => hamburgerClickFunc(menu));
};

document.addEventListener("DOMContentLoaded", () => domLoadedFunc(onScroll, hamburgerClickHandler));

/* COUNTUP FEATURE IMPLEMENTATION STARTS */
const countUpList = document.querySelectorAll('.count-up');

const countUp = (element, start, end, duration) => {
    const frameRate = 60; // 60 frames per second
    const totalFrames = Math.round((duration / 1000) * frameRate);
    const increment = (end - start) / totalFrames;

    let current = start;
    let frame = 0;

    const myIntervalId = setInterval(() => {
        frame++;
        current += increment;

        if (frame >= totalFrames) {
            clearInterval(myIntervalId);
            element.textContent = end.toLocaleString(); // Format with commas
        } else {
            element.textContent = Math.floor(current).toLocaleString();
        }
    }, 1000 / frameRate);
};

const countUpElementInviewHandler = (element) => {
    const start = parseInt(element.getAttribute('data-start'), 10);
    const end = parseInt(element.getAttribute('data-end'), 10);
    const duration = parseInt(element.getAttribute('data-duration'), 10) || 1000;

    if (Number.isNaN(start) || Number.isNaN(end) || Number.isNaN(duration)) return;

    if (start < end) {
        countUp(element, start, end, duration);
    }
};

const countUpObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            countUpElementInviewHandler(entry.target);
            //countUpObserver.unobserve(entry.target); // Only trigger once
        }
    });
}, {
    threshold: 0.1
});

if (countUpList.length > 0) {
    countUpList.forEach((element) => {
        countUpObserver.observe(element);
    });
}
// COUNTUP FEATURE IMPLEMENTATION ENDS