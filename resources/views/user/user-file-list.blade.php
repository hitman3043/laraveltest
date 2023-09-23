@extends('pages.layouts.app')


    <div class="mt-5 container">
        <div class="row">
        <div class="col-sm-12">    
        <h3>Files and Folders</h3>
         @if(!empty($files))
            {{$files}}
         @else
           <h5 class="text-danger">Sorry No Files Available</h5>
         @endif 
       </div>
      </div>
      
    </div>
@extends('pages.layouts.footer')    
