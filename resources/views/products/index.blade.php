@extends('layaoutss.app')

@section('title', 'Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">

        <table class="table-fixed w-full">
          <thead>
            <tr class="bg-pink-500 text-white">
              <th class="w-20 py-4 ">ID</th>
              <th class="w-1/8 py-4 "> title</th>
              <th class="w-1/16 py-4 ">color</th>
              <th class="w-1/16 py-4 ">precio</th>
              <th class="w-1/16 py-4 ">Create</th>
              <th class="w-1/16 py-4 ">Update</th>
              <th class="w-28 py-4 ">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $row)
          <tr class="object-center">
              <td class="py-3 px-6">{{$row->id }}</td>
              <td class="p-3">{{ $row->title }}</td>
              <td class="p-3 text-center">{{ $row->color }}</td>
              <td class="p-3 text-center">{{ $row->price }}</td>
              <td class="p-3 text-center">{{ $row->created_at }}</td>
              <td class="p-3 text-center">{{ $row->updated_at }}</td>
              <td class="p-3 flex justify-center" >

                <form action="{{ route('products.destroy', $row->id) }}" method="POST">
                    @csrf
                    @method('delete')

                    <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                    <i class="fas fa-trash"></i></button>
                </form>

                <a href="{{ route('products.edit', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                <i class="fas fa-pen"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <nav class="h-16 flex justify-end py-4 px-16">
            <a href="{{route('products.index')}}"  class="borde borde-pink-500 rounded px-4 pt-1 h-10 bg-white text-pink-300 font-semibold mx-2"> 
            Products</a>
            <a href="{{route('products.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-pink-500 font-semibold mx-2 hover:pink-700">Create  </a>

        </nav>

</div>

@endsection