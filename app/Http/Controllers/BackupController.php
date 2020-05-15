<?php

namespace App\Http\Controllers;

class BackupController extends Controller
{
    public function download()
    {
        return response()->download(storage_path('app/backups/' . 'hsshohada.sql'));
    }
}
