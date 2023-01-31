@extends('puplicUser.layout.master')
@section('title')
User Profile
@endsection
@section('css')
{{-- <link rel="stylesheet" href="userSide/css/style.css"> --}}
<style>
  table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

/* general styling */
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}

.Pending{
  background-color: rgb(224, 194, 24);
    display: inline-block;
        color:rgb(255, 255, 255);
        border-radius:10px;
        padding:5px 10px;
}
.Approved{
  background-color: rgb(0, 198, 0);
    display: inline-block;
        color:rgb(255, 255, 255);
        border-radius:10px;
        padding:5px 10px;
}

.Rejected{
  background-color: rgb(198, 40, 0);
    display: inline-block;
        color:rgb(255, 255, 255);
        border-radius:10px;
        padding:5px 10px;
}
</style>

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
                      <h4>{{ Auth::user()->name}}</h4>
                      <p class="text-muted font-size-sm">{{ Auth::user()->name}} Profile and reservations</p>
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
                      {{ Auth::user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ Auth::user()->email}}
                    </div>
                  </div>
                  <hr>

                  <table>
                    <caption>Reservation Summary</caption>
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
                      <a class="btn btn-primary " target="__blank" href="{{route('profileEdit',Auth::user()->id)}}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

