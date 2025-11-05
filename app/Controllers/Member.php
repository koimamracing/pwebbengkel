<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Member extends BaseController
{
    protected $MemberModel;

    public function __construct()
    {
        $this->MemberModel = new MemberModel();
    }

    public function index()
{
    $current = $this->request->getVar('page_member') ? $this->request->getVar('page_member') : 1;
    $cari = $this->request->getVar('cari');

    if ($cari) {
        $member = $this->MemberModel->like('username', $cari);
    } else {
        $member = $this->MemberModel;
    }

    $data = [
        'title'   => 'Daftar Member',
        'member'  => $member->paginate(2, 'member'),
        'pager'   => $this->MemberModel->pager,
        'current' => $current
    ];
    return view('member/index', $data);
}


    public function detail($idmember)
    {
        
        $data = [
            'title'  => 'Detail Member',
            'member' => $this->MemberModel->getMember($idmember)
        ];

        return view('member/detail', $data);
    }

    public function tambah(){
        $data = [
            'title' => 'Form Tambah Member',
            'validation' => \Config\Services::validation()
        ];

        return view('member/tambah', $data);
    }

    public function simpan(){
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ],
                'sampul' => [
                    'rules' => 'uploaded[sampul]|max_size[sampul,10000]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar wajib dipilih',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'File wajib berupa gambar',
                    'mime_in' => 'Tipe file tidak sesuai'
                ]                
            ]
        ])){
            return redirect()->to('/member/tambah')->withInput();
        }

        $filesampul = $this->request->getFile('sampul');
        $filesampul->move('img');
        $nmsampul = $filesampul->getName();

        $this->MemberModel->save([
            'username' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'no_hp' => $this->request->getVar('no_hp'),
            'sampul' => $nmsampul
        ]);
        session()->setFlashdata('pesan', 'Datamu berhasil ditambahkan');
        return redirect()->to('/member');
    }

    public function hapus($idmember){
        $this->MemberModel->delete($idmember);

        session()->setFlashdata('pesan', 'Datamu Berhasil Hapus');
        return redirect()->to('/member');
    }

    public function edit($idmember){
        $data = [
            'title' =>'Form Edit Data',
            'validation' => \Config\Services::validation(),
            'member' => $this->MemberModel->getMember($idmember)
        ];

        return view('member/edit', $data);
    }

    public function update($idmember)
{
    if (!$this->validate(rules:[
        'username' => [
            'rules' => 'required',
            'errors' => '{field} harus diisi'
        ], 'sampul' => [
            'rules' => 'max_size[sampul,10000]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
            'errors' => [
                'max_size' => 'Ukuran gambar terlalu besar',
                'is_image' => 'File wajib berupa gambar',
                'mime_in' => 'Tipe file tidak sesuai'
            ]
        ]
    ])) {
        return redirect()->to(uri: '/member/edit/' . $idmember)->withInput();
    }

    $filesampul = $this->request->getFile('sampul');
    if ($filesampul->getError() == 4){
        $nmsampul = $this->request->getVar('sampulLama');
    }else{
        $nmsampul = $filesampul->getName();
        $filesampul->move('img',$nmsampul);
    }
    $this->MemberModel->save(row: [
        'id_member' => $idmember,
        'username' => $this->request->getVar('username'),
        'nama' => $this->request->getVar('nama'),
        'nik' => $this->request->getVar( 'nik'),
        'no_hp' => $this->request->getVar('no_hp'),
        'sampul' => $nmsampul
    ]);

    session()->setFlashdata(data: 'pesan', value: 'Datamu Berhasil Diubah.');
    return redirect()->to('/member/');
}

}

