@extends('template')

@section('container')
<article class="mb-5">
    <h3>{{ $rekam->title }}                   
    </h3>
    <h6>Dokter: <a href="/dokter/{{ $rekam->dokter->id }}" class="text-decoration-none"> {{ $rekam->dokter->nama }}</a> pasien <a href="/pasien/{{ $rekam->pasien->id }}" class="text-decoration-none"> {{ $rekam->pasien->nama }}</a></h6>
    <p>{!! $rekam->kondisi !!}</p>
</article>

<a href="/rekam" class="d-block mt-3">Kembali ke Posts</a>
@endsection
