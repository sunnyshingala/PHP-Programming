<html>
    <head>
        <title>
            ContactForm
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <p>Send Email</p>
            <form class="contact-form" action="contact.php" method="post">
                <input type="text" name="name" placeholder="Enter your Name" break>
                <input type="text" name="mail" placeholder="Your Email">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" name="submit">Send Mail</button>
            </form>
        </main>
    </body>
</html>