<?php

namespace App\Http\Controllers;

use App\Http\Requests\offerRequest;
use App\Models\Offer;
use App\Traits\offerTrait;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class offerController extends Controller
{
    use OfferTrait;
    public function add_offer(){
        return view('offers.add_offer');
    }

    public function store(offerRequest $request){
        $data=$request->all();
           $file_name= $this->saveImage($request->photo,'images/offers');
        //save image in folder
//        $file_extention = $request -> photo -> getClientOriginalExtension();
//        $file_name=time().'.'.$file_extention;
//        $path='images/offers';
//        $request->photo->move($path,$file_name);
///////////////////////////end to save image in folfer//////////////////////////////////////



        Offer::create(
                [
                    'photo'=>$file_name,
                    'name_ar'=>$data['name_ar'],
                    'name_en'=>$data['name_en'],
                    'details_ar'=>$data['details_ar'],
                    'details_en'=>$data['details_en'],
                ]
            );
        return redirect()->back()->with('status',"Insert successfully");
    }


    public function show(){
       $offer= Offer::select('id','name_'.  LaravelLocalization::getCurrentLocale().' as name' ,
           'details_'.LaravelLocalization::getCurrentLocale().' as details')->get();
        return view('offers.index',compact('offer'));
    }

    public function edit($offer_id){
        $offer=Offer::find($offer_id);
        return view('offers.edit_offer',compact('offer'));
    }

    public function update( offerRequest $request, $offer_id){
        $data=$request->all();
        $offer=Offer::findOrFail($offer_id);
        $offer->update([
            'name_ar'=>$data['name_ar'],
            'name_en'=>$data['name_en'],
            'details_ar'=>$data['details_ar'],
            'details_en'=>$data['details_en'],
        ]);
        return redirect()->route('offer.index')->with('status','Updating successfully');
    }
    public function delete($offer_id){
        $offer=Offer::find($offer_id);
        $offer->delete();
        return redirect()->route('offer.index')->with('status','deleting successfully');
    }
  ///function how to save image
//    protected  function saveImage($photo,$folder){
//        $file_extention = $photo -> getClientOriginalExtension();
//        $file_name=time().'.'.$file_extention;
//        $path=$folder;
//        $photo->move($path,$file_name);
//        return $file_name;
//    }



}
