@extends('landlorddashboard.main')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Landlord</title>
  <link rel="stylesheet" href="{{asset('css/landlorddashboard/main.css')}}" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
@section('main-section')
<main style="margin-left: 20px;">
            <h1>Dashboard</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total properties</h3>
                            
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <h1>{{$totalproperties}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Total tenants</h3>
                            
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <h1>{{count($rents)}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Total bookings</h3>
                            
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <h1>{{$rentstatus->count()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            
            <!-- End of Recent Orders -->

        


    
      
      <h2>Total properties: {{$totalproperties}}</h2><br>
      @if($totalproperties > 0)
    <table>
        <thead>
            <tr>
                <th>Address</th>
                <th>Number of rooms</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
            <tr>
                <td>{{ $property->address }}</td>
                <td>{{ $property->number_of_rooms }}</td>
                <td>
                    @foreach($units as $unit)
                        @if($unit->property_id == $property->property_id)
                            {{ $unit->price }}
                            @break
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($units as $unit)
                        @if($unit->property_id == $property->property_id)
                            {{ $unit->status }}
                            @break
                        @endif
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No properties available.</p>
@endif


<br>
<h2>Total tenants: {{count($rents)}}</h2>
@if ($rents->isEmpty())
        <p> Currently there are no tenants in your property.</p>
    @else
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact no.</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
      
               @foreach ($rents as $rent)
                @php
                    $user = $users->where('user_id', $rent->tenant_id)->first();
                    $tenant = $tenants->where('user_id', $rent->tenant_id)->first();
                @endphp
                <tr>
                    <td>{{ $user->Fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $tenant->phone_number }}</td>
                    <td>{{ $tenant->temporary_address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    @endif
    </main>
      @endsection

   
</body>
</html>
