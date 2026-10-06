<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DelCargo - Contact Us</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff;
            color: #111;
        }

        /* Contact Section */
        .contact-section {
            min-height: calc(100vh - 78px);
            padding: 100px 10%;
        }

        .contact-section h1 {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .contact-section > p {
            font-size: 22px;
            color: #555;
            margin-bottom: 50px;
        }

        .contact-container {
            display: flex;
            gap: 80px;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info h2 {
            font-size: 32px;
            margin-bottom: 25px;
        }

        .contact-info p {
            font-size: 20px;
            line-height: 1.8;
            color: #555;
        }

        .contact-form {
            flex: 1;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 18px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            font-size: 17px;
            font-family: Arial, sans-serif;
        }

        .contact-form textarea {
            height: 150px;
            resize: none;
        }

        .contact-form button {
            background: #000;
            color: #fff;
            border: none;
            padding: 18px 40px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }

        .contact-form button:hover {
            background: #333;
        }
    </style>
</head>

<body>

    @include('navbar')

    <!-- Contact Content -->
    <section class="contact-section">

        <h1>Contact Us</h1>

        <p>
            Have questions or need a logistics solution? Get in touch with us.
        </p>

        <div class="contact-container">

            <div class="contact-info">

                <h2>Let's Talk</h2>

                <p>
                    We are here to help you with your cargo and logistics needs.
                    Contact DelCargo and our team will get back to you as soon
                    as possible.
                </p>

                <br>

                <p>
                    <strong>Email:</strong> info@delcargo.com
                </p>

                <p>
                    <strong>Phone:</strong> +1 000 000 0000
                </p>

                <p>
                    <strong>Location:</strong> United States
                </p>

            </div>

            <div class="contact-form">

                <input type="text" placeholder="Your Name">

                <input type="email" placeholder="Your Email">

                <input type="text" placeholder="Subject">

                <textarea placeholder="Your Message"></textarea>

                <button type="button">
                    Send Message
                </button>

            </div>

        </div>

    </section>

</body>
</html>