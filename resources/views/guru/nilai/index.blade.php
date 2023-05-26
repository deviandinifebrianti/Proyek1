@extends('admin.layoutAdmin')

@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left mt-2 px-6 py-2">
                <h2>INFORMASI HASIL KUIS</h2>
            </div>
            <div class="fixed top-20 right-2">
                <a class="text-white text-semibold bg-[#00B074] hover:bg-green-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" href="{{ route('data-kelas.create') }}" >Cetak Laporan</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-x text-left text-gray-500">
        <thead class="text-x text-semibold text-gray-700 uppercase bg-green-100 dark:bg-gray-700 ">
            <tr>
                <th scope="col" class="px-6 py-3 text-center text-bold">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Siswa
                </th>
                <th scope="col" class="px-6 py-3">
                    Sesi Ujian
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Nilai
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Selesai
                </th>
            </tr>
        </thead>
        <?php $i=1 ?>
        @foreach ($nilai as $Nilai)
        <tbody>
            <tr class="bg-white border-b ">
                <td class="px-6 py-2 text-center text-bold">
                    {{$i}}
                </td>
                <td class="px-6 py-2">
                    {{-- {{ $Nilai->siswa->nama_siswa}} --}}
                    Ini siswa
                </td>
                <td class="px-6 py-2">
                    {{-- {{ $Nilai->}} --}}
                </td>
                <td class="px-6 py-2 text-center">
                    {{ $Nilai->nilai}}
                </td>
                <td class="px-6 py-2 text-center">
                    {{ $Nilai->created_at}}
                </td>
                {{-- <td class="px-6 py-2 text-center">
                    <form action="{{ route('Nilai.destroy',$Nilai->idNilai) }}" method="POST">
                        <a class="text-white text-semibold bg-sky-500 hover:bg-sky-600 font-medium rounded-lg text-sm p-2 m-2 w-2xl" href="{{ route('kelas.edit',$Kelas->idKelas) }}" >Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white text-semibold bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm p-2 m-2">Delete</button>
                    </form>
                </td> --}}
            </tr>
        </tbody>
        <?php $i++ ?>
        @endforeach
    </table>
</div>

@endsection