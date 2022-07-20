<form>
    No Pendaftaran :   <input type="text" name="no_pend" required><br>
    Nama           :   <input type="text" name="nama" required><br>
    Nilai TKP      :   <input type="number" value="0" min="0" name="nilai_tkp" required><br>
    Nilai TIU      :   <input type="number" value="0" min="0" name="nilai_tiu" required><br>
    Nilai TKW      :   <input type="number" value="0" min="0" name="nilai_tkw" required><br>
    <button name="simpan">
        Simpan
    </button><input type="reset">
</form>
<script src="jquery.js"></script>
<script>
    let tkp = document.querySelector('input[name="nilai_tkp"]')
    let tiu = document.querySelector('input[name="nilai_tiu"]')
    let tkw = document.querySelector('input[name="nilai_tkw"]')
    let input = document.querySelector('button[name="simpan"]')

    input.addEventListener('click', (e) => {
        console.log('oke')
        e.preventDefault()
        if(tkp.value >= 126){
            alert('Selamat TKP anda lulus')
        }else{
            alert(`Maaf anda tidak lulus, minimal kelulusan untuk TKP adalah 126, nilai anda ${tkp.value}`)
        }
    
        if(tiu.value >= 80){
            alert('Selamat TIU anda lulus')
        }else{
            alert(`Maaf anda tidak lulus, minimal kelulusan untuk TIU adalah 126, nilai anda ${tiu.value}`)
        }
    
        if(tkw.value >= 65){
            alert('Selamat TKW anda lulus')
        }else{
            alert(`Maaf anda tidak lulus, minimal kelulusan untuk TKW adalah 65, nilai anda ${tkw.value}`)
        }

        $.ajax({
            type: "POST"

        });

    })


</script>
<?php
require 'lihat.php';
?>