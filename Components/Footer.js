function generateFooter(){
    return `
    <footer class="footer-container">
        <div class="footer-Fsection">
            <a href="../index.html"><img src="./assets/logo_Olive.png" alt=""></a>
            <ul class="nav-itemsF">
                <li class="nav-itemF"><a href="../index.html"  >Home</a></li>
                <li class="nav-itemF"><a href="../olivier.html" >L'olivier</a></li>
                <li class="nav-itemF"><a href="../olive-maroc.html" >Olivier-maroc</a></li>
                <li class="nav-itemF"><a href="../livres.html" >Livres</a></li>
                
            </ul>
        </div>
        <div class="footer-Ssection">
            <div class="footer-abt">
                <h2>About Olivier de provence</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum aliquet accumsan porta lectus ridiculus in mattis. Netus sodales in volutpat ullamcorper amet adipiscing fermentum.</p>
            </div>
            <div class="footer-contact">
                <h2>CONTACT</h2>
                <div class="social-icons">
                    <img src="./assets/facebook-circle-logo-24.png" alt="">
                    <img src="./assets/twitter-logo-24.png" alt="">
                    <img src="./assets/instagram-logo-24.png" alt="">
                    <img src="./assets/discord-alt-logo-24.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    
    `
}

document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('footer');
    if (navbar) {
        navbar.innerHTML = generateFooter();
    }
});