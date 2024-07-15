// Get the calendar element
const calendar = document.getElementById('calendar');

// Initialize the current year and month
let currentYear = new Date().getFullYear();
let currentMonth = new Date().getMonth();

// Generate the calendar for the specified year and month
function generateCalendar(year, month) {
  // Clear the calendar
  calendar.innerHTML = '';

  const date = new Date(year, month);

  // Get the number of days in the month
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  // Create the calendar header
  const calendarHeader = document.createElement('div');
  calendarHeader.classList.add('calendar-header');

  // Create the previous month button
  const prevButton = document.createElement('button');
  prevButton.innerText = '<';
  prevButton.addEventListener('click', () => {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    generateCalendar(currentYear, currentMonth);
  });
  calendarHeader.appendChild(prevButton);

  // Display the current month and year
  calendarHeader.innerText += date.toLocaleString('default', { month: 'long', year: 'numeric' });

  // Create the next month button
  const nextButton = document.createElement('button');
  nextButton.innerText = '>';
  nextButton.addEventListener('click', () => {
    currentMonth++;
    if (currentMonth > 11) {
      currentMonth = 0;
      currentYear++;
    }
    generateCalendar(currentYear, currentMonth);
  });
  calendarHeader.appendChild(nextButton);
  

  // Append the calendar header
  calendar.appendChild(calendarHeader);

  // Create the calendar table
  const calendarTable = document.createElement('table');
  calendarTable.classList.add('calendar-table');
  calendar.appendChild(calendarTable);

  // Create the table header (days of the week)
  const tableHeader = document.createElement('tr');
  calendarTable.appendChild(tableHeader);

  const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
  for (let day of daysOfWeek) {
    const th = document.createElement('th');
    th.innerText = day;
    tableHeader.appendChild(th);
  }

  // Create the table rows and cells for each day
  let dayCounter = 1;
  for (let week = 0; week < 6; week++) {
    const tableRow = document.createElement('tr');
    calendarTable.appendChild(tableRow);

    for (let dayOfWeek = 0; dayOfWeek < 7; dayOfWeek++) {
      const tableCell = document.createElement('td');

      if (week === 0 && dayOfWeek < date.getDay()) {
        // Empty cell before the first day of the month
        tableCell.innerText = '';
      } else if (dayCounter > daysInMonth) {
        // Empty cell after the last day of the month
        tableCell.innerText = '';
      } else {
        // Cell with a day number
        tableCell.innerText = dayCounter;
        dayCounter++;
      }

      tableRow.appendChild(tableCell);
    }
  }
}

// Call the generateCalendar function with the current year and month
generateCalendar(currentYear, currentMonth);

