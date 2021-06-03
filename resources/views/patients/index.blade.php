@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="pb-2">
            <h2 class="text-2xl font-semibold leading-tight">Patient Lists</h2>
        </div>
        <div class="py-3">
            <a class="py-2 px-4 bg-transparent text-red-600 font-semibold border border-red-600 rounded hover:bg-red-600 hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0" href="/patients/create">Add Patient</a>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Last Name</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">First Name</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Middle Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($patients as $patient)

                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $patient->id }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $patient->pat_lname }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $patient->pat_fname }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $patient->pat_mname }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><a href="/patient/edit/">Edit</a></td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">Delete Record</td>
                        </tr>

                        @empty
                            <tr>
                                <td colspan="6" class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p>Empty patient list</p></td>
                            </tr>

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
