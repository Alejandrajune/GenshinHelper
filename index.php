<!--
    Project: Genshin Helper App
    Author: Alejandra McFarland-Alvarez
    Date: 11/30/2021
    Purpose: To have easy access to information about Genshin Impact
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <link rel="stylesheet" href="themes/customDesigns.css"/>
        <link rel="stylesheet" href="themes/customDesigns.min.css"/>
        <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css"/>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 
        <link rel="stylesheet" href="formatting.css">
        <title>Genshin Helper</title>
    </head>
    <body>
        <!--Home Page-->
        <div data-role="page" id="pageHome">
            <!--Header with Home Button -->
            <div data-role="header">
                <a href="#pageHome" data-role="button" data-icon="bars" data-iconpos="left" data-inline="true">Home</a>
                <h1>Genshin Helper</h1>
            </div>

            <!-- Buttons to take you to other pages -->
            <div data-role="content">
                <div data-role="controlgroup">
                    <a href="#pageCharacters" data-role="button">Characters</a>
                    <a href="#pageWeapons" data-role="button">Weapons</a>
                    <a href="#pageFarm" data-role="button">Today's Farming</a>
                </div>
            </div>
        </div>

        <!--Character Page -->
        <div data-role="page" id="pageCharacters">
            <div data-role="header">
                <a href="#pageHome" data-role="button" data-icon="bars" data-iconpos="left" data-inline="true">Home</a>
                <h1>Characters</h1>
            </div>
            <div data-role="content">
                <h1>Select a Character</h1>
                <!--Drop down Box of Characters, uses selection to pull up information from the database -->
                <select name="character" id="Character" onchange="showCharacterInfo(this.value), showDomLocation(this.value), showDay(this.value)">

                <!-- php portion connects to database, pulls up characters and generates the options for the select drop down box -->
                <?php
                require_once 'connect.php';
                $sql = "SELECT * FROM characters";
                $result = mysqli_query($link, $sql) or die(mysqli_error($link));
                while($row = mysqli_fetch_array($result)){  
                    $charName = $row['CharacterName'];
                    echo "<option value='$charName'>" . $charName . "</option>";
                }
                echo "</select>";
                ?>
                <h3>Talent Book:</h3>
                <p><span id="charInfo"></span></p>
                <h3>Domain Location:</h3>
                <p><span id="matLocation"></span></p>
                <h3>When you can get it:</h3>
                <p id="days"></span></p>
                                
            </div>
        </div>
        <!--Weapon Page-->
        <div data-role="page" id="pageWeapons">
            <div data-role="header">
                <a href="#pageHome" data-role="button" data-icon="bars" data-iconpos="left" data-inline="true">Home</a>
                <h1>Weapons</h1>
            </div>

            <div data-role="content">
                <h1>Select a Weapon</h1>
                <!-- Drop down box that uses selection to pull up corrosponding information from the database -->
                <select name="Weapons" id="Weapons" onchange="showWeaponMat(this.value), showWeaponLoc(this.value), showWeaponDay(this.value)">

                <!-- Populates drop down box with Weapon names from databse -->
                <?php
                require_once 'connect.php';
                $sql = "SELECT * FROM weapons";
                $result = mysqli_query($link, $sql) or die(mysqli_error($link));

                while($row = mysqli_fetch_array($result)){ 
                    $weaponName = $row['Weapon'];
                echo "<option value='$weaponName'>" . $weaponName . "</option>";
                }
                echo "</select>"
                ?>
                <h3>Level Up Material</h3>
                <p><span id="weaponInfo"></span></p>
                <h3>Domain Location</h3>
                <p><span id="weaponLoc"></span></p>
                <h3>When to Get it:</h3>
                <p id="weaponDay"></p>

            </div>
        </div>

        <!--Farming Page-->
        <div data-role="page" id="pageFarm">
            <div data-role="header">
                <a href="#pageHome" data-role="button" data-icon="bars" data-iconpos="left" data-inline="true">Home</a>
                <h1 id="dayOfWeek"></h1>
            </div>
            <div data-role="content">
                <body onload="getDayOfWeek(), getMaterialColumn()">
                    <h1>Things You Can Get Today</h2>
                    <table id="materialTable">
                        <tr>
                            <th>Material</th>
                            <th>Location</th>
                        </tr>
                    </table>
                <body>
            </div>
        </div>
        
        <script src="accessdb.js?v1.2"></script>
        <script src="farming.js?v3.98"></script>
    </body>
</html>