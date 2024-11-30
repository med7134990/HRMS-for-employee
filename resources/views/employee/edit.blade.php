@extends('app')
@section('content')

<form action="{{ route('update', ['id' => $employee->id]) }}" method="POST">
    @csrf
    @method('PUT') 
 <div class="flex flex-col gap-3 items-center bg-gray-300 rounded-lg">
       <div class=" font-bold"> <h1>update employee</h1></div>

    <div> 
        <p class="font-bold">Enter Name</p>
        <input type="text" name="name" class="p-2 rounded-lg" value="{{ $employee->name }}">
    </div>

    <div>
    <p class="font-bold">Enter Email</p>
    <input type="email" name="email" class="p-2 rounded-lg" value="{{ $employee->email }}">
     </div>

     <div>
    <p class="font-bold">Enter Phone</p>
    <input type="text" name="phone" class="p-2 rounded-lg" value="{{ $employee->phone }}">
    </div>
    
    <div>
    <p class="font-bold">Enter Job Title</p>
    <input type="text" name="job_title" class="p-2 rounded-lg" value="{{ $employee->job_title }}">
    </div>

    <div class="mr-12" >
    <p class="font-bold">Enter hired_date</p>
    <input type="date" name="hired_date" class="p-2 rounded-lg" value="{{ $employee->hired_date}}">
    </div>

<div class="flex flex-row " >
    <div class="mb-2 mr-6">
    <p class="font-bold">Enter Status</p>
    <select name="status" class="p-2 rounded-lg">
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
    </div>
    </select>
    <div class="mt-3">
    <button type="submit" class="bg-green-400 rounded-lg text-white p-2">Update</button>
    </div>
</div>
</div>
</form>

@endsection