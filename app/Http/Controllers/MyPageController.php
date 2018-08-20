<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function index(Request $request, Reservation $reservation)
    {
        $reservationData = $reservation->get($request);

        if (isset($reservation->image)) {
            $file_path = $reservation->image->file_path;
            return view('mypage', ['reservation' => $reservationData, 'file_path' => $file_path]);
        }

        return view('mypage', ['reservation' => $reservationData]);
    }

    public function imageDisplay(ResponseFactory $responseFactory, Request $request, Reservation $reservation)
    {
        $reservationData = $reservation->get($request);

        if ($request->user()->id == $reservationData->user_id) {
            if (isset($reservationData->image)) {
                $file_path = $reservationData->image->file_path;
                $fileData = file_get_contents(storage_path('app/' . $file_path));
                return $responseFactory->make($fileData, 200, [
                    'Content-Type' => 'image/jpeg'
                ]);
            }
        }
        abort(403);
    }
}
