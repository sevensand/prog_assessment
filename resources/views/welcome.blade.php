<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @include('layout/header')
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Most starred public PHP projects - GITHUB API</h3>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <table class="table table-striped">
            <thead class="btn-info">
              <tr class="header_table">
                <th>ID</th>
                <th>Name</th>
                <th>URL</th>
                <th>Create Date</th>
                <th>Last Push Date</th>
                <th>Description</th>
                <th>Number of Star</th>
              </tr>
            </thead>
            <tbody>
              @foreach($member->items as $result)
              <tr class="content_table">

                <td><a href="{{ URL::route('Repository', $result->id) }}">{{ $result->id }}</a></td>
                <td>{{ $result->name }}</td>
                <td><a href="{{ $result->url }}">{{ $result->url }}</a></td>
                <td>{{ $result->created_at }}</td>
                <td>{{ $result->pushed_at }}</td>
                <td>{{ $result->description }}</td>
                <td>{{ $result->stargazers_count }} <i class="fa fa-star fa-1x" aria-hidden="true"></i></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </body>
</html>
