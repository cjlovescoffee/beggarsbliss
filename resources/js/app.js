import './bootstrap';

window.onload = () => document.getElementById('bb-curtain').classList.remove('show');
window.onunload = () => document.getElementById('bb-curtain').classList.add('show');