const calendarBody = document.getElementById('calendar-body');
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

let year = null;
let month = null;
let day = null;

function initCalendar() {
    const today = new Date();
    year = today.getFullYear();
    month = today.getMonth();
    day = today.getDate();
    generateCalendar();
}

function generateCalendar() {
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const firstDay = new Date(year, month, 1).getDay();
    const monthYear = document.getElementById('month-year');
    monthYear.textContent = `${months[month]} ${year}`;
    calendarBody.innerHTML = '';

    let date = 1;
    for (let i = 0; i < 6; i++) {
        const row = document.createElement('tr');
        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < firstDay) {
                const cell = document.createElement('td');
                row.appendChild(cell);
            } else if (date > daysInMonth) {
                break;
            } else {
                const cell = document.createElement('td');
                cell.textContent = date;
                if (year === new Date().getFullYear() && month === new Date().getMonth() && date === day) {
                    cell.classList.add('active-day');
                }

                const dateString = `${year}-${month + 1}-${date}`;
                fetch(`https://api-harilibur.vercel.app/api?month=8&year=2023`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length > 0) {
                            cell.classList.add('event');
                            cell.dataset.events = JSON.stringify(data);
                        }
                    })
                    .catch(error => console.error(error));

                row.appendChild(cell);
                date++;
            }
        }
        calendarBody.appendChild(row);
    }
}

function prevMonth() {
    if (month === 0) {
        year--;
        month = 11;
    } else {
        month--;
    }
    generateCalendar();
}

function nextMonth() {
    if (month === 11) {
        year++;
        month = 0;
    } else {
        month++;
    }
    generateCalendar();
}

initCalendar();