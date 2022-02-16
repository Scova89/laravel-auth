@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{$post->title}}</h3></div>

                    <div class="card-body">
                        <div>
                            
                            @if ($post->published)
                            <h6>Stato: <span class="badge badge-primary">Pubblicato</span></h6>
                                
                            @else
                            <h6>Stato: <span class="badge badge-danger">Bozza</span></h6>
                                
                            @endif
                            
                        </div>

                        {{$post->content}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection