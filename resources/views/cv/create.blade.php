@extends('cv.layout')

@section('title', 'Buat CV Baru')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
    <div class="flex justify-between items-center border-b border-gray-200 pb-4 mb-6">
        <h1 class="text-2xl font-bold text-gray-800">📝 Buat Curriculum Vitae</h1>
        <a href="{{ route('cv.index') }}" class="text-sm text-gray-600 hover:text-gray-900 flex items-center gap-1">
            ← Kembali ke CV
        </a>
    </div>

    <form action="{{ route('cv.store') }}" method="POST" class="space-y-5">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" name="full_name" value="{{ old('full_name') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Contoh: Nadine Stephanie">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Gelar Profesional / Jabatan</label>
                <input type="text" name="title" value="{{ old('title') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Contoh: Undergraduate Student">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Email Aktif</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="nadine25ti@mahasiswa.pcr.ac.id">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor Telepon</label>
                <input type="text" name="phone" value="{{ old('phone') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="+62 812 3456 789">
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Ringkasan Profesional</label>
            <textarea name="summary" rows="3" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Ceritakan singkat latar belakang keahlian dan profil Anda...">{{ old('summary') }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Pengalaman Kerja</label>
            <span class="text-xs text-gray-400 block mb-1">Gunakan baris baru untuk memisahkan setiap riwayat kerja.</span>
            <textarea name="experience" rows="4" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Contoh:&#10;PT. Maju Jaya - Web Developer (2023 - Sekarang)&#10;- Membangun sistem internal...&#10;&#10;CV. Kreatif Solusi - Junior Programmer (2021 - 2023)">{{ old('experience') }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Pendidikan</label>
            <textarea name="education" rows="3" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Contoh:&#10;Politeknik Caltex Riau - Teknik Informatika (2025 - 2029)">{{ old('education') }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Keahlian / Skills</label>
            <input type="text" name="skills" value="{{ old('skills') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" placeholder="Contoh: PHP, Laravel, Tailwind CSS, MySQL, Git">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-2 rounded shadow hover:bg-blue-700 transition">
                Simpan & Buat CV
            </button>
        </div>
    </form>
</div>
@endsection