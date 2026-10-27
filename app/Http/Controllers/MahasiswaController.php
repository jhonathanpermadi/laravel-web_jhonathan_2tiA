<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();

        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'string', 'max:20', Rule::unique('biodata_tabel_nim', 'nim')],
            'nama_lengkap' => 'required|string|max:100',
            'program_studi' => 'required|string|max:100',
            'kelas' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'email' => ['required', 'email', 'max:100', Rule::unique('biodata_tabel_nim', 'email')],
            'nomor_telepon' => 'required|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        Mahasiswa::create($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('admin.mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $validated = $request->validate([
            'nim' => [
                'required',
                'string',
                'max:20',
                Rule::unique('biodata_tabel_nim', 'nim')->ignore($mahasiswa->getKey()),
            ],
            'nama_lengkap' => 'required|string|max:100',
            'program_studi' => 'required|string|max:100',
            'kelas' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'email' => [
                'required',
                'email',
                'max:100',
                Rule::unique('biodata_tabel_nim', 'email')->ignore($mahasiswa->getKey()),
            ],
            'nomor_telepon' => 'required|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        $mahasiswa->update($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    }

    public function cv(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('admin.mahasiswa.cv', compact('mahasiswa'));
    }
}
