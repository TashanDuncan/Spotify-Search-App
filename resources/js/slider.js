const resultsSlider = document.getElementById("resultsRange");
const resultsNum = document.getElementById("resultsNumber");

resultsNum.innerText = resultsSlider.value;

resultsSlider.oninput = () => resultsNum.innerText = resultsSlider.value;