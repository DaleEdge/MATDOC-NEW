@extends('backend.layouts.app')
@section('content')
    <section class="content-header">
            
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h2 class="card-title">Contact Us</h2>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($contact_us) && $contact_us->count())
                                @foreach ($contact_us as $key => $contact)
                                    <tr>
                                        
                                        <td>{{ $contact->name }}</td>
                                        <td><a href="tel:{{ $contact->phone }}"> {{ $contact->phone }}</a></td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->message }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                <tr>
                            @endif
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
@endsection