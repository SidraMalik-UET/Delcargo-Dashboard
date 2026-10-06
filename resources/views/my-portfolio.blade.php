<!DOCTYPE html>
<html lang="en">
<head>
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sidra Malik | Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #eef1f5;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 15px auto;
        }

        /* Header */
        .header {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 18px;
            border-radius: 10px;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 14px;
            margin: 3px;
        }

        /* Sections */
        .section {
            background-color: white;
            margin-top: 12px;
            padding: 15px 20px;
            border-radius: 10px;
        }

        .section h2 {
            font-size: 19px;
            margin-bottom: 8px;
            color: #222;
        }

        .section p {
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 5px;
        }

        /* Two columns */
        .row {
            display: flex;
            gap: 12px;
        }

        .half {
            width: 50%;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        th {
            background-color: #222;
            color: white;
            padding: 7px;
            text-align: left;
        }

        td {
            border: 1px solid #ddd;
            padding: 7px;
        }

        /* Footer */
        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 10px;
            color: #666;
        }

        /* Mobile */
        @media (max-width: 700px) {

            .container {
                width: 95%;
            }

            .row {
                flex-direction: column;
            }

            .half {
                width: 100%;
            }

            .header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

    @include('navbar')

    <div class="container">

        <!-- Header -->
        <div class="header">

            <h1>Sidra Malik</h1>

            <p>Computer Science Graduate</p>

            <p>
                University of Engineering and Technology (UET), Taxila
            </p>

        </div>


        <!-- About + Experience -->
        <div class="row">

            <div class="section half">

                <h2>About Me</h2>

                <p>
                    I am Sidra Malik, a Computer Science graduate from
                    UET Taxila. I am interested in software development,
                    artificial intelligence, and backend development.
                </p>

            </div>


            <div class="section half">

                <h2>My Experience</h2>

                <p>
                    During my degree, I worked on different academic and
                    personal projects involving Python, machine learning,
                    HTML, CSS, and other technologies.
                </p>

            </div>

        </div>


        <!-- Current Learning -->
        <div class="section">

            <h2>Current Learning</h2>

            <p>
                I am currently learning Laravel and backend development.
                My current focus is understanding routes, Blade views,
                HTML, CSS, and building simple web applications.
            </p>

        </div>


        <!-- Skills -->
        <div class="section">

            <h2>Skills & Experience</h2>

            <table>

                <tr>
                    <th>Skill</th>
                    <th>Level</th>
                    <th>Experience</th>
                </tr>

                <tr>
                    <td>Python</td>
                    <td>Intermediate</td>
                    <td>Academic & ML Projects</td>
                </tr>

                <tr>
                    <td>HTML & CSS</td>
                    <td>Beginner</td>
                    <td>Web Development</td>
                </tr>

                <tr>
                    <td>Machine Learning</td>
                    <td>Beginner</td>
                    <td>Academic Projects</td>
                </tr>

                <tr>
                    <td>Laravel</td>
                    <td>Beginner</td>
                    <td>Currently Learning</td>
                </tr>

            </table>

        </div>


        <div class="footer">
            My First Laravel Portfolio
        </div>

    </div>

</body>



</html>