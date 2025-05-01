function myCustomFunction() {
    console.log("Custom JavaScript function called!");
}

function moveChartIntoAccordion(accordionId, chartId){
    document.getElementById(accordionId).appendChild(document.getElementById(chartId));
}

function refreshDiv(divId) {
    var container = document.getElementById(divId);
    var content = container.innerHTML;
    container.innerHTML= content; 
    
    console.log("Refreshed"); 
}

document.addEventListener("DOMContentLoaded", function() {
    myCustomFunction();
    moveChartIntoAccordion('3cfbe7e713836ee0e', 'chart');
    moveChartIntoAccordion('1d3cc33e1db4c4967', 'chart__youth');
    moveChartIntoAccordion('7787cb09424f4ce78', 'container__percent');

    let anch = document.getElementById('toggles__ej');
    console.log(anch);
    anch.addEventListener('click', () => {console.log('Hi')});
});