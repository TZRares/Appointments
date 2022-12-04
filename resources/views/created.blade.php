<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Appointment Calendar</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        
        <style>
            .thx {
                text-align:center;
            }
            #Make {
                display: block;
                margin: 0 auto;
                margin-top: 25%;
            }

            #View {
                display: block;
                margin: 0 auto;
            }
        </style>
    </head>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --->
    <?php
        $lastUser = DB::table('appoints')->get(['id']);
        $lastUserDecode = json_decode(json_encode($lastUser), true);
        $count = count($lastUserDecode) - 1;
        $lastUserInsert = $lastUserDecode[$count]['id'];

        $user = DB::table('appoints')->find($lastUserInsert);
        $arrayUser = json_decode(json_encode($user), true);
        
        $date = $arrayUser['date'];
        if ($arrayUser['time'] < 1000) {
            $time = substr($arrayUser['time'], 0,1) . ':' . substr($arrayUser['time'], 1,3);
        } else {
            $time = substr($arrayUser['time'], 0,2) . ':' . substr($arrayUser['time'], 2,4);
        }
        
    ?>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="btn btn-dark active" style="margin-left:10px;">
                Created Appointment
            </button>
            <a class="navbar-brand" href="/make" style="margin-left:10px;">
                <button class="btn btn-dark">
                    Make Appointment
                </button>
            </a>
            <a class="navbar-brand" href="/view">
                <button class="btn btn-dark">
                    View Appointments
                </button>
            </a>
            <a class="navbar-brand" href="/">
                <button class="btn btn-dark">
                    Return
                </button>
            </a>
        </nav>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --->
        <br>
            <h2 class="thx">
                Thank you 
                    <u>
                        <?php echo $arrayUser['name']; ?>
                    </u>
                for your appointment, one of our agents will be waiting for you in 
                    <u>
                        <?php echo $date; ?>
                    </u> 
                at 
                    <u>
                        <?php echo $time; ?>
                    </u>
            </h2>

    </body>
</html>