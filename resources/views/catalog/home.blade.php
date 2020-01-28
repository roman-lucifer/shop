@extends('app')

@section('content')
    <div class="container mt-5">
        <div class="h3 mb-3">Catalog</div>
        <div class="row">
@php($i = 0)
            @foreach($categoryes as $category)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card shadow">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://picsum.photos/420/300?random={{$i++}}">
                            <a href="{{$category['link']}}">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">{{$category['category_name']}}</h4>
                            <p class="card-text">{{$category['description']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection