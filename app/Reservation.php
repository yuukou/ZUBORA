<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Reservation extends Model
{
    public function image()
    {
        return $this->belongsTo(Image::class, 'house_image_id', 'id');
    }

    public function add(Request $request)
    {
        $path = $request->file("house")->store('images');

        $image = new Image();
        $image->storage_type = $request->file("house")->getType();
        $image->file_path = 'app/' . $path;
        $image->save();

        $reservation = new self();

        $reservation->user_id = $request->user()->id;
        $reservation->old_address = $request->old_address;
        $reservation->new_address = $request->new_address;
        $reservation->rent = $request->rent;
        $reservation->house_image_id = $image->id;
        $reservation->other = $request->other;

        $reservation->save();
    }

    public function updateReservation(Request $request)
    {
        $path = $request->file("house")->store('private/images');

        $image = new Image();
        $image->storage_type = $request->file("house")->getType();
        $image->file_path = $path;
        $image->save();

        $reservation = self::where('user_id', $request->user()->id)->first();
        $reservation->old_address = $request->old_address;
        $reservation->new_address = $request->new_address;
        $reservation->rent = $request->rent;
        $reservation->house_image_id = $image->id;
        $reservation->other = $request->other;

        $reservation->save();
    }

    public function get(Request $request)
    {
        $reservation = self::where('user_id', $request->user()->id)->with('image')->first();
        return $reservation;
    }

    public function getByReservationId()
    {

    }
}
