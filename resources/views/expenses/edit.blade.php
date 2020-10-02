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
                    Expenses
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
                <form action="{{ route('expense.expense.update', $expense) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="dateInput">Date</label>
                                <input type="date" value="{{ $expense->date }}" class="form-control" id="dateInput" name="date" placeholder="date">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4">
                                    {{ $expense->description }}    
                                </textarea>                                
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" value="{{ $expense->category }}" class="form-control" id="category" name="category" placeholder="category">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="usd">Amount USD</label>
                                <input type="text" value="{{ $expense->usd }}" class="form-control" id="usd" name="usd" placeholder="Amount USD">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="zwd">Amount ZWD</label>
                                <input type="text" value="{{ $expense->zwd }}" class="form-control" id="zwd" name="zwd" placeholder="Amount ZWD">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="cover_image">Upload Image</label>
                                <input type="file"  class="form-control" id="cover_image" name="image" placeholder="Amount ZWD">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        

                    </div>
                </form>
                <br>
                
                    <a href="{{ route('expense.expense.index') }}" role="button" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
</main>
@endsection