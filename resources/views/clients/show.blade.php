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
            <div class="col-12 col-md-8">
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#####</th>
                        <th scope="col">#####</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Date</th>
                        <td>{{ $client->date }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Description</th>
                        <td>{{ $client->client_name }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Phone</th>
                        <td>{{ $client->phone }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Order</th>
                        <td>{{ $client->order }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Status</th>
                        <td>{{ $client->status }}</td>
                      </tr>
                      <tr>
                        <th scope="row">USD</th>
                        <td>{{ $client->USD }}</td>
                      </tr>
                      <tr>
                        <th scope="row">ZWD</th>
                        <td>{{ $client->ZWD }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Comment</th>
                        <td>{{ $client->txtMessage }}</td>
                      </tr>
                    </tbody>
                  </table>
                  
                    <a href="{{ route('client.client.index') }}" role="button" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
</main>
@endsection