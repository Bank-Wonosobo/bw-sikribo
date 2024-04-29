<?php

namespace App\Services\Impl;

use App\Http\Requests\Kredit\StoreKreditReq;
use App\Http\Requests\Kredit\UpdateKreditReq;
use App\Models\Kredit;
use App\Services\KreditService;
use App\Traits\UploadTrait;

class KreditServiceImpl implements KreditService {
    use UploadTrait;

    public function create(StoreKreditReq $request): Kredit
    {

        $kredit = new Kredit([
            'no_kredit' => $request->input('no_kredit'),
            'nama_peminjam' => $request->input('nama_peminjam'),
            'tanggal_akad' => $request->input('tanggal_akad'),
            'kategori_id' => $request->input('kategori_id')
        ]);

        $kredit->save();

        return $kredit;
    }

    public function destroy(int $id)
    {
        $kredit = Kredit::find($id);

        $this->deleteFileExist($kredit);

        Kredit::where('id', $id)->delete();
    }

    public function update(UpdateKreditReq $request, int $id): Kredit
    {
        $kredit = Kredit::find($id);
        $kredit->no_kredit = $request->input('no_kredit');
        $kredit->nama_peminjam = $request->input('nama_peminjam');
        $kredit->tanggal_akad = $request->input('tanggal_akad');
        $kredit->kategori_id = $request->input('kategori_id');
        $kredit->save();

        return $kredit;

    }

    public function addFileKredit(int $id, $file)
    {
        $kredit = Kredit::find($id);

        $this->deleteFileExist($kredit);

        $filename = strtoupper($kredit->nama_peminjam) . '_' . $kredit->no_kredit;

        $file = $this->uploads($file, 'perjanjian_kredit/file', true, $filename);

        $kredit->file = $file;

        $kredit->save();

        return $kredit;
    }

    private function deleteFileExist($kredit){
        if ($kredit->file != null) {
            $this->delete($kredit->file);
        }
    }
}