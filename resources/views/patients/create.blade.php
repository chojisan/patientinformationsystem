@extends('layouts.app')

@section('content')
<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <form method="POST" action="/patients">
        @csrf
        <div class="grid grid-cols-2 md:grid-cols-2">
            <div class="p-6">
                    First Name
            </div>
            <div class="p-6">
                    <input type="text" class="input border-1 border-black shadow" name="pat_fname" value="{{ old('pat_fname') }}" />
            </div>

            <div class="p-6">
                    Middle Name
            </div>
            <div class="p-6">
                    <input type="text" class="input shadow" name="pat_mname" value="{{ old('pat_mname') }}" />
            </div>

            <div class="p-6">
                    Last Name
            </div>
            <div class="p-6">
                    <input type="text" class="input border-1 border-black shadow" name="pat_lname" value="{{ old('pat_lname') }}" />
            </div>
        </div>
        <button type="submit" class="button primary">Submit</button>
    </form>
</div>
@endsection
