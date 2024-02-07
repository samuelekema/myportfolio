const searchicon = document.querySelector(".fa-search");

searchicon.addEventListener("click", ()=>{
    const searchBar = document.getElementById("search-bar");
    const loginLink = document.querySelector(".login-link");
    const submitSearch = document.getElementById("submit-search");
    if(searchBar.style.display == "none") {
        searchBar.style.display = "inline-block";
        searchicon.style.display = "none"
        loginLink.style.display = "none";
        submitSearch.style.display = "inline-block";
    } else {
        searchBar.style.display = "none";
        searchicon.style.display = "inline-block";
        loginLink.style.display = "inline-block";
        submitSearch.style.display = 'none';
    }
})