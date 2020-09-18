<div class="wrap_countries">

    @foreach($areas as $area)
        <form action="{{route('show', $area['Name'])}}" method="get">
            @csrf
            <input type="hidden" name="area_id" value="{{$area['AreaId']}}">
            <input type="hidden" name="area_name" value="{{$area['Name']}}">

            @foreach($area['Competitions'] as $competition)
            	
                @php 
                    $comp_id = $competition['CompetitionId'];
                @endphp
                
            @endforeach

            <input type="hidden" name="comp_id" value="{{ $comp_id }}">
            <button type="submit">{{ $area['Name'] }}</button>
        </form>
    @endforeach

</div>
