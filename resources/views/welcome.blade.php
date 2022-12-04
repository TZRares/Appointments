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
            #title {
                text-align: center;
            }

            #makeTxt {
                text-align: center;
            }

            #viewTxt {
                text-align: center;
            }

            #Make {
                display: block;
                margin: 0 auto;
                
            }

            #View {
                display: block;
                margin: 0 auto;
            }
        </style>    
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/" style="margin-left:10px;">
                <button class="btn btn-dark active" >
                    Appointment Calendar
                </button>
            </a>
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
        </nav>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --->

            <h1 id="title">Welcome to our consulting agency:</h1>
            <br><br><br><br>
            
            <h3 id="makeTxt">In order to make an appointment with one of our consultants please select the "Make Appointment" button.</h3>
            <a class="navbar-brand" href="/make" style="margin-left:10px;">
                <button class="btn btn-primary" id="Make">
                    Make Appointment
                </button>
            </a>
            <br><br><br><br>

            <h3 id="viewTxt">If you would like to see the availibility of our consultants please select the "View Appointments" button.</h3>
            <a class="navbar-brand" href="/view" style="margin-left:10px;">
                <button class="btn btn-primary" id="View">
                    View Appointments
                </button>
            </a>

    </body>
</html>
