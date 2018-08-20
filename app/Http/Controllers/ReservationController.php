<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Reservation;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    public function editForm(Request $request)
    {
        $reservation = Reservation::where('user_id', $request->user()->id)->with('image')->first();
        if (isset($reservation->image)) {
            $file_path = $reservation->image->file_path;
            return view('reservation', ['reservation' => $reservation, 'file_path' => $file_path]);
        }
        return view('reservation', ['reservation' => $reservation]);
    }

    public function add(ReservationRequest $request, Reservation $reservation)
    {
        $reservation->add($request);

        return redirect()->route('mypage', ['id' => $request->user()->id]);
    }

    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $reservation->updateReservation($request);

        return redirect()->route('mypage', ['id' => $request->user()->id]);
    }
}
