@extends('layouts')

@section('content')


<div class="map">
    @include ('layouts.partials.header')
<div class="menu-items">
    <div class="row-1-top">
        <div class="city-slum">
            <a class="menu-item-link" id="city-slum" href="{{route('city-slum')}}">
                <img class="menu-item" src="{{asset('images/map_items/alms.svg')}}" alt="the slums of the city">
            </a>
            <div class="city-slum-hide">City Slum</div>
        </div>

        <div class="waterwell">
            <a class="menu-item-link" id="village-waterwell" href="{{route('village-waterwell')}}">
                <img class="menu-item" src="{{asset('images/map_items/water-well.svg')}}" alt="the water well">
            </a>
            <div class="village-waterwell-hide">Water Well</div>
        </div>
    </div>

    <div class="row-2-top">
        <div class="city-rich">
            <a class="menu-item-link" id="city-rich" href="{{route('city-rich')}}">
                <img class="menu-item" src="{{asset('images/map_items/real-estate.svg')}}" alt="the rich part of the city">
            </a>
            <div class="city-rich-hide">City Rich</div>
        </div>

        <div class="city-school">
            <a class="menu-item-link" id="city-school" href="{{route('city-school')}}">
                <img class="menu-item" src="{{asset('images/map_items/university.svg')}}" alt="the school of the city">
            </a>
            <div class="city-school-hide">City School</div>
        </div>

        <div class="village-farm">
            <a class="menu-item-link" id="village-farm" href="{{route('village-farm')}}">
                <img class="menu-item" src="{{asset('images/map_items/agriculture.svg')}}" alt="the farm">
            </a>
            <div class="village-farm-hide">Village Farm</div>
        </div>
        <div class="village-school">
            <a class="menu-item-link" id="village-school" href="{{route('village-school')}}">
                <img class="menu-item" src="{{asset('images/map_items/hut (1).svg')}}" alt="the school in the village">
            </a>
            <div class="village-school-hide">Village School</div>
        </div>
    </div>

    <div class="row-3-top">
        <div class="city-entrance">
            <a class="menu-item-link" id="city-entrance" href="{{route('city-entrance')}}">
                <img class="menu-item" src="{{asset('images/map_items/buildings.svg')}}" alt="the city entrance">
            </a>
            <div class="city-entrance-hide">City Entrance</div>
        </div>

        <div class="village-entrance">
            <a class="menu-item-link" id="village-entrance" href="{{route('village-entrance')}}">
                <img class="menu-item" src="{{asset('images/map_items/mountain.svg')}}" alt="the entrance of the village">
            </a>
            <div class="village-entrance-hide">Village Entrance</div>
        </div>
    </div>

    <div class="row-4-top">
        <div class="main-road">
            <a class="menu-item-link" id="main-road" href="{{route('main-road')}}">
                <img class="menu-item" src="{{asset('images/map_items/road.svg')}}" alt="the main road">
            </a>
            <div class="main-road-hide">Main Road</div>
        </div>
    </div>
</div>
</div>
@endsection

