<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MockQrController extends Controller
{
     public function generate()
    {
        return response()->json([
            'code' => '00',
            'message' => 'Success',
            'data' => [
                'qr_id' => 'QR123456789',
                'amount' => 10000,
                'currency' => 'MMK'
            ]
        ]);
    }
}
