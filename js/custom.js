function escapeNow() {
	document.getElementById('main').innerHTML = "";
}

let modal = document.getElementById('modal');
let btn = document.getElementById("close");

function closeModal() {
	modal.style.display = "none";
}

btn.onclick = function() {
  closeModal();
}

window.onclick = function(event) {
  if (event.target != modal) {
    closeModal();
  }
}

// element.addEventListener('click', function() { /* do stuff here*/ }, false);
