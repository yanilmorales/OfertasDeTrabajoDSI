let favButtons = document.querySelectorAll("li>button.fav");
let jobList = document.querySelectorAll("ul.job-list>li[job-id]");

jobList.forEach(job => {
    job.addEventListener('click', (event) => {
        if(event.target.tagName !== "I") window.open("oferta/" + event.currentTarget.getAttribute("job-id"),"_self");
    });
});

favButtons.forEach(button => {
    button.addEventListener('mouseenter', (event) => {
        event.target.firstChild.classList.replace(button.classList.contains('active') ? 'fas' : 'far', button.classList.contains('active') ? 'far' : 'fas');
    });
    button.addEventListener('mouseleave', (event) => {
        event.target.firstChild.classList.replace(button.classList.contains('active') ? 'far' : 'fas', button.classList.contains('active') ? 'fas' : 'far');
    });
    button.addEventListener('click', (event) => {
        event.currentTarget.classList.toggle('active');
    });
});
