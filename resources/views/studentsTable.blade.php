<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    
</head>
<body>
    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                    <form action="{{route('edit',[$student])}} " method="post">
                    @csrf 
                     @method('post')
                    <button>edit</button></form>
                </td>
                <td class="px-6 py-4">
                    <form action="{{route('delete',[$student])}} " method="post">
                        @csrf
                        @method('delete')
                    <button>delete</button></form>
                </td>
            </tr>
            
           @endforeach
           
            
        </tbody>
    </table>
</div>

</body>
</html>
