@extends('layouts.app')

@section('content')
<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1">
        <a class="button" href="/patients/create">Add Patient</a>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Last Name</td>
                    <td>First Name</td>
                    <td>Middle Name</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
            @forelse($patients as $patient)

                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->pat_lname }}</td>
                    <td>{{ $patient->pat_fname }}</td>
                    <td>{{ $patient->pat_mname }}</td>
                    <td><a href="/patient/edit/">Edit</a></td>
                    <td>Delete Record</td>
                </tr>

                @empty
                    <tr>
                        <td colspan="6"><p>Empty patient list</p></td>
                    </tr>

            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
