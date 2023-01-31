@extends('puplicUser.layout.master')
@section('title')
User Profile
@endsection
@section('css')
{{-- <link rel="stylesheet" href="userSide/css/style.css"> --}}

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<div class="container profile">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Kenneth Valdez
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
                  <hr>

                  <table>
                    <caption>Reservation Summary</caption>
                    {{-- {{dd($Users->Reservations)}} --}}
                    @if ($Users->Reservations->Status == 1)

                    <thead>
                      {{-- @foreach($Users->Reservations as $Reservations) --}}
                      <tr>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Account">{{$Users->Reservations->first_name}}</td>
                        <td data-label="Due Date">{{$Users->Reservations->last_name}}</td>
                        <td data-label="Amount">{{$Users->Reservations->phone_number}}</td>
                        <td data-label="Period">{{$Users->Reservations->Start_date}}</td>
                        <td data-label="Period">{{$Users->Reservations->End_date}}</td>
                        <td data-label="Period"><span class="Approved">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>
                  @endif 

                  @if ($Users->Reservations->Status == 0)
                  <thead>
                    <tr>
                      <th scope="col">First name</th>
                      <th scope="col">Last name</th>
                      <th scope="col">Phone number</th>
                      <th scope="col">Start Date</th>
                      <th scope="col">End Date</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-label="Account">{{$Users->Reservations->first_name}}</td>
                      <td data-label="Due Date">{{$Users->Reservations->last_name}}</td>
                      <td data-label="Amount">{{$Users->Reservations->phone_number}}</td>
                      <td data-label="Period">{{$Users->Reservations->Start_date}}</td>
                      <td data-label="Period">{{$Users->Reservations->End_date}}</td>
                      <td data-label="Period"><span class="Pending">Pending</span></td>
                    </tr>
                  </tbody>
                </table>
                @endif

                @if ($Users->Reservations->Status == 2)
                <thead>
                  <tr>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Account">{{$Users->Reservations->first_name}}</td>
                    <td data-label="Due Date">{{$Users->Reservations->last_name}}</td>
                    <td data-label="Amount">{{$Users->Reservations->phone_number}}</td>
                    <td data-label="Period">{{$Users->Reservations->Start_date}}</td>
                    <td data-label="Period">{{$Users->Reservations->End_date}}</td>
                    <td data-label="Period"><span class="Rejected">Rejected</span></td>
                  </tr>
                </tbody>
              </table>
              @endif
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary " target="__blank" href="{{ route('userprofileEdit.edit')}}" >Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


@endsection

