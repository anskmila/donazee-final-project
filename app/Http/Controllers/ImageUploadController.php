<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\DonationCampaign;
use App\Models\Gallery;

class ImageUploadController extends Controller
{
    public function process(Request $request, $id){
        
        $item = DonationCampaign::findOrFail($id);
        
        return view('fundraise.image-upload', [
            'item' => $item
        ]);
    }

    public function upload(Request $request, $id){

        $validate = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate)->withInput();
        }

        $item = Gallery::create([
            'donation_campaigns_id' => $id,
            'image'                 => $request->file('image')->store('assets/gallery', 'public'),
        ]);

        $item->save();

        return view('fundraise.confirmation', [
          'item' => $item  
        ]);
    }
}
