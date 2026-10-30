@extends('cv.layout')

@section('title', 'Edit CV Anda')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
    <div class="flex justify-between items-center border-b border-gray-200 pb-4 mb-6">
        <h1 class="text-2xl font-bold text-gray-800">✏️ Perbarui Data CV</h1>
        <a href="{{ route('cv.index') }}" class="text-sm text-gray-600 hover:text-gray-900 flex items-center gap-1">
            ← Batalkan & Kembali
        </a>
    </div>

    <form action="{{ route('cv.update', $cv->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT') 
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" name="full_name" value="{{ old('full_name', $cv->full_name) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Gelar Profesional / Jabatan</label>
                <input type="text" name="title" value="{{ old('title', $cv->title) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Email Aktif</label>
                <input type="email" name="email" value="{{ old('email', $cv->email) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor Telepon</label>
                <input type="text" name="phone" value="{{ old('phone', $cv->phone) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Ringkasan Profesional</label>
            <textarea name="summary" rows="3" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>{{ old('summary', $cv->summary) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Pengalaman Kerja</label>
            <textarea name="experience" rows="4" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">{{ old('experience', $cv->experience) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Pendidikan</label>
            <textarea name="education" rows="3" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">{{ old('education', $cv->education) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Keahlian / Skills</label>
            <input type="text" name="skills" value="{{ old('skills', $cv->skills) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="bg-amber-500 text-white font-semibold px-6 py-2 rounded shadow hover:bg-amber-600 transition">
                Perbarui & Simpan
            </button>
        </div>
    </form>
</div>
@endsection