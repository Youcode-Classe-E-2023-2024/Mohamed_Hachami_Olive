function generateBlogSection(){
    return `
        
    
    <div class="blog-card">
        <img src="./assets/broyeur-vegetaux.jpg" alt="">
        <div class="card-description">
            <span class="blog-date">01 AUG 2023</span>
            <h2>Broyage des branches d’olivier</h2>
            <span class="blog-footer">TAILLE DE L'OLIVIER</span>
        </div>
    </div>
    <div class="blog-card">
        <img src="./assets/broyeur-vegetaux.jpg" alt="">
        <div class="card-description">
            <span class="blog-date">01 AUG 2023</span>
            <h2>Broyage des branches d’olivier</h2>
        <span class="blog-footer">TAILLE DE L'OLIVIER</span>
         </div>
    </div>
    <div class="blog-card">
        <img src="./assets/broyeur-vegetaux.jpg" alt="">
        <div class="card-description">
            <span class="blog-date">01 AUG 2023</span>
            <h2>Broyage des branches d’olivier</h2>
            <span class="blog-footer">TAILLE DE L'OLIVIER</span>
        </div>
    </div>
    `
}

document.addEventListener('DOMContentLoaded', function () {
    const blogSection = document.getElementById('blogCard-container');
    if (blogSection) {
        blogSection.innerHTML = generateBlogSection();
    }
});
