document.addEventListener('DOMContentLoaded', () => { 
  const dateInput = document.getElementById('date');
  const timeSelect = document.getElementById('time');
  const reservationForm = document.getElementById('reservation-form');
  const overlay = document.getElementById('overlay');
  const successMessage = document.getElementById('success-message');
  const successText = document.getElementById('success-text');

  const today = new Date();
  const formattedDate = today.toISOString().split('T')[0];
  dateInput.min = formattedDate; 

  let closeBtn = successMessage.querySelector('.close-btn');
  if (!closeBtn) {
      closeBtn = document.createElement('span');
      closeBtn.className = 'close-btn';
      closeBtn.innerHTML = '&times;';
      successMessage.querySelector('.message-content').appendChild(closeBtn);
  }

  closeBtn.addEventListener('click', () => {
      successMessage.style.display = 'none';
      overlay.style.display = 'none';
      resetForm(); 
  });

  function resetForm() {
      reservationForm.reset();
      clearTimeSelect();
  }

  function clearTimeSelect() {
      timeSelect.innerHTML = '<option value="" disabled selected>Select time</option>';
  }

  async function loadAvailableTimeSlots(selectedDate) {
      clearTimeSelect();

      if (!selectedDate) return;

      try {
          const response = await fetch(`http://127.0.0.1/wordpress/wordpress/wp-content/themes/old-town/get_time_slots.php?date=${selectedDate}`);
          const unavailableSlots = (await response.json()).map(slot => slot.slice(0, 5)); // Уніфікація формату часу

          const allTimeSlots = [];
          for (let hour = 10; hour <= 23; hour++) {
              for (let minute = 0; minute < 60; minute += 30) {
                  allTimeSlots.push(`${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}`);
              }
          }

          const availableSlots = allTimeSlots.filter(slot => !unavailableSlots.includes(slot));

          if (availableSlots.length === 0) {
              timeSelect.innerHTML = '<option value="" disabled>No available times</option>';
          } else {
              availableSlots.forEach(time => {
                  const option = document.createElement('option');
                  option.value = time;
                  option.textContent = time;
                  timeSelect.appendChild(option);
              });
          }
      } catch (error) {
          console.error('Error loading time slots:', error);
      }
  }

  dateInput.addEventListener('change', () => {
      const selectedDate = new Date(dateInput.value);
      if (selectedDate < today) {
          alert('You cannot select a past date.');
          dateInput.value = ''; 
          return;
      }
      loadAvailableTimeSlots(dateInput.value);
  });

  reservationForm.addEventListener('submit', async (event) => {
      event.preventDefault();

      const date = dateInput.value;
      const time = timeSelect.value;
      const people = document.getElementById('people').value;
      const name = document.getElementById('name_surname').value;
      const phone = document.getElementById('phone').value;

      if (!date || !time || !people || !name || !phone) {
          alert('Please fill in all fields.');
          return;
      }

      try {
          const response = await fetch('http://127.0.0.1/wordpress/wordpress/wp-content/themes/old-town/submit_reservation.php', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({ date, time, people, name, phone }),
          });
          const data = await response.json();

          if (data.status === 'success') {
              overlay.style.display = 'block'; 
              successMessage.style.display = 'flex'; 
              successText.textContent = `Reservation created successfully for ${date} at ${time}.`; // Додаємо текст успіху
          } else {
              alert(`Error: ${data.message}`);
          }
      } catch (error) {
          console.error('Error submitting reservation:', error);
      }
  });
});





