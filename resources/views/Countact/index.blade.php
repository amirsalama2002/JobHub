<x-layout>
    <x-slot:name>
        Countact Page :
    </x-slot>  
    <style>
        #falcon{
            position: fixed;
            right: 10px;

        }
        .add{
            width: 99%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;

        }
        .add .count{
            width:20rem;
            margin: 10px auto;
            padding: 5px;
            border: 1px solid rgb(34, 30, 30);
            border-radius: 5px;
        }
        .add .count img{
            width: 200px;
            height: 200px;
        }
        .add .count strong{
            color: #123456;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    <h2 class="text-sm/10 font-semibold text-gray-900">List of users</h2>
    <a href="{{ route('countact.create') }}" id="falcon" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add</a>
    <ul>
        <div class="add">
        @foreach ($profiles as $profile)
            <div class="count">
            <li>
                {{-- <strong>{{ $profile->first_name }} {{ $profile->last_name }} {{ $profile->city }}</strong> - {{ $profile->email }}

                <img src="{{asset('storage/' . $profile->photo)}}" alt=""> --}}
                <h2><strong>Leader : </strong>{{ $profile->username }}</h2>
                <h1><strong> UserName :</strong> {{ $profile->first_name }} {{ $profile->last_name }} </h1>
                <h4><strong> Address : </strong>  {{ $profile->city }}</h4>
                <h6><strong>About : </strong>{{ $profile->about }}</h6>
                <h6><strong>Email : </strong>{{ $profile->email }}</h6>
                <h6><strong>Country : </strong>{{ $profile->country }}</h6>
                <h6><strong>Salary : </strong>{{ $profile->street_address }}</h6>
                <h6><strong>Phone : </strong>{{ $profile->state }}</h6>
                <h6><strong>Code : </strong>{{ $profile->zip_code }}</h6>
                {{-- <a href="{{ route('countact.edit', $profile->id) }}">Edit</a> --}}
                <a href="{{ route('countact.show', $profile->id) }}" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Show</a>
                <form action="{{ route('countact.destroy', $profile->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Delete</button>
                </form>
            </li>
        </div>
        @endforeach
    </div>
        </ul>
      
</x-layout>