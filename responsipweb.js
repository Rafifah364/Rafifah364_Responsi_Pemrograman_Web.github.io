var namaaError = document.getElementById('namaa-error');
var namaError = document.getElementById('nama-error');
var alamatError = document.getElementById('alamat-error');
var jenisError = document.getElementById('jenis-error');
var beratError = document.getElementById('berat-error');
var jarakError = document.getElementById('jarak-error');
var submitError = document.getElementById('submit-error');


function validateNamea(){
	var namaa = document.getElementById('namaa').value;

	if(namaa.length == 0){
		namaaError.innerHTML = 'Wajib diisi!';
		return false;
	}
	namaaError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}
function validateName(){
	var nama = document.getElementById('nama').value;

	if(nama.length == 0){
		namaError.innerHTML = 'Wajib diisi!';
		return false;
	}
	namaError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}
function validateAlamat () {
	var alamat = document.getElementById('alamat').value;
	var required = 20;
	var left = required - alamat.length;

	if(left>0){
		alamatError.innerHTML = left + '  Wajib diisi!';
		return false;
	}
	alamatError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}
function validateJenis(){
	var fakultas = document.getElementById('jenis').value;

	if(jenisError.length == 0){
		jenisError.innerHTML = 'Wajib diisi!';
		return false;
	}
	jenisError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}
function validateBerat(){
	var berat = document.getElementById('berat').value;

	if(beratError.length == 0){
		beratError.innerHTML = 'Wajib diisi!';
		return false;
	}
	beratError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}
function validateJarak(){
	var jarak = document.getElementById('jarak').value;

	if(jarakError.length == 0){
		jarakError.innerHTML = 'Wajib diisi!';
		return false;
	}
	jarakError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
}

function validateForm(){
	var namaa = document.getElementById('namaa').value;
	var nama = document.getElementById('nama').value;
	var alamat = document.getElementById('alamat').value;
	var jenis = document.getElementById('jenis').value;
	var berat = document.getElementById('berat').value;
	var jarak = document.getElementById('jarak').value;

	if(!validateNamea() || !validateName() || !validateAlamat() || !validateJenis() || !validateBerat() || !validateJarak()){
		submitError.innerHTML = 'Submit Gagal!';
		return false;
	}
}