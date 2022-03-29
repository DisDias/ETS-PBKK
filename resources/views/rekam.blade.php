@extends('template')

@section('container')
<h1 class mb-5 >{{ $title }}</h1> 
{{-- <h6>editor : {{ $name }} | {{ $email }} </h6>  --}}
<hr/>

@foreach ($rekams as $rekam)
    <article class ="mb-5 border-bottom pb-4">
        <h3>
            <a href="/rekam/{{ $rekam->slug }}" class="text-decoration-none">
            {{ $rekam->title }}
            </a>
        </h3>
        <h6>Dokter: <a href="/dokter/{{ $rekam->dokter->id }}" class="text-decoration-none"> {{ $rekam->dokter->nama }}</a> pasien <a href="/pasien/{{ $rekam->pasien->id }}" class="text-decoration-none"> {{ $rekam->pasien->nama }}</a></h6>
        <a href="/rekam/{{ $rekam->slug }}" class="text-decoration-none">Read More...</a>
    </article>
@endforeach

@endsection