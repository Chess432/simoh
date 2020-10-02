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
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Supplier Name</th>
                        <th scope="col">Item purchased</th>
                        <th scope="col">Invoice</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <th scope="row">{{ $supplier->id }}</th>
                                <td>{{ $supplier->date }}</td>
                                <td>{{ $supplier->suppliers_name }}</td>
                                <td>{{ $supplier->item_purchased }}</td>
                                <td>{{ $supplier->invoice }}</td>
                                <td>
                                    <a href="{{ route('supplier.supplier.show', $supplier) }}">
                                        <button type="button" class="btn btn-success float-left">View</button>
                                    </a> 
                                    <a href="{{ route('supplier.supplier.edit', $supplier) }}">
                                        <button type="button" class="btn btn-primary float-left">Edit</button>
                                    </a>
                                    <form action="{{ route('supplier.supplier.destroy', $supplier) }}" method="POST"
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
                  {{ $suppliers->links() }}
                    <a href="{{ route('supplier.supplier.create') }}" role="button" class="btn btn-primary">Add New</a>
            </div>
        </div>
    </div>
</main>
@endsection