@extends('layouts.app')

@section('content')
<main id="main">
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">We Do Great Design For Creative Folks</h1>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                  <a href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Clients
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section><!-- End Intro Single-->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Combo</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <th scope="row">{{ $client->id }}</th>
                                <td>{{ $client->date }}</td>
                                <td>{{ $client->client_name }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->order }}</td>
                                <td>{{ $client->status }}</td>
                                <td>
                                    <a href="{{ route('client.client.show', $client) }}">
                                        <button type="button" class="btn btn-success float-left">View</button>
                                    </a> 
                                    <a href="{{ route('client.client.edit', $client) }}">
                                        <button type="button" class="btn btn-primary float-left">Edit</button>
                                    </a>
                                    <form action="{{ route('client.client.destroy', $client) }}" method="POST"
                                            class="float-left">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                  </table>
                  {{ $clients->links() }}
                    <a href="{{ route('client.client.create') }}" role="button" class="btn btn-primary">Add New</a>
            </div>
        </div>
    </div>
</main>
@endsection