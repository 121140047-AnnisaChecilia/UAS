// Event 1
function validateForm() {
    const nama = document.getElementById('nama').value;
    const nim = document.getElementById('nim').value;
    const prodi = document.getElementById('prodi').value;
    const jenisk = document.getElementById('jenisk').value;
    const univ = document.querySelector('input[name="univ"]:checked');
    
    if (nama === "") {
        alert("Nama harus di isi");
        return false;
    } if (nim == "") {
        alert("NIM harus di isi");
        return false;
    } if (prodi == "") {
        alert("Program Studi harus di isi");
        return false;
    } if (!jenisk) {
        alert("Pilih jenis kelamin");
        return false;
    }if (!univ) {
        alert("Pilih Universitas");
        return false;
    }
    return true;

}//Event 2
  const submitButton = document.querySelector('button[type="submit"]');
  submitButton.addEventListener('mouseenter', function() {
    this.style.backgroundColor = 'brown';
  });
//event 3
  const form = document.forms['forminput'];
  form.addEventListener('submit', function(event) {
    const isFormValid = validateForm();
    if (isFormValid) {
        const confirmation = confirm('Apakah Anda yakin ingin submit form?');
    if (!confirmation) {
        event.preventDefault(); 
    }
} else {
    event.preventDefault(); 
}
  });