<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use phpseclib3\Net\SSH2; 
use phpseclib3\Net\SFTP; // Import the SFTP class
class ConnectionController extends Controller
{
    public function displayForm()
    {

         return view('user\connect-form');
    }


    public function connect(Request $request)
    {


  
        $host =  $request->input('host');
        $username = $request->input('username');
        $password = $request->input('password');
        $port = $request->input('port');
        $domain='https://www.getgenuinereview.com/';
        $path = 'public_html/maindir/';
      
       
        $sftp = new SFTP($host, $port);
      
             
           try
           {
              if ($sftp->login($username, $password)==false) {
                return back()->with('errors', 'Invalid Credentials');
                
            }
            else
            {
                
              
                $sftp->chdir($path);
    
                $files = $sftp->nlist();               
               
                 return View::make('user/user-file-list', ['files' => $files,'domain'=>$domain,'path'=>$path]);
            }
           }
           catch(\Exception $e)
           {
                  return back()->with('errors', $e->getMessage());
           }
      
          $ssh->disconnect();
        

       
        

    }


  
 
}
