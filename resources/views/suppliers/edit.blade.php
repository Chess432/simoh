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
                <form action="{{ route('supplier.supplier.update', $supplier) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="dateInput">Date</label>
                                <input type="date" value="{{ $supplier->date }}" class="form-control" id="dateInput" name="date" placeholder="date">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="suppliers_name">Suppliers Name</label>
                                <input type="text" value="{{ $supplier->suppliers_name }}" class="form-control" id="suppliers_name" name="suppliers_name" placeholder="Suppliers Name">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="item_purchased">Item purchased</label>
                                <input type="text" value="{{ $supplier->item_purchased }}" class="form-control" id="item_purchased" name="item_purchased" placeholder="Item purchased">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="invoice">Invoice number</label>
                                <input type="text" value="{{ $supplier->invoice }}" class="form-control" id="invoice" name="invoice" placeholder="Invoice number">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" value="{{ $supplier->quantity }}" class="form-control" id="quantity" name="quantity" placeholder="quantity">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="usd">Amount USD</label>
                                <input type="text" value="{{ $supplier->usd }}" class="form-control" id="usd" name="usd" placeholder="Amount USD">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="zwd">Amount ZWD</label>
                                <input type="text" value="{{ $supplier->zwd }}" class="form-control" id="zwd" name="zwd" placeholder="Amount ZWD">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="txtMessage">Comment</label>
                                <textarea class="form-control" id="txtMessage" name="txtMessage" rows="4">
                                    {{ $supplier->txtMessage }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        

                    </div>
                </form>
                <br>
                
                    <a href="{{ route('supplier.supplier.index') }}" role="button" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
</main>
@endsection