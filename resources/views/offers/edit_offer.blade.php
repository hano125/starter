@extends('layout.master')
@include('layout.navbar')
{{--<--------------------strat desgin input form----------------->--}}
<div class="container-sm" style="max-width: 780px">
    @if (session('status'))
        <div class="alert alert-success mt-2 mb-2" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="card mt-4">
        <div class="card-header">
           {{__("messages.Edit_offer")}}
        </div>
        <div class="card-body">
            <form method="post" action="{{route('offer.update',$offer->id)}}">
                @csrf
                <div class="row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">{{__('messages.offer_name_ar')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="name_ar" value="{{$offer->name_ar}}">
{{--                        @error('name_ar')--}}
{{--                        <small class="form-text text-danger">{{$message}}</small>--}}
{{--                        @enderror--}}
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">{{__('messages.offer_name_en')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="name_en" value="{{$offer->name_en}}">
{{--                        @error('name_en')--}}
{{--                        <small class="form-text text-danger">{{$message}}</small>--}}
{{--                        @enderror--}}
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">{{__('messages.offer_details_ar')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="details_ar" value="{{$offer->details_ar}}">
{{--                        @error('details_ar')--}}
{{--                        <small class="form-text text-danger">{{$message}}</small>--}}
{{--                        @enderror--}}
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">{{__('messages.offer_details_en')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="details_en" value="{{$offer->details_en}}">
{{--                        @error('details_en')--}}
{{--                        <small class="form-text text-danger">{{$message}}</small>--}}
{{--                        @enderror--}}
                    </div>
                </div>
                <button type="submit" class="btn btn-info w-25 " style="float: right ">SAVE</button>
            </form>
        </div>
    </div>

</div>
{{--<--------------------End desgin input form----------------->--}}
