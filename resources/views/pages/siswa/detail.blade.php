@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('konten')

<div class="flow-root">
    <dl class="-my-3 divide-y divide-gray-200 text-sm">

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Nama</dt>

            <dd class="text-gray-700 sm:col-span-2">{{$student->nama}}</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Tanggal Lahir</dt>

            <dd class="text-gray-700 sm:col-span-2">{{ $student->tanggal_lahir }}</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Jurusan</dt>

            <dd class="text-gray-700 sm:col-span-2">{{ $student->jurusan }}</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Nilai</dt>

            <dd class="text-gray-700 sm:col-span-2">
                {{$student->nilai}}
            </dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Mentor</dt>

            <dd class="text-gray-700 sm:col-span-2">
                {{$student->mentor->nama}}
            </dd>
        </div>
    </dl>
</div>
@endsection