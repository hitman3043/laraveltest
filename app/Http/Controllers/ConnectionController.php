<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use phpseclib3\Net\SSH2; 
class ConnectionController extends Controller
{
    public function displayForm()
    {
        
         return view('user\connect-form');
    }


    public function connect(Request $request)
    {


  
        $host = $request->input('host');
        $username = $request->input('username');
        $password = $request->input('password');
        $port = $request->input('port');
        $path = 'home/user/public_html/'; 

        // Create an SSH2 instance and login
        $ssh = new SSH2($host);
           try
           {
              if ($ssh->login($username, $password)==false) {
                return back()->with('errors', 'Invalid Credentials');
                
            }
            else
            {
                $files = $ssh->exec("ls -la $path");
                
                 return View::make('user/user-file-list', ['files' => $files]);
            }
           }
           catch(\Exception $e)
           {
                  return back()->with('errors', $e->getMessage());
           }
      
          $ssh->disconnect();
        

       
        

    }


    public function showuserFiles(Request $request)
    {
        
        $host = $request->input('host');
        $username = $request->input('username');
        $password = $request->input('password');
        $port = $request->input('port');

      
        $ssh = new SSH2($host, $port);
        if (!$ssh->login($username, $password)) {
            return redirect()->route('connect')->with('error', 'Failed to connect to the host.');
        }       

 
        $directoryContents = $ssh->exec('ls -la /public');

        
        return view('file-list')->with('directoryContents', $directoryContents);
    }
}
