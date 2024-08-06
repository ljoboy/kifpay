<?php

use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('filament.admin.pages.dashboard');
});

Route::get('/print', function (Request $request) {
    $paiementId = $request->query('record');

    if (!$paiementId) {
        abort(400, 'Paiement ID is required.');
    }

    $paiement = Paiement::findOrFail($paiementId);
    return view('print', compact('paiement'));
})->name('print')->middleware('auth');
