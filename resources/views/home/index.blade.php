@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row text-center">
        <div class="col-md-12">
            <h1 class="pt-3 pb-3">Currency Converter</h1>
        </div>
        
    </div>

    <div class="converter-body">
        <form id="currency-form-submit" enctype="multipart/form-data">
            {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-white pb-3">Amount</h2>
                <input class="form-control"  min="0" required type="number" name="amount" onchange="numberChange(this);">  
            </div>
            
        </div>

        <div class="row pt-3">
            <div class="col-md-6">
                <h5 class="text-white pb-3">From</h5>
                <select class="form-control" name="from" id="from">
                    <option value="USD">USD</option>
                    <option value="LKR">LKR</option>
                    <option value="AED">AED</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">GBP</option>
                    <option value="INR">INR</option>
                </select>
            </div>
            <div class="col-md-6">
                <h5 class="text-white pb-3">To</h5>
                <select class="form-control" name="to" id="to">
                    <option value="LKR">LKR</option>
                    <option value="USD">USD</option>
                    <option value="AED">AED</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">GBP</option>
                    <option value="INR">INR</option>
                </select>
            </div>
            
        </div>

        <div class="row pt-3">
            <div class="col-md-12 text-center">
                
                <button class="btn btn-success mt-4 btn-convert w-50 mx-auto">Convert</button>
            </div>
            
        </div>

        </form>

        <div class="row pt-3">

            <div class="col-md-12 loading-img" >
                <div class="col-md-1 mx-auto">
                    <img width="100%" src="{{asset('assets/images/loading.gif')}}">
                </div>
            </div>
        
            <div class="col-md-12 result-div">
                <h3 class="text-center text-white">Result</h3>
                <h1 class="text-center text-white" ><span id="result">0</span> <span id="result_currency">LKR</span></h1> 
            </div>
            
        </div>
    </div>
</div>


@endsection
   
