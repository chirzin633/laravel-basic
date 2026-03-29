@extends('layouts.app')

@section('title', 'Create Siswa')

@section('konten')
<div class="p-4 lg:p-0 max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-3 text-teal-600">Create Siswa</h1>
    <form action="{{route('siswa.store')}}" method="POST" class="space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-900" for="nama">
                Name
            </label>

            <input class="mt-1 w-full rounded-lg py-2 px-4 border border-gray-300 focus:border-indigo-500 focus:outline-none" id="nama" name="nama" type="text" placeholder="Your name" value="{{old('nama')}}">
            @error('nama')
            <div class="text-red-500 text-sm">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-900" for="tanggal_lahir">
                Tanggal Lahir
            </label>

            <input class="mt-1 w-full rounded-lg border py-2 px-4 border-gray-300 focus:border-indigo-500 focus:outline-none" id="tanggal_lahir" name="tanggal_lahir" type="date" value="{{old('tanggal_lahir')}}">
            @error('tanggal_lahir')
            <div class="text-red-500 text-sm">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-900" for="jurusan">
                Jurusan
            </label>

            <input class="mt-1 w-full rounded-lg py-2 px-4 border border-gray-300 focus:border-indigo-500 focus:outline-none" id="jurusan" name="jurusan" type="text" placeholder="Jurusan" value="{{old('jurusan')}}">
            @error('jurusan')
            <div class="text-red-500 text-sm">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-900" for="nilai">
                Nilai
            </label>

            <input class="mt-1 w-full rounded-lg py-2 px-4 border border-gray-300 focus:border-indigo-500 focus:outline-none" id="nilai" name="nilai" type="text" placeholder="Nilai" value="{{old('nilai')}}">
            @error('nilai')
            <div class="text-red-500 text-sm">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-900" for="mentor">
                Mentor
            </label>

            <select name="mentor_id" id="mentor" class="mt-0.5 w-full py-2 px-4 rounded border border-gray-300 shadow-sm sm:text-sm" value="{{old('mentor_id')}}">
                <option value="" disabled selected>Please select</option>
                @foreach ($mentors as $mentor )
                <option value="{{ $mentor->id }}">{{ $mentor->nama }}</option>
                @endforeach
            </select>
            @error('mentor_id')
            <div class="text-red-500 text-sm">{{$message}}</div>
            @enderror
        </div>

        <button class="block w-full rounded-lg border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600 cursor-pointer" type="submit">
            Send Message
        </button>
    </form>
</div>
@endsection