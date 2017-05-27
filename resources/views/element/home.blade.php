@extends('index')
@section('content')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <h2 style="color: lightseagreen">Product</h2>
        </div>
    </nav>
    <div class="my-content">
     <div class="col-md-8 col-lg-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading"><b>Product</b></div>
            <div class="panel-body">Тут відображаються продукти</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Название продукта</th>
                        <th>Количиство на складе</th>
                        <th>Название склада</th>
                    </tr>
                </thead>
                <tbody>
                   @if($csvArr)
                    @foreach($csvArr as $csv)

                    <tr>
                        <td>
                            {{$csv[0]}}

                        </td>
                        <td>
                            @if($csv[1] <= 0)
                                -
                            @else
                                {{$csv[1]}}
                            @endif

                        </td>
                        <td>{{$csv[2]}}</td>
                    </tr>
                    @endforeach
                   @endif
                </tbody>
            </table>
        </div>
        <div class="col-md-8 col-lg-offset-2">
            @include('element/form_upload')
        </div>
     </div>
    </div>
@stop