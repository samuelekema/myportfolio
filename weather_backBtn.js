const backBtn = document.getElementById("back-btn");
backBtn.addEventListener("click", function(){
    const container = document.getElementById("container");
    const weatherApp = document.getElementById("weather-app");
    weatherApp.classList.add("off-screen");
    container.classList.remove("off-screen");

})