@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="pb-2">
            <h2 class="text-2xl font-semibold leading-tight">Add Patient</h2>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="/patients">
                @csrf

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Patient Picture</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Prefix</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Last Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_lname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">First Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Middle Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Suffix</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Sex</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Birth Date</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Birth Place</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Civil Status</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Maiden Last Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Maiden Middle Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Educational Attainment</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Employment Status</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Date of Effectivity</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Specify Occupation</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">PHIC Employer Number</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">PHIC Employer Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Monthly Income</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Nationality</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Tax Identification No. (TIN)</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Religion</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Indigenius Group</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Ethnic Group</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Blood Type</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Mother First Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_fname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Mother Last Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Mother Middle Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Mother Birth Date</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Family Member Specify</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Country</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Number/Street Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Region</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Province</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">City/Municipality</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Barangay</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Zip Code</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Patient Address</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Email</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Mobile</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Landline</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Family Member</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">DSWD NHTS member</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Facility Household Number</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Household Number</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Pantawid Pamilya Member?</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Family Serial Number</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Philhealth Member?</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Philhealth Number</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Philhealth Status Type</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Relationship to Member</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Member Last Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Member First Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>
                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Member Middle Name</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Member Birth Date</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Member Suffix</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Member Sex</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Philhealth Category</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Philhealth Sub Code</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">PCB Eligible?</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">Enlistment Date</label>
                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="pat_fname" type="text" name="pat_mname" required="required" autofocus="autofocus">
                </div>


                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                    Submit
                    </button>
                </div>
            </form>
    </div>
</div>

@endsection
