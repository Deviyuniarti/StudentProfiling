const calendarBody = document.getElementById("calendarBody");
const monthYear = document.getElementById("monthYear");
const prevMonth = document.getElementById("prevMonth");
const nextMonth = document.getElementById("nextMonth");

let currentDate = new Date();

function renderCalendar(date) {
  const year = date.getFullYear();
  const month = date.getMonth();

  const firstDay = new Date(year, month, 1).getDay();
  const lastDate = new Date(year, month + 1, 0).getDate();

  const monthNames = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  // Get today's date
  const today = new Date();
  const todayDay = today.getDate();
  const todayMonth = today.getMonth();
  const todayYear = today.getFullYear();

  // Update header
  monthYear.textContent = `${monthNames[month]} ${year}`;

  // Clear previous calendar
  calendarBody.innerHTML = "";

  // Create empty cells before the first day of the month
  let row = document.createElement("tr");
  for (let i = 0; i < (firstDay === 0 ? 6 : firstDay - 1); i++) {
    const emptyCell = document.createElement("td");
    row.appendChild(emptyCell);
  }

  // Fill the days of the month
  for (let day = 1; day <= lastDate; day++) {
    if (row.children.length === 7) {
      calendarBody.appendChild(row);
      row = document.createElement("tr");
    }

    const dayCell = document.createElement("td");
    dayCell.textContent = day;

    // Check if the current day is today's date
    if (day === todayDay && month === todayMonth && year === todayYear) {
      dayCell.style.backgroundColor = "#FCB248"; // Highlight today's date
      dayCell.style.color = "white"; // Make the text color white for contrast
    }

    row.appendChild(dayCell);
  }

  // Append the last row
  if (row.children.length > 0) {
    calendarBody.appendChild(row);
  }

  // Check if it's November (Month index 10 corresponds to November)
  const eventTextBox = document.getElementById("eventTextBox");

  if (month === 10) {
    // November
    eventTextBox.style.display = "block"; // Show the event box
    eventTextBox.textContent = "Pelaksanaan UTS";
  } else {
    eventTextBox.style.display = "none"; // Hide the event box
  }
}

// Event listeners for buttons
prevMonth.addEventListener("click", () => {
  currentDate.setMonth(currentDate.getMonth() - 1);
  renderCalendar(currentDate);
});

nextMonth.addEventListener("click", () => {
  currentDate.setMonth(currentDate.getMonth() + 1);
  renderCalendar(currentDate);
});

// Initial render
renderCalendar(currentDate);
