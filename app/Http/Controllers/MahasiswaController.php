<?php

namespace App\Http\Controllers;

use App\Http\Requests\DaftarMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);

        dump($validateData);
        echo $validateData['nim'];
        echo "<br>";
        echo $validateData['nama'];
        echo "<br>";
        echo $validateData['email'];
        echo "<br>";
        echo $validateData['jenis_kelamin'];
        echo "<br>";
        echo $validateData['jurusan'];
        echo "<br>";
        echo $validateData['alamat'];
    }

    public function prosesFormValidator(Request $request)
    {
        $rules =  [
            'nim' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ];

        $error_message = [
            'required' => ':attribute wajib diisi.',
            'size' => ':attribute harus berukuran :size karakter.',
            'max' => ':attribute maskimal berisi :max karakter.',
            'min' => ':attribute minimal berisi :min karakter.',
            'email' => ':attribute harus diisi dengan alamat email yang valid.',
            'in' => ':attribute yang dipilih tidak valid.',
        ];
        $validator = Validator::make(
            $request->all(),
            $rules,
            $error_message

        );
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        } else {
            echo $request->nim;
            echo "<br>";
            echo $request->nama;
            echo "<br>";
            echo $request->email;
            echo "<br>";
            echo $request->jenis_kelamin;
            echo "<br>";
            echo $request->jurusan;
            echo "<br>";
            echo $request->alamat;
        }
    }

    public function prosesFormRequest(DaftarMahasiswa $request)
    {
        $validateData = $request->validated();
        dump($validateData);
    }
}
