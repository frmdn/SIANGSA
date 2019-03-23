function ShowStep(teks) {
	var data = "";
	if (teks == "1") {
		data = "<h3>Langkah Pertama</h3><p>Mendaftar dan mengisi data diri.</p>";
	} else if (teks == "2") {
		data = "<h3>Langkah Kedua</h3><p>Verifikasi dokumen.</p>";
	} else if (teks == "3") {
		data = "<h3>Langkah Ketiga</h3><p>Proses persiapan peralatan untuk perumahan.</p>";
	} else {
		data = "<h3>Langkah Terakhir</h3><p>Petugas mengambil sampah sesuai jadwal.</p>";
	}
	$('#showstep').html(data);
}