<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap"
        rel="stylesheet">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    spacing: {
                        '13': '3.25rem',
                    },
                    fontFamily: {
                        raleway: ['Raleway'],
                        comforter: ['Comforter']
                    },
                    colors: {
                        bebas: '#bada55',
                    },
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        #toggle:checked ~ label div.toggle-circle{
                @apply translate-x-3;
            }
    </style>
    <!-- <link rel="stylesheet" href="css/style_bar.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <title>Web Sensor</title>

</head>

<body class="dark:bg-slate-900 dark:text-slate-100">
    <div>
        <div class=" h-14 flex items-center mx-auto container">
            <div class="uppercase font-semibold  lg:text-2xl font-comforter text-lime-700 px-10 dark:text-lime-300">
                Celciot
            </div>
            <div class="flex ml-auto pr-5">
                <div>Live</div>
                <div>Temprature</div>
            </div>
        </div>
        <hr>
    </div>
    <div class="container p-5 mx-auto text-center">
        <!-- <div class="row px-3 py-3 justify-content-center">
            <div class="card col-md-5">
                <div class="card-title">Suhu</div>
                <div class="card-body">
                    <div class="card-text">
                        <span id="ceksuhu"></span> *C
                    </div>
                    <div class="small"><span id="alert"></span></div>
                </div>
            </div>
            <div class="card col-md-5">
                <div class="card-title">Kelembapan</div>
                <div class="card-body">
                    <div class="card-text">
                        <span id="ceklembab"></span> %
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                    <div class="progress-value"><span id="ceksuhu"></span></div>
                </div>
                <div class="progress yellow"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                    <div class="progress-value"><span id="ceklembab"></span></div>
                </div>
            </div>
        </div> -->
        <div class="flex justify-center my-3">
            <span class="mr-2 text-sm text-slate-500">light</span>
            <input type="checkbox" id="toggle" class="hidden">
            <label for="toggle">
                <div class="w-9 h-5 bg-slate-500 rounded-full flex items-center p-1 cursor-pointer">
                    <div class="w-4 h-4 bg-white rounded-full toggle-circle"></div>
                </div>
            </label>
            <span class="ml-2 text-sm text-slate-500">dark</span>
        </div>
        <div class="border my-10 py-10  shadow-lg rounded-lg p-10 dark:shadow-slate-800">
            <div class="border shadow-lg rounded-lg p-6 mr-3 ml-auto lg:w-1/4">
                <div class=""></div>
                <h2 id="tgl" class="text-right"></h2>
            </div>
            <div class=" lg:flex ">
                <div class="suhu border rounded-lg p-2 lg:p-6 lg:w-1/2 my-6 ">
                    <!-- <div class="card-title ">Suhu</div>
                    <div class="card-body">
                        <div class="bg-gray-400 rounded-full">
                            <div class="h-full rounded-full text-white after:content-['*'] transition text-sm"
                                id="suhu"><span id="ceksuhu" class="text-sm"></span></div>
                        </div>
                        <div class="card-text">
                            Keterangan : <span id="alert"></span>
                        </div>
                    </div> -->
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white" id="textsuhu">Suhu</span>
                        <span id="ceksuhu" class="text-sm font-medium text-blue-700 dark:text-white after:content-['*']"></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" id="suhu"></div>
                    </div>
                </div>
                <div class="lembab border rounded-lg p-2 lg:p-6 lg:w-1/2 lg:mx-3 my-6">
                    <!-- <div class="card-title mb-3">Kelembapan</div>
                    <div class="card-body">
                        <div class="bg-gray-400 rounded-full my-4">
                            <div class="h-full rounded-full text-white bg-sky-700 after:content-['%'] transition text-sm"
                                id="lembab">
                                <span id="ceklembab" class="text-sm"></span>
                            </div>
                        </div>
                    </div> -->
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">Kelembapan</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white after:content-['%']" id="ceklembab" ></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" id="lembab"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setInterval(function () {
                $suhu = $("#ceksuhu").load("ceksuhu.php").text();
                $lembab = $("#ceklembab").load('ceklembab.php').text();
                $('#tgl').load('tanggal.php').text();
                // $('#alert').load('keterangan.php');
                // $suhu = $("#ceksuhu").text();
                // $lembab = $('#ceklembab').text();
                $('#suhu').css('width', $suhu + '%');
                if ($suhu >= 20) {
                    $('#suhu').css('background-color', 'red');
                    $("#ceksuhu").css('color', 'red');
                    $("#textsuhu").css('color', 'red');
                    $('#alert').text('Panas');
                } else {
                    $('#suhu').css('background-color', '#4285F4');
                    $('#alert').text('Normal');
                }
                $('#lembab').css('width', $lembab + '%');
            }, 1000);
        });
    </script>
    <script src="./js/toggle.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
</body>

</html>
