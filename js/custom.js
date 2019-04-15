let modal = document.getElementById('modal');
let btn = document.getElementById("close");

function closeModal() {
	modal.style.display = "none";
}

if (btn) {
	btn.onclick = function() {
	  closeModal();
	}
}

document.addEventListener('keypress', function (e) {
	let input = e.key;
	if (input.match(/^[A-Za-z]$/)) {
		document.getElementById(input).click();
	}
});
