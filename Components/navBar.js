function generateNavbar() {
    return `
    <nav class="nav-container">
    <a href="./index.html"><img src="./assets/logo_Olive.png" alt="logo" srcset="" class="logo-img"></a>
    <ul class="nav-items">
        <li class="nav-item"><a href="./" class="nav-link home">Home</a></li>
        <li class="nav-item"><a href="./olivier.html" class="nav-link olivier">L'olivier</a></li>
        <li class="nav-item"><a href="./olive-maroc.html" class="nav-link">Olivier-maroc</a></li>
        <li class="nav-item"><a href="./livres.html" class="nav-link">Livres</a></li>
        <button class="join-btn"><a href="./contact.php">Contact Us</a></button>
    </ul>
    </nav>

    `;
}

document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        navbar.innerHTML = generateNavbar();
    }
});

