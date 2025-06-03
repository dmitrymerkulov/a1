let selects = document.querySelectorAll(".changeStatus");
selects.forEach((elem)=>{
	elem.addEventListener('change', ()=>{
		let textArea = elem.nextElementSibling;
		if (elem.value == 'Отменено'){
			textArea.classList.remove('hidden');
			textArea.setAttribute('required', '');
		} else {
			textArea.classList.add('hidden');
			textArea.removeAttribute('required');
		}
	})
})