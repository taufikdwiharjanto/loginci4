<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class User extends BaseController
{
    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Profile',
            'users' => $this->usermodel->getUsers()
        ];
        return view('landingpage', $data);
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Profile',
            'validation' => \Config\Services::validation(),
            'users' => $this->usermodel->getUsers($id)
        ];
        return view('user/change_profile', $data);
    }
    public function update($id)
    {
        // cek judul
        $userlama = $this->usermodel->getUsers($this->request->getVar('id'));

        if (!$this->validate([
            'user_img' => [
                'rules' => 'max_size[user_img,1024]|is_image[user_img]|mime_in[user_img,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Input Bukan Gambar',
                    'max_size' => 'Yang Anda Input Bukan Gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('/user/edit/' . $this->request->getVar('id'))->withInput();
        }

        $filesampul = $this->request->getFile('user_img');
        //cek gambar, apakah tetap gambar lama
        if ($filesampul->getError() == 4) {
            $namasampul = $this->request->getVar('imglama');
        } else {
            // generate nama file rando,
            $namasampul = $filesampul->getRandomName();
            // Pindahkan Gambar
            $filesampul->move('img', $namasampul);
            // // Hapus Yang lama
        }
        $this->usermodel->save([
            'id' => $id,
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'user_img' => $namasampul
        ]);

        return redirect()->to('/');
    }
}
