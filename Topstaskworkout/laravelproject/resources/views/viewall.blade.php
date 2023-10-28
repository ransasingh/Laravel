<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         
            <a href="product">product</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
              <table  class="table-striped">
                <thead>
                <tr>
                    <th>product_title</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                @foreach($allproduct as $data)
                <th>{{ $data->product_title}}</th> <br>
             
               
                </tr>
                @endforeach
                </tbody>
              </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>