<form method="POST" action="{{ route('simpan.buku') }}">
	@csrf
	<label>Judul</label>
	<input type="text" name="judul">
	<label>Jumlah</label>
	<input type="number" name="jumlah">
	<input type="submit" name="Kirim">
</form>