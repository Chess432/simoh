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
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Category</th>
                        <th scope="col">USD</th>
                        <th scope="col">ZWD</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $expense)
                            <tr>
                                <th scope="row">{{ $expense->id }}</th>
                                <td>{{ $expense->date }}</td>
                                <td>{{ $expense->category }}</td>
                                <td>{{ $expense->usd }}</td>
                                <td>{{ $expense->zwd }}</td>
                                <td>
                                    <a href="{{ route('expense.expense.show', $expense) }}">
                                        <button type="button" class="btn btn-success float-left">View</button>
                                    </a> 
                                    <a href="{{ route('expense.expense.edit', $expense) }}">
                                        <button type="button" class="btn btn-primary float-left">Edit</button>
                                    </a>
                                    <form action="{{ route('expense.expense.destroy', $expense) }}" method="POST"
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
                  {{ $expenses->links() }}
                    <a href="{{ route('expense.expense.create') }}" role="button" class="btn btn-primary">Add New</a>
            </div>
        </div>
    </div>
</main>
@endsection