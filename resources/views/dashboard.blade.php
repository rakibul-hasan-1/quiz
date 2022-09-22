@extends('layouts.app')
@section('body')

<div class="container text-center">
    
    <div class="">
    <a href="{{route('quiz')}}">Start Quiz</a>
    </div>
    <div>
        <br>
        <br>
    <a href="#">Total Result</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($fresult) && count($fresult)>0)
                @foreach($fresult as $key=>$result)
                <tr>
                    <td>{{$key=$key+1}}</td>
                    <?php
                    $user=\App\Models\User::find($result->uid);
                    ?>
                    <td>{{$user->name ?? ""}}</td>
                    <td>{{$result->dept}}</td>
                    <td>{{$result->total}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <br>
        <br>
    <a href="#">Department A Result</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($daresult) && count($daresult)>0)
                @foreach($daresult as $key=>$result)
                <tr>
                    <td>{{$key=$key+1}}</td>
                    <?php
                    $user=\App\Models\User::find($result->uid);
                    ?>
                    <td>{{$user->name ?? ""}}</td>
                    <td>A</td>
                    <td>{{$result->total}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <br>
        <br>
    <a href="#">Department B Result</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($dbresult) && count($dbresult)>0)
                @foreach($dbresult as $key=>$result)
                <tr>
                    <td>{{$key=$key+1}}</td>
                    <?php
                    $user=\App\Models\User::find($result->uid);
                    ?>
                    <td>{{$user->name ?? ""}}</td>
                    <td>B</td>
                    <td>{{$result->total}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
