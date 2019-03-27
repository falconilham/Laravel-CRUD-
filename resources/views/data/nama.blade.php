<style>
	* {
		list-style-type: none;
	}
</style>
<h1>Nama</h1>
<ul>
	@foreach ($data1 as $data)
		<li>{{ $data }} </li>
	@endforeach
</ul>