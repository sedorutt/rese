let form_date = document.getElementById('form-date');
let output_date = document.getElementById('output-date');

let form_time = document.getElementById('form-time');
let output_time = document.getElementById('output-time');

let form_number = document.getElementById('form-number');
let output_number = document.getElementById('output-number');

timestamp = 0;

function update(){
	
	timestamp++;
	window.requestAnimationFrame(update);
	
	if (timestamp % 10 == 0 ){
		output_date.innerHTML = form_date.value;
		output_time.innerHTML = form_time.value;
		output_number.innerHTML = form_number.value;
	}
}

update();
