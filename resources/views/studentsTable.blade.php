<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <x-layout></x-layout>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg gap-4">
    <table scope="col-4" id="student_table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 gap-3">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                     id
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    age
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    Student
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student) 
            
            
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$student->id}}
                </th>
                <td class="px-6 py-4">
                    {{$student->name}}
                </td>
                <td class="px-6 py-4">
                    {{$student->age}}
                </td>
                <td class="px-6 py-4">
                    {{$student->email}}
                </td>
                    
                <td class="px-6 py-4">
                <img src="{{ asset('photos/' . $student->photo) }}" class="img-photo" alt="Student Photo" style="width: 100px; height: auto;">
                </td>

                <td class="px-6 py-4">
                    <form action="{{route('edit',[$student])}} " method="post">
                    @csrf 
                     @method('post')
                    <button><svg class="w-[42px] h-[42px] text-yellow-400 hover:bg-gray-500 dark:text-yellow-400 hover:yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
</svg>
</button></form>
                </td>
                <td class="px-6 py-4">
                    <form action="{{route('delete',[$student])}} " method="post">
                        @csrf
                        @method('delete')
                    <button><svg class="w-[42px] h-[42px] text-red-800 dark:text-red hover:bg-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1" d="M3 15v3c0 .5523.44772 1 1 1h16c.5523 0 1-.4477 1-1v-3M3 15V6c0-.55228.44772-1 1-1h16c.5523 0 1 .44772 1 1v9M3 15h18M8 15v4m4-4v4m4-4v4m-5.5061-7.4939L12 10m0 0 1.5061-1.50614M12 10l1.5061 1.5061M12 10l-1.5061-1.50614"/>
</svg>
</button></form>
                </td>
            </tr>
            
           @endforeach
           
            
        </tbody>
    </table>
</div>

</body>
</html>
