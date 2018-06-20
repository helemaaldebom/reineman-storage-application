@extends('app')

@section('content')

    <h1>Bewerk plaats</h1>

    {!! Form::open(['method' => 'PATCH', 'url' => 'storage/edit/' . $storage->cid]) !!}

    {!! Form::hidden('sid', $storage->sid, '') !!}

    <div class="form-group">
        {!! Form::label('cid', 'Klant') !!}

        <select name="cid" class="form-control">
            <option value="">-</option>
            @foreach($clients as $client)
                <option value="{{ $client->cid }}" @if($client->cid == $storage->cid) {{ "selected" }} @endif> {{ ucfirst($client->firstname) . ' ' . ucfirst($client->lastname) }} </option>
            @endforeach
        </select>

    </div>


    {!! Form::submit('Opslaan', array('class' => 'btn btn-success')) !!}

    {!! Form::close() !!}

@stop