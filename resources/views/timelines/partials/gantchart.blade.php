<h2>
    <a href="{{ action('TimelinesController@show', ['project' => $timeline->project->id]) }}">Timeline</a>
    <span class="badge">{{ $timeline->duration }} Days</span>
</h2>
<div class="timeline">
    @foreach($timeline->activities as $activity)
        <div class="activity <?= $activity->duration == 0 ? 'milestone' : '' ?>">


            <span class="details col-md-5">
                @if(!empty($controls) && $controls)
                    <form method="POST" action="{{ action('ActivitiesController@destroy', ['activity' => $activity->id]) }}" style="display: inline-block;">
                    {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <button class="btn btn-xs btn-danger">Delete</button>
                </form>
                @endif
                <span class="name ">{{ $activity->name }}</span>
            </span>




            <span class="duration col-md-7">
                <span class="fill" style="width:{{ $activity->duration / $timeline->duration * 100 }}%; left: {{ $activity->start->diffInDays($timeline->start)  / $timeline->duration * 100}}%">
                    {{ $activity->duration > 0 ? $activity->duration . 'd' : '' }}
                </span>
            </span>
        </div>
    @endforeach
    <div class="today col-md-7">
        <div class="indicator" style="left: {{ \Carbon\Carbon::today()->diffInDays($timeline->start)  / $timeline->duration * 100 }}% ">
            <span class="label">{{ date('d/m/Y') }}</span>
        </div>
    </div>
</div>