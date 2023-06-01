@extends('layouts.base')

@section('page.title', 'Список участников')


@section('content')
<div class="d-flex justify-content-between">
    
        <h2 class="h2 m-0">
        {{ __('Список зарегистрировавшихся участников') }}
        </h2>
    

    @if(empty($participants))
        {{ __('Еще нет ни одного участника') }}
        
    @else
        
        <div class="row">
            @foreach($participants as $participant)
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>
                            {{ $participant -> name}}
                        </h5>
                        <p>
                        {{ $participant -> surname}}
                        </p>
                    </div>
                </div>
            
            </div>
        
        @endforeach
        </div>
    @endif
@endsection