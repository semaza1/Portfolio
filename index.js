const toggleBtn = document.getElementById('theme-toggle');
  const body = document.body;

  // Load previously saved theme or default to light
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme) {
    body.classList.add(savedTheme);
  } else {
    body.classList.add('light');
  }

  toggleBtn.addEventListener('click', () => {
    body.classList.toggle('dark');
    body.classList.toggle('light');

    const currentTheme = body.classList.contains('dark') ? 'dark' : 'light';
    localStorage.setItem('theme', currentTheme);
  });