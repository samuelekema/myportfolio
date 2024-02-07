const goBtn = document.getElementById("go-btn");
goBtn.addEventListener("click", function(){
    const container = document.getElementById("container");
    container.classList.add("off-screen");
    const weatherApp = document.getElementById("weather-app");
    weatherApp.style.overflow = "scroll";
    weatherApp.classList.remove("off-screen");
    const input = document.getElementById("location-input").value.reload;

})



//***back btn */


