const allSections = document.querySelectorAll('.section');

const revealSection = function(entries,observer){
  entries.forEach(entry=>{
        if(!entry.isIntersecting) return;
            // sectionObserver.target.classList.remove('section--hidden');'
            // entry.target.classList.remove('section--hidden');
            
        entry.target.classList.remove('section--hidden');
        // unobserver
        observer.unobserve(entry.target);
        
  });
 
};


const sectionObserver = new IntersectionObserver(revealSection,{
  root: null,
  threshold: 0.10,
});


allSections.forEach(function(section){
  section.classList.add('section--hidden');
  sectionObserver.observe(section);
});
