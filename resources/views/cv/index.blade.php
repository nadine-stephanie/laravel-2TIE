<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>

    <script src="https://jsdelivr.net"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>
<body class="bg-gray-100 py-10 px-5">

    <div class="max-w-4xl mx-auto mb-6 flex justify-end gap-2 no-print">
        @if(!$cv)
            <a href="{{ route('cv.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">Buat CV Baru</a>
        @else
            <a href="{{ route('cv.edit', $cv->id) }}" class="bg-amber-500 text-white px-4 py-2 rounded shadow hover:bg-amber-600 transition">Edit CV</a>

            <form action="{{ route('cv.destroy', $cv->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data CV ini? Tindakan ini tidak dapat dibatalkan.');">
                @csrf
                @method('DELETE') <!-- Wajib untuk metode delete Laravel -->
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 transition cursor-pointer">
                    Hapus CV
                </button>
            </form>
            <button onclick="window.print()" class="bg-gray-800 text-white px-4 py-2 rounded shadow hover:bg-gray-900 transition">Cetak / Save PDF</button>
        @endif
    </div>

    @if($cv)
    <div class="max-w-4xl mx-auto bg-white p-10 shadow-lg border border-gray-200 h-auto print:p-0 print:border-none">

        <div class="border-b-2 border-gray-800 pb-6 flex justify-between items-end">
            <div>
                <h1 class="text-4xl font-bold tracking-wide text-gray-900 uppercase">{{ $cv->full_name }}</h1>
                <p class="text-xl text-blue-600 font-medium mt-1">{{ $cv->title }}</p>
            </div>
            <div class="text-right text-sm text-gray-600 space-y-1">
                <p>📍 Kelurahan Umban Sari, Riau</p>
                {{-- <p>✉️ {{ $cv->email }}</p> --}}
                <p>📞 {{ $cv->phone ?? '-' }}</p>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-lg font-bold text-gray-800 border-l-4 border-blue-600 pl-2 uppercase tracking-wider">Ringkasan Profesional</h2>
            <p class="text-gray-700 mt-3 leading-relaxed text-justify">{{ $cv->summary }}</p>
        </div>

   
        <div class="mt-8">
            <h2 class="text-lg font-bold text-gray-800 border-l-4 border-blue-600 pl-2 uppercase tracking-wider">Pengalaman Kerja</h2>
            <div class="mt-3 text-gray-700 whitespace-pre-line leading-relaxed">
                {{ $cv->experience ?? 'Belum ada data pengalaman kerja.' }}
            </div>
        </div>


        <div class="mt-8">
            <h2 class="text-lg font-bold text-gray-800 border-l-4 border-blue-600 pl-2 uppercase tracking-wider">Pendidikan</h2>
            <div class="mt-3 text-gray-700 whitespace-pre-line leading-relaxed">
                {{ $cv->education ?? 'Belum ada data pendidikan.' }}
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-lg font-bold text-gray-800 border-l-4 border-blue-600 pl-2 uppercase tracking-wider">Keahlian</h2>
            <p class="text-gray-700 mt-3">{{ $cv->skills ?? 'Belum ada keahlian dicantumkan.' }}</p>
        </div>
    </div>
    @else
    <div class="max-w-4xl mx-auto text-center bg-white p-10 rounded shadow">
        <p class="text-gray-500 mb-4">Data CV belum diisi di database Anda.</p>
    </div>
    @endif

    <style>
        /* @media print {
            .no-print { display: none; }
            body { background: white; padding: 0; }
            .shadow-lg { shadow: none; border: none; }
        } */

         @media print {
        @page {
            margin: 0; 
        }
        body {
            padding: 1.5cm;
            background: white;
        }
        .no-print { 
            display: none; 
        }
        .shadow-lg { 
            box-shadow: none !important; 
            border: none !important; 
        }
    }
    </style>
</body>
</html>