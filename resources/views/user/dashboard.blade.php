@extends('layout.master')

@section('content')

<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    @forelse($data as $checkout)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{asset('assets/images/item_bootcamp.png')}}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{ $checkout->camp->title}}</strong>
                            </p>
                            <p>

                                {{ $checkout->created_at->format('M d, Y')}}
                            </p>
                        </td>
                        <td>
                            <strong>${{ $checkout->camp->price}}K</strong>
                        </td>
                        <td>
                            @if($checkout->is_paid)
                            <strong class="text-success">Payment Success</strong>
                            @else
                            <strong>Waiting for Payment</strong>
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                Ayo Mulai Belajar
                            </a>
                        </td>
                    </tr>
                    @empty
                    <p class="story text-primary">
                        Anda belum membeli kelas
                    </p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection