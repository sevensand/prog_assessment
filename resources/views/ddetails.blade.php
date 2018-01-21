@extends('layout.header')
<div class="container">
  <div class="row">
      <h3>{{ $item->name }} - {{ $item->user_id }}</h3>
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
        <tr class="content_table">
          <td>{{ $item->user_id }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->url }}</td>
          <td>{{ $item->created_date}}</td>
          <td>{{ $item->last_push_date }}</td>
          <td>{{ $item->description }}</td>
          <td>{{ $item->no_of_star }} <i class="fa fa-star fa-1x" aria-hidden="true"></i></td>
        </tr>
      </tbody>
    </table>
    <div class="col-md-12 pull-right">
      <a href="../"><i class="fa fa-reply fa-2x" aria-hidden="true"></i></a>
    </div>
  </div>
</div>
