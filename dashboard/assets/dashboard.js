console.debug('loaded.');

let changepwd = () => {
	const origin = document.getElementById('changepwd');
	const target_el = document.querySelector('.ddd-user-change-password');
	target_el.classList.toggle('hidden');

	const p1 = document.getElementById('updpwd1');
	const p2 = document.getElementById('updpwd2');
	const check = document.getElementById('checkpwd');
	const proceed = document.getElementById('setnewpwd');

	p1.addEventListener('keyup',() => {
		if (p1.value.length >= 8) {
			console.debug('ok min 8 char');
		}
	})

	p2.addEventListener('keyup',() => {
		if(p2.value == p1.value) {
			check.innerText = 'Password match, please confirm';
			setTimeout(()=>{
				proceed.classList.remove('hidden');
			},500)
		} else {
			check.innerText = 'Password mismatch.'
			proceed.classList.add('hidden');
		}

	})
}

