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
                    Suppliers
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
                        <td>{{ $expense->date }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Description</th>
                        <td>{{ $expense->description }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Category</th>
                        <td>{{ $expense->category }}</td>
                      </tr>
                      <tr>
                        <th scope="row">USD</th>
                        <td>{{ $expense->usd }}</td>
                      </tr>
                      <tr>
                        <th scope="row">ZWD</th>
                        <td>{{ $expense->zwd }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Image</th>
                        <td>{{ $expense->image }}</td>
                      </tr>
                    </tbody>
                  </table>
                  
                    <a href="{{ route('supplier.supplier.index') }}" role="button" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
</main>
@endsection