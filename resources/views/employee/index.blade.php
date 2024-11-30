@extends('app')

@section('title', 'Employee List')
@section('header', 'All Employees')
@section('content')
{{-- @section('scripts') --}}

 
<div class="flex flex-col items-center justify-center rounded-lg min-h-screen bg-gray-200">
<table>
    <thead>
        <tr>
            
           <th class=""><div class="bg-blue-500 text-white font-bold py-2 px-4 text-center rounded mr-2 ">
            Name
        </div></th>
           <th><div class="bg-blue-500 text-white font-bold py-2 px-4 text-center rounded mr-2">
            Email
        </div></th>
            <th class=""><div class="bg-blue-500 text-white font-bold py-2 px-4 text-center rounded mr-2">
                phone
            </div></th>
           <div> <th><div class="bg-blue-500 text-white font-bold py-2 px-4 text-center rounded mr-2">
            job_title
        </div></th></div>
           <div> <th><div class="bg-blue-500 text-white font-bold py-2 px-4 text-center rounded mr-2">
            hired_date
        </div></th></div>
        </div>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr class="bg-white border-b hover:bg-gray-100">
            <td class="px-4 py-2 text-gray-700 font-medium">{{ $employee->name }}</td>
            <td class="px-4 py-2 text-gray-700">{{ $employee->email }}</td>
            <td class="px-4 py-2 text-gray-700">{{ $employee->phone }}</td>
            <td class="px-4 py-2 text-gray-700">{{ $employee->job_title }}</td>
            <td class="px-4 py-2 text-gray-700">{{ $employee->hired_date }}</td>
        </tr>
        

        <td>
            <form action="{{ route('delete', ['id' => $employee->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                {{-- <div class="flex flex-row gap-2 justify-center mr-10 mb-2"> --}}
                    <div class="flex flex-row gap-3 mb-2">
               <div> <button class="bg-red-400 rounded-lg text-white  p-2" >delete</button></div>
            
            </form>
            
            
                <!-- Update Button (Link to the update form) -->
               <div class="mt-2"> <a href="{{ route('employee.edit', ['id' => $employee->id]) }}" class="bg-green-400 rounded-lg text-white py-2 px-4">Edit</a></div>
            </div>
        </td>
        </tr>
        
        @endforeach
        
    </tbody>
    
    
    <form action="{{ route('showForm') }}" method="GET">
        @csrf
        <div class="flex flex-row items-end">
            {{-- <p>please create a new employee record</p> --}}
            <button type="submit" class="bg-green-600 p-3 mt-1 rounded-lg text-white">add new employee</button>
        </div>
    </form>
</table>
</div>
    
        {{-- @section('scripts') --}}
<script>
    $(document).ready(function() {
        $('#employeeTable').DataTable();
    });
</script>
@endsection


















