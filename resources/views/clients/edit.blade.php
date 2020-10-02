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
                <form action="{{ route('client.client.update', $client) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <label for="date">Date</label>
                        <input id="date" value="{{ $client->date }}" type="date" name="date" class="form-control">          
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="name">Client Name</label>
                        <input id="name" value="{{ $client->client_name }}" type="text" name="client_name" class="form-control">          
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <label for="phone">Phone</label>
                        <input id="phone" value="{{ $client->phone }}" type="tel" name="phone" class="form-control">
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="order">Combo</label>
                        <input id="order" value="{{ $client->order }}" type="text" name="order" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <label for="status">Payment Status</label>
                          <select id="status" name="status" class="form-control">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="paid">Paid</option>
                            <option value="not paid">Not Paid</option>
                          </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <label for="usd">Amount USD</label>
                        <input id="usd" value="{{ $client->USD }}" type="text" name="USD" class="form-control">
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="zwd">Amount ZWD</label>
                        <input id="zwd" value="{{ $client->ZWD }}" type="text" name="ZWD" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <label for="txtMessage">Comment</label>
                        <textarea id="txtMessage" name="txtMessage" class="form-control" rows="4">{{ $client->txtMessage }}</textarea>
                        
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-12 col-md-6">
                        <button class="btn btn-primary" type="submit" name="action">Submit</button>
                    </div>
                    </div>
                    
                  </form>
            </div>
        </div>
    </div>
</main>
@endsection