<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | Tracer Study'
        ];
        return view('pages/home', $data);
    }

    public function laporan()
    {
        $data = [
            'title' => 'Laporan'
        ];
        return view('pages/laporan', $data);
    }

    public function admin()
    {
        $data = [
            'title' => 'Tracer Study | Login Admin'
        ];
        return view('pages/admin', $data);
    }

    public function alumni()
    {
        $data = [
            'title' => 'Tracer Study | Login Alumni'
        ];
        return view('pages/alumni', $data);
    }

    public function pengguna()
    {
        $data = [
            'title' => 'Tracer Study | Login Pengguna Lulusan'
        ];
        return view('pages/pengguna', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Tracer Study | Login'
        ];
        return view('pages/login', $data);
    }

    public function dalumni()
    {
        $data = [
            'title' => 'Tracer Study | Daftar Alumni'
        ];
        return view('pages/dalumni', $data);
    }

    public function dpengguna()
    {
        $data = [
            'title' => 'Tracer Study | Daftar Pengguna'
        ];
        return view('pages/dpengguna', $data);
    }

    public function tentangkami()
    {
        $data = [
            'title' => 'Tracer Study | About Us'
        ];
        return view('pages/tentangkami', $data);
    }

    public function masuk()
    {
        $data = [
            'title' => 'Tracer Study | Masuk'
        ];
        return view('pages/masuk', $data);
    }
}
