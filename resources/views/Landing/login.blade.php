<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <!-- login -->
    <div class="h-screen flex mx-40">
      <div class="flex w-1/2 bg-white justify-around items-center ">
        <div>
          <img src="images/login/login1.png" alt="bglogin" />
        </div>
      </div>
      <div class="flex w-1/2 justify-center items-center bg-white  ">
        <form action="{{url('actionlogin')}}" method="post" class="bg-white">
          <h1 class="text-gray-800 font-bold text-2xl mb-1">Selamat Datang </h1>
          <p class="text-sm font-normal text-gray-600 mb-7">Di Esteh Creative</p>
          @if(session('error'))
          <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
          </div>
          @endif
          @csrf  
          <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <input class="pl-2 outline-none border-none form-control" type="email" name="email" placeholder="Email" required="" />
          </div>
          <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none form-control" type="password" name="password" placeholder="Password" required=""/>
          </div>
          <button type="submit" class="block w-full bg-hijau mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
          <!-- <span class="text-sm ml-2 hover:text-hijau cursor-pointer  text-gray-400">Forgot Password ?</span> -->
          <a href="#" class="text-sm ml-2 hover:text-hijau cursor-pointer  text-gray-400">Forgot Password ?</a>
          <span class="mt-12 flex text-gray-400">Dont have an account ? <a href="#" class="hover:text-hijau">Sign up</a></span>
           
        </form>
      </div>
    </div>
    <!-- akhir login -->

    <!-- taildwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- akhir -->

    <!-- config -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#FAFAFB",
              soft: "#FEECED",
              hijau: "#0de49d",
              secondary: "#F2404D",
              primary2: "#792027",
              primary3: "#F0F1F2",
            },
            fontFamily: {
              inter: "Inter, sans-serif",
            },
          },
        },
      };
    </script>
    <!-- akhir config -->
    
  </body>
</html>
