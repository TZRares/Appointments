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
        .makeForm {
            text-align: center;
        }

        #makeTxt {
            text-align: center;
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

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="btn btn-dark active" style="margin-left:10px;">
            View Appointment
        </button>
        <a class="navbar-brand" href="/" style="margin-left:10px;">
            <button class="btn btn-dark">
                Return
            </button>
        </a>
        <a class="navbar-brand" href="/make">
            <button class="btn btn-dark">
                Make Appointment
            </button>
        </a>
    </nav>

    <p id="ceva"> </p>
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --->
    <script>
        var date = "";
        if (document.getElementById('date')) {
            var userData = document.getElementById('date').value;
            date = userData.substring(0, 10);
        }

        fetch(`http://localhost:8000/appoints?date=${date.toString()}`, {
            "method": "GET",
            "mode": "cors",
            "credentials": "include"
            // });
        }).then(res => res.json().then(data => {
            window.data = data;
            changeData();
        }));

        function changeData() {
            let container = document.getElementById("container");

            nodeListToList(container.children).forEach(c => container.removeChild(c));

            for (let i = 0; i < window.data.length; i++) {
                let tempRadioButton = createAppointElement(window.data[i]);
                container.appendChild(tempRadioButton);
            }

            if (window.data.countAvailableTime == 0) {
                container.appendChild(createP());
            }
        }

        function nodeListToList(nodeList) {
            let normalList = [];
            for (let i = 0; i < nodeList.length; i++) {
                normalList.push(nodeList[i])
            }
            return normalList;
        }

        function createAppointElement({name, date, time}) {
            let text = document.createElement("p");
            text.style.margin = "0 8px"
            text.innerText = `${name} ${date} ${time}`;
            return text;
        }

        function createP() {
            let element = document.createElement("p")
            element.innerText = "We are sorry, but today all our agents are full.";
            return element
        }


    </script>
    <h3 id="makeTxt">Please select a valid date in order to see current appointment:</h3>
    <br>

    <form class="makeForm" action="/make" method="POST">
        @csrf
        <label>Please select Date:</label>
        <br>
        <input type="date" name="date" id="date" value=" " required onchange="userDataInput()"></input>
        <br>
        <br>
        <div class="makeForm" id="container">
        </div>

    </form>
    <script>
        function userDataInput() {
            var userData = document.getElementById('date').value;

            var date = userData.substring(0, 10);
            var myhidden = document.getElementById("date").value;

            const nDate = new Date(date);
            var stringDate = nDate.toString();
            var testDate = stringDate.substr(0, 3);

            fetch(`http://localhost:8000/appoints?date=${date.toString()}`, {
                "method": "GET",
                "mode": "cors",
                "credentials": "include"
                // });
            }).then(res => res.json().then(data => {
                window.data = data;
                changeData();

                if (testDate == 'Sat') {
                    document.querySelector('#submit').disabled = true;
                    alert("We are sorry but at that moment we are unavailable, please select another date, our working days are from Monday to Friday, Thank you!");
                } else if (testDate == 'Sun') {
                    document.querySelector('#submit').disabled = true;
                    alert("We are sorry but at that moment we are unavailable, please select another date, our working days are from Monday to Friday, Thank you!");
                } else {
                    (document.querySelector('#submit').disabled = false);
                }
            }));
        }
    </script>


</body>

</html>