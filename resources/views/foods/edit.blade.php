@extends('layouts.dashboard.master')
@section('ex-title','add foods')
@section('content')
    <form action="{{route("food.update",$food->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <div class="col-md">
                <label for="{{\App\Models\Food::Name}}">نام غذا : </label>
                <input type="text" name="{{\App\Models\Food::Name}}" id="{{\App\Models\Food::Name}}" required class="form-control" placeholder="" value="{{old(\App\Models\Food::Name,$food->name)}}">
            </div>
            <div class="col-md"></div>
        </div>

        <div class="form-group row">
            <div class="col-md">
                <label for="{{\App\Models\Food::PRICE}}">قیمت غذا : </label>
                <input type="number" name="{{\App\Models\Food::PRICE}}" id="{{\App\Models\Food::PRICE}}" required class="form-control" placeholder="" value="{{old(\App\Models\Food::PRICE,$food->price)}}">
            </div>
            <div class="form-group col-md">
                <label for="{{\App\Models\Food::TYPE}}">نوع غذا :</label>
                <select class="form-control" name="{{\App\Models\Food::TYPE}}" id="{{\App\Models\Food::TYPE}}"  placeholder="" value="{{old(\App\Models\Food::TYPE,$food->type)}}">
                    <option>دسر</option>
                    <option>پیش غذا</option>
                    <option>غذای اصلی</option>
                </select>
            </div>
        </div>

        <button class="btn btn-success rounded">
            <i class="fa fa-save mx-2"></i>
            ذخیره
        </button>
    </form>
@endsection