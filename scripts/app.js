const form = document.getElementById('form');
const tasks = document.getElementById('tasks');

form.addEventListener('submit', async (e) => {
  e.preventDefault();
  const addTaskInput = document.getElementById('addTaskInput');

  await fetch('api\\add.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(addTaskInput.value),
  });

  
  tasks.innerHTML += `
    <li class="task">
      ${addTaskInput.value}
    </li>
  `;
  
  addTaskInput.value = '';
});