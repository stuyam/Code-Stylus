@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Code Stylus Guide</div>

                    <div class="panel-body">
                        <a href="{{ route('guides.create') }}" class="btn btn-primary">Create New</a>
                        <table class="table">
                        @foreach($guides as $guide)
                            <tr>
                                <td>
                                    {!! $guide->private ? '<i class="fa fa-lock"></i>' : '<i class="fa fa-unlock"></i>' !!}
                                    {{ $guide->title }}
                                </td>
                                <td><a href="/{{ $guide->slug }}">View</a></td>
                                <td>Edit</td>
                                <td>
                                    @if($guide->private)
                                        <a href="/guides/{{ $guide->slug }}/privacy">Add User Access</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection