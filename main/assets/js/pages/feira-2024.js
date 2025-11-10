// Per-page JS extracted from feira-2024.html

// Flag JS availability
document.documentElement.classList.add('js');

// Reveals sections immediately so content between hero and action buttons is visible
document.addEventListener('DOMContentLoaded', () => {
    const secoes = document.querySelectorAll('.secao');
    secoes.forEach(sec => sec.classList.add('is-visible'));
});
