@extends('Test.layouts.layout')

@section('content')

    <div class="col-md-9">

{{--		<pre>
		    {{ print_r(Session::all()) }}
		</pre>--}}

        {{--<div class="">
            <h2>Contact us!</h2>
        </div>--}}

        <div class="">
            <h2>{{ $title_head }}</h2>
        </div>

        <p>
            This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
        </p>

       {{-- <pre>
		    {{ print_r(Session::all()) }}
		</pre>--}}

        @if(count($errors) > 0)

            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                                {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>

        @endif

{{--        //,['name'=>'hello']--}}
        <form method="post" action="{{ route('contact.store')}}">
            @csrf
{{--            <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
{{--            <input type="hidden" name="_method" value="PUT">--}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Stas Orel">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="name_confirmation" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="site">Site</label>
                <input type="text" class="form-control" id="site" value="{{ old('site') }}" name="site" placeholder="Site">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea class="form-control" id="text" name="text" rows="3">{{ old('text') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
