@extends('layout.master')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if($message = Session::get('success'))
                <div class="alert alert-danger">{{$message}}</div>
                @endif
                <div class="table-wrap">
                    <table class="table">
                        <thead class=" table-primary">

                            <tr class="text-center">
                                <th>No</th>
                                <th>User</th>
                                <th>Camp</th>
                                <th>Price</th>
                                <th>Register Date</th>
                                <th>Paid Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                    @foreach($data as $key => $checkout)
                            <tr class="text-center">
                                <td>{{ $data->firstItem() + $key }}</td>
                                <td>{{ $checkout->user->name }}</td>
                                <td>{{ $checkout->camp->title }}</td>
                                <td>${{ $checkout->camp->price }}K</td>
                                <td>{{ $checkout->created_at->format('M d, Y')}}</td>
                                <td>
                                    @if($checkout->is_paid)
                                    <span class="badge bg-success">Paid</span>
                                    @else
                                    <span class="badge bg-warning">Waiting Payment</span>

                                    @endif
                                </td>
                                <td>
                                    @if(!$checkout->is_paid)
                                    <form action="/checkout/payment/{{$checkout->id}}" method="post">
                                        @csrf
                                        <button class="btn btn-sm btn-danger">Set to Pay</button>
                                    </form>
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</section>


@endsection