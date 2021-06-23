function displayTime()
{
var el = document.getElementById("watch");//Find element with id="watch"
var time = new Date(); //Get current time with variable "time"
el.innerHTML = time.toLocaleTimeString(); //make el display it
setTimeout(displayTime, 1000); //Run again in 1 second
}
window.onload = displayTime;