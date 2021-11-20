<a href="{{ route('buku.baru') }}">Tambah Buku Baru</a>
<table>
	<thead>
		<th>Judul</th>
		<th>Jumlah</th>
	</thead>
	<tbody border="1">
		@foreach($model as $model)
			<tr>
				<td>{{ $model->judul }}</td>
				<td>{{ $model->jumlah }}</td>
			</tr>
		@endforeach
	</tbody>
</table>