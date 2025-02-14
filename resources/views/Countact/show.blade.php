<x-layout>
    <x-slot:name>
        Show Page :
    </x-slot> 
    @foreach ($name as $profile)
    <div class="count">
        <h2><strong>Leader : </strong>{{ $profile->username }}</h2>
        <h1><strong> UserName :</strong> {{ $profile->first_name }} {{ $profile->last_name }} </h1>
        <h4><strong> Address : </strong>  {{ $profile->city }}</h4>
        <h6><strong>About : </strong>{{ $profile->about }}</h6>
        <h6><strong>Email : </strong>{{ $profile->email }}</h6>
        <h6><strong>Country : </strong>{{ $profile->country }}</h6>
        <h6><strong>Salary : </strong>{{ $profile->street_address }}</h6>
        <h6><strong>Phone : </strong>{{ $profile->state }}</h6>
        <h6><strong>Code : </strong>{{ $profile->zip_code }}</h6>
        <a href="{{ route('countact.index', $profile->id) }}"  class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 mt-100" >Index</a>

</div>
@endforeach
</x-layout>
