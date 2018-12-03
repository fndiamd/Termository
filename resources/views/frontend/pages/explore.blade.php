@extends('frontend.layouts.master')
@section('title')
    Explore files on Termository
@endsection
@section('content')
    <section class="bg-white default-space begin-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                <ul class="list-group">
                    @foreach($category as $cat)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <i class="{{ $cat->faicon }}"></i>
                        {{ $cat->category }}
                        <span class="badge badge-primary badge-pill">0</span>
                    </li>
                    @endforeach
                </ul>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-12">
                    <div class="row justify-content-end">
                        <div class="col-md-6 ">
                            <form action="{{ url('search') }}">
                                <div id="custom-search-input">
                                    <div class="input-group col-md-12">
                                        <input type="text" class="form-control input-lg" placeholder="Search files" name="key"/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
@endsection