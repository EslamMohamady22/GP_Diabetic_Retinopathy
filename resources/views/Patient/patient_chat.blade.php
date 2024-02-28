<!DOCTYPE html>
<html lang="en">
@include('patient.patient_styles')
<body>
<!-- sidebar -->
<div class="wrapper">
  <!-- Sidebar Holder -->
  @include('Patient.patient_sidebar')
  <!-- Page Content Holder -->
  <div id="content">
    <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('Patient.patient_header')
 
  @include('Patient.patient_PPM')

   
 
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
  </x-slot>
  
  <div class="py-12 overflow-y-scroll">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div  class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div style="background-color: red" class="p-6 bg-white border-b border-gray-200">
            <livewire:chat :reciever="$reciever">
        </div>
      </div>
    </div>
  </div>
 
 @include('Patient.patient_footer')
  </div>
</div>
<!-- end sidebar-->

  

@include('Patient.patient_scripts')

</body>
</html>
