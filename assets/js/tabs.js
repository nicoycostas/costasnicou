const tabs = document.querySelectorAll('.tab');
const tabsContent = document.querySelectorAll('.tab-content');
const tabsContainer = document.querySelector('.tabs-container');



// using event delegation
tabsContainer.addEventListener('click',function(e){
  // using a matching strategy
    const clickedTab = e.target.closest('.tab');

    if (!clickedTab) return;
    // console.log(clickedTab);
    tabs.forEach(t => t.classList.remove('tab-active'));
    clickedTab.classList.add('tab-active');
//   console.log(clickedTab);

//   // activate content area
//   // remove
    tabsContent.forEach(
        content => {
            content.classList.remove('tab-content-active');
            
        }
    );
    
    const activeContent = document.querySelector(`.tab-content-${clickedTab.dataset.tab}`);
    activeContent.classList.add('tab-content-active');
        // Apply transform
    // activeContent.style.transform = 'rotate(360deg)';
    // activeContent.style.transition = 'all 1s ease-in'; // Smooth animation

    // document.querySelector(`.tab-content-${clickedTab.dataset.tab}`)
    // .style.opacity = "1";
 
});
