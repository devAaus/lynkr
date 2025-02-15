<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UrlController extends Controller
{
    public function index()
    {
        $urls = Auth::user()->urls;

        return view('dashboard', [
            'urls' => $urls
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(['long_url' => 'required|url']);

        $shortCode = Url::generateShortCode();

        Url::create([
            'user_id' => Auth::id(),
            'long_url' => $request->long_url,
            'short_code' => $shortCode,
        ]);

        return redirect()->route('dashboard')->with('success', 'URL shortened!');
    }

    public function redirect($shortCode)
    {
        $url = Url::where('short_code', $shortCode)->firstOrFail();

        $url->increment('clicks');

        return redirect($url->long_url);
    }

    public function qrCode($shortCode)
    {
        $url = Url::where('short_code', $shortCode)->firstOrFail();
        $fullUrl = url($url->short_code);

        $qrCode = QrCode::size(200)->generate($fullUrl);

        return view('qrcode', compact('qrCode', 'fullUrl'));
    }
}
