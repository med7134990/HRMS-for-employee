@extends('app')
@section('content')

<form action="{{ route('employee.create') }}"  method="POST">
    @csrf
    <div class="flex flex-col gap-3 items-center bg-gray-300 rounded-lg">

    <div class="">
    <p class="font-bold">enter name</p>
    <input type="text" placeholder="name" name="name" class="p-2 rounded-lg">
    </div>

    <div>
    <p class="font-bold">enter email</p>
    <input type="text" placeholder="email" name="email" class="p-2 rounded-lg">
    </div>

    <div>
    <p class="font-bold">enter phone</p>
    <input type="text" name="phone" placeholder="phone" class="p-2 rounded-lg">
    </div>

    
    <div>
        <p class="font-bold">enter job title</p>
        <input type="text" name="job_title" placeholder="your position" class="p-2 rounded-lg">
    </div>
    
    <div class="mr-12">
    <p class="font-bold">enter hired date</p>
    <input type="date" name="hired_date" placeholder="date" class="p-2 rounded-lg">
    </div>

<div class="flex flex-row mr-8">
    <div class="ml" class="p-2 rounded-lg">
    <p class="font-bold">Enter Status</p>
    <select name="status">
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
    </div>
    </select>

   <div class="mt-2 ml-2 pt-1"> <button type="submit" class=" pb-2 pt-1 px-3 rounded-lg bg-lime-500">create</button></div>
</div>
</div>
</form>



@endsection
