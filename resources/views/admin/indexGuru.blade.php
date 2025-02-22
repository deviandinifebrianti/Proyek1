@extends('admin.layoutAdmin')

@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left mt-2 px-6 py-2">
                <h2>INFORMASI GURU</h2>
            </div>
            <div class="fixed top-20 right-2">
                <a class="text-white bg-green-logo hover:bg-green-600 focus:ring-2 focus:ring-green-logo font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" href="{{ route('data-guru.create') }}" >Tambah Guru</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NIP
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Foto <img width="100px">
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Password
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        @foreach ($guru as $Guru)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $Guru->nip}}
                </th>
                <td class="px-6 py-4">
                    {{ $Guru->nama_guru}}
                </td>
                <td class="px-6 py-4">
                <img width="100px" height="100px" src="{{asset('storage/'.$Guru->foto)}}">
                </td>
                <td class="px-6 py-4">
                    {{ $Guru->username}}
                </td>
                <td class="px-6 py-4">
                    {{ $Guru->password}}
                </td>
                <td class="px-6 py-4">
                    <form action="{{ route('data-guru.destroy',$Guru->nip) }}" method="POST" onsubmit="return confirm('Apakah anda yakin untuk menghapus data {{$Guru->nama_guru}}?')">

                        <a class="text-black" href="{{ route('data-guru.show',$Guru->nip) }}"><i class='fas fa-file-alt mr-4' style='font-size:24px'></i></a>
                        <a class="text-black" href="{{ route('data-guru.edit',$Guru->nip) }}"><i class='fas fa-pencil-alt mr-4' style='font-size:24px'></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-black"><i class='fas fa-trash-alt' style='font-size:24px'></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <div class="d-flex">
        {{ $guru->links()}}
    </div>
</div>

@endsection