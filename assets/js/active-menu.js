let sections = document.querySelectorAll("section");
// let navLinks = document.querySelectorAll(".menu-link");
let navLinks = document.querySelectorAll(`[data-target]`);
console.log(navLinks);

window.onscroll = () => {
    let top = window.scrollY;

    sections.forEach(sec => {
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('data-section'); // or use data-section if preferred

        if (top >= offset && top < offset + height) {
            // Remove 'active' class from all links
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            // Add 'active' class to the link that matches the section's id
            navLinks.forEach(link => {
                if (link.getAttribute('data-target') === id) {
                    link.classList.add('active');
                }
            });
        }
    });
};


if (isFrontPage) {
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior

            // Get the target ID from the custom attribute
            let targetId = this.getAttribute('data-target');
          

            // Select the section based on data-section attribute
            let targetSection = document.querySelector(`[data-section="${targetId}"]`);
           
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}