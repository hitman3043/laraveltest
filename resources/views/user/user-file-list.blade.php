@extends('pages.layouts.app')



    <div class="mt-5 container">
        <div class="row">
        <div class="col-sm-12">    
        <h3>Files and Folders</h3>
        <div style="background: lightgrey;padding:4px" >
         @if(!empty($files))
         
            @foreach($files as $file)
            
            <a style="font-weight:500px;color:blue;padding:2px" href="<?php echo $domain.'/maindir/'.$file ?>"><?php echo $file?></a><br/>
            
            @endforeach
         @else
     </div>
           <h5 class="text-danger">Sorry No Files Available</h5>
         @endif 
       </div>
      </div>
      
    </div>
@extends('pages.layouts.footer')    
