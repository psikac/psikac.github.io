<?php


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Praćenje korisnika na webu</title>
        <meta name="authors" content="Petra Banić, Josipa Dumenčić, Patrik Noah Šikač">
        <meta name="description" content="Web stranica kojom se demonstriraju razni načini praćenja korisnika preko weba">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link href="css/style.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="javascript/cookies.js"></script>
        <script src="hash/murmurhash3.js"></script>
        <script src="hash/java_hashcode.js"></script>


    </head>
    <body>
        <h1>Praćenje korisnika na webu</h1>
        <section class="form-container">
            <form class="form" name="unos" id="unos" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label class="form-label" for="ime">Ime:</label>
                <input
                        class="form-input"
                        id="ime"
                        type="text"
                        autocomplete="off"
                        name="ime"
                >
                <button class="submit-button" id="submit" type="submit" name="submit">Unos</button>
            </form>
        </section>

    </body>
</html>
