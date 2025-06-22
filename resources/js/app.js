import './bootstrap';

window.onload = () => {
    const header = document.getElementById('header')

    function setHeaderBackground() {
        if (window.scrollY > 0) {
            header.classList.add('bg-secondary')
        } else {
            header.classList.remove('bg-secondary')
        }
    }

    setHeaderBackground()

    window.onscroll = () => {
        setHeaderBackground()
    }

    document.getElementById('bb-curtain').classList.remove('show')
};

window.onunload = () => document.getElementById('bb-curtain').classList.add('show');