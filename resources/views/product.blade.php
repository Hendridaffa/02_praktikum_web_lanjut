@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <h1 class="display-4"><?php echo $page ?></h1><a href='<?php echo $url ?>'><button>KLIK!</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection