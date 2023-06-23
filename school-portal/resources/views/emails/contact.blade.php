{{-- 
<div class="flex items-center justify-center">
<h2>Hello It's me {{ $data->name }}</h2> 
<br>
    
<strong>User details: </strong><br>
<strong>Name: </strong>{{ $data->name }} <br>
<p><strong>Email: </strong>{{ $data->email }}</p> <br>
<p><strong>Phone: </strong>{{ $data->phone }} </p><br>
<p><strong>Subject: </strong>{{ $data->subject }} </p><br>
<strong>Message: </strong>{{ $data->message }} <br><br>
  
Thank you

</div> --}}


{{-- 

<div class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 keychainify-checked"></div>
    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hello!</h1>
    <p class="font-normal text-gray-700 dark:text-gray-400">Sender: </strong>{{ $data->name}}.</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Email: </strong>{{ $data->email}}.</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Phone: </strong>{{ $data->phone }}.</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Subject: </strong>{{ $data->subject}}.</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">I am kindly request the following: </strong>{{ $data->message }}.</p>


Thank you --}}


<section style="max-width: 600px; margin: 0 auto; padding: 16px; background-color: #ffffff;">
    <header style="text-align: center; margin-bottom: 10px;">
        <a href="#">
            <img style="width: auto; height: 96px; display: inline-block;"  src="http://127.0.0.1:8000/images/logo.webp" alt="">
        </a>
        <h1>Tipas Integrated National Highschool </h1>
    </header>

    <main style="margin-top: 16px;">
        <h2 style="color: #333333; font-size: 20px;">Dear Sir/Ma'am,</h2>

        <p style="margin-top: 8px; font-size: 14px; line-height: 1.5; color: #666666;">
            I hope this email finds you well. I am writing to kindly request a copy of my {{$data->message}}. 
            Please let me know the process or any requirements needed to obtain the {{$data->message}}. If there are any fees associated with the request, kindly provide the details as well.
            I would greatly appreciate your assistance in this matter. If there is any additional information or documentation needed from my end, please do not hesitate to let me know.
            Thank you for your attention to this request. I look forward to hearing from you soon.
        </p>

        <p style="margin-top: 16px; font-size: 14px; color: #666666;">
            Thanks, <br>
            {{$data->name}}
        </p>
    </main>

    <footer style="margin-top: 16px;">
        <p style="font-size: 12px; color: #999999;">
            This email was sent to <a href="#" style="color: #0066cc; text-decoration: underline;">admin@tinhs-portal.tech</a>.
        </p>

        <p style="margin-top: 8px; font-size: 12px; color: #999999;">© TINHS. All Rights Reserved.</p>
    </footer>
</section>


