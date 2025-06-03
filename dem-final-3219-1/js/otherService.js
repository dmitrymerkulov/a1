let select = document.querySelector('#service');
let checkBox = document.querySelector('#serviceCheck');
let textArea = document.querySelector('#otherService');
checkBox.addEventListener('click', ()=>{
	textArea.classList.toggle('hidden');
	if (!textArea.classList.contains('hidden')){
		textArea.setAttribute('required', '');
		select.setAttribute('disabled', '');
	} else {
		textArea.removeAttribute('required');
		select.removeAttribute('disabled');
	}
})

let requestForm = document.querySelector('#requestForm');
requestForm.onsubmit = () =>{
	return confirm('Отправить заявку?');
};