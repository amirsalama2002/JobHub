<x-layout>
    <x-slot:name>
        Show Page :
    </x-slot> 
    <style>
        .count{
            border: 2px solid #123456;
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 10px 10px 5pc rgb(52, 39, 39);
        }
        .count #me{
            display: inline-block;
            margin: 10px 0;
        }
        .count .hassan{
            width: 100%;
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            flex-grow: 20px;
        }
        .count .hassan .mo{
           widows: 50rem;
           margin: auto;
        }
        .count .hassan .mo img{
            width: 100%;
            margin: auto;
            border: 2px solid black;
            /* padding: 5px; */
            height: 90vh;
        }
        strong{
            color: #123456;
            font-size: 20px;
            font-weight: bold;
        }
        p{
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            color: #123456;
        }
    </style>
        <p>Welcome Cv User : </p>
    <div class="count">
        <h2><strong>Leader : </strong>{{ $falcon->username }}</h2>
        <h3><strong> UserName :</strong> {{ $falcon->first_name }} {{ $falcon->last_name }} </h3>
        <h4><strong> Address : </strong>  {{ $falcon->city }}</h4>
        <h6><strong>About : </strong>{{ $falcon->about }}</h6>
        <h6><strong>Email : </strong>{{ $falcon->email }}</h6>
        <h6><strong>Country : </strong>{{ $falcon->country }}</h6>
        <h6><strong>Salary : </strong>{{ $falcon->street_address }}</h6>
        <h6><strong>Phone : </strong>{{ $falcon->state }}</h6>
        <h6><strong>Code : </strong>{{ $falcon->zip_code }}</h6>
        <div class="hassan">
            <div class="mo">
                <img src="{{asset('storage/' . $falcon->photo)}}" alt="">
            </div>
            <div class="mo">
                <img src="{{asset('storage/' . $falcon->cover_photo)}}" alt="">
            </div>
        </div>
        <a id="me" href="/countact" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Back Jobs
        </a>
    </div>
</x-layout>
