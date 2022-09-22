@extends('layouts.app')
@section('body')

<div class="container text-center">
   <div class="card">
    <div class="card-header">
        <a href="/">Back</a>
    </div>
    <div class="card-body">
        <form action="{{route('submitquiz')}}" method="post">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Q1. Who invented OOP?</label>
            <br>
            <label for="optionaa"><input type="checkbox" class="chb" name="q1" value="a" id="optionaa"> Andrea Ferro</label>
            <br>
            <label for="optionab"><input type="checkbox"  class="chb" name="q1" value="b" id="optionab"> Adele Goldberg</label>
            <br> 
            <label for="optionac"><input type="checkbox" class="chb" name="q1" value="c" id="optionac"> Alan Kay</label>
            <br>
            <label for="optionad"><input type="checkbox" class="chb" name="q1" value="d" id="optionad"> Dennis Ritchie</label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Q2. Which is not a feature of OOP in general definitions?</label>
            <br>
            <label for="optionba"><input type="checkbox" name="q2[]" value="a" id="optionba"> Efficient Code</label>
            <br>
            <label for="optionbb"><input type="checkbox" name="q2[]" value="b" id="optionbb"> Code reusability</label>
            <br> 
            <label for="optionbc"><input type="checkbox" name="q2[]" value="c" id="optionbc"> Modularity</label>
            <br>
            <label for="optionbd"><input type="checkbox" name="q2[]" value="d" id="optionbd"> Duplicate/Redundant data</label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Q3. Evelute Coorect answer</label>
            <br>
            <div>
                <p class="mb-0 mt-1">Bangladesh is a Country</p>
                    <label for="optionca"><input type="radio" name="q3a" value="a" id="optionca"> True</label>
                    <br>
                    <label for="optioncb"><input type="radio" name="q3a" value="b" id="optioncb"> False</label>
            </div>
            <div>
                <p class="mb-0 mt-1">Dhaka is the  capital of Bangladesh</p>
                    <label for="optionda"><input type="radio" name="q3b" value="a" id="optionda"> True</label>
                    <br>
                    <label for="optiondb"><input type="radio" name="q3b" value="b" id="optiondb"> False</label>
            </div>
            <div>
                <p class="mb-0 mt-1">Bangladesh is a Beautiful Country</p>
                    <label for="optionea"><input type="radio" name="q3c" value="a" id="optionea"> True</label>
                    <br>
                    <label for="optioneb"><input type="radio" name="q3c" value="b" id="optioneb"> False</label>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </div>
</form>
    </div>
</div>
@endsection
@push('js')
<script>
    $(".chb").change(function() {
    $(".chb").not(this).prop('checked', false);
});
</script>
@endpush